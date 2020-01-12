<?php
	 //session_start();
     include('allmethod.php');
	 $uname="";
	 $uid="";
	 $psw="";
	 $cno="";
	 $eid="";
	 $sub="";
	 $exprenc="";
	 $loctn="";
 ?>
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/style.css">
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
  .box4
     {
		 width:100%;
	     margin-left:500%;
     }
   .box3
     {
		 width:5%;
	     margin-left:80%;
     }
	 	 
</style>
<body>
<div class="navbar">
  <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>  
  <a href="feedback.php">feedback</a>
  <a href="logout.php" type="submit" class="box3 w3-red">Logout</a>  
  
</div>

<div class="w3-container">
<img src="image/tut2.jpg" alt="Lights" width="100%">
    <div class="w3-display-topleft">
	 <div class="w3-row-padding w3-padding" style="width:60%;margin-left:350px;margin-top:5%">
  <ul class="w3-ul w3-card-4" style="width:150%;">
    <li class="w3-bar">
      
      <img src="image/format.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:150px">
      <div class="w3-bar-item">
	  <?php
		$uid = $_SESSION['userid'];
		$res = getTeacherDetailsById($uid);
	    while($row = mysqli_fetch_assoc($res))
		{
			$uname = $row['teacher_name'];
			$uid= $row['teacher_id'];
			$psw= $row['teacher_password'];
			$cno= $row['teacher_contact'];
			$eid= $row['teacher_email'];
			$sub= $row['subject'];
			$exprenc= $row['teacher_experience'];
			$loctn= $row['location'];
		}
	  ?>
        <form class="w3-container" action="" method="post">
			  <p>      
			  <label class="w3-text-black"><b>Username</b></label>
			  <input class="w3-input w3-border" name="uname" type="text" value="<?php echo $uname;?>"></p>
			  <p>      
			  <label class="w3-text-black"><b>UserId</b></label>
			  <input class="w3-input w3-border" name="uid" type="text"  value="<?php echo $uid;?>" readonly></p>
			  <p>      
			  <label class="w3-text-black"><b>Password</b></label>
			  <input class="w3-input w3-border" name="psw" type="text" value="<?php echo $psw;?>" ></p>
			  <p>      
			  <label class="w3-text-black"><b>Contact No.</b></label>
			  <input class="w3-input w3-border" name="cno" type="text" value="<?php echo $cno;?>"></p>
			  <p>
              <label class="w3-text-black"><b>Email Id</b></label>
			  <input class="w3-input w3-border" name="eid" type="text" value="<?php echo $eid;?>"></p>
			  <p>
			  <label class="w3-text-black"><b>Subject</b></label>
			  <input class="w3-input w3-border" name="sub" type="text" value="<?php echo $sub;?>"></p>
              <p>
              <label class="w3-text-black"><b>Experience</b></label>
			  <input class="w3-input w3-border" name="exprenc" type="text" value="<?php echo $exprenc;?>"></p>
              <p>
              <label class="w3-text-black"><b>Location</b></label>
			  <input class="w3-input w3-border" name="loctn" type="text" value="<?php echo $loctn;?>"></p>
              <p>			  
			  <button class="w3-btn w3-green" name="update">Update</button></p>
		 </form>
		 
<?php
		    if(isset($_POST['update']))
			{
				$res = updateTeachers($_POST);
				if($res == 1)
				{
					   echo "Updated Successfully";
				}
				else
				{
					   echo "upation failed!";
				}
	        }
?>
		 
      </div>
    </li>
	<li>
		
	</li>
  </ul>
 </div>
 </div>
</div>
</body>
</html>
