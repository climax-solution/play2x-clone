<div class="faq-q">
    <div class="window-heading">
        Help
    </div>

    <div class="window-body">
        <div class="text-heading">Any questions?</div>
        <div class="contact-us">
            <div class="contact">
                <div class="contact__image">
                    <span class="myicon-vk"></span>
                </div>
                <div class="contact__info">
                    <div class="contact__title">
                        VK support
                    </div>
                    <div class="contact__link">
                        <a href="https://vk.com/{{$settings->vk_url}}" class="colored-link"
                            target="_blank">vk.com/{{$settings->vk_url}}< /a>
                    </div>
                    <div class="contact-time">
                        Average response time - <span style="color: #fff">15 minutes</span>
                    </div>
                </div>
                <div class="contact__goto tooltip" title="Go">
                    <a href="https://vk.com/{{$settings->vk_url}}" target="_blank">
                        <span class="fas fa-chevron-down"></span>
                    </a>
                </div>
            </div>
            <div class="contact">
                <div class="contact__image">
                    <span class="far fa-envelope"></span>
                </div>
                <div class="contact__info">
                    <div class="contact__title">
                        Email support
                    </div>
                    <div class="contact__link">
                        <a href="mailto:{{$settings->support_email}}" class="colored-link"
                            target="_blank">{{$settings->support_email}}</a>
                    </div>
                    <div class="contact-time">
                        Average response time - <span style="color: #fff">5 hours</span>
                    </div>
                    <div class="contact__goto tooltip" title="Go">
                        <a href="mailto:{{$settings->support_email}}" target="_blank">
                            <span class="fas fa-chevron-down"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-heading" style="margin-top: 20px;">Frequently asked questions</div>

        <div id="accordion" class="ui-accordion ui-widget ui-helper-reset" role="tablist">

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>About the site</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4"
                aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                {{$settings->namesite}} - games with money withdrawal. There are 13 games available on the site with
                exciting mechanics and
                high winning odds.
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>How to play?</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4"
                aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                Go to the page of any game, click on the button with the icon<i class="fas fa-info-circle tooltip"
                    title="Game information"></i>, a window with instructions for the game will open in front of you,
                then enter the amount
                bets and click "Play".
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Demo mode</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4"
                aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                Demo mode is activated when the user is not authorized on the site. You can also have a demo account
                activate by clicking on the <i class="fad fa-coins game_info-icon_info"></i> icon next to the balance in
                the right top corner of the site. It exists only for training - these funds cannot be withdrawn, and the
                history
                of the games is not
                will be preserved. In this mode, money is not debited or credited, giving you the opportunity to try
                play all the games without fear for your balance.
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-state-default ui-accordion-icons ui-accordion-header-collapsed kk ui-corner-all"
                role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="false" aria-expanded="false" tabindex="0"
                style="border-bottom-width: 1px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;"><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>How to get free coins?
            </div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-2"
                aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true" style="display: none;">
                <div class="help-a__way">Method 1</div>
                <p class="help-a__text">Subscribe to our group <a href="https://vk.com/{{$settings->vk_url}}"
                        target="_blank" class="colored-link">vk.com/{{$settings->vk_url}}</a> or go to page
                    <a href="javascript:void(0)"
                        onclick="@if(Auth::guest()) $('#b_si').click(); @else load('/bonus'); @endif"
                        class="colored-link">Bonuses</a>.
                </p>
                <div class="help-a__way">Method 2</div>
                <p class="help-a__text">Subscribe to our group <a href="https://vk.com/{{$settings->vk_url}}"
                        target="_blank" class="colored-link">vk.com/{{$settings->vk_url}}</a>, where they are published
                    daily
                    promotional codes. You can activate the promotional code in the "Promotional Code" tab on page <a
                        href="javascript:void(0)"
                        onclick="@if(Auth::guest()) $('#b_si').click(); @else load('/bonus'); @endif"
                        class="colored-link">Bonuses</a>.</p>
                <div class="help-a__way">Method 3</div>
                <p class="help-a__text">Register on the site using the referral link and receive a welcome card
                    bonus.</p>
                <div class="help-a__way">Method 4</div>
                <p class="help-a__text">Raise your level and receive one-time bonuses for increasing, as well as
                    increased permanent bonuses.</p>
                <div class="help-a__way">Method 5</div>
                <p class="help-a__text">Answer quizzes, complete tasks and invite referrals based on your
                    individual link.</p>
                <div class="help-a__way">Method 6</div>
                <p class="help-a__text">Chat, help other players and receive a bonus from the administration in
                    random time.</p>
            </div>


            auto_awesome
            Translate from: English
            ​
            3,781 / 5,000
            Translation results
            Translation result
            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>How it is converted
                in-game currency?</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4"
                aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                1 coin = 1 ruble.
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-9" aria-controls="ui-id-10" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>How to top up your account?
            </div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-10"
                aria-labelledby="ui-id-9" role="tabpanel" aria-hidden="true" style="display: none;">
                Go to your <a onclick="$('.md-wallet').toggleClass('md-show', true)" class="colored-link">Wallet</a>,
                select the amount and payment method, review the fees and click
                "Pay" button.
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-11" aria-controls="ui-id-12" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>I topped up my account, but no
                money
                came</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-12"
                aria-labelledby="ui-id-11" role="tabpanel" aria-hidden="true" style="display: none;">
                If such a problem occurs, write to support indicating: payment date, payment method,
                payment details. If your time zone is not UTC+3:00, please enter your time zone or city/region
                residence.
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-13" aria-controls="ui-id-14" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>How to withdraw money?</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-14"
                aria-labelledby="ui-id-13" role="tabpanel" aria-hidden="true" style="display: none;">
                Go to your <a onclick="$('.md-wallet').toggleClass('md-show', true)" class="colored-link">Wallet</a>,
                select the "Withdrawal" tab, select the withdrawal method and amount, enter
                your wallet, review the fees and click the "Withdraw" button.
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-15" aria-controls="ui-id-16" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>An error appears during output
            </div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-16"
                aria-labelledby="ui-id-15" role="tabpanel" aria-hidden="true" style="display: none;">
                <p class="help-a__text">If an error occurs during output, carefully read its contents.
                    As a rule, the text of the error indicates how to eliminate it. The main reasons why
                    administration has the right to refuse withdrawal include: </p>
                <div class="help-a__way">Reason 1</div>
                <p class="help-a__text">You have multi-accounts detected. To clarify further actions, please contact
                    support.</p>
                <div class="help-a__way">Reason 2</div>
                <p class="help-a__text">The top-up amount has not been won back. The deposit must be wagered in a single
                    amount on any modes at odds not lower than x1.30.</p>
                <div class="help-a__way">Reason 3</div>
                <p class="help-a__text">You specified an incorrect or suspicious wallet for withdrawal (for example, in
                    local rather than international format).</p>
                <div class="help-a__way">Reason 4</div>
                <p class="help-a__text">You are trying to withdraw to an anonymous Yandex.Wallet. To resolve this error,
                    change your withdrawal method or upgrade your wallet status.</p>
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-17" aria-controls="ui-id-18" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>I made a withdrawal, but the
                coins
                returned to balance</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-18"
                aria-labelledby="ui-id-17" role="tabpanel" aria-hidden="true" style="display: none;">
                <p class="help-a__text">This situation means that the withdrawal was manually canceled by the site
                    administration. This is a rare situation that occurs when there is a suspicion of a violation of the
                    rules on your part or an incorrectly specified wallet. In such cases, the administration always
                    indicates the reason for canceling the withdrawal. It can be viewed in <a href="javascript:void(0)"
                        onclick="@if(Auth::guest()) $('#b_si').click(); @else load('/user?id ={{Auth::user()->id}}') ; @endif"
                        class="colored-link">Profile</a> in the "Payments" tab in the "Status" column.</p>
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-19" aria-controls="ui-id-20" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Withdrawal completed, but no
                money
                came</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-20"
                aria-labelledby="ui-id-19" role="tabpanel" aria-hidden="true" style="display: none;">
                <p class="help-a__text">Successful status means that we have sent your payment. Between sending and
                    Enrollment may take some time, on average about 5 minutes. If funds do not arrive for a long time
                    (more than 12 hours) - contact support.</p>
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-21" aria-controls="ui-id-22" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Do I need to top up my account
                for
                output?</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-22"
                aria-labelledby="ui-id-21" role="tabpanel" aria-hidden="true" style="display: none;">
                <p class="help-a__text">
                    To withdraw, you only need to have a deposit of 50 rubles.
                </p>
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-25" aria-controls="ui-id-26" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>How to transfer money to
                someone else
                player?</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-26"
                aria-labelledby="ui-id-25" role="tabpanel" aria-hidden="true" style="display: none;">
                <p class="help-a__text">
                    This option is not provided.
                </p>
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-27" aria-controls="ui-id-28" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>How to create your own
                promotional code?
            </div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-28"
                aria-labelledby="ui-id-27" role="tabpanel" aria-hidden="true" style="display: none;">
                <p class="help-a__text">
                    This option is not provided.
                    However, if you are a regular player or partner, you can contact support with a request to create
                    promotional code at the expense of your game balance or at the expense of PR of our site.
                </p>
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-29" aria-controls="ui-id-30" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Do I need to wager bonuses?
                money?</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-30"
                aria-labelledby="ui-id-29" role="tabpanel" aria-hidden="true" style="display: none;">
                <p class="help-a__text">
                    Free coins received using bonuses, promotional codes (regular, not for replenishment), as well as
                    issued by the administration, you must wager a one-time amount on any modes at the odds
                    not lower than x1.50.
                </p>
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-31" aria-controls="ui-id-32" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Chat rules</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-32"
                aria-labelledby="ui-id-31" role="tabpanel" aria-hidden="true" style="display: none;">
                <p class="help-a__text">
                    Prohibited in chat: <br>
                    -&nbsp; Insults against other players and administration, including veiled ones. <br>
                    -&nbsp; Links, wallets. <br>
                    -&nbsp; Begging. <br>
                    -&nbsp; Draining promo codes. <br>
                    -&nbsp; Spam, any types of advertising. <br>
                    For violating the rules, the administration has the right to deprive you of the opportunity to chat.
                    In some cases
                    The administration may give you a permanent account ban.
                </p>
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Fair game</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4"
                aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                The random number generator creates provable and completely fair random numbers that are used
                to determine the result of each game played on the site. Each user can check the outcome
                any game in a completely deterministic way. By providing one parameter - the client hash - to the inputs
                random number generator, {{$settings->namesite}} cannot manipulate the results in its favor.
                Random number generator {{$settings->namesite}} allows each game to request any number
                random numbers from the given client seed, server seed, and nonce.
                You can find out more about how this works on the Fair Play page.
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Affiliate program</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4"
                aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                Invite other players to our website using your referral link and earn money. Details
                you can find out in your profile.
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Rain/Snow</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4"
                aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                Rain or Snow is a chat bot that distributes balances to random people a random number of times a day
                players who are online on the site and have topped up their balance in the last 24 hours.
            </div>


            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Viktoriny</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4"
                aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;"> Viktorina mozhet
                provoditsya avtomaticheski v vide prostykh voprosov, libo moderatorami sayta. Pervyy pravil'no
                otvetivshiy na vopros igrok poluchayet voznagrazhdeniye. </div>
            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Tasks</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4"
                aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;"> Prinimay uchastiye
                v yezhenedel'nykh zadaniyakh i vyigryvay prizy! U kazhdogo zadaniya yest' usloviye, kotoroye trebuyetsya
                vypolnit' dlya polucheniya nagrady. Dlya uchastiya v zadanii priobreti odnu ili neskol'ko popytok.
                Popytki tratyatsya posle kazhdoy igry nezavisimo ot yeye rezul'tata. Igray v igry kak i obychno - my
                dadim znat' o vsem, chto trebuyetsya: kol-vo ostavshikhsya popytok, a tak zhe vypolnili li vy usloviye
                ili net! </div>
            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Taktiki</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4"
                aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;"> Ne sushchestvuyut
                taktiki, kotoryye garantirovanno budut rabotat'. Vse zavisit ot vashego stilya igry: bystro s bol'shim
                riskom ili medlenno, no uverenno. </div>
            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-33" aria-controls="ui-id-34" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>YA peredumal vyvodit'</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-34"
                aria-labelledby="ui-id-33" role="tabpanel" aria-hidden="true" style="display: none;">
                <p class="help-a__text"> Yesli vyvod imeyet status "V protsesse", vy mozhete otmenit' yego v <a
                        href="javascript:void(0)" onclick="$('#b_si').click();" class="colored-link">Profile</a> vo
                    vkladke "Vyvody" v grafe "Status", nazhav na knopku otmeny. </p>
            </div>
            Show more
            ​
            4,011 / 5,000
            Translation results
            Translation result
            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Quizzes</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4"
                aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                The quiz can be conducted automatically in the form of simple questions, or by site moderators. First
                The player who answers the question correctly receives a reward.
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Tasks</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4"
                aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                Take part in weekly challenges and win prizes! Each task has a condition that
                required to complete to receive the reward. To participate in the task, purchase one or more attempts.
                Attempts are spent after each game, regardless of its result. Play games as usual - we will give
                know everything that is required: the number of remaining attempts, as well as whether you have
                fulfilled the condition or not!
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Tactics</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4"
                aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                There are no tactics that are guaranteed to work. It all depends on your playing style: quickly with
                with great risk or slowly but surely.
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-33" aria-controls="ui-id-34" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>I changed my mind about output
            </div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-34"
                aria-labelledby="ui-id-33" role="tabpanel" aria-hidden="true" style="display: none;">
                <p class="help-a__text">
                    If the output status is "In progress", you can cancel it in <a href="javascript:void(0)"
                        onclick="$('#b_si').click();" class="colored-link">Profile</a> in the "Outputs" tab in the
                    column
                    "Status" by clicking on the cancel button.
                </p>
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>I lost the score</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4"
                aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                There is not a single game on our site with a 100% chance of winning. Even 99.9% is a 1 in 1000 chance
                that you can
                lose. For example in the game Stairs, when you play on 1 stone there is a 1 in 20 (5%) chance that you
                you will lose. Therefore, when playing on our site you can either win or lose. We are in no way
                We interfere in the gameplay, so everything depends only on your luck. We can't replace anything
                the result of your game, so on your part there is such a line as “Client hash”. Initially
                The “client hash” is generated automatically, but you can always change it and specify any
                symbols. To check the results of your games, click on any of your games in the history and in the window
                that appears
                below you will see the “Server hash” field. To check the result of the game, you need to go to the page
                "Fair play", insert "Server hash" - and you will see the result of the game. We advise you to play more
                carefully.
                Develop your own betting styles and play according to them. Don't play around, be on time
                stop and withdraw money. Gambling is designed to entertain. Remember that you are risking money,
                When you place bets. Don't spend more than you can afford to lose.
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-35" aria-controls="ui-id-36" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Reviews</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-36"
                aria-labelledby="ui-id-35" role="tabpanel" aria-hidden="true" style="display: none;">
                <p class="help-a__text">
                    Reviews are available in our groups on social networks.
                </p>
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-35" aria-controls="ui-id-36" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Vacancies</div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-36"
                aria-labelledby="ui-id-35" role="tabpanel" aria-hidden="true" style="display: none;">
                <p class="help-a__text">
                    A list of vacancies is available on <a href="/job" class="colored-link">this page</a>. Please note
                    that he
                    may be empty for a long time - we do not always need new people to join the team.
                </p>
            </div>

            <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-state-default ui-accordion-icons ui-corner-all"
                role="tab" id="ui-id-33" aria-controls="ui-id-34" aria-selected="false" aria-expanded="false"
                tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span
                    class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>I changed my mind about output
            </div>
            <div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-34"
                aria-labelledby="ui-id-33" role="tabpanel" aria-hidden="true" style="display: none;">
                <p class="help-a__text">
                    If the output status is "In progress", you can cancel it in <a href="javascript:void(0)"
                        onclick="@if(Auth::guest()) $('#b_si').click(); @else load('/user?id={{Auth::user()->id}}') ; @endif"
                        class="colored-link">Profile</a> in the "Outputs" tab in the "Status" column by clicking on the
                    cancel button.
                </p>
            </div>

        </div>
    </div>
</div>