<html>
<head>
<title>Edit Delete</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  text:bold;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

</style>
</head>
<body>
<br>
<div class="w3-container">
  
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green">New</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <form class="w3-container w3-card-4" action="" method="post">
			  <h2 class="w3-text-blue">Input Form</h2>
			  <p>      
			  <label class="w3-text-blue"><b>Name</b></label>
			  <input class="w3-input w3-border" name="name" type="text"></p>
			  <p>      
			  <label class="w3-text-blue"><b>Contact</b></label>
			  <input class="w3-input w3-border" name="contact" type="text"></p>
			  <p>      
			  <label class="w3-text-blue"><b>Password</b></label>
			  <input class="w3-input w3-border" name="password" type="text"></p>
			  <p>      
			  <label class="w3-text-blue"><b>Email_Id</b></label>
			  <input class="w3-input w3-border" name="email" type="text"></p>
			  
			  <p>      
			  <button class="w3-btn w3-blue" name="add">Edit</button></p>
		 </form>
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>	  