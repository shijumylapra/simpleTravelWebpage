<!DOCTYPE html>
<!-- Design and Code SHIJU ABRAHAM 
15/Aug/2019
-->
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
    
</head>
<body id="page1">

    
<script>
   
      
 $(document).ready(function() 
 {
        $('button.btn').click(function()
        {
          window.location = "Customer.php";
  //window.open('register.php','',' scrollbars=yes,menubar=no,width=700,height=600, resizable=yes,toolbar=no,location=no,status=no')
        });
    });

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
     height: 100px; 
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
        background-color:#CEF6F5;
      
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
.container .btn:hover {
  background-color:#C2C2C2;
}
#custb
{
  height: 30vw;
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
 
<div>

<div id="custb">
   <table width=100%>
                  <caption>
		
	</caption>
            <thead>
		<tr>
			<td></td>

                        <th id="Booking Date">Booked Date</th>
                        <th id="Email Id">Booking Number</th>
                        <th id="Start Date">Start Date</th>
                        <th id="Packages Name">End Date</th>
                        <th id="End Date">Packages Description</th>
        
		</tr>
    <?php   
         
         include('mysql_connect.php');
    //}
             $cId =  $_GET['var1'];
             $Query3 = "SELECT cusbooking.BookingDate,cusregister.CustFirstName,cusregister.CustEmail,cusbooking.BookingNo,cuspackages.PkgName,cuspackages.PkgStartDate,cuspackages.PkgEndDate as PKDate from cusbooking INNER JOIN cusregister ON cusbooking.CustomerId=cusregister.CustomerId inner join cuspackages on cuspackages.PackageId = cusbooking.PackageId where cusregister.CustomerId = '$cId'  ";
               
     if($data = mysqli_query($bcon, $Query3))
        {
    if(mysqli_num_rows($data) > 0)
    {
        while($records = mysqli_fetch_array($data))
        {
                    echo "<tr>";
                    echo "<td></td>";
                   
                    echo "<td>" . $records[0]. "</td>";
                    echo "<td>" . $records[3]. "</td>";
                    echo "<td>" . date("d-m-Y", strtotime($records[5])). "</td>";
                    echo "<td>" . date("d-m-Y", strtotime($records[6])). "</td>";
                    echo "<td>" . $records[4]. "</td>";
                  
                    echo "</tr>";
                   $cname = $records[1];
        }
        echo "<h3>" ."Welcome"." ".$cname." !". "<h3";
    }
    }
       ?>
	</thead>
</table>
</div>

</div>

</div>
 <footer>
      
      <?php include("footer.php") ?>;
  
    </footer>

<script type="text/javascript"> Cufon.now(); </script>
        
<!-- END PAGE SOURCE -->
</body>
</html>