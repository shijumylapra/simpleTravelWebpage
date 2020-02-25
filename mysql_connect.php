
<?php
$dbhost = "localhost";
$dbuser = 'root';
$dbpass =  '';
$db = 'travelexperts1';
//OOP Style usage
//$bcon = new mysqli($dbhost, $dbuser, $dbpass,$db);
//Procedural Style usage
$bcon = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

if (!$bcon)
 {
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}

?>
