<div class="md-modal-wrapper">
@if(!Auth::guest() && !Auth::user()->isActivated())
    <div class="md-modal md-email-activation md-s-height md-show md-effect-1">
        <div class="md-content">
            <div class="email-icon">
                <i class="fal fa-at"></i>
            </div>
            <div class="email-container">
                <div style="text-align: center">Confirm your email</div>
                <div>На {{Auth::user()->email}} An email was sent with a link to confirm your account.</div>
				<br>
                <div class="email_links">
                    <a href="javascript:void(0)" onclick="resend_email()" class="ll">Resend</a>
                    <a href="javascript:void(0)" onclick="window.location.href='/logout'" class="ll" style="margin-left: 5px">Log out of your account</a>
                </div>
            </div>
        </div>
    </div>
@endif

@if(Auth::guest())
<div class="md-modal md-s-height md-auth md-effect-1">
        <div class="md-content">
            <div class="modal-ui-block" style="display: none">
                <div class="profile-loader">
                    <div></div>
                </div>
            </div>

            <i class="fal fa-times md-close" onclick="$('.md-auth').toggleClass('md-show', false)"></i>
            <div class="sport-bet-tabs tabs-ignore-scroll auth-tabs">
                <div class="sport-bet-tab sport-bet-tab-active auth-tab-active auth-tab" data-auth-action="auth">
                    <span>Authorization</span>
                    <div class="sport-bet-tab-indicator"></div>
                </div>
                <div class="sport-bet-tab auth-tab" data-auth-action="register">
                    <span>Registration</span>
                    <div class="sport-bet-tab-indicator"></div>
                </div>
            </div>

            <div class="login_fields">
                <div class="login_fields__user" id="email" style="display: none">
                    <div class="icon email-l-icon">
                        <i class="fal fa-at"></i>
                    </div>
                    <input id="_email" placeholder="Email" type="text">
                    <div class="validation">
                        <img src="/img/tick.png" alt="">
                    </div>
                    <i class="fas fa-info-circle register-email-info tooltip" title="Please use your real email as an email will be sent to it with a confirmation link."></i>
                </div>
                <div class="login_fields__user">
                    <div class="icon user-icon">
                        <img src="/img/user_icon_copy.png" alt="">
                    </div>
                    <input id="_login" placeholder="Login" type="text">
                    <div class="validation">
                        <img src="/img/tick.png" alt="">
                    </div>
                </div>
                <div class="login_fields__password">
                    <div class="icon password-icon">
                        <img src="/img/lock_icon_copy.png" alt="">
                    </div>
                    <input id="_password" placeholder="Password" type="password">
                    <div class="validation">
                        <img src="/img/tick.png" alt="">
                    </div>
                </div>
                <div class="login_fields__submit">
                    <input type="submit" id="l_b" value="To come in">
                </div>
            </div>
            <div class="social_auth_block">
                <div class="through_social through_vk" onclick="socialAuth('vk')">
                    <i class="fab fa-vk"></i> <span class="hidden-x">In contact with</span>
                </div>
                <div class="through_social through_google" onclick="socialAuth('google')">
                    <i class="fab fa-google"></i> <span class="hidden-x">Google</span>
                </div>
            </div>
						            <div class="social_auth_desc">By entering the site, you <a href="javascript:void(0)" onclick="load('faq')" class="colored-link">accept the terms</a>of the license agreement and confirm that you are over 18 years old</div>
        </div>
    </div> 
@else
    <div class="md-modal md-s-height md-wallet md-effect-1">
        <div class="md-content">
            <div class="modal-ui-block" style="display: none">
                <div class="profile-loader">
                    <div></div>
                </div>
            </div>

            <i class="fal fa-times md-close" onclick="$('.md-wallet').toggleClass('md-show', false)"></i>

            <div class="mm_header_tab mm_header_tab_active" data-tab="#pay">
                Top up
                <div></div>
            </div>
            <div class="mm_header_tab" data-tab="#with">
                Conclusion
                <div></div>
            </div>

            <div class="wallet-tab-content">
                <div class="mm_general_tab mm_general_tab_active" id="pay">
                   <div class="col-xs-12 col-sm-4 payment-method-table p2">
                         <div class="nano">
                            <div class="nano-content">
                                <div class="payment-method payment-method_active" data-wallet-type="1" data-provider="63">
                                    <div class="payment-method-icon"><img data-src="/img/qiwi_color.png" class="lazyload"></div>
                                    <div class="payment-method-name">Qiwi</div>
                                </div>
                                <div class="payment-method" data-wallet-type="2" data-provider="45">
                                    <div class="payment-method-icon"><img data-src="/img/ym_color.png" class="lazyload"></div>
                                    <div class="payment-method-name">Yandex money</div>
                                </div>
                                <div class="payment-method" data-wallet-type="3" data-provider="160">
                                    <div class="payment-method-icon"><img data-src="/img/visa-mc_color.png" class="lazyload"></div>
                                    <div class="payment-method-name">Bank. map</div>
                                </div>
                                <div class="payment-method" data-wallet-type="4" data-provider="82">
                                    <div class="payment-method-icon"><img data-src="/img/mf_color.png" class="lazyload"></div>
                                    <div class="payment-method-name">Megaphone</div>
                                </div>
                                <div class="payment-method" data-wallet-type="5" data-provider="84">
                                    <div class="payment-method-icon"><img data-src="/img/mts_color.png" class="lazyload"></div>
                                    <div class="payment-method-name">МТС</div>
                                </div>
                                <div class="payment-method" data-wallet-type="6" data-provider="83">
                                    <div class="payment-method-icon"><img data-src="/img/beeline_color.png" class="lazyload"></div>
                                    <div class="payment-method-name">Beeline</div>
                                </div>
                                <div class="payment-method" data-wallet-type="7" data-provider="132">
                                    <div class="payment-method-icon"><img data-src="/img/tele2_color.png" class="lazyload"></div>
                                    <div class="payment-method-name">Tele2</div>
                                </div>
                                <div class="payment-method" data-wallet-type="8" data-provider="114">
                                    <div class="payment-method-icon"><img data-src="/img/payeer.png" class="lazyload"></div>
                                    <div class="payment-method-name">PAYEER</div>
                                </div>
                                <div class="payment-method" data-wallet-type="9" data-provider="150">
                                    <div class="payment-method-icon"><img data-src="/img/adv_.png" class="lazyload"></div>
                                    <div class="payment-method-name">Advcash</div>
                                </div>
                                <div class="payment-method" data-wallet-type="10" data-provider="64">
                                    <div class="payment-method-icon"><img data-src="/img/perfect-money.png" class="lazyload"></div>
                                    <div class="payment-method-name">PerfectMoney</div>
                                </div>
                                <div class="payment-method" data-wallet-type="11" data-provider="180">
                                    <div class="payment-method-icon"><img data-src="/img/exmo.png" class="lazyload"></div>
                                    <div class="payment-method-name">EXMO</div>
                                </div>
                                <div class="payment-method" data-wallet-type="12" data-provider="165">
                                    <div class="payment-method-icon"><img data-src="/img/zcash.png" class="lazyload"></div>
                                    <div class="payment-method-name">Zcash</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 payment-method-table p1">
                        @if($settings->payment_disabled == 0 || Auth::user()->chat_role == 3)
						<div class="wallet-area__row" style="margin-bottom: 15px">
                </div>
							<div class="wallet-area__row">
                <div class="wallet-area__payway">
                    <span>Payment method: </span>
                    <img class="wallet-area__payway-image" src="/img/fk.png" id="wallet_icon" alt="">
                   <span id="wallet_name">Free-Kassa</span>     
                </div>
            </div>
										<div class="wallet-area__delimiter">
                <span class="myicon-down-arrow wallet-area__delimiter_item"></span>
            </div>
			<div class="wallet-area__row">
                <span>Select amount</span>
                <div class="sum-options">
                    <div class="sum-option-wrapper">
                        <button class="sum-option" href="javascript:void(0)" onclick="$('#payment').val(50) && $('#payment1').val(50)">
                            <div class="sum-option__value">
                                50 <span class="sum-option__currency">₽</span>
                            </div>
                        </button>
                    </div>
                    <div class="sum-option-wrapper">
                        <button class="sum-option" href="javascript:void(0)" onclick="$('#payment').val(100) && $('#payment1').val(100)">
                            <div class="sum-option__value">
                                100 <span class="sum-option__currency">₽</span>
                            </div>
                        </button>
                    </div>
                    <div class="sum-option-wrapper">
                        <button class="sum-option" href="javascript:void(0)" onclick="$('#payment').val(250) && $('#payment1').val(250)">
                            <div class="sum-option__value">
                                250 <span class="sum-option__currency">₽</span>
                            </div>
                        </button>
                    </div>

                    <div class="sum-option-wrapper">
                        <button class="sum-option" href="javascript:void(0)" onclick="$('#payment').val(500) && $('#payment1').val(500)">
                            <div class="sum-option__value">
                                500 <span class="sum-option__currency">₽</span>
                            </div>
                        </button>
                    </div>

                    <div class="sum-option-wrapper">
                        <button class="sum-option" href="javascript:void(0)" onclick="$('#payment').val(1000) && $('#payment1').val(1000)">
                            <div class="sum-option__value">
                                1000 <span class="sum-option__currency">₽</span>
                            </div>
                        </button>
                    </div>
                    <div class="sum-option-wrapper">
                        <button class="sum-option" href="javascript:void(0)" onclick="$('#payment').val(2500) && $('#payment1').val(2500)">
                            <div class="sum-option__value">
                                2500 <span class="sum-option__currency">₽</span>
                            </div>
                        </button>
                    </div>
                    <div class="sum-option-wrapper">
                        <button class="sum-option" href="javascript:void(0)" onclick="$('#payment').val(5000) && $('#payment1').val(5000)">
                            <div class="sum-option__value">
                                5000 <span class="sum-option__currency">₽</span>
                            </div>
                        </button>
                    </div>

                    <div class="sum-option-wrapper">
                        <button class="sum-option" href="javascript:void(0)" onclick="$('#payment').val(10000) && $('#payment1').val(10000)">
                            <div class="sum-option__value">
                                10000 <span class="sum-option__currency">₽</span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
			<div class="wallet-area__delimiter">
                <span class="myicon-down-arrow wallet-area__delimiter_item"></span>
            </div>
			<style>
input[type='number'] {
    -moz-appearance:textfield;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
}
</style>
			<div class="wallet-area__row">
                    <div class="payment-total">
                        <div class="payment-total__first-row">
                            <div class="payment-field payment-sum">
                                <label for="deposit-sum">Amount<span class="sm-hidden"> top up</span></label>
                                <div class="validation-wrapper">
                                    <span class="validation-message"></span>
                                    <div class="wallet-input-wrapper">
                                        <input inputmode="numeric" type="tel" name="amount" id="payment" value="{{$settings->min_in}}" class="numeric-input-validate game-sidebar__input game-sidebar__input_dark" required placeholder="Top up amount">
                                        <div class="wallet-input-currency">Rub.</div>
                                    </div>
                                </div>
                            </div>
                           <!--- <div class="payment-field payment-to-enroll">
                                <label for="deposit-sum">К зачислению</label>
                                <div class="validation-wrapper">
                                    <div class="wallet-input-wrapper">
                                        <input id="payment1" value="{{$settings->min_in}}" type="text" name="deposit-coins" class="game-sidebar__input game-sidebar__input_dark" autocomplete="off" disabled="" style="opacity: 0.5">
                                        <div class="wallet-input-currency"><span class="myicon-coins" style="font-size: 18px"></span></div>
                                    </div>
                                </div>
                            </div> --->
                        </div>
                        <div class="payment-total__second-row">
                            <div class="payment-result">
                                <div class="payment-result__row">
                                    <div class="payment-result__row-label">Fee</div>
                                    <div class="payment-result__row-dots"></div>
                                    <div class="payment-result__row-value payment-result__row-value_comission">0%</div>
                                </div>
                                <div class="payment-result__row">
                                    <input type="hidden" name="payway">
                                    <div type="submit" class="game-sidebar__play-button game-sidebar__play-button_green pay_button" id="payin">Pay</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                        @else
                            <div class="payment-disabled">
                                Payments are temporarily unavailable.
                            </div>
                        @endif
                    </div>
                </div>
                <div class="mm_general_tab" id="with">
                    <div class="col-xs-12 col-sm-4 payment-method-table p1">
                        <div class="nano">
                            <div class="nano-content">
                                <div class="payment-method payment-method_active" data-withdraw-type="4">
                                    <div class="payment-method-icon"><img data-src="/img/qiwi_color.png" class="lazyload"></div>
                                    <div class="payment-method-name">Qiwi</div>
                                </div>
                                <div class="payment-method" data-withdraw-type="5">
                                    <div class="payment-method-icon"><img data-src="/img/ym_color.png" class="lazyload"></div>
                                    <div class="payment-method-name">Yandex money</div>
                                </div>
                                <div class="payment-method" data-withdraw-type="6">
                                    <div class="payment-method-icon"><img data-src="/img/mf_color.png" class="lazyload"></div>
                                    <div class="payment-method-name">Megaphone</div>
                                </div>
                                <div class="payment-method" data-withdraw-type="8">
                                    <div class="payment-method-icon"><img data-src="/img/mts_color.png" class="lazyload"></div>
                                    <div class="payment-method-name">МТС</div>
                                </div>
                                <div class="payment-method" data-withdraw-type="9">
                                    <div class="payment-method-icon"><img data-src="/img/beeline_color.png" class="lazyload"></div>
                                    <div class="payment-method-name">Beeline</div>
                                </div>
                                <div class="payment-method" data-withdraw-type="7">
                                    <div class="payment-method-icon"><img data-src="/img/tele2_color.png" class="lazyload"></div>
                                    <div class="payment-method-name">Tele2</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 payment-method-table p2">
						<div class="wallet-area__row">
                <div class="wallet-area__payway">
                    <span>Withdrawal method: </span>
                    <img class="wallet-area__payway-image" src="/img/qiwi_color.png" id="withdraw_icon" alt="">
                    <div class="wallet-area__payway-name" id="withdraw_name">Qiwi</div>     
                </div>
            </div>	
			<div class="wallet-area__delimiter">
                <span class="myicon-down-arrow wallet-area__delimiter_item"></span>
            </div>
			<div class="wallet-area__row">
			 <label>Enter wallet number</label>
                <div class="validation-wrapper withdraw-wallet-field">
                    <span class="validation-message"></span>
                    <div class="wallet-input-wrapper">
                        <input placeholder="Wallet" id="purse" type="text" name="withdraw-wallet" class="game-sidebar__input game-sidebar__input_dark" autocomplete="off">
                    </div>
                </div>
            </div>
			<div class="wallet-area__delimiter">
                <span class="myicon-down-arrow wallet-area__delimiter_item"></span>
            </div>
			<div class="wallet-area__row">
                    <div class="payment-total">
                        <div class="payment-total__first-row">
                            <div class="payment-field payment-sum">
                                    <label class="payment-field-label" for="deposit-sum">Amount<span class="sm-hidden">of output</span> 
                                    </label>
                                <div class="validation-wrapper">
                                    <span class="validation-message"></span>
                                    <div class="wallet-input-wrapper">
                                        <input inputmode="numeric" value="{{$settings->min_with}}" type="text" name="amount" id="withv" data-what="Sum" placeholder="Withdrawal amount" data-min="{{$settings->min_with}}" data-max="15000" data-value-on-nonnumeric="1000" class="numeric-input-validate game-sidebar__input game-sidebar__input_dark" autocomplete="off">
                                        <div class="wallet-input-currency">Руб.</div>
                                    </div>
                                </div>
                            </div>
                           <!--- <div class="payment-field payment-to-enroll">
                                <label class="payment-field-label" for="deposit-sum">К получению
                                    <span class="info-tip tooltip-fixed hidden tooltipstered">
                                            <span class="myicon-question-mark"></span>
                                        </span>
                                </label>
                                <div class="validation-wrapper">
                                    <div class="wallet-input-wrapper">
                                        <input value="100" type="text" name="deposit-coins" id="withv-coins" class="game-sidebar__input game-sidebar__input_dark" autocomplete="off" disabled="" style="opacity: 0.5">
                                        <div class="wallet-input-currency wallet-input-currency_enroll">rub.</div>
                                        
                                    </div>
                                </div>
                            </div> --->
                        </div>
                        <div class="payment-total__second-row">
                            <div class="payment-fake-row">

                            </div>
                            <div class="withdraw-result__row">
                                <input type="hidden" name="payway">
                                <button class="game-sidebar__play-button game-sidebar__play-button_green withdraw_button" id="payout">Withdraw</button>
                            </div>
                        </div>
						                        <div class="payment-help walletPayout">
                            <div class="payment-help-title"><i class="fad fa-clock"></i> Fast payouts</div>
                            <div class="payment-help-desc">
                                Payouts from 1 minute to 3 days<br>
                            </div>
                        </div>
                    </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="md-modal md-bonus-wheel md-s-height md-effect-1" id="wheel">
        <div class="md-content">
            <i class="fal fa-times md-close" onclick="$('.md-bonus-wheel').toggleClass('md-show', false)"></i>
            <canvas id="canvas" style="width: 160%" width="880" height="600">
                Canvas not supported, use another browser.
            </canvas>
            <img id="prizePointer" src="/img/pointer_white.png" alt="V" />
            <div class="wh_circle hidden-xs hidden-md"></div>
            <div class="wh_outside_circle hidden-sm hidden-xs"></div>
            <div class="wheel_block row" id="wheel_block">
                @if(strpos(Auth::user()->login, 'id') !== false && !\App\User::isSubscribed(Auth::user()->login2))
                    <div class="bonus-fy-overlay">
                        <div class="col-xs-12 col-sm-6 bonus_reload" style="padding-left: 25px; cursor: pointer;" onclick="window.open('https://vk.com/{{$settings->vk_url}}', '_blank')">
                            <span><i class="fab fa-vk"></i> In contact with</span>
                            <p style="font-size: 11px;">Join the group and receive a free bonus every 3 minutes!</p>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="spin_button" style="left: 63%;" onclick="window.open('https://vk.com/{{$settings->vk_url}}', '_blank'); setTimeout($('.bonus-fy-overlay').fadeOut('fast'), 1500)">Go</div>
                        </div>
                    </div>
                @endif
                <div class="wb_c">
                    <div class="col-xs-12 col-sm-6 bonus_reload">
                        <span id="reload_text">3 min</span>
                        <p id="reload_hint">recharge</p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="spin_button" onclick="spin_bonus()">Twist</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="md-modal md-bonus-wheel md-s-height md-effect-1" id="ref">
        <div class="md-content">
            <i class="fal fa-times md-close" onclick="$('.md-bonus-wheel').toggleClass('md-show', false)"></i>

            <canvas id="ref_canvas" style="width: 160%" width="880" height="600">
                Canvas not supported, use another browser.
            </canvas>
            <img id="prizePointer" src="/img/pointer_white.png" alt="V" />
            <div class="wh_circle hidden-xs hidden-md"></div>
            <div class="wh_outside_circle hidden-sm hidden-xs"></div>
            <div class="wheel_block row" id="ref_block">
                <div class="wb_c">
                    <div class="col-xs-12 col-sm-6 bonus_reload">
                        <span class="ref_reload_text">.../10</span>
                        <p id="ref_reload_hint">active referrals</p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                            <div class="spin_button" onclick="spin_ref()">Twist</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="md-modal md-promo md-s-height md-effect-1">
            <div class="md-content">
                <i class="fal fa-times md-close" onclick="$('.md-promo').toggleClass('md-show', false)"></i>
                <div style="margin-top: 14px;">
                    <div class="vk-btn2" onclick="window.open('https://vk.com/{{$settings->vk_url}}', '_blank')"><i class="fab fa-vk"></i> Promo codes</div>
                    <input style="width: 92%;" class="b_input_s bg_bet_input" id="_promo" placeholder="Промокод">
                    <div class="bg_bet_btn" style="padding: 8px;" onclick="activatePromo($('#_promo').val())"><i class="fal fa-check"></i></div>
                </div>
            </div>
        </div>
        <div class="md-modal md-rain md-s-height md-effect-1" id="rain">
            <div class="md-content">
                <i class="fal fa-times md-close" onclick="$('.md-rain').toggleClass('md-show', false)"></i>
                <div class="nano">
                    <div class="nano-content">
                        <p style="font-size: 1.3em; text-align: center">Rain/Snow</p>
						<br>
                        <ul>
                            <li><p style="text-align: center">Five random people every 3 hours are selected by the system and awarded a bonus, simultaneously sending a message about it in the chat.</p></li>
                            <li><p style="text-align: center">To get caught in the rain, you must top up your account with 30 coins or more in the last 24 hours.</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="md-modal md-unavailable md-s-height md-effect-1">
        <div class="md-content">
            <i class="fal fa-times md-close" onclick="$('.md-unavailable').toggleClass('md-show', false);load('/')"></i>
            <div class="md-unavailable-title">:(</div>
            <div class="md-unavailable-desc">This game is currently unavailable.</div>
        </div>
    </div>

    <div class="md-modal md-effect-1" id="modal-1">
        <div class="md-content">
            <div class="case-modal-header">
                <div id="modal-1-header"></div>
                <i class="fal fa-times md-close" id="md-close"></i>
            </div>
            <div id="modal-1-content"></div>
        </div>
    </div>
    <div class="md-overlay"></div>
</div>
<div>
