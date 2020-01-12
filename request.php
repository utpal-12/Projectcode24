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
		 width:40%;
	     margin-left:25%;
		 margin-top:1%

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
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
	<p>
    <label for="cno"><b>Contact No.</b></label>
    <input type="text" placeholder="Enter Contact No." name="cno" required></p>
     <p>
	<label for="sub"><b>Subject</b></label>
    <input type="password" placeholder="Enter Subject" name="sub" required></p>
	 <p>
    <label for="addr"><b>Address</b></label>
    <input type="text" placeholder="Enter Contactno." name="addr" required></p>
     <p>
    <button type="submit" name="submit" class="box3">Submit</button></p>
</div>
</form>
</body>
</html>
