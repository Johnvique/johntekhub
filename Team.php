<html lang="en">
<head>
	<title>Jhub-Team</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<style type="text/css">
body{
	background-color: #999999;
}

.nav-link{
	color: black;
}
.ul{
	list-style-type: none;
}
</style>

</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		body {
	background: #ECECEC;
	overflow-x: hidden;
}

.footer {
	width: 8%;
	margin-left: 5%;
	text-align: center;
	font-family: 'Julius Sans One', sans-serif;
	margin-top: 5px;
}

.container {
	max-width: 450px;
	margin: 5px auto 5px auto;
}

h1 {
	font-family: 'Montserrat', sans-serif;
	text-transform: uppercase;
}

h2 {
	font-family: 'Julius Sans One', sans-serif;
	font-size: 2.5rem;
}

.row {
	margin-top: 12px;
}

.column {
	display: inline-block;
	text-align: center;
}

figure {
	overflow: hidden;
}

a p {
	color: black;
	margin-top: 8px;
	font-family: 'Open Sans', sans-serif;
}

a:hover {
	text-decoration: none;
}

.column img {
	display: block;
	width: 100%;
	height: 300px;
}

/* CSS Image Hover. Created refering to Naoya's Pen: https://codepen.io/nxworld/pen/ZYNOBZ */
/*Sepia*/
.column#sepia img {
	-webkit-filter: sepia(100%);
	filter: sepia(100%);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.column#sepia:hover img {
	-webkit-filter: sepia(0);
	filter: sepia(0);
}

/*GrayScale*/
.column#grayscale img {
	-webkit-filter: grayscale(100%);
	filter: grayscale(100%);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.column#grayscale:hover img {
	-webkit-filter: grayscale(0);
	filter: grayscale(0);
}

/*Zoom In*/
.column#zoomIn img {
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.column#zoomIn:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.3);
}

/*Zoom Out*/
.column#zoomOut img {
	-webkit-transform: scale(1.5);
	transform: scale(1.5);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.column#zoomOut:hover img {
	-webkit-transform: scale(1);
	transform: scale(1);
}

/* 3D Transform. Craeted refering to Dudley Storey's Pen: https://codepen.io/dudleystorey/pen/KFLJp */
.tdimension {
	width: 300px;
	height: 300px;
	margin: 20px auto 40px auto;
	perspective: 1000px;
}
.tdimension a {
	display: block;
	width: 100%;
	height: 100%;
	background: url("https://mir-s3-cdn-cf.behance.net/project_modules/disp/e8346826957515.56361c2106f3f.png");
	background-size: cover;
	transform-style: preserve-3d;
	transform: rotateX(70deg);
	transition: all 0.8s;	
}
.tdimension:hover a {
	transform: rotateX(20deg); 	
}	
.tdimension a:after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 40px;
    background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.1));    
transform: rotateX(90deg);
    transform-origin: bottom;
}

/*With Simple Caption*/
.column#caption {
	position: relative;
}
.column#caption .text {
		position: absolute;		
    top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		z-index: 10;
    opacity: 0;
    transition: all 0.8s ease;			
}
.column#caption .text h1 {		
		margin: 0;		
		color: white;
}
.column#caption:hover .text {
	opacity: 1;
	
}
.column#caption:hover img {
	-webkit-filter: sepia(90%);
}

/* Craeted refering to LittleSnippets.net Pen: https://codepen.io/littlesnippets/pen/adLELd */
.frame {
	text-align: center;	
	position: relative;
	cursor: pointer;	
	perspective: 500px; 
}
.frame img {
	width: 260px;
	height: 260px;
}
.frame .details {
	width: 80%;
	height: 90%;	
	padding: 6% 9%;
	position: absolute;
	content: "";
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%) rotateY(90deg);
	transform-origin: 50%;
	background: rgba(255,255,255,0.9);	
	opacity: 0;
	transition: all 0.4s ease-in;
	
}
.frame:hover .details {
	transform: translate(-50%, -50%) rotateY(0deg);
	opacity: 1;
}
 </style>
</head>
<body>
	<?php
  include ('nav.php');
	?>
		<div class="text-center "><h5>Meet the technical bench</h></div>
		<div class="row">
			<div class="col-md-4">
				<div class="card">
		    <div class = "frame col-xs-6">
			<img src = "imgs/comp4.jpg" class="img-fluid">
			<div class = "details">
				<h4>JOHN VICTOR-FOUNDER/CEO</h4>
				<h5 style="color: #990100"><u>Contact Info:0705820937</u></h5>
				<p class="bg-primary">php/Laravel,python/django,javascript/Node js/React js/Vue js,html5,css/bootstrap4,Java and C++.</p>
			</div>
		</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
							<div class = "frame col-xs-6">
			<img src = "imgs/hosea.jpg" class="img-fluid">
			<div class = "details">
				<h4>HOSEA CALEB</h4>
				<h5 style="color: #990100"><u>Contact Info:0710640582</u></h5>

				<p class="bg-primary">Graphic design,Photography,Art Direction,Adobe Photoshop</p>
			</div>
			
		</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
							<div class = "frame col-xs-6">
			<img src = "imgs/ben.jpg" class="img-fluid">
			<div class = "details">
				<h4>BENARD GONDWE</h4>
				<h5 style="color: #990100"><u>Contact Info:0726939482</u></h5>
				<p class="bg-primary">HTML5,Bootstrap,php/Laravel/Code Ignitor,C++,Java</p>
			</div>
			
		</div>
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




					