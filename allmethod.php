<?php 
session_start();
function dbConnection()
{
	$hostName='localhost';
	$user="root";
	$password="";
	$database="teacher1";
	$conn = mysqli_connect($hostName,$user,$password,$database);
	return $conn;
}
function getTeachers($subject,$address)
{
    
	   $conn = dbConnection();
	   if($conn)
	   {
		   $sql="select * from tutor where teacher_address='$address'";
		   $res=mysqli_query($conn,$sql);
	   }
	   else
		{
			echo "Connection Failed..!";
		}
		return $res;
}
function addTeacher($data)
  {
	  $conn = dbConnection();
	  $i=$data['usrid'];
	  $n=$data['uname'];
	  $p=$data['psw'];
	  $c=$data['cno'];
	  $e=$data['eaddr'];
	  $t=$data['exprenc'];
	  $s=$data['sub'];
	  $l=$data['loctn'];
	
		// echo "Connection Successfully";
		$sql="insert into tutor values('$i','$n','$c','$e','$t','$p','$s','$l')";
		$res=mysqli_query($conn,$sql);
		
		return $res;
			
	
   }
function checkTeacher($data)
    {
	     $conn = dbConnection();	
	     $i=$data['username'];
		 $p=$data['password'];
		 $sql="select * from tutor where teacher_id='$i' and teacher_password='$p'";
		 $res=mysqli_query($conn,$sql);
		 
		 return $res; 
	}
function getTeacherDetailsById($uid)
     {
         $conn = dbConnection();
		 $sql="select * from tutor where teacher_id='$uid'";
		 $res=mysqli_query($conn,$sql);
		 
		 return $res;
	 }		 
function updateTeachers($data)
{
	$n = $data['uname'];
	$i = $data['uid'];
	$c = $data['cno'];
	$e = $data['eid'];
	$t = $data['exprenc'];
	$p = $data['psw'];
	$s = $data['sub'];
	$l = $data['loctn'];
	
	  //echo $n." ".$i." ".$c." ".$e." ".$t." ".$p." ".$s." ".$l;
	  
	$conn = dbConnection();
	
	$sql = "update tutor set teacher_name='$n', teacher_contact='$c', teacher_email='$e', teacher_experience='$t', teacher_password='$p', subject='$s',location='$l' where teacher_id='$i'";
	$res=mysqli_query($conn,$sql);
	
	return $res; 
}
function searchDetails($s,$l)
{
	
	$conn = dbConnection();
	
	$sql = "select * from tutor where subject='$s' and location='$l'";
	
	$res=mysqli_query($conn,$sql);
	
	return $res;
}
	
?>