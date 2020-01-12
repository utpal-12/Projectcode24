<!DOCTYPE html>
<html>
<title>home page</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

.dropdown {
  float: right;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  right: 0;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {  display: block;}

</style>
</head>
<body>
 </div>
	<h1 class="w3-text-blue"><marquee>Welcome to my onlinetutorsearch</marquee></h1>
 </div>

<div class="icon-bar w3-bar w3-teal">
    <a href="#" class="w3-bar-item w3-button w3-green"><i class="fa fa-home" ></i></a>
    <a href="registration.php" class="w3-bar-item w3-button">Register</a>
	<a href="update.php" class="w3-bar-item w3-button w3-red">Update</a>

  <div class="w3-dropdown-click" style="float:right;magin-right:5px">
  <div class="w3-container w3-red">
  <div class="w3-dropdown-hover w3-red">
    <a href="" class="w3-red w3-button w3-hover-red">Admin</a>
    <div class="w3-dropdown-content w3-bar-block w3-red">
      <a href="#" class="w3-bar-item w3-button w3-green">User</a>
      <a href="#" class="w3-bar-item w3-button w3-green">Teacher</a>
         </div>
     </div>
   </div>
</div>
    <a href="contactus.php" class="w3-bar-item w3-button ">More</a>
</div> 
		 <?php
		     include('index.php');
			 include('login.php');
			 include('ftor.php');
		 ?>
		 
</body>
</html>