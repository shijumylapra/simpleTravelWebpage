<!DOCTYPE html>
<!-- DESIGN AND CODING KEVIN LOO -->
<html lang="en">
<head>
<title>Travel Experts SKM</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>

<script type="text/javascript" src="bk.js"></script>
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
<body id="page1">

    
<script>

</script>


    <style>
        
    div.scroll 
    {
      width:500px;
      overflow-x:scroll;
      height:35px;
}

table
{
     height: 50px; 
    overflow: scroll;
        border-collapse:collapse; 
        border-radius: 5px;
} 
th
{
        font-family:segoe ui;
        color:black;
        font-size:11pt;
        border-bottom:1px solid #fff;
        border-right:1px solid #fff;
        border-left:1px solid #fff;
        color:#fff;padding:1px 1px 0;
        background-color:#0C88C1;
}
td
{
        font-family:Courier; 
        color:black; 
        font-size:11pt;
        align:'center';
        border-bottom:1px solid #fff;
        border-right:1px solid #fff;
        color:black;
        padding:2px 1px 0 
   
}
tr 
{
        background-color:#CEF6F5
}



  .container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 100%;
  height: auto;
}

.container .btn {
  position: absolute;
  top: 85%;
  left: 20%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 5px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: left;
}

.container .btn:hover 

{

    background-color:#C2C2C2;
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
</style>
<!-- START PAGE SOURCE -->
<div class="extra" >
    
  <div class="main">
  
              
  <div class="wrapper">
                <h1><a href="index.php" id="logo">TRAVEL EXPERTS</a></h1>
                <div class="right">
                    <div class="wrapper">
                    <h1><a href="index.php" id="logo1"></a></h1>
                    </div>
                </div>
            </div>

            <nav>
              <ul id="menu">
                <li><a href="index.php" class="nav1">Home</a></li>
                <li><a href="packages.php" class="nav3">Packages</a></li>
                <li><a href="Cuscontact.php" class="nav3">Contacts</a></li>
                <li><a href="Cuscontact.php" class="nav5">Login</a></li>
                  </ul>
            </nav>

            <div id = "leftbox"> 
				<center>
                <h3>Agency Location:</h3> 
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
<h3> Okotoks Agent contact list</h3>
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


      <div class="cntus">
				    	<!-- contact us-->
			<center>
			<form  action = "insert.php" method="post"> 
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

  </div>
 <footer>
      
      <?php include("footer.php") ?>;
  
    </footer>

<script type="text/javascript"> Cufon.now(); </script>

</body>
</html>