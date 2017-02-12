 <div class="wrapper">
    <div class="login-form">
      <div class="brand">
        <h2>Welcome!</h2>
      </div>
      <div class="oauth">
        <div class="oauth-content">
          <ul>
            <li>
              <div class="facebook">
              <a class="btn" href=""><i class="fa fa-lg fa-facebook-square"></i> Sign in with Facebook</a>
            </div>
            </li>
            <li>
              <div class="twitter">
                <button class="btn social-btn"><i class="fa fa-lg fa-twitter-square" aria-hidden="true"></i> Sign in with Twitter</button>
              </div>
            </li>
            <li>
              <div class="google">
                <button class="btn social-btn"><i class="fa fa-lg fa-google-plus-square"></i> Sign in with Google</button>
              </div>
            </li>
        </div>
      </div>
      <hr />
      <form action="<?=base_url()?>account/login" method="post" id="login-form">
        <div class="form-group email-field email-form">
          <input type="text" class="form-control" placeholder="Username" id="username-field" name="identifier" onchange="myFunction()">
          <span class="form-control-feedback glyphicon " aria-hidden="true" id="email-check"></span>
        </div>
         <div class="form-group password-form">
          <input type="password" id="password-field" class="form-control" placeholder="Password" name="password">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-success sign-in-btn" id="login-btn">Sign In</button>
        </div>
        <div class="register-link">
            Don't have any account? <a href="<?=base_url();?>account/register">Sign up now!</a>
        </div>
      </form>

    </div>
  </div>