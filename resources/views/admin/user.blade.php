@php
    if(!isset($_GET['id'])) die();
    $user = \App\User::where('id', $_GET['id'])->first();
    if($user == null) die();
@endphp
<div id="__ajax_title" style="display: none">{{$user->username}}</div>
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    @if(Auth::user()->chat_role < 3)
        This information is not available to you
    @else
    <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
        <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
            <i class="la la-close"></i>
        </button>
        <div class="kt-grid__item kt-app__toggle" id="kt_user_profile_aside">
            <div class="kt-portlet ">
                <div class="kt-portlet__head  kt-portlet__head--noborder">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title"></h3>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fit-y">
                    <div class="kt-widget kt-widget--user-profile-1">
                        <div class="kt-widget__head">
                            <div class="kt-widget__media">
                                <img src="{{$user->avatar}}" alt="image">
                            </div>
                            <div class="kt-widget__content">
                                <div class="kt-widget__section">
                                    <a href="javascript:void(0)" class="kt-widget__username">
                                        {{$user->username}}
                                        @if($user->chat_role >= 2)
                                            <i class="flaticon2-correct kt-font-success"></i>
                                        @endif
                                    </a>
                                </div>

                                <div class="kt-widget__action">
                                    @php
                                        $chat_color = $user->chat_role == 2 ? "brand" : ($user->chat_role == 3 ? "danger" : ($user->chat_role == 1 ? "warning" : "primary"));
                                        $chat_text = $user->chat_role == 2 ? "Moderator" : ($user->chat_role == 3 ? "Administrator" : ($user->chat_role == 4 ? "Fake" : ($user->chat_role == 1 ? "YouTube" : "User")));
                                    @endphp
                                    <button type="button" class="btn btn-{{$chat_color}} btn-sm">{{$chat_text}}</button>
                                </div>
                            </div>
                        </div>
                        <div class="kt-widget__body">
                            <div class="kt-widget__content">
                                @if($user->email != null)
                                    <div class="kt-widget__info">
                                        <span class="kt-widget__label">Email:</span>
                                        <a href="javascript:void(0)" class="kt-widget__data">
                                            {{$user->email}}
                                        </a>
                                    </div>
                                @else
                                    <div class="kt-widget__info">
                                        <span class="kt-widget__label">VKontakte:</span>
                                        <a href="https://vk.com/id{{$user->login2}}" target="_blank" class="kt-widget__data">
                                            {{$user->login2}}
                                        </a>
                                    </div>
                                @endif
                                <div class="kt-widget__info">
                                    <span class="kt-widget__label">Played games:</span>
                                    <a href="javascript:void(0)" class="kt-widget__data">
                                        {{\App\Game::where('user_id', $user->id)->count()}}
                                    </a>
                                </div>
                                <div class="kt-widget__info">
                                    <span class="kt-widget__label">Level:</span>
                                    <a href="javascript:void(0)" class="kt-widget__data">
                                        {{$user->level}}
                                    </a>
                                </div>
                                @if($user->level < 10)
                                    <div class="kt-widget__info">
                                        <span class="kt-widget__label">Experience:</span>
                                        <a href="javascript:void(0)" class="kt-widget__data">
                                            {{$user->exp}}/{{\App\User::getRequiredExperience($user->level+1)}}
                                        </a>
                                    </div>
                                @endif
                                <div class="kt-widget__info">
                                    <span class="kt-widget__label">Deposit:</span>
                                    <a href="javascript:void(0)" class="kt-widget__data">
                                        {{$user->deposit}} rub.
                                    </a>
                                </div>
                                <div class="kt-widget__info">
                                    <span class="kt-widget__label">Won:</span>
                                    <span class="kt-widget__data">{{\App\Game::where('user_id', $user->id)->where('status', 1)->where('demo', 0)->sum('win')}} rub.</span>
                                </div>
                                <div class="kt-widget__info">
                                    <button id="ban" class="btn @if($user->global_ban == 0) btn-primary @else btn-danger @endif btn-block mt-2"
                                        onclick="send('#ban', '/admin/global_ban/{{$user->id}}/{{Auth::user()->id}}', function() { window.location.reload(); })">
                                        @if($user->global_ban == 0)
                                            Block
                                        @else
                                            Unblock
                                        @endif
                                    </button>
                                </div>
                                <div class="kt-widget__info">
                                    <button id="sendnotification" class="btn btn-primary btn-block mt-2"
                                                                                       onclick="$('#edit_id').val({{$user->id}}); $('#edit_name').val('{{$user->username}}'); " data-toggle="modal" data-target="#notification">
                                         Send notification
                                    </button>
                                </div>
                            </div>
                            <div class="kt-widget__items">
                                <a href="javascript:void(0)" class="kt-widget__item kt-widget__item--active">
                                    <span class="kt-widget__section">
                                        <span class="kt-widget__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="kt-widget__desc">
                                            {{$chat_text}}
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">{{$user->username}}</h3>
                            </div>
                        </div>
                        <div class="kt-form kt-form--label-right">
                            <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Information:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar">
                                                    <div class="kt-avatar__holder" style="background-image: url({{$user->avatar}})"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Check:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Balance</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group" id="money_grp">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fad fa-coins"></i></span></div>
                                                    <input oninput="delayedv('#money', function(v) { send('#money_grp', '/admin/change_balance/{{$user->id}}/'+v) })" id="money" type="text" class="form-control" value="{{$user->money}}" placeholder="Balance" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Profile:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Level</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group" id="lvl_grp">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-code-branch"></i></span></div>
                                                    <input oninput="delayedv('#lvl', function(v) { send('#lvl_grp', '/admin/change_lvl/{{$user->id}}/'+v) })" id="lvl" type="text" class="form-control" value="{{$user->level}}" placeholder="Level" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group" id="email_grp">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-envelope"></i></span></div>
                                                    <input oninput="delayedv('#email', function(v) { send('#email_grp', '/admin/change_email/{{$user->id}}/'+v) })" id="email" type="text" class="form-control" value="{{$user->email}}" placeholder="Email" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
										                            <div class="form-group row">
                                <label class="col-lg-8 col-xl-5">
                                    <input id="email_confirmed" @if($user['email_confirmed'] == 1) checked @endif type="checkbox"
                                        onclick="send('#emailconf', '/admin/email_confirmed/{{$user->id}}/'+($('#email_confirmed').is(':checked') ? '1' : '0'))"> Email successfully confirmed
                                    <span></span>
                                </label>
                            </div>
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Referral program:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Referral code</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input disabled class="form-control" type="text" value="{{$user->ref_code}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Referral code used</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input disabled class="form-control" type="text" value="{{$user->ref_use}}">
                                                <span class="form-text text-muted">
                                                    @if($user->ref_use == null)
                                                         Referral code was not used
                                                     @else
                                                         @php
                                                             $referrer = \App\User::where('ref_code', $user->ref_use)->first();
                                                         @endphp
                                                         @if($referrer == null)
                                                             The referral code was used, but its owner could not be found
                                                         @else
                                                             Owner: <a href="/admin/user?id={{$referrer->id}}" target="_blank">{{$referrer->username}}</a>
                                                         @endif
                                                     @endif
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Legal:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Legal</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-section">
                                                    <div class="kt-section__content kt-section__content--border kt-section__content--fit">
                                                        <ul class="kt-nav" id="chat_rights">
                                                            <li data-chat-selection="true" id="c_u" class="kt-nav__item @if($user->chat_role == 0) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link"
                                                                   onclick="send('#chat_rights', '/admin/change_rights/{{$user->id}}/0', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#c_u').addClass('kt-nav__item--active'); })">
                                                                    <i class="kt-nav__link-icon fal fa-user"></i>
                                                                    <span class="kt-nav__link-text">User</span>
                                                                </a>
                                                            </li>
                                                            <li data-chat-selection="true" id="c_y" class="kt-nav__item @if($user->chat_role == 1) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link" style="font-family: 'Open Sans', sans-serif"
                                                                   onclick="send('#chat_rights', '/admin/change_rights/{{$user->id}}/1', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#c_y').addClass('kt-nav__item--active'); })">
                                                                    <i class="kt-nav__link-icon fal fa-play"></i>
                                                                    <span class="kt-nav__link-text">YouTube</span>
                                                                </a>
                                                            </li>
                                                            <li data-chat-selection="true" id="c_m" class="kt-nav__item @if($user->chat_role == 2) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link"
                                                                   onclick="send('#chat_rights', '/admin/change_rights/{{$user->id}}/2', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#c_m').addClass('kt-nav__item--active'); })">
                                                                    <i class="kt-nav__link-icon fal fa-shield-alt"></i>
                                                                    <span class="kt-nav__link-text">Moderator</span>
                                                                </a>
                                                            </li>
                                                            <li data-chat-selection="true" id="c_a" class="kt-nav__item @if($user->chat_role == 3) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link"
                                                                   onclick="send('#chat_rights', '/admin/change_rights/{{$user->id}}/3', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#c_a').addClass('kt-nav__item--active');})">
                                                                    <i class="kt-nav__link-icon fal fa-cog"></i>
                                                                    <span class="kt-nav__link-text">Administrator</span>
                                                                </a>
                                                            </li>
															<li data-chat-selection="true" id="c_f" class="kt-nav__item @if($user->chat_role == 4) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link"
                                                                   onclick="send('#chat_rights', '/admin/change_rights/{{$user->id}}/4', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#c_f').addClass('kt-nav__item--active');})">
                                                                    <i class="kt-nav__link-icon fal fa-cog"></i>
                                                                    <span class="kt-nav__link-text">Fake</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Magazine
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="kt_widget6_tab1_content" aria-expanded="true">
                                    <div class="kt-notification" id="actions"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
<div class="modal fade" id="notification" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Send notification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input style="display: none" type="hidden" value="-1" id="edit_id">
                <div class="form-group">
                    <label class="form-control-label">User:</label>
                    <input type="text" class="form-control" id="edit_name" disabled="disabled">
                </div>
                <div class="form-group">
                    <label class="form-control-label">Title:</label>
                    <input type="text" class="form-control" id="edit_title">
                </div>
                <div class="form-group">
                    <label class="form-control-label">Message text:</label>
                    <input type="text" class="form-control" id="edit_message">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="edit">Send</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('admin_assets/js/pages/user.js') }}"></script>
