<!DOCTYPE html>
<html>
<head>
	<title>Jhub-login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<style type="text/css">
		body{
			overflow-x: hidden;
			background-color: #666666;
		}
	</style>
</head>
<body>
	<?php
 include ('nav.php');
	?>
	<div class="row">
		<div class="col-md-4">
			<div class="text-center"><strong><h5>Jhub Tools</h5></strong></div>
				<img src="imgs/comp2.jpg" class="img-fluid">
		</div>
		<div class="col-md-4">
			<div class="container">
				<div class="card">
					<div class="card-header text center text-primary bg-default flex-center">
						<h3><strong><i>SIGN IN</i></strong></h3></div>
						<div class="card-body">
							<form method="post" action="Services.php">
								<div class="form-group">
									<label for="user" ><button ><i class="fa fa-user-o"></i></button></label>
									<input type="text" class="form-control" name="uname" id="user" placeholder="...Username" required="">
								</div>
								<div class="form-group">
									<label for="pass" ><button ><i class="fa fa-lock"></i></button></label>
									<input type="password" class="form-control" name="pword" id="pass" placeholder="...Password" required="">
								</div>
								<button type="submit" class="btn btn-primary">Login</button>
								<span class="message">You don't have an account? <a href="signup.php">Sign Up</a></span>

								
							</form>
						</div>

				</div>
			</div>
			
		</div>
		<div class="col-md-4">
    <div class="text-center"><strong><h5>Johntek hub Workspace</h5></strong></div>
				<img src="imgs/comp6.jpg" class="img-fluid">
		</div>
	</div>
  <footer class="fixed-bottom bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xm-12">
        <h5 style="color: #00D9D9"><u>Important</u></h5>
        <p><a href="Team.php"><span style="color: #FFFFFF">Working Team</span></a><br>
            <a href="policy.php"><span style="color: #FFFFFF">Jhub Policy</span></a><br>
            <a href="contact.php"><span style="color: #FFFFFF">Contact The Hub</span></a><br>
            <a href="jart.php"><span style="color: #FFFFFF">Graphic Design Work</span></a><br>
            <a href="faqs.php"><span style="color: #FFFFFF">FAQs</span></a></p>
      </div>
      <div class="col-md-4 col-sm-6 col-xm-12">
        <h5 style="color: #00D9D9"><u>Social</u></h5>
        <ul class="flex-center ul">
        <p class="fa fa-facebook-f" style="color: #000064">
            <a href="https://web.facebook.com/Vicjohnte-514277888936194/" class="text-blue">
            <span style="color: #FFFFFF"> Facebook</span>
            </a>
          </p>
          <p class="fa fa-instagram" style="color: #FF0100">
            <a href="https://www.instagram.com/johnte.vique/" class="text-blue">
            <span style="color: #FFFFFF">Instagram</span>
            </a>
          </p><br>
      <p class="fa fa-github" style="color: #FFFFFF">
            <a href="https://github.com/Johnvique" class="text-blue">
            <span style="color: #FFFFFF">Github</span>
            </a>
      </p>
          <p class="fa fa-twitter" style="color: #0030FF">
            <a href="https://twitter.com/johnvique" class="text-blue">
            <span style="color: #FFFFFF"> Twitter</span>
            </a>
          </p><br>
          <p class="fa fa-linkedin" style="color: #0100CC">
            <a href="https://www.linkedin.com/in/john-vique-736545128/" class="text-blue">
            <span style="color: #FFFFFF">LinkedIn</span>
            </a>
      </p>
      <p class="fa fa-gitlab" style="color: #FE5014">
            <a href="https://gitlab.com/Johnvique" class="text-blue">
            <span style="color: #FFFFFF">Gitlab</span>
            </a>
          </p>
      </div>
      <div class="col-md-4 col-sm-6 col-xm-12">
        <h5 style="color: #00D9D9"><u>Contact Adress</u></h5>
        <ul>
        <p class="fa fa-globe-africa text-white">
          <span style="color: #FFFFFF">
          Johntek Hub,<br>
          P.O BOX,236-40222,<br>
          Oyugis-Kenya.</span></p>
          <br>
          <p class="fa fa-phone text-white">
          <span style="color: #FFFFFF">Phone: <a href="tel:+254705820937 ">+254705820937</a></span>
          </p>
          <br>
          <p class="fa fa-envelope text-white">
          <span style="color: #FFFFFF">Email Adress: <a href="mailto:johnvique@gmail.com">johnvique@gmail.com</a></span>
          </p>
      </ul>        
      </div>
    </div>
  </div>
      <div class="col-md-12 text-center">
              <p>
                <span style="color: #FFFFFF"><small class="block">&copy;
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed By </span><a href="https://github.com/Johnvique" target="_blank">Johnvique</a>

</small><br> 
       <span style="color: #FFFFFF"><small class="block">Webmaster :@ <a href="http://johntekhub.com/" target="_blank">Johntek Hub</a></small></span>
              </p>
            </div>
</footer>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/mdb.js"></script>
<script src="js/style.js"></script>
<script type="text/javascript">
</script>

</body>
</html>