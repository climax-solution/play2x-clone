@php
    use App\User;

    if(!isset($_GET['id'])) return;
    $id = $_GET['id'];

    $user = User::where('id', $id)->first();
    if($user == false || $user == null) return;

    $owner = !Auth::guest() && $id == Auth::user()->id;
@endphp

<div class="row">
    <div class="col-xs-12">
        <div class="user_block">
            <div class="user-info">
                @if($owner)
                    <div class="user-info-tab user-logout" onclick="window.location.href = '/logout'">
                        Go out
                    </div>
                @endif

                <div class="user-avatar">
                    <img alt="" data-src="{{$user->avatar}}" class="lazyload">
                    @if($owner)
                        <div class="avatar-edit" onclick="$('#avatar-file').click()"><i class="fas fa-camera"></i></div>
                        <form id="avatar-form" action enctype="multipart/form-data" method="post" style="display: none">
                            <input id="avatar-file" name="pictures" onchange="$('#avatar-form').submit()" type="file" accept="image/*">
                            {{ csrf_field() }}
                        </form>
                    @endif
                </div>

                <div class="user-info-block">
                    <p>{{$user->username}}</p>
                    <strong class="level-{{$user->level}}"  @if($owner) onclick="setTab('level')" @endif>{{$user->level}} level</strong>
                    @if($owner && $user->level != 10)
                        <div class="user-level-progress">
                            <div class="level-bg-{{$user->level}}" style="width: {{($user->exp/\App\User::getRequiredExperience($user->level + 1))*100}}%"></div>
                        </div>
                    @endif

                    <div class="user-info-tabs">
                        <div class="user-info-tab" data-tab="history" onclick="setTab('history')">
                            Story
                        </div>
                        <div class="user-info-tab" data-tab="achievements" onclick="setTab('achievements')">
                            Achievements
                        </div>
                        @if($owner)
                            <div class="user-info-tab" data-tab="in" onclick="setTab('in')">
                                Top up
                            </div>
                            <div class="user-info-tab" data-tab="out" onclick="setTab('out')">
                                Payments
                            </div>
                            <div class="user-info-tab" data-tab="level" onclick="setTab('level')">
                                Level
                            </div>
                            <div class="user-info-tab" data-tab="ref" onclick="setTab('ref')">
                                Affiliate program
                            </div>
							 <div class="user-info-tab" data-tab="settings" onclick="setTab('settings')">
                                Settings
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="user_block user_main">
            <div class="user_tab user_live_table_tab" id="history">
                @php
                    $drops = \App\Http\Controllers\GeneralController::user_drops($id, 0);
                @endphp
                @if(count($drops) == 0)
                    <div class="user_tab_empty">
                        <i class="fad fa-clock"></i>
                        <p>There is nothing here</p>
                    </div>
                @else
                <table class="live_table" id="user_drops">
                    <thead>
                    <tr class="live_table-header">
                        <th>ИГРА</th>
                        <th class="hidden-xs">TIME</th>
                        <th class="hidden-xs">BID</th>
                        <th class="hidden-xs">COEFFICIENT.</th>
                        <th>WIN</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($drops as $d)
                            <tr class="live_table-game">
                                <th>
                                    <div class="ll_icon hidden-xs hidden-sm" onclick="load('/{{strtolower($d['name'])}}')">
                                        <i class="{{$d['icon']}}"></i>
                                    </div>
                                    <div class="ll_game">
                                        <span onclick="load('/{{$d['game_id'] == 12 ? 'cases' : strtolower($d['name'])}}')">{{$d['name']}}</span>
                                        @if($d['game_id'] == 12)
                                            <p onclick="load('/cases')">Перейти</p>
                                        @else
                                            <p onclick="user_game_info({{$d['id']}})">Просмотр</p>
                                        @endif
                                    </div>
                                </th>
                                <th class="hidden-xs">{{$d['time']}}</th>
                                <th class="hidden-xs">@if($d['user_id'] != -2) {{$d['bet']}} &nbsp;<i class="fad fa-coins"></i> @endif</th>
                                <th class="hidden-xs">@if($d['user_id'] != -2 && $d['game_id'] != 12) x{{$d['mul']}} @endif @if($d['game_id'] == 12) — @endif</th>
                                <th>@if($d['amount'] > 0)+@endif{{$d['amount']}} &nbsp;<i class="fad fa-coins"></i></th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
            </div>
            <div class="user_tab" style="padding: 25px;" id="achievements">
                <div class="col-xs-12 col-sm-12 col-md-2 mobile-ach-tabs">
                    <div class="ach-scroll-content">
                        <div class="nano">
                            <div class="nano-content">
                                <div class="ach-menu">
                                    @php
                                        $sub = function($category) {
                                            return '<div class="ach-menu-element ach-submenu" id="'.$category.'">'
                                            .'<div onclick="filter(\'all\')">Все</div>'
                                            .'<div onclick="filter(\'bronze\')" style="margin-top: 13px"><i class="fad fa-award bronze"></i> Бронза</div>'
                                            .'<div onclick="filter(\'silver\')"><i class="fad fa-award silver"></i> Silver</div>'
                                            .'<div onclick="filter(\'gold\')"><i class="fad fa-award gold"></i> Gold</div>'
                                            .'<div onclick="filter(\'platinum\')"><i class="fad fa-award platinum"></i> Platinum</div></div>';
                                        };

                                        $translate = function($category) {
                                            switch($category) {
                                                case 'user': return 'User';
                                                case 'mines': return 'Mines';
                                                case 'stairs': return 'Stairs';
                                                case 'tower': return 'Tower';
                                                case 'blackjack': return 'Blackjack';
                                                case 'roulette': return 'Roulette';
                                                case 'dice': return 'Dice';
                                                case 'coinflip': return 'Coinflip';
                                                case 'wheel': return 'Wheel';
                                                case 'hilo': return 'HiLo';
                                                case 'crash': return 'Crash';
                                                case 'keno': return 'Keno';
                                                case 'event': return 'Events';
                                                default: return $category;
                                            }
                                        };
                                    @endphp

                                    <div class="ach-menu-element ach-menu-active" onclick="loadAchievements('all')">
                                        All achievements
                                    </div>
                                    <div class="ach-menu-sep"></div>

                                    @foreach(\App\Achievements::categories() as $category)
                                        <div class="ach-menu-element" data-submenu="{{$category}}" onclick="loadAchievements('{{$category}}')">
                                            {{ $translate($category) }}
                                            <i class="fas fa-angle-right"></i>
                                        </div>
                                        {!! $sub($category) !!}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10">
                    <div id="load" class="profile-loader" style="display: none">
                        <div></div>
                    </div>
                    <div class="ach-scroll-content">
                        <div class="nano">
                            <div class="nano-content" id="achievements_content"></div>
                        </div>
                    </div>
                </div>
            </div>
            @if($owner)
                <div class="user_tab user_live_table_tab" id="in">
                    @php
                        $drops = DB::table('payments')->where('user', Auth::user()->id)->orderBy('id', 'desc')->get();
                    @endphp
                    @if(sizeof($drops) == 0)
                        <div class="user_tab_empty">
                            <i class="fad fa-clock"></i>
                            <p>There is nothing here</p>
                        </div>
                    @else
                        <table class="live_table">
                            <thead>
                                <tr class="live_table-header">
                                    <th>#</th>
                                    <th class="hidden-xs">Name</th>
                                    <th>Sum</th>
                                    <th class="hidden-xs">Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($drops as $d)
                                    <tr class="live_table-game">
                                        <th>
                                            <div class="ll_game">
                                                <span>{{$d->id  + 1871342}}</span>
                                            </div>
                                        </th>
                                        <th class="hidden-xs">Top up balance on {{$d->amount}} rub</th>
                                        <th>{{$d->amount}} rub</th>
                                        <th class="hidden-xs">{{$d->created_at}}</th>
                                        <th>
                                            @if($d->status == 0)
                                                Expectation
											@endif
                                            @if($d->status == 1)
                                                Successfully
											@endif
											@if($d->status == 2)
                                                Error
                                            @endif
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                <div class="user_tab user_live_table_tab" id="out">
                    @php
                        $drops = DB::table('withdraw')->where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
                    @endphp
                    @if(sizeof($drops) == 0)
                        <div class="user_tab_empty">
                            <i class="fad fa-clock"></i>
                            <p>There is nothing here</p>
                        </div>
                    @else
																							<style>
					@media (max-width: 780px) {
						.live_table-game1 th, .live_table-header1 th {
    padding: 10px;
    font-size: 9.5px;
    color: #a8a8a8;
}
					}
					@media (min-width: 780px) {
						.live_table-game1 th, .live_table-header1 th {
    padding: 10px;
    font-size: 14px;
    color: #a8a8a8;
}
					}
					.live_table tr:last-child {
    border: unset!important;
}
.live_table tr {
    border-bottom: 1px solid hsla(0,0%,100%,.05);
}
.live_table-header1 th {
    border-top: 1px solid hsla(0,0%,100%,.1);
    border-bottom: 1px solid hsla(0,0%,100%,.1);
}
					</style>
                        <table class="live_table">
                            <thead>
                            <tr class="live_table-header1">
                                <th>#</th>
                                <th class="hidden-xs">Name</th>
                                <th>Sum</th>
                                <th class="hidden-xs">Date</th>
                                <th class="hidden-lg hidden-sm hidden-md">Wallet</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($drops as $d)
                                    <tr class="live_table-game1">
                                        <th>
                                            <div class="ll_game">
                                                <span>{{$d->id}}</span>
                                            </div>
                                        </th>
                                        <th class="hidden-xs">
                                            Payment for the amount {{$d->amount}} rub
                                            @if(Auth::user()->deposit == 0)
                                                <i class="fas fa-exclamation-triangle extendedPayout tooltip" title="The payment period can be extended up to 2 weeks, since you played with a free balance."></i>
                                            @endif
                                            <br>
                                            <span style="color: white">Wallet: {{ $d->wallet }}</span>
                                        </th>
                                        <th>{{ $d->amount }} rub</th>
                                        <th class="hidden-xs">{{$d->created_at}}</th>
                                        <th class="hidden-lg hidden-sm hidden-md">
                                            {{ $d->wallet }}
                                        </th>
                                        <th>
                                            @if($d->status == 0)
                                                Expectation
                                                <br>
                                                <a class="ll" onclick="cancelWithdraw({{$d->id}})" href="javascript:void(0)">Отменить</a>
                                            @elseif($d->status == 1)
                                                Successfully
                                            @elseif($d->status == 2)
                                                Denied
                                            @elseif($d->status == 3)
                                                Canceled
                                            @elseif($d->status == 4)
                                                Expectation
                                            @endif
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                <div class="user_tab" id="level">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3">
                            <div class="levels-table">
                                @for($i = 1; $i <= 10; $i++)
                                    <div class="level">
                                        <div class="level-name level-{{$i}}">Level {{$i}}</div>
                                        @if($i == Auth::user()->level) <div class="level-desc level-{{$i}}"><i class="fal fa-check"></i> Это ваш уровень</div>
                                        @elseif($i == Auth::user()->level + 1) <div class="level-desc level-{{$i}}">Amount of experience: {{Auth::user()->exp}}/{{\App\User::getRequiredExperience($i)}}</div>
                                        @elseif($i < Auth::user()->level) <div class="level-desc level-{{$i}}"><i class="fal fa-check"></i> You got this level</div> @endif

                                        @if($i > 1 && $i >= Auth::user()->level) <div class="level-desc @if($i == Auth::user()->level) level-4 @else level-1 @endif">Extra Bonus: +{{\App\User::getBonusModifier($i)}} rub</div> @endif
                                        @if($i == 10) <div class="level-desc @if($user->level < 10) level-1 @else level-10 @endif">Golden frame for chat message</div> @endif
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9">
                            <div class="user-exp">
                                Your level:
                                <span>{{$user->level}}</span>
                            </div>
                            <div class="user-exp">
                                Additional bonus:
                                <span>
                                    @if($user->level > 1)
                                        {{\App\User::getBonusModifier($user->level)}} rub
                                    @else
                                        No
                                    @endif
                                </span>
                            </div>
                            @if($user->level < 10)
                                <div class="user-exp" style="margin-top: 15px">
                                    Опыт до {{$user->level + 1}} level:
                                    <span>{{$user->exp}}/{{\App\User::getRequiredExperience($user->level + 1)}} ({{intval(($user->exp/\App\User::getRequiredExperience($user->level + 1))*100)}}%)</span>
                                </div>
                                <div class="user-level-progress-big">
                                    <div class="level-bg-{{$user->level + 1}}" style="width: {{($user->exp/\App\User::getRequiredExperience($user->level + 1))*100}}%"></div>
                                </div>
                            @endif
                            <div class="faq">
                                <div class="faq-block">
                                    <div class="faq-header faq-header-active">
                                        What is a level?
                                    </div>
                                    <div class="faq-content" style="display: block">
                                        A level is a reward for continued participation in activities on the site.
                                    </div>
                                </div>
                                <div class="faq-block">
                                    <div class="faq-header">
                                        What does the level give??
                                    </div>
                                    <div class="faq-content">
                                        Level gives:
                                        <ul>
                                            <li>
                                                1. Additional bonus for the wheel on the page <a href="javascript:void(0)" onclick="load('/bonus')" class="ll">Bonus</a>.
                                            </li>
                                            <li>
                                                2. An icon in the chat showing your level on the site.
                                            </li>
                                            <li>
                                                3. Level 10 highlights the chat message in gold.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="faq-block">
                                    <div class="faq-header">
                                        What is an additional bonus?
                                    </div>
                                    <div class="faq-content">
                                        An additional bonus is an amount that is guaranteed to be added to your account after spinning the wheel on the <a href="javascript:void(0)" onclick="load('/bonus')" class="ll">Bonus</a >
                                    </div>
                                </div>
                                @if($user->level < 10)
                                    <div class="faq-block">
                                        <div class="faq-header">
                                            How to get experience?
                                        </div>
                                        <div class="faq-content">
                                            <ul>
                                                <li>
                                                     1. Receiving a free bonus<hr>
                                                     - Each bonus you receive adds 35 experience points to your account.
                                                 </li>
                                                 <li>
                                                     2. Getting achievements<hr>
                                                     - Bronze achievement adds 1.5% experience.<br>
                                                     - Silver achievement adds 5% experience.<br>
                                                     - Gold achievement adds 10% experience.<br>
                                                     - Platinum achievement adds 25% experience.<br>
                                                     <br>
                                                     <a href="javascript:void(0)" onclick="setTab('achievements')" class="ll">Learn more</a>
                                                 </li>
                                                 <li>
                                                     3. Topping up your account<hr>
                                                     - Every 10 rub increases your experience by 10%.
                                                     @if($user->level < 3)
                                                     <br>
                                                     - The first deposit increases your level to 3.
                                                     @endif
                                                 </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
               <div class="user_tab" id="ref">
                    <div class="col-xs-12 col-sm-12 col-md-9">
                         <div class="ref-header">Affiliate program</div>
                         <div class="ref-content">
                             Invite your friends and earn bonuses together!<br>
                             Each person who registers using your referral code will receive {{$settings->promo_sum}} rub

                             <br><br>
                             As a reward for each <span class="ref_bb">active referral</span> <i class="fas fa-question-circle fqc tooltip" title="An active referral is considered to be one whose total winnings from all games have reached 50 rubles "></i> you get {{$settings->promo_sum}} rub,<br>
                             and every 10 active referrals allow you to spin the wheel with a cash reward.<br><br>

                             <span>Your invitation link <i class="fas fa-question-circle fqc tooltip" title="By following this link and after registering, the user automatically becomes your referral."></i>:</span>
                             <div class="ref_link tooltip copy" title="Click to copy">https://{{$_SERVER['SERVER_NAME']}}/ref/{{Auth::user()->ref_code}}< /div>
                             <span>Your referral promo code:</span>
                             <div class="ref_promo tooltip copy" title="Click to copy">{{Auth::user()->ref_code}}</div>
                         </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-3">
                         <div class="ref-header">Invited referrals</div>
                         <div id="ref_content">Loading...</div>
                     </div>
                 </div>
				<!--- Settings --->
				<div class="user_tab" id="settings">
                    <div class="col-xs-12 col-sm-12 col-md-9">
                        <div class="ref-header">Basic</div>
                        <div class="ref-content">
						<div class="fn_form_block_h1">
                <p>Your UID</p>
                <input value="{{\App\User::where('id', Auth::user()->id)->first()->uid}}" disabled id="_client_id" placeholder="uid">
            </div>
						<div class="fn_form_block">
                <p>Name</p>
                <input value="{{\App\User::where('id', Auth::user()->id)->first()->username}}" disabled id="_client_name" placeholder="Username">
                <a class="ll cs_change_settings" onclick="client_username_change_prompt()">Change</a>
            </div>
			<br>
<div class="fn_form_block">
                <p>Email</p>
                <input value="{{\App\User::where('id', Auth::user()->id)->first()->email}}" disabled id="_client_email" placeholder="Email">
                <a class="ll cs_change_settings" onclick="client_email_change_prompt()">Change</a>
            </div>
            </div>
			<br><br>
			 <div class="ref-header">Security</div>
			 <div class="ref-content">
			 @if(Auth::user()->password == null)
				<!-- login pass null --->
				<div class="login_fields auth-tab-active" data-auth-action="set_pass">
                <div class="login_fields__user">
                    <div class="icon user-icon">
                        <img src="/img/lock_icon_copy.png" alt="">
                    </div>
                    <input id="pass1" placeholder="New Password" type="password">
                    <div class="validation">
                        <img src="/img/tick.png" alt="">
                    </div>
                </div>
                <div class="login_fields__password">
                    <div class="icon password-icon">
                        <img src="/img/lock_icon_copy.png" alt="">
                    </div>
                    <input id="pass2" placeholder="Repeat password" type="password">
                    <div class="validation">
                        <img src="/img/tick.png" alt="">
                    </div>
                </div>
				<br>
                <div class="login_fields__submit">
                    <input type="submit" id="p_s_n" value="Save">
                </div>
				<br><br>
            </div>
			<!-- end login pass null --->
			@endif
			@if(Auth::user()->password != null)
				<!-- login pass yes --->
				<div class="login_fields" data-auth-action="change_pass">
                <div class="login_fields__user" id="oldpassword" style="display: block;">
                    <div class="icon password-icon">
                        <img src="/img/lock_icon_copy.png" alt="">
                    </div>
                    <input id="oldpass" placeholder="Current Password" type="password">
                    <div class="validation">
                        <img src="/img/tick.png" alt="">
                    </div>
                    <i class="fas fa-info-circle register-email-info tooltip" title="The current password used for authorization."></i>
                </div>
                <div class="login_fields__user">
                    <div class="icon user-icon">
                        <img src="/img/lock_icon_copy.png" alt="">
                    </div>
                    <input id="pass1" placeholder="New Password" type="password">
                    <div class="validation">
                        <img src="/img/tick.png" alt="">
                    </div>
                </div>
                <div class="login_fields__password">
                    <div class="icon password-icon">
                        <img src="/img/lock_icon_copy.png" alt="">
                    </div>
                    <input id="pass2" placeholder="Repeat password" type="password">
                    <div class="validation">
                        <img src="/img/tick.png" alt="">
                    </div>
                </div>
				<br><br>
                <div class="login_fields__submit">
                    <input type="submit" id="p_s_n" value="Save">
                </div>
            </div>
			<!-- end login pass yes --->
			@endif
            </div>
			<br><br>
<br><br>
										 <div class="ref-header">Fair game</div>
										 <div class="ref-content">
                            <div class="fn_form_block">
                <p>Client hash</p>
                <input value="{{\App\User::where('id', Auth::user()->id)->first()->client_seed}}" disabled id="_client_hash" placeholder="Hash">
                <a class="ll cs_change_settings" onclick="client_seed_change_prompt_user()">Change</a>
            </div> </div>
                        </div>
                    </div>
                </div>
				<!--- Settings --->
            @endif
        </div>
    </div>
</div>
</div>
</div>
</div>
  </div>
</div>
