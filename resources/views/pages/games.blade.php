 <div class="col-xs-12 index-carousel">
 	@if($settings->slider == 1)
    <div class="carousel">
        <div>
            <div class="carousel-slide">
                <div class="carousel-background" style="background-image: url(/img/esport.webp);"></div>
                <div class="carousel-content">
                    <div class="slide-header">
                    Promo codes
                    </div>
                    <div class="slide-content">
                        Do you want to stay up to date with the news? Receive free bonuses? Promotional codes, sweepstakes and much more.<br>
                         Come to our VK group - <a class="ll" href="https://vk.com/bankwin" target="_blank">SpinnersBay </a>
                    </div>
                </div>
                <button class="slide-button" onclick="window.open('https://vk.com/bankwin', '_blank')">Go</button>
            </div>
        </div>
        <div>
            <div class="carousel-slide">
                <div class="carousel-background" style="background-image: url(/img/main-slide.webp);"></div>
                <div class="carousel-content">
                    <div class="slide-header">
                    Luck is in your hands!
                    </div>
                    <div class="slide-content">
                    Experience the peak of social gambling, combining the atmosphere of a real casino with the simplicity of your favorite game modes.
                    </div>
                </div>
                <button class="slide-button" @if(Auth::guest()) onclick="$('#b_si').click();" @else onclick="load('/bonus')" @endif>Begin to play</button>
            </div>
        </div>
        <div>
            <div class="carousel-slide">
                <div class="carousel-background" style="background-image: url(/img/main-slide.webp);"></div>
                <div class="carousel-content">
                    <div class="slide-header">
                    Start from scratch!
                    </div>
                    <div class="slide-content">
                    Start from scratch to become richer and more successful,<br>get a daily bonus of up to 100 rubles to start earning real cash. 
                    </div>
                </div>
                <button class="slide-button" @if(Auth::guest()) onclick="$('#b_si').click();" @else onclick="load('/bonus')" @endif>Claim bonus</button>
            </div>
        </div>
    </div> 
	@endif
	@if(Auth::guest())
	<div class="welcome_Welcome__rQYTl">
            <div class="welcome_Right__27QGe">
            <a href="javascript:void(0)" @if(Auth::guest()) onclick="$('#b_si').click();" @else onclick="load('/user?id={{Auth::user()->id}}')" @endif>
            <img src="/img/Slide2.webp" loading="lazy" alt="" width="100%">
                   		</a>

                </div>
                <div class="welcome_Left__JPT6w">

                    <div class="welcome_Intro__3Zo-O">SpinnersBay – Instant games with money withdrawal. The best licensed site for relaxation and earning money.
                    </div>
					@php
					$users = (\DB::table('users')->count() + $settings->fakesumusers);
					$withdraws = (\DB::table('withdraw')->where('status', 1)->sum('amount') + $settings->fakesumwithdraw);
					$pu = number_format($users,0,'',' ');
					$pw = number_format($withdraws,0,'',' ');
					@endphp
                    <div class="welcome_Counters__2BjGU">
                        <div class="welcome_Item__3ifzJ">
                            <div class="welcome_Label__2pEjZ">Players</div>{{$pu}}</div>
                        <div class="welcome_Item__3ifzJ">
                            <div class="welcome_Label__2pEjZ">Withdrawn</div>{{$pw}} <i style="font-size: 19px;" class="far fa-ruble-sign"></i></div>
                    </div>
                     <div class="welcome_Counters__2BjGU">

                    </div>
                     <div class="welcome_Registration__3VnWT"> <span>BONUS ON REGISTRATION</span>
                    <a href="javascript:void(0)" @if(Auth::guest()) onclick="$('#b_si').click();" @else onclick="load('/')" @endif class="btn22">
                    BEGIN TO PLAY

                   		</a>
                    </div>
                </div>

            </div>
			@endif
</div>
<div class="col-xs-12" style="margin-top: 10px">
        @php
        $link = function($game) {
            if(!\App\Game::isDisabled($game)) echo "load('/".$game."')";
            else echo "";
        };
    @endphp
	@php
        $overlay = function($game) {
            if(!\App\Game::isDisabled($game)) echo '<div class="i_game_overlay-'.$game.'"></div>';
            else echo '	        <div class="i_game-ribbon_container">
            <span class="i_game-ribbon">
            Game unavailable
            </span>
        </div><div class="i_game_overlay-'.$game.'"></div><div data-disable-ajax-loading="'.$game.'" class="i_game_disabled_overlay"></div>';
        };
    @endphp
	    @php
        $online = function($game) {
			$settings = \App\Settings::where('id', 1)->first();
					$fakeonline_games = $settings->fakeonline_games * 1;
            if(!\App\Game::isDisabled($game)) echo '<div class="i_game-stat tooltip" title="Онлайн в игре"><i class="fas i_icon-stat fa-user"></i> '.mt_rand(5, 1 * $fakeonline_games).'</div>';
            else echo '';
        };
    @endphp
    @if($settings->warn_enabled == 1)
        <div class="col-xs-12">
            <div class="notification">
                <i class="fad fa-exclamation-triangle"></i>
                <div class="notification-content">
                    <div>{{$settings->warn_title}}</div>
                    <div>{{$settings->warn_text}}</div>
                </div>
            </div>
        </div>
    @endif
	
		@if(!Auth::guest())
	@if($settings->slide_enabled == 1)
        <div class="col-xs-12">
            <div class="notification2">
                <i class="fad fa-coins"></i>
                <div class="notification-content">
                    <div>{{$settings->slide_title}}</div>
                    <div>{{$settings->slide_text}}</div>
                </div>
            </div>
        </div>
    @endif
	@endif
	<style type="text/css">
   .landing_Caption {
    display: flex;
    justify-content: center;
    padding: 0 30px 25px;
    font-size: 16px;
    text-transform: uppercase;
    color: #fff;
    position: relative;
    overflow: hidden;
	top: 11px;
}
   .landing_Caption>span {
    position: relative;
    z-index: 1;
    background-color: #20242d;
    padding: 0 15px;
    display: inline-block;
}
  </style>
	<div class="landing_Caption"><span>INSTANT GAMES</span></div>
  <!---  <div class="col-xs-12">
        <div class="i_game i_game-bottle event_container" style="background-image: url(/)" onclick="load('/battle')">
            <div class="i_game-name">
                <span><i class="fas fa-club"></i> Battle</span>
                <p>Test</p>
            </div>
        </div>
    </div> --->
    <div class="col-xs-13 col-sm-6 col-md-4">
        <div class="i_game i_game-mines" onclick="{{$link('mines')}}" style="background-image: url('/img/game/svg/mines.svg')">
            {{$overlay('mines')}}
            <div class="i_game-name">
                <i class="far fa-bomb"></i>
                Mines
            </div>
			{{$online('mines')}}
        </div>
    </div>
    <div class="col-xs-13 col-sm-6 col-md-4">
        <div class="i_game i_game-crash" onclick="{{$link('crash')}}" style="background-image: url('/img/game/svg/crash.webp')">
		{{$overlay('crash')}}
            <div class="i_game-name">
                <i class="icon-crash"></i>
                Crash
            </div>
			{{$online('crash')}}
        </div>
    </div>
    <div class="col-xs-13 col-sm-6 col-md-4">
        <div class="i_game i_game-wheel" onclick="{{$link('wheel')}}" style="background-image: url('/img/game/svg/wheel.svg')">
            {{$overlay('wheel')}}
            <div class="i_game-name">
                <i class="fad fa-circle-notch"></i>
                Wheel
            </div>
			{{$online('wheel')}}
        </div>
    </div>
    <div class="col-xs-13 col-sm-6 col-md-4">
        <div class="i_game i_game-dice" onclick="{{$link('dice')}}" style="background-image: url('/img/game/svg/dice.svg')">
            {{$overlay('dice')}}
            <div class="i_game-name">
                <i class="fa fa-dice"></i>
                Dice
            </div>
			{{$online('dice')}}
        </div>
    </div>
    <div class="col-xs-13 col-sm-6 col-md-4">
        <div class="i_game i_game-coinflip" onclick="{{$link('coinflip')}}" style="background-image: url('/img/game/svg/coinflip.svg'); background-position-y: top; background-size: cover;">
            {{$overlay('coinflip')}}
            <div class="i_game-name">
                <i class="far fa-coin"></i>
                Coinflip
            </div>
			{{$online('coinflip')}}
        </div>
    </div>
    <div class="col-xs-13 col-sm-6 col-md-4">
        <div class="i_game i_game-hilo" onclick="{{$link('hilo')}}" style="background-image: url('/img/game/svg/hilo.svg')">
            {{$overlay('hilo')}}
            <div class="i_game-name">
                <i class="icon-hilo"></i>
                HiLo
            </div>
			{{$online('hilo')}}
        </div>
    </div>
    <div class="col-xs-13 col-sm-6 col-md-4">
        <div class="i_game i_game-blackjack" onclick="{{$link('blackjack')}}" style="background-image: url('/img/game/svg/blackjack2.svg')">
            {{$overlay('blackjack')}}
            <div class="i_game-name">
                <i class="icon-blackjack"></i>
                Blackjack
            </div>
			{{$online('blackjack')}}
        </div>
    </div>
    <div class="col-xs-13 col-sm-6 col-md-4">
        <div class="i_game i_game-tower" onclick="{{$link('tower')}}" style="background-image: url('/img/game/svg/tower.svg')">
            {{$overlay('tower')}}
            <div class="i_game-name">
                <i class="fad fa-chess-rook"></i>
                Tower
            </div>
			{{$online('tower')}}
        </div>
    </div>
    <div class="col-xs-13 col-sm-6 col-md-4">
        <div class="i_game i_game-roulette" onclick="{{$link('roulette')}}" style="background-image: url('/img/game/svg/roulette.svg')">
            {{$overlay('roulette')}}
            <div class="i_game-name">
                <i class="icon-roulette"></i>
                Roulette
            </div>
			{{$online('roulette')}}
        </div>
    </div>
    <div class="col-xs-13 col-sm-6 col-md-4">
        <div class="i_game i_game-stairs" onclick="{{$link('stairs')}}" style="background-image: url('/img/game/svg/stairs.svg')">
            {{$overlay('stairs')}}
            <div class="i_game-name">
                <i class="icon-stairs"></i>
                Stairs
            </div>
			{{$online('stairs')}}
        </div>
    </div>
    <div class="col-xs-13 col-sm-6 col-md-4">
        <div class="i_game i_game-keno" onclick="{{$link('keno')}}" style="background-image: url('/img/game/svg/keno.svg')">
            {{$overlay('keno')}}
            <div class="i_game-name">
                <i class="icon-keno"></i>
                Keno
            </div>
			{{$online('keno')}}
        </div>
    </div>
	<div class="col-xs-13 col-sm-6 col-md-4">
        <div class="i_game i_game-plinko" onclick="{{$link('plinko')}}" style="background-image: url('/img/game/svg/plinko.webp')">
            {{$overlay('plinko')}}
            <div class="i_game-name">
                <i class="fas fa-ball-pile"></i>
                Plinko
            </div>
			{{$online('plinko')}}
        </div>
    </div>
    <div class="col-xs-13 col-sm-6 col-md-4" id="cases">
        <div class="i_game i_game-cases" onclick="{{$link('cases')}}">
            {{$overlay('cases')}}
            <div class="i_game-cases-float">
                <div class="floating">
                    <i class="fad fa-box-open"></i>
                </div>
                <div class="floating">
                    <i class="fad fa-box-open"></i>
                </div>
            </div>
            <div class="i_game-name">
                <i class="fad fa-box-open"></i>
				@if(\App\Box::isFreeAvailable())
                <div class="gg_sidebar-notification">1</div>
				@endif
                Cases
            </div>
			{{$online('cases')}}
        </div>
    </div>
    <div class="col-xs-13 col-sm-6 col-md-5">
        <div class="i_game i_game-bonus" @if(!Auth::guest()) onclick="load('/bonus')" @else onclick="$('#b_si').click()" @endif>
            <div class="i_game_overlay-bonus i_game_overlay-bonus_1"></div>
            <div class="i_game_overlay-bonus i_game_overlay-bonus_2"></div>
            <div class="i_game_overlay-bonus i_game_overlay-bonus_3 hidden-xs"></div>
            <div class="i_game-name bonus_banner_desc" id="bonus_banner_name">
                <i class="fad fa-coins i_y_i" style="margin-right: 5px"></i><span class="i_y_i">Bonus</span><br>
                Get a cash bonus<br>for free to start playing at SpinnersBay!
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="i_game i_game-vk" onclick="var win = window.open('https://vk.com/bets.play2x', '_blank'); win.focus()" id="vk_banner">
            <i class="fab fa-vk i_game_overlay-vk"></i>
            <div class="i_game-name vk_banner_desc" id="vk_banner_name">
                <i class="fab fa-vk i_b_i"></i><span class="i_b_i">VKontakte</span><br>
                Join the VKontakte group<br>
                and stay up to date with all the news,<br>
                as well as special promotional codes!
            </div>
        </div>
    </div>
</div>