<html>
<head>
  <title>HackTM</title>

    <!-- Bootstrap -->	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url().'frontend-assets/css/main.css';?>">
	<link rel="stylesheet" href="<?php echo base_url().'frontend-assets/font-awesome/css/font-awesome.css';?>">

</head>

<body>
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
                <button class="btn social-btn"><i class="fa fa-lg fa-facebook-square" aria-hidden="true"></i> Sign in with Twitter</button>
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
      <form action="/login" method="post" id="login-form">
        <div class="form-group email-field email-form">
          <input type="text" class="form-control" placeholder="Username" id="username-field" name="identifier">
          <span class="form-control-feedback glyphicon " aria-hidden="true" id="email-check"></span>
        </div>
         <div class="form-group password-form">
          <input type="password" id="password-field" class="form-control" placeholder="Password" name="password">
        </div> 
        
        <div class="form-group">
          <button type="submit" class="btn btn-success sign-in-btn" id="login-btn">Sign In</button>
        </div>
      </form>

    </div>
  </div>

   <div id="login-success-modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="alert alert-success" role="alert">
                </div>
            </div>
        </div>

        <div id="login-error-modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="alert alert-danger" role="alert">
                </div>
            </div>
        </div>


</body>
</html>