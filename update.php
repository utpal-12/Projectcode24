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
	
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Contact No.</b></label>
    <input type="text" placeholder="Enter Contactno." name="cno" required>
     
    <label for="eid"><b>Email Address</b></label>
    <input type="text" placeholder="Enter Email address" name="eaddr" required> 
	 
	<label for="exper"><b>Experience</b></label>
    <input type="text" placeholder="Enter Experience" name="exper" required>
     
	<label for="sub"><b>Subjects</b></label>
    <input type="text" placeholder="Enter Subjects" name="sub" required>
	
    <button type="submit" class="box3">Upate</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn ">Cancel</button>
  </div>
</form>

</body>
</html>
