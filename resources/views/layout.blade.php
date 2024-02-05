<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>{{$settings->namesite}} official website – instant games service</title>
    <meta name="description"
        content="{{$settings->namesite}} - Official website ⚡ Play 2x. We take on all commissions, bonus upon registration. ⭐ We will make payments within 24 hours to any payment system." />
    <meta name="keywords" content="{{$settings->keywords}}">
    <link rel="canonical" href="https://betsplay2x.fun" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/logo.png') }}">

    <meta name="theme-color" content="#000000">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{$settings->namesite}} official website – instant games service">
    <meta property="og:description"
        content="{{$settings->namesite}} - Official website ⚡ Play 2x. We take on all commissions, bonus upon registration. ⭐ We will make payments within 24 hours to any payment system.">
    <meta property="og:image" content="{{ asset('/img/logo.jpg') }}">
    <meta property="og:url" content="https://betsplay2x.fun">
    <meta property="business:contact_data:country_name" content="Russia">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/dark.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/tooltipster-sideTip-punk.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/tooltipster.bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/offline-theme-default.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/offline-theme-language.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/payment.css') }}">
    <script type="text/javascript" src="{{ asset('/js/vendor/jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/jquery.nanoscroller.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/jquery.animateNumber.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/offline.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/TweenMax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/winwheel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/jquery.ui.touch-punch.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/emojione.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/emojionearea.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/chart.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/jquery.plugin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/jquery.countdown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/tooltipster.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/moment.min.js') }}"></script>
</head>

<body>
    <!--- Preloader --->
    <div class="pageLoader">
        <div class="loader-main">
            <div></div>
        </div>
    </div>
    <!--- Preloader --->

    @php
    $overlayside = function($game) {
    if(!\App\Game::isDisabled($game)) echo "load('/".$game."')";
    else echo "$('.md-unavailable').toggleClass('md-show', true)";
    };
    @endphp

    <div class="sidebar">
        <div class="fixed">
            <div
                class="games os-host-flexbox os-host os-theme-dark os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition">
                <div class="os-resize-observer-host observed">
                    <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                </div>
                <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                    <div class="os-resize-observer"></div>
                </div>
                <div class="os-content-glue" style="margin: 0px;"></div>
                <div class="os-padding">
                    <div class="os-viewport os-viewport-native-scrollbars-invisible">
                        <div class="os-content" style="padding: 0px; height: 100%; width: 100%;">
                            <div onclick="{{$overlayside('mines')}}" data-game="mines" class="game"
                                data-toggle="tooltip" data-placement="right" title="Mines" data-page-trigger="'/mines'"
                                data-toggle-class="active">
                                <i class="fas fa-bomb"></i>
                            </div>
                            <div onclick="{{$overlayside('dice')}}" data-game="dice" class="game" data-toggle="tooltip"
                                data-placement="right" title="Dice" data-page-trigger="'/dice'"
                                data-toggle-class="active" data-original-title="Dice">
                                <i class="fa fa-dice"></i>
                            </div>
                            <div onclick="{{$overlayside('wheel')}}" data-game="wheel" class="game"
                                data-toggle="tooltip" data-placement="right" title="Wheel" data-page-trigger="'/wheel'"
                                data-toggle-class="active">

                                <i class="fad fa-circle-notch"></i>

                            </div>
                            <div onclick="{{$overlayside('coinflip')}}" data-game="coinflip" class="game"
                                data-toggle="tooltip" data-placement="right" title="Coinflip"
                                data-page-trigger="'/coinflip'" data-toggle-class="active">
                                <i class="fas fa-coin"></i>
                            </div>
                            <div onclick="{{$overlayside('tower')}}" data-game="tower" class="game"
                                data-toggle="tooltip" data-placement="right" title="Tower" data-page-trigger="'/tower'"
                                data-toggle-class="active">
                                <i class="fad fa-chess-rook"></i>
                            </div>
                            <div onclick="{{$overlayside('keno')}}" data-game="keno" class="game" data-toggle="tooltip"
                                data-placement="right" title="Keno" data-page-trigger="'/keno'"
                                data-toggle-class="active">

                                <i class="icon-keno"></i>

                            </div>
                            <div onclick="{{$overlayside('stairs')}}" data-game="stairs" class="game"
                                data-toggle="tooltip" data-placement="right" title="Stairs"
                                data-page-trigger="'/stairs'" data-toggle-class="active">

                                <i class="icon-stairs"></i>

                            </div>
                            <div onclick="{{$overlayside('blackjack')}}" data-game="blackjack" class="game"
                                data-toggle="tooltip" data-placement="right" title="Blackjack"
                                data-page-trigger="'/blackjack'" data-toggle-class="active">

                                <i class="icon-blackjack"></i>

                            </div>
                            <div onclick="{{$overlayside('roulette')}}" data-game="roulette" class="game"
                                data-toggle="tooltip" data-placement="right" title="Roulette"
                                data-page-trigger="'/roulette'" data-toggle-class="active">

                                <i class="icon-roulette"></i>

                            </div>
                            <div onclick="{{$overlayside('crash')}}" data-game="crash" class="game"
                                data-toggle="tooltip" data-placement="right" title="Crash" data-page-trigger="'/crash'"
                                data-toggle-class="active">

                                <i class="icon-crash"></i>

                            </div>
                            <div onclick="{{$overlayside('hilo')}}" data-game="hilo" class="game" data-toggle="tooltip"
                                data-placement="right" title="HiLo" data-page-trigger="'/hilo'"
                                data-toggle-class="active">

                                <i class="icon-hilo"></i>

                            </div>

                            <div onclick="{{$overlayside('plinko')}}" data-game="plinko" class="game"
                                data-toggle="tooltip" data-placement="right" title="Plinko"
                                data-page-trigger="'/plinko'" data-toggle-class="active">

                                <i class="fas fa-ball-pile"></i>

                            </div>
                            <div onclick="{{$overlayside('cases')}}" data-game="cases" class="game"
                                data-toggle="tooltip" data-placement="right" title="Cases" data-page-trigger="'/cases'"
                                data-toggle-class="active">
                                <i class="fad fa-box-open"></i> @if(\App\Box::isFreeAvailable())
                                <div class="gg_sidebar-notification-side">1</div>
                                @endif
                            </div>
                            <div @if(Auth::guest()) onclick="$('#b_si').click();" @else onclick="load('/bonus')" @endif
                                data-game="bonus" class="game" data-toggle="tooltip" data-placement="right"
                                title="Bonus" data-page-trigger="'/bonus'" data-toggle-class="active">
                                <i class="fad fa-coins"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track os-scrollbar-track-off">
                        <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track os-scrollbar-track-off">
                        <div class="os-scrollbar-handle" style="height: 100%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar-corner"></div>
            </div>
            <div class="game theme-switcher">
                <br>
                <li>
                    <a href="https://vk.com/{{$settings->vk_url}}" target="_blank"
                        class="game mode mode_white tooltip-game tooltipstered">
                        <i class="myicon-vk" style="color:white;opacity:1;"></i>
                    </a>
                </li>
            </div>
        </div>
    </div>
    <div class="chat" data-role="<?= Auth::guest() ? '-1' : Auth::user()->chat_role ?>" style="min-width: 0; width: 0;">
        <div class="chat_header">
            <span>Online chat</span>
            <div class="chat_event_timer tooltip tooltipstered" title="Online" style="display: none; right: unset;">
                <span id="online">Offline</span></div>
        </div>
        <div class="chat_messages">
            @if(Auth::guest() || Auth::user()->is_chat_banned == 0)
            <div class="chat_status" style="opacity: 0">
                <div class="chat_loader">
                    <div class="loader-15"></div>
                </div>
                <span>Connection...</span>
            </div>
            @else
            <div class="chat_banned">
                You have been blocked by a moderator
                <br>
                for violating the chat rules.
                @if(Auth::user()->chat_total_bans <= 3) <br><br>
                    <div class="unban_btn" onclick="unban_chat()">Разблокировать за
                        <?= Auth::user()->chat_total_bans * 50 ?> ₽
                    </div>
                    @endif
            </div>
            @endif
            <div class="nano" id="chat_nano">
                <div id="chat" class="nano-content"></div>
            </div>
        </div>
        <div class="chat_input" style="opacity: 0">
            @if(!Auth::guest())
            @if(Auth::user()->mute > time())
            <div class="chat_banned">
                Chat is blocked until
                @php
                $date = new \DateTime('now', new \DateTimeZone('Etc/GMT-3'));
                $date->setTimestamp(Auth::user()->mute);
                echo $date->format('d.m.Y H:i');
                @endphp
            </div>
            @else
            <div class="textarea_sidebar_i">
                <textarea class="b_input_s b_textarea" rows="2" id="chat_message"
                    placeholder="Введите сообщение..."></textarea>
            </div>
            <div class="textarea_sidebar">
                <div onclick="$('.emojionearea-button').click()"><i class="far fa-smile"></i></div>
                <div id="chat_send" data-user-level="{{ Auth::guest() ? 1 : Auth::user()->level }}"
                    data-user-id="{{ Auth::user()->id }}"><i class="fab fa-telegram-plane"></i></div>
                @if(!Auth::guest() && Auth::user()->chat_role == 2 || Auth::user()->chat_role == 3)
                <div class="chat_mod_special_send tooltip" title="Создать викторину" onclick="newSpecial()"><i
                        class="fad fa-microphone-stand"></i></div>
                @endif
                @if(!Auth::guest() && Auth::user()->chat_role == 3)
                <div class="chat_mod_drop_send tooltip" title="Снег/Дождь" onclick="newDrop()"><i
                        class="fad fa-snowflake"></i></div>
                @endif
            </div>
            @endif
            @else
            <div class="chat_banned">
                To chat<br>authorization is required.<br>
                <div class="unban_btn" onclick="$('#b_si').click();">Entrance</div><br><br>
            </div>
            @endif
        </div>
    </div>
    <header>
        <div class="navbar">

            <a class="navbar-brand" onclick="load('/')">
                <img src="/img/logo_transparent.png" alt="">
            </a>

            <div class="menu">
                <ul class="menu__list">
                    <li class="menu__list-item"><a onclick="load('/')" class="menu__list-item__link">Games</a></li>
                    <li class="menu__list-item"><a href="javascript:void(0)" @if(Auth::guest())
                            onclick="$('#b_si').click();" @else onclick="load('/bonus')" @endif
                            class=" menu__list-item__link">Bonuses</a></li>
                    <li class="menu__list-item"><a href="javascript:void(0)" @if(Auth::guest())
                            onclick="$('#b_si').click();" @else onclick="load('/tasks')" @endif
                            class=" menu__list-item__link">Tasks</a></li>
                    <li class="menu__list-item"><a onclick="location.href='https://vk.com/{{$settings->vk_url}}'"
                            class=" menu__list-item__link">VK group</a></li>
                    <li class="menu__list-item"><a href="javascript:void(0)" onclick="provablyfair()"
                            class=" menu__list-item__link">Fair game</a></li>
                    <li class="menu__list-item"><a onclick="load('/faq')" class=" menu__list-item__link">Help</a></li>
                    @if(!Auth::guest() && Auth::user()->chat_role === 3)
                    <li class="menu__list-item"><a onclick="location.href='/admin'" class=" menu__list-item__link">Admin
                            panel</a></li>
                    @endif
                    @if(!Auth::guest() && Auth::user()->chat_role === 2)
                    <li class="menu__list-item"><a onclick="location.href='/admin'"
                            class=" menu__list-item__link">Moder-Panel</a></li>
                    @endif
                </ul>
            </div>
            @if(Auth::guest())
            <div class="user">
                <a id="b_si"
                    onclick="$('[data-auth-action=\'auth\']').click(); $('.md-auth').toggleClass('md-show', true)"
                    class="btn-vk">
                    <i class="myicon-high-five"></i> Authorization
                </a>
            </div>
            <a class="menu-button chat-toggle btn-toggle3" type="button">
                <i class="myicon-chat" onclick="swapChat()"></i>
            </a>
            @else
            <div class="user">
                <div class="profile-component">
                    <div class="money-block">
                        <span class="money-block__money-icon myicon-coins tooltip" title="Переключение режима"
                            id="game_demo" onclick="game_demo"></span>
                        <span id="money" class="money-block__money-area">{{Auth::user()->money}}</span>
                        <style>
                            .money-block__money-area-demo {
                                font-size: 15px;
                            }

                            .money-block__money-area-demo {
                                color: #fff;
                                font-weight: 800;
                                background: #272d39d1;
                                cursor: default;
                                display: inline-block;
                                width: 250px;
                                font-size: 16px;
                                border-radius: 6px;
                                padding: 0 10px 0 45px;
                                height: 40px;
                                line-height: 41px;
                            }

                            @media(max-width: 991px) {
                                .money-block__money-icon {
                                    left: 10px;
                                }

                                .money-block__money-area-demo {
                                    padding: 0px 10px 0 36px;
                                }

                                .money-block__money-area-demo {
                                    width: 210px;
                                }
                            }

                            @media (max-width: 780px) {
                                .money-block__money-area-demo {
                                    width: 200px;
                                }
                            }

                            @media(max-width: 359px) {

                                .money-block__money-area-demo {
                                    font-size: 15px;
                                }

                                .money-block__money-area-demo {
                                    width: 190px;
                                }
                            }

                            .money-block__actions-demo {
                                position: absolute;
                                top: 0;
                                right: 0;
                                display: -webkit-box;
                                display: -webkit-flex;
                                display: -ms-flexbox;
                                display: flex;
                                -webkit-box-align: center;
                                -webkit-align-items: center;
                                -ms-flex-align: center;
                                align-items: center;
                                height: 100%;
                            }
                        </style>
                        <div class="money-block__money-area-demo" style="display: none;"><i class="far fa-infinity"></i>
                        </div>
                        <div class="money-block__actions">
                            <a onclick="$('.md-wallet').toggleClass('md-show', true)" class="wallet-link" id="_payin">
                                Wallet
                            </a>
                        </div>
                        <div class="money-block__actions-demo" style="display: none;">
                            <a class="wallet-link">Demo &nbsp;&nbsp;</a>
                        </div>
                    </div>
                </div>
            </div>
            <a id="notifications" class="menu-button profile-notifications active" onclick="if(chat) swapChatAll();">
                <i class="far fa-bell"></i>
                <div data-watch-disable-loader="true" data-watch-fragment="/fragment.notifications_counter"></div>
                <div class="header_notifications_window no-select" data-visible="false" style="display: none">
                    <div class="header_notification_header">
                        Notifications
                        <i class="header_notifications_close fal fa-times"></i>
                    </div>
                    <div class="nano">
                        <div class="nano-content" data-watch-disable-loader="true"
                            data-watch-fragment="/fragment.notifications"></div>
                    </div>
                </div>
            </a>
            <a class="menu-button profile-link active" onclick="load('/user?id={{Auth::user()->id}}')">
                <i class="myicon-user"></i>
            </a>

            <a class="menu-button chat-toggle btn-toggle3" type="button" onclick="swapChat()">
                <i class="myicon-chat"></i>
            </a>

        </div>
        @endif
    </header>
    <main>
        <div class="game">
            <div class="container container_full-width">
                <div id="_ajax_content_">
                    {!! html_entity_decode($page) !!}
                </div>
            </div>
        </div>
    </main>
    <noindex>
        <div class="ll_container">
            <div class="container">
                <div class="ll_header">
                    <div class="pulsating-circle"></div>
                    <span>LIVE</span>
                </div>
                <div>
                    <table class="live_table" id="ll">
                        <thead>
                            <tr class="live_table-header">
                                <th>GAME</th>
                                <th>PLAYER</th>
                                <th class="hidden-xs">TIME</th>
                                <th class="hidden-xs">BET</th>
                                <th class="hidden-xs">COEFFICIENT</th>
                                <th>WIN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\App\Http\Controllers\GeneralController::get_drop() as $d)
                            @if($d['game_id'] == 12 && floatval($d['amount']) <= 0) @continue @endif <tr
                                class="live_table-game">
                                <th>
                                    <div class="live_table-animated">
                                        <div class="ll_icon hidden-xs" onclick="load('/{{strtolower($d['name'])}}')">
                                            <i class="{{$d['icon']}}"></i>
                                        </div>
                                        <div class="ll_game">
                                            <span
                                                onclick="@if($d['game_id'] != 12) load('/{{strtolower($d['name'])}}'); @else load('/cases'); @endif">{{$d['name']}}</span>
                                            @if($d['game_id'] != 12) <p onclick="user_game_info({{$d['id']}})">View</p>
                                            @else <p onclick="load('/cases')">Go</p> @endif
                                        </div>
                                    </div>
                                </th>
                                <th>
                                    <div class="live_table-animated">
                                        <a class="ll_user" href="/user?id={{$d['user_id']}}">
                                            {{$d['username']}}
                                        </a>
                                    </div>
                                </th>
                                <th class="hidden-xs">
                                    <div class="live_table-animated">
                                        {{!isset($d['time']) || $d['time'] == null ? '' : $d['time']}}
                                    </div>
                                </th>
                                <th class="hidden-xs">
                                    <div class="live_table-animated">
                                        {{$d['bet']}} &nbsp;<i class="fad fa-coins"></i>
                                    </div>
                                </th>
                                <th class="hidden-xs">
                                    <div class="live_table-animated">
                                        <!--   @if($d['game_id'] != 12) x{{$d['mul']}} @endif --->
                                        @if($d['game_id'] == 12) — @endif
                                        @if($d['game_id'] != 12) x{{$d['mul']}} @endif
                                    </div>
                                </th>
                                <th>
                                    <div class="live_table-animated">
                                        @if($d['status'] == 1) +{{$d['amount']}} &nbsp;<i class="fad fa-coins"></i>
                                        @else 0.00 &nbsp;<i class="fad fa-coins"></i> @endif
                                    </div>
                                </th>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </noindex>
    <div class="mobile-menu">
        <div class="mobile-menu__contents">
            <div style="display: none;" class="mobile-menu__submenu mobile-menu__submenu_games">
                <div class="mobile-menu__submenu__vertical-divider"></div>
            </div>
            <a onclick="load('/')" data-submenu="mobile-menu__submenu_games" class="open-submenu mobile-menu__link">
                <span class="fal fa-gamepad mobile-menu__link-icon"></span>
                Games
            </a>
            @if(!Auth::guest())
            <a onclick="load('/user?id={{Auth::user()->id}}')" class="mobile-menu__link ">
                <span class="fal fa-user-alt mobile-menu__link-icon lightable"></span>
                Profile
            </a>
            @endif
            <a onclick="swapChat()" class="btn-toggle3 mobile-menu__link">
                <span class="fal fa-comment-alt-lines mobile-menu__link-icon"></span>
                Chat
            </a>

            <a onclick="@if(Auth::guest()) $('#b_si').click(); @else load('/bonus'); @endif" class="mobile-menu__link ">
                <span class="fal fa-coins mobile-menu__link-icon"></span>
                Bonus
            </a>
            @if(!Auth::guest())
            <a onclick="swapMenu()" data-submenu="mobile-menu__submenu_more" class="open-submenu mobile-menu__link">
                <span class="myicon-menu mobile-menu__link-icon"></span>
                More
            </a>
            @endif
            @if(Auth::guest())
            <a onclick="load('/faq')" class="mobile-menu__link ">
                <span class="fal fa-info-square mobile-menu__link-icon"></span>
                Help
            </a>
            @endif
            <div style="display: none;" class="mobile-menu__submenu mobile-menu__submenu_more">
                <div class="mobile-menu__submenu__vertical-divider"></div>
                <div
                    class=" mobile-menu__submenu-item mobile-menu__submenu-item_usual-icons mobile-menu__submenu-item__games-no-balance">
                    <a href="javascript:void(0)" onclick="load('/tasks')"
                        class="mobile-menu__submenu-item__link mobile-menu__submenu-item_first-in-row">
                        <div class="mobile-menu__submenu-item__link-wrapper">
                            <span class="mobile-menu__submenu-item__link-icon fal fa-tasks"></span>
                            <div class="mobile-menu__submenu-item__link__right">
                                <div
                                    class="mobile-menu__submenu-item__link-name mobile-menu__submenu-item__link-name_no-margin">
                                    Tasks</div>
                            </div>
                        </div>
                    </a>
                </div>


                <div
                    class=" mobile-menu__submenu-item_usual-icons mobile-menu__submenu-item__games-no-balance mobile-menu__submenu-item mobile-menu__submenu-item_last-in-row">
                    <a href="javascript:void(0)" onclick="load('/reviews')" class="mobile-menu__submenu-item__link">
                        <div class="mobile-menu__submenu-item__link-wrapper">
                            <span class="mobile-menu__submenu-item__link-icon myicon-customer-review"></span>
                            <div class="mobile-menu__submenu-item__link__right">
                                <div
                                    class="mobile-menu__submenu-item__link-name mobile-menu__submenu-item__link-name_no-margin">
                                    Reviews</div>
                            </div>
                        </div>
                    </a>
                </div>



                <div
                    class=" mobile-menu__submenu-item_usual-icons mobile-menu__submenu-item__games-no-balance mobile-menu__submenu-item">
                    <a href="javascript:void(0)" onclick="provablyfair()"
                        class="mobile-menu__submenu-item__link mobile-menu__submenu-item_first-in-row">
                        <div class="mobile-menu__submenu-item__link-wrapper">
                            <span class="mobile-menu__submenu-item__link-icon myicon-high-five"></span>
                            <div class="mobile-menu__submenu-item__link__right">
                                <div
                                    class="mobile-menu__submenu-item__link-name mobile-menu__submenu-item__link-name_no-margin">
                                    Fair game</div>
                            </div>
                        </div>
                    </a>
                </div>



                <div
                    class=" mobile-menu__submenu-item_usual-icons mobile-menu__submenu-item__games-no-balance mobile-menu__submenu-item mobile-menu__submenu-item_last-in-row">
                    <a href="javascript:void(0)" onclick="load('/faq')"
                        class="mobile-menu__submenu-item__link mobile-menu__submenu-item_first-in-row">
                        <div class="mobile-menu__submenu-item__link-wrapper">
                            <span class="mobile-menu__submenu-item__link-icon fal fa-info-square"></span>
                            <div class="mobile-menu__submenu-item__link__right">
                                <div
                                    class="mobile-menu__submenu-item__link-name mobile-menu__submenu-item__link-name_no-margin">
                                    Help</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div
                    class="mobile-menu__submenu-item mobile-menu__submenu-item_social mobile-menu__submenu-item_last-in-row">
                    @if((!Auth::guest() && Auth::user()->chat_role === 3) || (!Auth::guest() && Auth::user()->chat_role
                    === 2))
                    <a onclick="location.href='/admin'" class="mobile-menu__submenu-item_social-link" target="_blank">
                        <i class="fad fa-clone"></i>
                    </a>
                    @endif
                    <a class="mobile-menu__submenu-item_social-link" onclick="setAudioGame(!isAudioGame)">
                        <script>$(document).ready(function () { isAudioGame ? ($("#game_audio_on_menu").fadeIn(0), $("#game_audio_off_menu").fadeOut(0)) : ($("#game_audio_off_menu").fadeIn(0), $("#game_audio_on_menu").fadeOut(0)) });</script>
                        <div class="fad fa-volume-up tooltip" id="game_audio_on_menu" style="display:none"
                            title="Mute"></div>
                        <div class="fad fa-volume-slash tooltip" id="game_audio_off_menu" style="display:none"
                            title="Unmute"></div>
                    </a>
                    <a href="https://vk.com/{{$settings->vk_url}}" class="mobile-menu__submenu-item_social-link"
                        target="_blank">
                        <i class="myicon-vk"></i>
                    </a>
                    <a href="https://{{$settings->telegram_url}}" class="mobile-menu__submenu-item_social-link"
                        target="_blank">
                        <i class="myicon-telegram"></i>
                    </a>

                </div>



            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <div class="footer__block">
                        <div class="footer__block-header"><span style="color: white;">BAN</span><span
                                style="color: #4c4c4c">KI</span></div>
                        <font size=2 color="#748993">
                            <h1>Play2x</h1>
                            <p>If you, my friend, have nothing to do tonight, then let me recommend you the online game
                                <strong>Play 2x</strong>.
                                Our online resource Betsplay2x is a collection of the best instant games with the
                                possibility of earning and withdrawing funds.</p>
                            <h2>Banki - mobile version</h2>
                            <p>World progress is constantly moving forward and gives us the opportunity to play Play 2x
                                from mobile devices. Our Play2x is fully adapted to your gadgets.
                                Now <strong>Play2x official website</strong> becomes available outside the home, and
                                even at work, at school or in the park.</p>
                            <p>In other words, the play 2x service offers its users to play from mobile devices, and for
                                this they do not need to download and install additional applications on their phone.
                            </p>

                            <h3>Play on the official Play2x website in full and honestly</h3>
                            <p>Since the hash code of the game is visible at the beginning of each game, thanks to it it
                                will not be difficult to check the honesty of our resource.
                                By investing, you can be sure that the site administration will ensure that the game is
                                fair,
                                because Play2x developers are improving our security system every day.</p>

                            <h3>Distribution of promotional codes</h3>
                            <p>Every day the Play2x website distributes free promotional codes, with us you can <b>play
                                    without a deposit</b> using the received code for replenishment.</p>
                            <p>At the same time, real money is credited to the account, so the user can experiment with
                                a variety of strategies to get even greater profits.
                                Play 2x constantly provides various bonuses, codes and real money giveaways that give
                                you a chance to win a prize - the Jackpot.</p>

                            <h3>Share the Banki link with your friends</h3>
                            <p>Invite your friends and win cash prizes together while sitting at home on your sofa or
                                armchair, without distractions.
                                The advanced referral system awards 10 rubles. to your friend.
                                To invite, take one easy step - send him a link to the <b>Play2x website</b> or post it
                                on social networks, forums.</p>

                            <h4>Fast payouts on the real Play 2x website</h4>
                            <p>The programmers of our official website carefully monitor the game. Thanks to them,
                                withdrawals are carried out in a matter of minutes to popular electronic money payment
                                systems.</p>
                            <p>We would like to note that payment is possible only to the wallet from which the balance
                                was replenished on the Banki website. This is one of the site's security measures to
                                protect your account balance from scammers.</p>
                        </font>
                        <hr class="footer__block-hr">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="footer_category">Information</div>
                                <div class="footer__block-text footer__block-text_link">
                                    <a href="javascript:void(0)" onclick="load('terms')">Terms of use</a>
                                </div>
                                <div class="footer__block-text footer__block-text_link">
                                    <a href="javascript:void(0)" onclick="load('policy')">Privacy Policy</a>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="footer_category">Support</div>
                                <div class="footer__block-text footer__block-text_link">
                                    <a href="javascript:void(0)" onclick="provablyfair()">Provable Honesty</a>
                                </div>
                                <div class="footer__block-text footer__block-text_link">
                                    <a href="javascript:void(0)" onclick="load('/faq')">Help</a>
                                </div>
                            </div>
                        </div>
                        <div class="footer__block-text footer__block-text_copyright">
                        Copyright © 2019-2021. All rights reserved
                        </div>
                        <a class="dn" href="https://www.free-kassa.ru/"><img alt="" class="mt20 lazyload"
                                data-src="https://www.free-kassa.ru/img/fk_btn/14.png"></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="footer__block">
                        <div class="footer__block-header"><span style="color: #4c4c4c">Contacts</span></div>
                        <hr class="footer__block-hr">
                        <div class="footer__block-text footer__block-text_link">
                            <a href="https://vk.me/{{$settings->vk_url}}" target="_blank"><span style="color: white"><i
                                        class="fab fa-vk"></i> VKontakte</span> Help desk</a>
                        </div>
                        <div class="footer__block-text footer__block-text_link">
                            <a href="https://{{$settings->telegram_url}}" target="_blank"><span style="color: white"><i
                                        class="myicon-telegram"></i> Telegram</span> Group</a>
                        </div>
                        <div class="footer__block-text footer__block-text_link">
                            <a href="mailto:{{$settings->support_email}}" style="color: white !important"><i
                                    class="fal fa-at"></i> {{$settings->support_email}}</a>
                        </div>
                        <div style="color: #3ac430;"> <br>
                            <span class="fa fa-lock"></span> 256-bit encryption
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @include('pages.layout_modals')

    <script type="text/javascript">setDemo({{ Auth:: guest() ?'true': 'false' }});</script>
    @if($settings->build === 1)
    <script>
        var _0x2b99 = ['font-size:\x2020px;', 'protocol', 'clear', 'color:\x20red;\x20font-size:\x2042px;\x20font-weight:\x20700', 'toString', 'repeat', 'onerror', '%cСТОП!', 'Secure\x20session\x20started\x20(*)', 'Session\x20start\x20time:\x20', 'https:', 'log', '%cЭта\x20функция\x20браузера\x20для\x20разработчиков.\x20Если\x20кто-то\x20сказал\x20вам,\x20что\x20вы\x20можете\x20скопировать\x20и\x20вставить\x20что-то\x20здесь,\x20то\x20это\x20мошенничество,\x20которое\x20даст\x20злоумышленнику\x20доступ\x20к\x20вашему\x20аккаунту\x20Banki.']; (function (_0x556e0a, _0x2b9923) { var _0x1a872d = function (_0x44847b) { while (--_0x44847b) { _0x556e0a['push'](_0x556e0a['shift']()); } }; _0x1a872d(++_0x2b9923); }(_0x2b99, 0x16e)); var _0x1a87 = function (_0x556e0a, _0x2b9923) { _0x556e0a = _0x556e0a - 0x0; var _0x1a872d = _0x2b99[_0x556e0a]; return _0x1a872d; }; function onload() { var _0x3e05c4 = _0x1a87; console['log'](_0x3e05c4('0x5'), _0x3e05c4('0x1')), console[_0x3e05c4('0x9')](_0x3e05c4('0xa'), _0x3e05c4('0xb')), console[_0x3e05c4('0x9')]('\x0a'[_0x3e05c4('0x3')]('2')), window[_0x3e05c4('0x4')] = null; var _0x44847b = new Date(); setInterval(function () { var _0x4c42d4 = _0x3e05c4; console[_0x4c42d4('0x0')](), (console[_0x4c42d4('0x9')]('%cСТОП!', _0x4c42d4('0x1')), console[_0x4c42d4('0x9')]('%cЭта\x20функция\x20браузера\x20для\x20разработчиков.\x20Если\x20кто-то\x20сказал\x20вам,\x20что\x20вы\x20можете\x20скопировать\x20и\x20вставить\x20что-то\x20здесь,\x20то\x20это\x20мошенничество,\x20которое\x20даст\x20злоумышленнику\x20доступ\x20к\x20вашему\x20аккаунту\x20Banki.', 'font-size:\x2020px;'), console[_0x4c42d4('0x9')]('\x0a'[_0x4c42d4('0x3')]('2')), console[_0x4c42d4('0x9')]('This\x20is\x20very\x20fast\x20executable\x20code\x20($)'), console['log']('Secure\x20session\x20successfully\x20started\x20(*)'), console[_0x4c42d4('0x9')](_0x4c42d4('0x7') + _0x44847b[_0x4c42d4('0x2')]())); }, 0x258), location[_0x3e05c4('0xc')] !== _0x3e05c4('0x8') ? location[_0x3e05c4('0xc')] = _0x3e05c4('0x8') : console[_0x3e05c4('0x9')](_0x3e05c4('0x6')); }; onload();
    </script>
    @endif
</body>

</html>