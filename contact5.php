<!DOCTYPE html>  
<html>  
    <head>  
          
       
        <style>  
            #leftbox { 
                float:left;  
              
                width:25%; 
                height:400px; 
            } 
            #middlebox{ 
                float:left;  
              
                width:25%; 
                height:400px; 
				width: 800px;
            } 
           
			.address 
                        {
				display: inline-block;
				padding: 3%;
			
            }
			.agcontact 
                        {
				display: inline-block;
				padding: 1%;
			 } 
            h1{ 
                color:green; 
                text-align:center; 
            } 
        </style>  
        
        <script>
function submitText() {
var c=confirm("Do you really want to submit?");
if(c==true)
{
return true;
}
else
{
return false;
}
}
function clearText() {
var d=confirm("Do you really want to clear?");
if(d==true)
{
return true;
}
else
{
return false;
}
}
</script>

    </head>  
      
    <body>  
        
            <!-- Agency Location-->
              
            <div id = "leftbox"> 
				<center>
                <h3>Agency Location:</h3 	> 
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
		$sql="SELECT AgncyCity, AgncyProv, AgncyPostal,AgncyAddress, AgncyPhone, AgncyFax FROM agencies ";
		$result = $link->query($sql);
		if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
		echo "<div class='address'>";
        echo "<br>". $row["AgncyCity"]. " , ". $row["AgncyProv"]. "<BR>". $row["AgncyAddress"] ."<BR>" . $row["AgncyPostal"] . "<br> Phone Number: ". $row["AgncyPhone"] . "<br>Fax Number: " . $row["AgncyFax"] . "<br>";
		echo "</div>";
		}
		} else {
		echo "0 results";
		}

		// Close connection
		mysqli_close($link);


			?>
			</center>		
            </div>  
              
            <div id = "middlebox"> 
			<!-- Agency Location-->
            <center>    
			<h3>Calgary Agent contact list</h3>
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
	echo "<div class='agcontact'>";
        echo "". $row["AgtFirstName"]." ".$row["AgtLastName"]. " ". $row["AgtBusPhone"]. "<br>". $row["AgtEmail"] ."" . /*$row["AgtPosition"] .*/"<br>";
    echo "</div>";
	}
} else {
    echo "0 results";
}


// Close connection
mysqli_close($link);


?>
<br>
<h3>Okotok Agent contact list</h3>
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
	echo "<div class='agcontact'>";
        echo "	      ". $row["AgtFirstName"]."	       ".$row["AgtLastName"]. "	  ". $row["AgtBusPhone"]. "<br>". $row["AgtEmail"] ."	      ". /*$row["AgtPosition"] .*/"<br>";
     echo "</div>";
	}
} else {
    echo "0 results";
}
// Close connection
mysqli_close($link);
?>
</center>
            </div> 
			<center>
			<form action="insert.php" method="post"> 
			<br><h3> Contact Us</h3>
				Email:<br><input type="Email" required name="Email" value="Enter Email" size="50" maxlength="100"></input><br><br>
				Message:<br>
			<textarea name="Text" cols="50" rows="10">Your Message Here </textarea> <br><br>
			<input type= "submit" onclick="return submitText()" value="Submit">
			&nbsp;
			<input type="reset" onclick="return clearText()" value="Clear"> 
		</form>
		</center>
		</div>  
    </body>  
</html>  