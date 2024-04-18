<?php include("connection.php"); ?>
<!DOCTYPE html>    
<html>    
<head>  
<meta charset ="utf-8">  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/feedback.css">
<title>Travel&Tourism_Feedback </title>
</head>    
<body> 
<div class="container">
<form action="#" method="POST">
 <div class="title">    
      Feedback Form  
    </div>   
	
    <div class="form">    
	<div class="input_field">    
        <label>Name</label>
		<input type="text" class="input" name="fname">
      </div>    
        <div class="input_field">    
        <label>Contact No.</label>
		<input type="text" class="input" name="cno">
      </div>     
      <div class="input_field">    
        <label>Email Address</label>
		<input type="text" class="input" name="eid">
      </div>         
      <div class="input_field">    
        <label>Suggestions</label>
		<textarea class="textarea" name="suggest"></textarea>
      </div>
    <div class="input_field">
      <input type="submit" value="Submit" class="btn" name="submit">
    </div> 
</div>	
</form>
</div>    
    
</body>    
</html>  
<?php 
if($_POST['submit'])
{
	$fname 		= $_POST['fname'];
	$cno 		= $_POST['cno'];
	$eid 		= $_POST['eid'];
	$suggest 	= $_POST['suggest'];
	
	$query = "INSERT INTO FORM VALUES('$fname','$cno','$eid','$suggest')";
	$data = mysqli_query($conn,$query);
	if($data)
	{
		echo "Data Filled Successfully";
	}
	else
	{
		echo "Failed to enter data into database";
	}
	
}
?>  