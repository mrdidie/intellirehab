<style>
  body {
    color:#222;
    background-color:#fafafa;
  }
</style>
<div class="row wrapper align-center">
  <div class="medium-6 medium-centered small-12 small-centered large-6 large-centered columns ">

    <form action="<?php echo base_url();?>index.php/login/verify" method="POST">
      <div class="row column box-login">
        <div class="row column log-in-form">
          <h3 class="text-center" style="font-weight:bold;color:#222;">intelli<strong>Rehab</strong></h3>
          <h6 class="text-center" style="font-weight:bold;color:#222;">Log in with you email account</h6>
          <label><span style="font-weight:bold;color:#222;">Email</span>
            <input type="text" name="emailLogin" placeholder="somebody@example.com">
          </label>
          <label><span style="font-weight:bold;color:#222;">Password</span>
            <input type="password" name="passwordLogin" placeholder="Password">
          </label>
          
          <p><input type="submit" class="button expanded" value="Log In" name="btnSubmit"></p>
          <p class="text-center"><a href="#" class="forgot_password">Forgot your password?</a></p>   
        </div>
      </div>
    </form>

  </div>
</div>