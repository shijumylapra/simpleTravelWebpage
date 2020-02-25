<html>
<head>
<meta charset="utf-8">
<TITLE> Vacation Package with database </TITLE>

</head>

<body>
<center><h2>Table generated from travelexperts database</h2></center>


<?php
/*
Image Sources
'<img src="cruise.png" alt="Cruise">'
'<img src="island.png" alt="Island">'
'<img src="Asia.png" alt="Asia">'
'<img src="Europe.png" alt="Europe">'
*/


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
$sql = "SELECT * FROM packages";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table align='center'cellpadding='5' border='1' >";
            echo "<tr>";
				echo "<th>Pictures</th>";
                echo "<th>Package Name</th>";
                echo "<th>Package Start Date</th>";
                echo "<th>Package End Date</th>";
                echo "<th>Package Description</th>";
				echo "<th>Package Base Price</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
				echo "<td>" . $row['Pictures'] . "</td>";
				echo "<td>" . $row['PkgName'] . "</td>";
                echo "<td>" . $row['PkgStartDate'] . "</td>";
                echo "<td>" . $row['PkgEndDate'] . "</td>";
                echo "<td>" . $row['PkgDesc'] . "</td>";
				echo "<td>" . $row['PkgBasePrice'] . "</td>";
            echo "</tr>";
			
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>

</body>
<!-- Done By kevin Loo -->
</html>
