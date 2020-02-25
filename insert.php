<!DOCTYPE html>
<html>
<head>
    <title>Travel Experts: Contact Us</title>	
	
<body>
	<!-- PHP Code for database-->
 <?php
// I made a new table in the travelexperts database called contact. Refer to email image for more infomation
//Attempt MySQL server connection. 
$link = mysqli_connect(
"localhost", 
"root", 
"", 
"travelexperts");

// Check connection
if($link === false){
    die("ERROR: Could not connect, please try again. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$Text = mysqli_real_escape_string($link, $_REQUEST['Text']);
 
// Attempt insert query execution
$sql = "INSERT INTO contact (Email, Text) VALUES 
('$Email', '$Text')";
if(mysqli_query($link, $sql)){
    echo "<center>Records added successfully, you can expect a response in 4-5 business days.</center>";
} else{
    echo "ERROR: Could not able to execute, please try again. $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>  
	<!-- Return to contact page link -->
<center>
<br><br><a href="http://localhost/TXSKM/Cuscontact.php">Back to contact page</a>
</center>

</body>
</html>