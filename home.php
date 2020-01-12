<!DOCTYPE html>
<html>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: black;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: green;
}

.active {
  background-color:green;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
	  .box3
     {
		 width:5%;
	     margin-left:75%;
     }
	 
</style>
<body>
<div class="navbar">
  <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>  
  <a href=""><i class="fa fa-fw fa-envelope"></i> Enquiry</a>
  <a href="feedback.php">feedback</a>
  <a href="logout.php" type="submit" class="box3 w3-red">Logout</a>  
  
</div>
<div class="w3-display-cotainer">  
  <img src="image/tut2.jpg" alt="Lights" width="100%">
    <div class="w3-display-middle w3-large">
	<h1>Welcome to my page</h1>
	</div>
</div>
</body>
</html>
