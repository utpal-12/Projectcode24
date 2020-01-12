<?php
include('allmethod.php');			// function page

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
     .box2
     {
		 width:50%;
	     margin-left:25%;

     }
	  .box3
     {
		 width:20%;
	     margin-left:40%;

     }
</style>
</head>
<body>

<form action="" method="POST" class="box2">
  <div class="imgcontainer">
    <img src="image/format.jpg" alt="Avatar" class="Avatar" style="width:150px">
  </div>

  <div class="container">
    <label for="uname"><b>UserId</b></label>
    <input type="text" placeholder="Enter UserId" name="usrid" required>
	
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
     
	<label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
	
    <label for="cno"><b>Contact No.</b></label>
    <input type="text" placeholder="Enter Contactno." name="cno" required>
     
    <label for="eaddr"><b>Email Address</b></label>
    <input type="text" placeholder="Enter EmailAddress" name="eaddr" required>
	 
	<label for="expernce"><b>Experience</b></label>
    <input type="text" placeholder="Enter Experience" name="expernce" required>
     
	<label for="sub"><b>Subject</b></label>
    <input type="text" placeholder="Enter Subjects" name="sub" required>
	
	<label for="loctn"><b>location</b></label>
    <input type="text" placeholder="Enter location" name="loctn" required>
    <button type="submit" name="submit" class="box3">Submit</button>
	<p>
    <label><input type="checkbox" checked="checked" name="remember"> Remember me</label></p>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
<?php
       if(isset($_POST['submit']))
	   {
		   $res = addTeacher($_POST);
		   if($res == 1)
		   {
			   echo "inseret Successfully!!! 621";
		   }
		   else
		   {
			   echo "insert failed!";
		   }
	   }
 ?>
</body>
</html>
<?php
include('allmethod.php');			// function page

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
     .box2
     {
		 width:50%;
	     margin-left:25%;

     }
	  .box3
     {
		 width:20%;
	     margin-left:40%;

     }
</style>
</head>
<body>

<form action="" method="POST" class="box2">
  <div class="imgcontainer">
    <img src="image/format.jpg" alt="Avatar" class="Avatar" style="width:150px">
  </div>

  <div class="container">
    <label for="uname"><b>UserId</b></label>
    <input type="text" placeholder="Enter UserId" name="usrid" required>
	
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
     
	<label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
	
    <label for="cno"><b>Contact No.</b></label>
    <input type="text" placeholder="Enter Contactno." name="cno" required>
     
    <label for="eaddr"><b>Email Address</b></label>
    <input type="text" placeholder="Enter EmailAddress" name="eaddr" required>
	 
	<label for="expernce"><b>Experience</b></label>
    <input type="text" placeholder="Enter Experience" name="expernce" required>
     
	<label for="sub"><b>Subject</b></label>
    <input type="text" placeholder="Enter Subjects" name="sub" required>
	
	<label for="loctn"><b>location</b></label>
    <input type="text" placeholder="Enter location" name="loctn" required>
    <button type="submit" name="submit" class="box3">Submit</button>
	<p>
    <label><input type="checkbox" checked="checked" name="remember"> Remember me</label></p>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
<?php
       if(isset($_POST['submit']))
	   {
		   $res = addTeacher($_POST);
		   if($res == 1)
		   {
			   echo "inseret Successfully!!! 621";
		   }
		   else
		   {
			   echo "insert failed!";
		   }
	   }
 ?>
</body>
</html>
