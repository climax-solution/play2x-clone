<div class="game__wrapper">
    <div class="col-md-3 col-sm-12 g_sidebar" data-parent="#w_container">
        <div class="row g_follow">
            <div class="row m0">
                <div class="g_md_n col-md-12">
                    <i class="icon-blackjack"></i>
                    <span>Blackjack</span>
                </div>
                <div class="col-xs-12">
                    <div class="b_label">
                        Amount
                    </div>
                </div>
                <div class="col-xs-12 mt10">
                    <script>var __profit = function() { }; </script>
                    <input id="bet" data-number-input="true"  value="<?= Auth::guest() ? '100.00' : '0.15' ?>" type="text" class="b_input">
                    <div class="b_input_btns">
                        <div id="divide" class="b_input_btn g_s"><i class="fa fa-divide"></i></div>
                        <div id="multiply" class="b_input_btn g_s"><i class="fa fa-asterisk"></i></div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="b_input_bottom" style="display: inline-block">
                        <div id="01" class="col-xs-2 g_s">+0.1</div>
                        <div id="1" class="col-xs-2 g_s">+1</div>
                        <div id="5" class="col-xs-2 g_s">+5</div>
                        <div id="10" class="col-xs-2 g_s">+10</div>
						<div id="25" class="col-xs-2 g_s">+25</div>
						<div id="00" class="col-xs-2 g_s"><i class="fas fa-trash-alt"></i></div>
                    </div>
                </div>
            </div>
            <div style="display: none" id="blackjack_controls">
                <div class="insurance" style="display: none">
                    <div class="insurance-container">
                        <div><i class="fas fa-question-circle"></i> Would you like insurance?</div>
                        <div class="insurance-desc">
                            <p>It allows you to insure yourself against a possible dealer's hand with blackjack.</p>
                            <p>Insurance costs half your rate.</p>
                        </div>

                        <div class="col-xs-12 coin-select">
                            <div class="blackjack_button" id="insurance_accept">Accept</div>
                            <div class="blackjack_button" id="insurance_cancel">Refuse</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 coin-select">
                    <div class="hilo-select" id="stand">
                        <i class="fas fa-hand-paper"></i>
                        <div class="hilo-mul">Stop</div>
                    </div>
                    <div class="hilo-select" id="hit">
                        <i class="fas fa-spade"></i>
                        <div class="hilo-mul">Take some more</div>
                    </div>
                </div>
                <div class="col-xs-12 coin-select">
                    <div class="blackjack_button bb_disabled" id="double">Double</div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 mt5">
                <div class="g_s g_btn" id="play"><span id="bet_btn">Play</span></div>
            </div>
        </div>
        <div class="g_sidebar_footer">
            <div class="g_sidebar_footer_button" onclick="info('blackjack')">
                <i class="fas fa-info-circle tooltip" title="Game information"></i>
            </div>
            <div class="g_sidebar_footer_button" onclick="provablyfair()">
                <i class="fad fa-shield-alt tooltip" title="Fair game"></i>
            </div>
						            <div class="g_sidebar_footer_button" onclick="setAudioGame(!isAudioGame)">
						<script>$(document).ready(function(){isAudioGame?($("#game_audio_on").fadeIn(0),$("#game_audio_off").fadeOut(0)):($("#game_audio_off").fadeIn(0),$("#game_audio_on").fadeOut(0))});</script>
                <div class="fad fa-volume-up tooltip" id="game_audio_on" style="display:none" title="Mute"></div>
				<div class="fad fa-volume-slash tooltip" id="game_audio_off" style="display:none" title="Unmute"></div>
            </div>
        </div>
    </div>
    <div id="w_container" class="g_c g_container blackjack col-md-9 col-sm-12">
        <div class="deck">
            <div><div></div></div>
            <div><div></div></div>
            <div><div></div></div>
            <div><div></div></div>
        </div>
        
      <!--  <img alt="" draggable="false" class="blackjack_container_split" src="/img/game/svg/blackjack_container_split.svg"> --->
	  <div class="blackjack_container_split">
<svg width="300" height="73" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 422 103"><g fill="none" fill-rule="evenodd"><path d="M97.9249 102.8876l4.0138-12.2858C86.0742 87.8884 70.2977 84.52 54.6289 80.599c9.4991 5.9596 24.4689 14.4565 43.296 22.2885z" fill="#303745"></path><path d="M40.1871 76.7076c-.2444-.1907-.4547-.4254-.6111-.6992 0-.0048-.0049-.0048-.0098-.0097l-.0049-.005c-.0537-.0928-.0586-.2004-.0977-.2981-.0783-.1907-.1663-.3814-.1956-.5867-.0147-.0978.0196-.2005.0147-.2982 0-.2151-.0098-.4254.044-.6356v-.0147l5.8226-21.2813c-10.379-2.0289-21.0173-4.3707-32.3497-7.1475 5.2017 8.3257 14.559 20.2595 14.6715 20.4062a2.4392 2.4392 0 0 1 .4791 1.931 2.4267 2.4267 0 0 1-1.139 1.633c-.4205.2542-9.6654 5.7738-26.8108 13.7622 19.2036 5.9889 54.5552 13.8942 83.1258 18.1476-26.4-12.4618-42.7386-24.7476-42.9293-24.8894-.0049-.0049-.0049-.0098-.0098-.0146z" fill="#303745"></path><path d="M362.2133 24.6067c-99.6013 26.8106-204.7124 26.8106-304.3137 0L44.631 73.0897c108.2791 29.1819 222.5667 29.1819 330.8458 0l-13.2636-48.483zM316.5218 90.9098l3.5493 11.963c18.4311-7.651 33.8116-15.9475 43.912-21.8875-15.7227 3.8916-31.548 7.2454-47.4613 9.9245z" fill="#303745"></path><path d="M394.0498 63.3071a2.418 2.418 0 0 1 .4742-1.9311c.1124-.1467 9.4747-12.0951 14.6813-20.416-11.7382 2.8404-23.6329 5.3338-35.4542 7.4849l7.0302 25.7107c.005.0244 0 .0488.005.0733.044.1809.0341.3569.0341.5427 0 .132.0245.2688.005.396-.0245.1613-.0978.308-.1565.4644-.0489.1369-.0831.2787-.1565.4009-.0733.1271-.1906.2249-.2884.3373-.1124.1271-.2053.2591-.3422.357-.0196.0146-.0294.039-.0538.0537-.2102.1418-17.6 12.0902-43.8631 24.3613 30.0178-5.3729 67.5889-16.2458 86.1129-22.4009-17.1991-8.0129-26.4734-13.547-26.8938-13.8013-.5964-.3569-1.012-.9533-1.1342-1.6329z" fill="#303745"></path><path d="M429.5773 76.8591c-15.0773-6.8053-25.2169-12.276-29.5386-14.7058 3.9013-5.0795 13.2733-17.5609 16.1969-23.8675a2.4121 2.4121 0 0 0-.3374-2.557c-.5964-.7235-1.5644-1.0315-2.4493-.7968-13.5227 3.4027-27.2947 6.3507-40.9787 8.8342l-6.2235-22.7578a2.4163 2.4163 0 0 0-1.1343-1.4617c-.5524-.313-1.2222-.3911-1.8382-.2298-100.232 27.4267-206.1986 27.4267-306.4306 0-1.2956-.3422-2.6205.4107-2.9725 1.6964l-7.4409 27.1871C34.384 45.8538 21.976 43.077 8.5462 39.6938c-.88-.2151-1.8626.083-2.4493.8018-.5965.7186-.7285 1.716-.3373 2.5568C8.688 49.3591 18.055 61.8356 21.9564 66.9151 17.6347 69.34 7.5 74.8156-7.5773 81.621c-.8947.4009-1.457 1.3102-1.4227 2.2929.044.9875.6747 1.8529 1.5987 2.1804 20.411 7.309 73.5924 19.101 106.563 22.44.0832.0098.1663.0147.2445.0147.4938 0 .968-.1662 1.369-.4449.1515-.1027.22-.2836.3421-.4156.1907-.2053.4156-.3715.528-.6453.0147-.0342.0098-.0684.0196-.1027.0098-.0244.0342-.0342.044-.0586l5.06-15.4831c34.1929 5.583 68.7378 8.4186 103.2875 8.4186 33.9974 0 67.98-2.7622 101.6352-8.1693l4.4977 15.1751c.0147.0489.0685.0733.0831.1222.0098.0343.005.0685.0196.1027.0733.1858.2444.2787.3569.4351.1662.2249.2835.4742.5133.6307.3227.2249.704.3129 1.0951.3618.088.0097.1565.083.2494.083h.0342c.0684 0 .1369-.0048.2102-.0097 34.4716-3.4907 92.3218-20.636 110.6405-27.192a2.4196 2.4196 0 0 0 1.5986-2.1805c.044-.9973-.5182-1.9115-1.4129-2.3173zm-429.5769 6.6c17.1454-7.9884 26.3903-13.508 26.8107-13.7622a2.4267 2.4267 0 0 0 1.1391-1.6329 2.4392 2.4392 0 0 0-.479-1.9311c-.1125-.1467-9.465-12.0853-14.6716-20.4062 11.3324 2.7769 21.9706 5.1186 32.3497 7.1475l-5.8177 21.2814v.0146c-.0538.2102-.049.4254-.044.6356 0 .1026-.0294.2004-.0147.2982.0293.2053.1173.396.1955.5867.0392.0977.049.2053.0978.2982l.005.0049c.0048.0049.0097.0049.0097.0098.1613.2737.3667.5084.6111.699.0049.005.0049.0098.0098.0098.1906.1418 16.5293 12.4325 42.9293 24.8894C54.5556 97.3582 19.204 89.448.0004 83.459zm97.9245 19.4285c-18.8271-7.837-33.7969-16.329-43.296-22.2885 15.6689 3.916 31.4453 7.2845 47.3098 10.0027l-4.0138 12.2858zM44.631 73.0946l13.2685-48.483c99.6013 26.8106 204.7124 26.8106 304.3137 0l13.2636 48.483c-108.2791 29.177-222.5667 29.177-330.8458 0zm271.8907 17.8152c15.9182-2.6791 31.7386-6.033 47.4613-9.9245-10.1053 5.94-25.4809 14.2316-43.912 21.8876l-3.5493-11.9631zm19.443 10.2324c26.2632-12.271 43.653-24.2195 43.8632-24.3613.0244-.0147.0342-.0391.0538-.0538.1369-.1027.2346-.2347.3422-.3569.0978-.1124.2151-.2102.2884-.3373.0734-.1222.1027-.264.1565-.4009.0587-.1564.132-.3031.1564-.4644.0196-.132-.0049-.264-.0049-.396 0-.181.0098-.3618-.0342-.5427-.0049-.0245 0-.0489-.0049-.0733l-7.0302-25.7107c11.8213-2.156 23.7111-4.6445 35.4542-7.4849-5.2017 8.3209-14.5689 20.2693-14.6813 20.416a2.418 2.418 0 0 0-.4742 1.9311c.1222.6796.5378 1.276 1.1342 1.6329.4204.2542 9.6996 5.7884 26.8938 13.8013-18.524 6.1551-56.0951 17.028-86.113 22.401z" fill="none"></path><path d="M99.2073 1l4.1959.906c1.971.4256 3.333 1.0281 4.0863 1.8075.7533.7794.9924 1.8057.7175 3.079-.1901.8806-.5925 1.554-1.2071 2.0202-.6147.4663-1.411.6825-2.389.6485l-.022.1016c2.1721.8731 3.0439 2.3019 2.6154 4.2864-.2867 1.3275-.9591 2.267-2.0175 2.8182-1.0583.5512-2.3934.6528-4.0054.3048L96 15.8533 99.2073 1zm.3538 6.7328l2.8447.6143c1.2192.2633 2.1376.2613 2.7553-.0058.6177-.2672 1.0245-.8545 1.2205-1.7621.1799-.8331.0117-1.4986-.5046-1.9964-.5164-.4978-1.4247-.8872-2.7252-1.168l-2.5399-.5484-1.0508 4.8664zm-.3159 1.463l-1.2 5.5573 3.0987.6691c1.1988.2589 2.1514.2218 2.8578-.1113.7064-.333 1.1663-.994 1.3799-1.9829.1989-.9211.0352-1.6653-.4909-2.2326-.5261-.5673-1.4225-.9877-2.689-1.2612l-2.9565-.6384zm10.2526 9.521l2.8507-14.9259 1.7355.3315-2.5503 13.3537 6.585 1.2576-.3004 1.5722-8.3205-1.5891zm20.2818 3.5936l-1.0717-5.0783-6.008-1.0009-2.6396 4.46-1.7635-.2939 8.4334-14.0633 1.4661.2443 3.3877 16.0327-1.8044-.3006zm-1.3537-6.7374l-.9692-4.9347c-.1276-.6254-.2399-1.3852-.3367-2.2795-.2597.6312-.5952 1.3164-1.0064 2.0557l-2.5371 4.3506 4.8494.8079zm13.5905-5.4696c-1.6537-.2317-3.0364.1361-4.148 1.1034-1.1115.9673-1.8014 2.4082-2.0696 4.3227-.2759 1.9695-.0276 3.5558.745 4.759.7724 1.2032 2.013 1.9245 3.7217 2.1639 1.05.147 2.2738.1261 3.6717-.0629l-.2149 1.5337c-1.0978.245-2.4119.2603-3.9421.046-2.2165-.3105-3.8327-1.2226-4.8486-2.7363-1.0159-1.5137-1.3503-3.5092-1.0033-5.9864.2173-1.5509.6975-2.869 1.4408-3.9543.7433-1.0853 1.7064-1.867 2.8893-2.345 1.183-.478 2.5156-.6132 3.9978-.4055 1.5783.221 2.9172.7025 4.0168 1.4443l-.9517 1.399c-1.0641-.6948-2.1657-1.122-3.3049-1.2816zm15.845 15.8526l-2.0653-.2358-4.668-7.95-1.7404 1.224-.6756 5.9171-1.7556-.2004 1.724-15.0976 1.7555.2005-.855 7.4868 7.7015-6.705 2.0757.237-6.8208 5.864 5.324 9.2594zm-.504 3.9715c-.6485-.0622-1.15-.2043-1.5045-.4262l.1438-1.5002c.4765.1849.9803.3028 1.5115.3537.6828.0655 1.2217-.0916 1.6166-.4714.395-.3798.6298-.9593.7045-1.7388l1.4509-15.1262 1.7588.1687-1.437 14.9814c-.1256 1.3105-.5541 2.2944-1.2854 2.9517-.7313.6573-1.7177.9264-2.9593.8073zm17.7605-2.5316l-1.5132-4.9647-6.0726-.4698-2.2381 4.6744-1.7824-.1379 7.1666-14.7492 1.482.1147 4.7816 15.6736-1.8239-.1411zm-1.9398-6.5927l-1.3985-4.8306c-.182-.6118-.3605-1.3588-.5355-2.241-.2033.6514-.4773 1.3634-.822 2.136l-2.1456 4.5564 4.9016.3792zm13.0603-6.6409c-1.6677-.0857-3.0128.402-4.0352 1.4631-1.0224 1.0611-1.5832 2.557-1.6823 4.4877-.102 1.986.2845 3.5444 1.1596 4.6752.875 1.1309 2.1742 1.7405 3.8973 1.829 1.0588.0544 2.276-.0738 3.652-.3848l-.0795 1.5467c-1.0721.3404-2.3797.471-3.923.3917-2.2351-.1149-3.925-.8816-5.0699-2.3004-1.1448-1.4187-1.653-3.3771-1.5247-5.8752.0804-1.564.4431-2.9191 1.0883-4.0655.6452-1.1464 1.536-2.0095 2.6725-2.5895 1.1364-.5799 2.452-.8315 3.9467-.7547 1.5917.0818 2.9676.4439 4.128 1.0863l-.8252 1.4771c-1.121-.5988-2.2558-.9277-3.4046-.9867zm17.1837 14.4017l-2.078-.0537-5.3477-7.5098-1.6263 1.372-.1538 5.9536-1.7664-.0457.3926-15.1906 1.7663.0457-.1946 7.533 7.0834-7.355 2.0885.054-6.28 6.44 6.116 8.7565zm17.1392-10.837c.015 1.5382-.4985 2.7263-1.5402 3.5645-1.0417.8382-2.5395 1.2667-4.4934 1.2857l-1.7877.0173.058 5.9761-1.767.0171-.1471-15.195 3.939-.038c3.797-.0369 5.7098 1.4206 5.7384 4.3723zm-7.836 3.35l1.5902-.0153c1.566-.0152 2.6963-.279 3.3913-.7917.6949-.5126 1.037-1.3266 1.0261-2.4422-.0097-1.0047-.346-1.7498-1.0091-2.2354-.663-.4855-1.6909-.7216-3.0836-.708l-1.9747.019.0598 6.1737zm20.6661 6.9998l-2.0595-4.764-6.087.2131-1.7007 4.8956-1.7866.0625 5.4702-15.4588 1.4854-.052 6.5064 15.0397-1.8282.064zm-2.6657-6.334l-1.9305-4.6436c-.2494-.5876-.5104-1.3099-.783-2.167-.1291.67-.3217 1.4083-.5777 2.2146l-1.622 4.768 4.9132-.172zm10.0004-1.668l3.5955-7.8251 1.909-.1135-4.511 9.587.3498 5.8829-1.7846.1061-.3449-5.7999-5.6099-9.0685 1.9299-.1148 4.4662 7.3457zm16.7042 2.3258c.1097 1.3328-.2882 2.4119-1.1936 3.2373-.9054.8254-2.1868 1.3063-3.8442 1.4427-1.7956.1477-3.1958.03-4.2007-.353l-.1398-1.6989c.6432.2113 1.337.3628 2.0815.4544.7445.0917 1.4759.108 2.194.049 1.174-.0967 2.0397-.3922 2.597-.8865.5572-.4943.8031-1.1385.7378-1.9327-.0432-.5248-.184-.946-.4221-1.2636-.2382-.3176-.6158-.5977-1.1329-.8402-.517-.2425-1.2945-.5018-2.3323-.778-1.4503-.3881-2.506-.9026-3.167-1.5435-.6611-.6408-1.0374-1.5172-1.129-2.629-.096-1.1671.266-2.132 1.0863-2.8948.8202-.7627 1.952-1.2035 3.3953-1.3223 1.5055-.1239 2.9128.0384 4.222.4869l-.4228 1.5782c-1.2932-.422-2.5302-.5843-3.711-.4872-.9324.0768-1.6444.337-2.1363.7807-.4919.4438-.7086 1.0213-.65 1.7326.0432.5248.1752.9467.3961 1.2658.221.319.5726.5994 1.0548.8413.4823.242 1.2104.4931 2.1843.7537 1.635.4355 2.7778.9533 3.4286 1.5533.6508.6 1.0188 1.4179 1.104 2.4538zm15.8842-9.3475c.112.9636-.0666 1.783-.5357 2.4584-.4691.6754-1.1872 1.174-2.1543 1.4956l.0096.0826c1.229.0106 2.172.2917 2.829.8431.657.5515 1.044 1.3296 1.1607 2.3345.1672 1.4386-.2032 2.603-1.1112 3.4933-.908.8903-2.2808 1.4423-4.1186 1.6559-.7984.0928-1.5367.1175-2.2149.0743-.6782-.0433-1.348-.18-2.0096-.41l-.1896-1.6312c.6915.2475 1.417.4126 2.1765.4952.7595.0826 1.4696.0855 2.1304.0087 2.6086-.3032 3.794-1.4768 3.5565-3.521-.2128-1.8309-1.7577-2.5791-4.6348-2.2447l-1.4866.1728-.1716-1.4764 1.5073-.1752c1.177-.1368 2.0794-.505 2.7073-1.1047.6279-.5996.8882-1.3606.781-2.2829-.0856-.7364-.4057-1.2852-.9604-1.6463-.5547-.361-1.2657-.4911-2.133-.3903-.6607.0768-1.2732.2386-1.8374.4856-.5643.247-1.1935.655-1.8877 1.224l-1.0016-1.0556c.5626-.5607 1.2321-1.0274 2.0084-1.4002.7764-.3727 1.612-.611 2.5067-.715 1.466-.1705 2.6441.0327 3.5343.6093.8902.5767 1.4033 1.45 1.5393 2.6202zm15.2144 9.6059l-1.7472.263-2.0285-13.4744-4.7587.7164-.2336-1.552 11.2646-1.6957.2337 1.552-4.7587.7163 2.0284 13.4744zm18.6601-10.9323c.4276 2.3942.1584 4.385-.8075 5.9723-.966 1.5873-2.5266 2.5734-4.6822 2.9584-2.2032.3934-4.0237.0235-5.4614-1.11-1.4378-1.1334-2.3759-2.9279-2.8144-5.3835-.4349-2.4352-.1718-4.4302.7894-5.985.9612-1.5548 2.5468-2.5295 4.7569-2.9242 2.1487-.3837 3.9485-.0012 5.3995 1.1474 1.451 1.1486 2.391 2.9235 2.8197 5.3246zm-11.9201 2.1287c.3618 2.026 1.0676 3.4854 2.1175 4.3783 1.0499.893 2.3967 1.1927 4.0407.8991 1.6575-.296 2.816-1.0414 3.4755-2.236.6595-1.1948.8077-2.8085.4447-4.8412-.3594-2.0123-1.0532-3.4633-2.0814-4.3531-1.0282-.8898-2.3676-1.1873-4.0184-.8925-1.6575.296-2.8242 1.0446-3.5002 2.2457-.6759 1.2012-.8353 2.801-.4784 4.7997zM326 15.5572l-9.7583 2.1318-.3172-1.4521 3.051-4.7837c.9281-1.4653 1.5256-2.4966 1.7923-3.0939.2667-.5973.4416-1.1603.5246-1.6891.0831-.5289.0633-1.0742-.0595-1.636-.173-.7921-.5505-1.3675-1.1324-1.7262-.582-.3587-1.2994-.4449-2.1524-.2586-.616.1346-1.1777.3637-1.685.6873-.5074.3236-1.0411.8268-1.6012 1.5095l-1.1443-.9523c1.119-1.436 2.484-2.33 4.0952-2.682 1.3945-.3046 2.5658-.1863 3.5139.3548.948.5412 1.5537 1.4143 1.817 2.6192.2055.941.1448 1.9295-.182 2.9655-.327 1.036-1.061 2.4163-2.202 4.1408l-2.555 3.8881.0177.0813 7.636-1.6682.3416 1.5638z" stroke="#363E4E" fill="#363E4E"></path><path d="M90 64.2353L93.5959 49l1.7715.4181-3.5958 15.2354L90 64.2353zm17.9193 3.916l-2.0313-.4342-5.62-14.6357-.0838-.018c-.2106 1.5317-.4502 2.9258-.7188 4.1823l-1.8597 8.7011-1.644-.3513 3.272-15.3082 2.0104.4297 5.6103 14.5789.0838.0179c.0263-.1915.1243-.8037.294-1.8368.1697-1.0331.3086-1.768.4165-2.2048l1.8777-8.785 1.6649.3559-3.272 15.3082zm13.654-1.6393c-.2519 1.3545-.9395 2.3193-2.063 2.8945-1.1234.5753-2.5272.7063-4.2115.393-1.8247-.3392-3.1845-.8353-4.0796-1.4882l.321-1.7264c.582.3841 1.2307.7225 1.9458 1.0153.7152.2927 1.4377.5069 2.1676.6426 1.193.2219 2.1334.1626 2.8211-.1778.6877-.3404 1.1066-.9142 1.2567-1.7212.0992-.5334.0734-.9901-.0774-1.3703-.1507-.3802-.4502-.7608-.8985-1.1418-.4483-.381-1.1508-.8493-2.1075-1.4048-1.3364-.7785-2.2464-1.5757-2.73-2.3917-.4835-.816-.6202-1.789-.41-2.9188.2205-1.186.8416-2.047 1.8634-2.583 1.0218-.5361 2.266-.6678 3.7327-.395 1.53.2845 2.8848.8268 4.0646 1.627l-.8476 1.4543c-1.171-.7696-2.3566-1.266-3.5566-1.489-.9474-.1763-1.7257-.1104-2.3347.1974-.609.3079-.9808.8232-1.1152 1.546-.0992.5334-.0822.9885.051 1.3655.1332.3769.4068.7508.8206 1.1218.4138.371 1.0695.8179 1.967 1.3405 1.507.8756 2.5028 1.6997 2.9872 2.4723.4844.7726.6287 1.6852.4329 2.7378zm16.541-8.9767l-1.5905 10.0034c-.2802 1.7624-1.0327 3.063-2.2574 3.9019-1.2248.8388-2.7677 1.1103-4.6288.8144-1.8611-.2959-3.2203-1.0324-4.0776-2.2095-.8573-1.1771-1.1447-2.6539-.8622-4.4304l1.5837-9.961 1.7976.2857-1.6038 10.088c-.2052 1.29-.0101 2.3366.585 3.1395.5951.803 1.5765 1.3132 2.944 1.5306 1.3043.2073 2.364.0199 3.1794-.5624.8154-.5823 1.3261-1.522 1.5324-2.8192l1.6005-10.0668 1.7976.2858zm4.2789 9.8304l-.8444 6.455-1.8048-.236 2.0304-15.5218 4.2573.557c1.904.249 3.263.7975 4.0771 1.6455.8141.848 1.1254 2.0045.9337 3.4697-.2685 2.0525-1.4904 3.3037-3.6657 3.7534l3.3024 7.5266-2.134-.2792-2.9139-6.9466-3.2381-.4236zm.2028-1.55l2.4737.3236c1.274.1666 2.2413.0358 2.902-.3925.6608-.4283 1.0574-1.1485 1.1898-2.1606.1342-1.0263-.0716-1.8055-.6175-2.3377-.5459-.5321-1.4877-.8857-2.8254-1.0607l-2.3463-.3069-.7763 5.9348zm20.379 10.4978l-1.4191-5.1549-6.2403-.654-2.4358 4.7508-1.8316-.192 7.7936-14.9874 1.5227.1596 4.4847 16.2743-1.8742-.1964zm-1.8127-6.8433l-1.3047-5.0137c-.1703-.6351-.3332-1.4094-.4887-2.3228-.2276.6651-.5297 1.3907-.9064 2.1766l-2.3372 4.632 5.037.5279zm18.0352 8.133l-2.0712-.1577-7.5324-13.7496-.0855-.0066c-.0032 1.5461-.0536 2.9597-.1512 4.2409l-.6758 8.872-1.6762-.1277 1.189-15.6088 2.0498.1562 7.5152 13.6946.0854.0065c.0004-.1933.0154-.8131.045-1.8597.0297-1.0465.0687-1.7934.117-2.2407l.6824-8.9574 1.6975.1293-1.189 15.6087zm11.6727-13.6496c-1.7183-.082-3.102.4255-4.1513 1.5224-1.0493 1.097-1.6214 2.64-1.7163 4.6293-.0976 2.0463.3064 3.6502 1.2122 4.8119.9057 1.1616 2.2463 1.7847 4.0216 1.8694 1.091.0521 2.3445-.0846 3.7607-.41l-.076 1.5935c-1.1032.3547-2.4498.4941-4.0398.4182-2.303-.1099-4.0468-.8934-5.2314-2.3506-1.1847-1.4572-1.7156-3.4727-1.5928-6.0467.077-1.6114.4455-3.0087 1.1059-4.1921.6603-1.1834 1.5747-2.0759 2.7433-2.6776 1.1685-.6017 2.5228-.8658 4.0629-.7923 1.6399.0782 3.0587.446 4.2565 1.1035l-.8445 1.5248c-1.157-.6127-2.3274-.9472-3.511-1.0037zm15.1582 14.726l-8.724-.204.3658-15.6497 8.724.204-.0378 1.6163-6.9042-.1614-.1179 5.0417 6.4868.1517-.0375 1.6056-6.4868-.1516-.1347 5.7589 6.9043.1614-.038 1.627zm18.9713-11.1562c.0174 1.5846-.5099 2.8093-1.5819 3.6742-1.072.8648-2.6143 1.3083-4.6272 1.3304l-1.8415.0203.0677 6.1563-1.8201.02-.1722-15.653 4.0578-.0446c3.9115-.043 5.884 1.4557 5.9174 4.4964zm-8.0678 3.4617l1.638-.018c1.6132-.0177 2.7774-.291 3.4925-.82.7152-.529 1.0665-1.3681 1.0538-2.5173-.0113-1.035-.3589-1.8021-1.0425-2.3014-.6837-.4993-1.7428-.7411-3.1775-.7253l-2.0343.0223.07 6.3597zm21.2988 7.1834l-2.1279-4.905-6.2703.2275-1.7455 5.0455-1.8405.0668 5.6149-15.9323 1.5301-.0555 6.7225 15.4847-1.8833.0683zm-2.7544-6.5215l-1.9949-4.7812c-.2576-.605-.5275-1.3487-.8095-2.2313-.132.6905-.3295 1.4512-.5922 2.2822l-1.6646 4.914 5.0612-.1837zm10.2825-1.7314l3.6933-8.0659 1.9665-.1195-4.6341 9.8823.3683 6.0598-1.8383.1117-.363-5.9743-5.7914-9.3345 1.9879-.1208 4.6108 7.5612zm17.2115 2.3741c.1148 1.3729-.2937 2.485-1.2253 3.3366-.9317.8514-2.2511 1.3485-3.9583 1.4912-1.8495.1546-3.292.0352-4.3278-.3581l-.1462-1.75c.6628.2169 1.3777.372 2.1448.4655.767.0935 1.5205.1093 2.2603.0474 1.2093-.101 2.1006-.4065 2.674-.9165.5734-.51.826-1.174.7575-1.992-.0451-.5406-.1906-.9743-.4364-1.3012-.2458-.3268-.6352-.6148-1.1682-.864-.533-.2491-1.3342-.5152-2.4037-.7983-1.4945-.398-2.5827-.9266-3.2646-1.586-.6818-.6592-1.0706-1.5615-1.1664-2.7068-.1004-1.2021.2713-2.1966 1.1152-2.9835.844-.7868 2.0093-1.2424 3.496-1.3666 1.5507-.1296 3.0007.0357 4.35.496l-.4335 1.6264c-1.3327-.433-2.6073-.5987-3.8237-.497-.9603.0802-1.6935.3493-2.1996.807-.5061.4578-.7286 1.053-.6673 1.7857.0452.5406.1818.975.4098 1.3034.228.3284.5905.6168 1.0877.8654.497.2485 1.2475.5063 2.2511.7734 1.6848.4466 2.8628.9785 3.534 1.5957.6712.6172 1.0514 1.4593 1.1406 2.5263zm18.3505 2.168l-10.2193 1.201-.1788-1.5207 3.6105-4.5965c1.0994-1.4086 1.816-2.4056 2.1496-2.991.3337-.5855.5698-1.145.7083-1.6788.1385-.5338.1732-1.0949.104-1.6833-.0975-.8295-.4264-1.4574-.9868-1.8839-.5604-.4265-1.2873-.5872-2.1805-.4822-.6452.0758-1.2441.254-1.797.5346-.5527.2806-1.1506.7426-1.7938 1.386l-1.077-1.0917c1.2921-1.3593 2.7817-2.1381 4.469-2.3364 1.4604-.1717 2.6493.0677 3.5667.7182.9173.6504 1.4502 1.6066 1.5985 2.8685.1158.9854-.0461 1.9927-.4858 3.0218-.4397 1.0292-1.3314 2.3702-2.6752 4.023l-3.0117 3.7284.01.0851 7.9968-.9398.1925 1.6376zm13.7043-1.9454l-1.7996.2733-2.1074-13.878-4.9012.7442-.2428-1.5984 11.6021-1.7618.2428 1.5984-4.9013.7443 2.1074 13.878zm19.1916-11.2848c.4437 2.4659.1691 4.517-.8238 6.1535-.9929 1.6365-2.5993 2.6545-4.8193 3.054-2.2692.4083-4.1451.0296-5.6277-1.136-1.4826-1.1657-2.4515-3.013-2.9066-5.5421-.4513-2.508-.183-4.5636.8051-6.1665.988-1.603 2.6202-2.6093 4.8964-3.0189 2.213-.3982 4.0676-.0066 5.564 1.1747 1.4962 1.1813 2.4669 3.0084 2.9119 5.4813zm-12.2768 2.2091c.3755 2.0865 1.1046 3.589 2.1873 4.5075 1.0828.9185 2.4707 1.2254 4.1638.9207 1.7072-.3072 2.8996-1.0766 3.5773-2.3082.6778-1.2317.8283-2.8942.4515-4.9878-.3729-2.0725-1.0896-3.5663-2.15-4.4815-1.0604-.9153-2.4406-1.22-4.1408-.914-1.7071.3072-2.908 1.08-3.6027 2.3182-.6946 1.2383-.8568 2.8867-.4864 4.9451zM330 65.9404l-1.6941.3724-2.3956-10.8967c-.1992-.9063-.3599-1.77-.4819-2.5909-.1142.1786-.2443.368-.3903.5682-.146.2002-.8262 1.0623-2.0406 2.5864l-1.1824-.9899 3.3597-4.0165 1.464-.3218L330 65.9404z" class="blackjack_ribbonPath__2D1HY" stroke="#262C39" fill="#262C39"></path></g></svg>
</div>
        <div class="wheel_game_result blackjack_game_result" style="background: rgba(0,0,0,0.95); display: none">
            <div class="mul"></div>
            <div class="te"></div>
        </div>

        <div class="blackjack_score dealer" style="display: none">21</div>
        <div class="blackjack_score player" style="display: none">21</div>

        <div class="blackjack_container">
            <div id="alert" class="alert alert-error hide"><span></span></div>
            <div id="dealer">
                <div id="dhand"></div>
            </div>
            <div id="player">
                <div id="phand"></div>
            </div>
        </div>
    </div>
</div>
