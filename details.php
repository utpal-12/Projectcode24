<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<?php
    include('allmethod.php');
	$s = $_POST['subject'];
	$l = $_POST['location'];
	
	$res = searchDetails($s,$l);
	$totalRecord = mysqli_num_rows($res);
	
	if($totalRecord<0)
	{
			echo "Sorry Data not Found";
	}
	else
	{
		echo "Found";
	}
?>

<div class="w3-container">
<img src="image/tut1.jpg" alt="Lights" width="100%">
    <div class="w3-display-topleft w3-large">
	 <div class="w3-row-padding w3-padding" style="width:100%;margin-center:100px;">
  <h2>Details</h2>
  
  <?php
	
  ?>
  
  <ul class="w3-ul w3-card-4" style="width:150%;">
    <li class="w3-bar">
      
      <img src="image/format.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:150px">
      <div class="w3-bar-item">
        <span class="w3-large">Name</span><br>
		<span>Subject</span><br>
        <span>Contact No</span><br>
		<span>Location</span><br>
		<span onclick="this.parentElement.style.display='none'" class="w3-button w3-teal w3-large">Get Details</span>
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
