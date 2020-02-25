<html>
<head>
<meta charset="utf-8">
<TITLE> Contact from database </TITLE>

</head>

<body>

<h2>Calgary Agent contact list</h2>
<?php

//Attempt MySQL server connection. Assuming you are running MySQL and server with default setting
$link = mysqli_connect(
"localhost", 
"root", 
"", 
"travelexperts");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Attempt select query execution
$sql="SELECT AgtFirstName,AgtLastName, AgtBusPhone, AgtEmail, AgtPosition FROM agents where AgencyId in ('1')"	;
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>". $row["AgtFirstName"]." ".$row["AgtLastName"]. " <br>". $row["AgtBusPhone"]. "<BR>". $row["AgtEmail"] ."<BR>" . $row["AgtPosition"] ."<br>";
    }
} else {
    echo "0 results";
}


// Close connection
mysqli_close($link);


?>
<h2>Okotok Agent contact list</h2>
<?php

//Attempt MySQL server connection. Assuming you are running MySQL and server with default setting
$link = mysqli_connect(
"localhost", 
"root", 
"", 
"travelexperts");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Attempt select query execution
$sql="SELECT AgtFirstName,AgtLastName, AgtBusPhone, AgtEmail, AgtPosition FROM agents where AgencyId in ('2')"	;
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>". $row["AgtFirstName"]." ".$row["AgtLastName"]. " <br>". $row["AgtBusPhone"]. "<BR>". $row["AgtEmail"] ."<BR>" . $row["AgtPosition"] ."<br>";
    }
} else {
    echo "0 results";
}


// Close connection
mysqli_close($link);


?>

</body>
<!-- Done By kevin Loo -->
</html>
	