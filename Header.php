<!DOCTYPE html>
<html>
<title>online tutor search</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
     .box2
     {
		 width:50%;
		 margin-left:90%;

     }

</style>
</head>
<body>
		<div id="main">
		<div class="w3-teal">
		  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
		  <div class="w3-container">
		     	<div class="topnav-right box2">
			 <a href="" class="w3-bar-item w3-button w3-green" style="margin-left">Logout</a>
		  </div>
			<h1 class="w3-text-blue"><marquee>Welcome to my onlinetutorsearch</marquee></h1>
			
		  </div>
		</div>
	  </div>
         <div class="navbar">
          <div class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-teal  w3-xlarge" style="display:none" id="mySidebar">
		  <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
		  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-home"> Home</i></a>
		  <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-search">Search</i></a>
		  <a href="contactus.php" class="w3-bar-item w3-button">Contact Us</a>
		  <a href="registration.php" class="w3-bar-item w3-button">Register</a>
		  <a href="login.php" class="w3-bar-item w3-button">Login</a>
		</div>
		<div class="w3-content w3-section" style="max-width:4000px">
		 <?php
		     include('index.php');
		 ?>
		</div> 
		 <script>
		 var myIndex = 0;
			carousel();

			function carousel() {
			  var i;
			  var x = document.getElementsByClassName("mySlides");
			  for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			  }
			  myIndex++;
			  if (myIndex > x.length) {myIndex = 1}    
			  x[myIndex-1].style.display = "block";  
			  setTimeout(carousel, 2000); // Change image every 2 seconds
			}
		function w3_open() {
		  document.getElementById("main").style.marginLeft = "25%";
		  document.getElementById("mySidebar").style.width = "25%";
		  document.getElementById("mySidebar").style.display = "block";
		  document.getElementById("openNav").style.display = 'none';
		}
		function w3_close() {
		  document.getElementById("main").style.marginLeft = "0%";
		  document.getElementById("mySidebar").style.display = "none";
		  document.getElementById("openNav").style.display = "inline-block";
		}
		</script>
<?php
     include('ftor.php');
?>

		
</body>
</html>