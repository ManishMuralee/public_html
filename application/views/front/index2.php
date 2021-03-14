<form action="<?php echo base_url()?>Front/coming" method="post" class="norefresh">
    <div class="input-field col s12">
        <span for="accountemaillogin">Enter url to be shortened</span>
        <input name="url_org" required=""  id="accountemaillogin" type="text" class="validate">
    </div>
    <div class="row col s12 no-padding-right">
    </div>
    <div class="row no-pad-bottom no-mar-bottom">
        <div class="col l12 m12 s12 text-center">
            <button type="submit" name="submit" id="logintouserinlogin"  class="waves-effect waves-light btn-large register-man-btn top-0 login-mobile-btn">Shorten</button>
        </div>
    </div>
</form>