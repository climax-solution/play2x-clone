@if(Auth::guest())
<div class="info-block">
    <div class="info-block-title">Authorization</div>
    <div class="info-block-content">
        Before you start playing with real balance, authorization is required.
    </div>
    <div class="info-block-content">
        Before authorization, you can only play in demo mode.
    </div>
    <div class="info-block-content">
        <a class="ll" href="javascript:void(0)" onclick="iziToast.destroy(); $('#b_si').click()">Login</a>
    </div>
</div>
@else
<div class="info-block">
    <div class="info-block-title">Demo mode</div>
    <div class="info-block-content">
        Demo mode can be enabled by clicking on the <i class="fad fa-coins game_info-icon_info"></i>icon, which is
        located next to your account balance.
    </div>
</div>
@endif