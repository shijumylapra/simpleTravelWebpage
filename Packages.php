<!DOCTYPE html>
<!-- Design and Code SHIJU ABRAHAM/KEVIN LOO
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


function imageexp() 
{
  //
  var date_diff_indays = function(date1, date2) 
{
dt1 = new Date(date1);
dt2 = new Date(date2);
return Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate()) ) /(1000 * 60 * 60 * 24));
}

  $('tr').click(function(){
    var v1 = $(this).find('.tdclass1').text();
    var today = new Date();

        var dateFirst = new Date(today);
         var dateSecond = new Date(v1);

         var timeDiff = Math.abs(dateSecond.getTime() - dateFirst.getTime());

         var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

// difference
  //  alert(today);

// if(date_diff_indays(today, v1) < 0)
 //{
  if(dateSecond.getTime()  < dateFirst.getTime())
  {
   //var error = "Please Select different package, Current Package is expired";
   //document.getElementById("welcomeDiv").innerHTML = error;
  alert(" Please Select different package, Current Package is expired")
   location.reload(); 
   return false;
 }
  return true;
})
}

 $(document).ready(function() 
 {
        $('button.btn').click(function()
        {
         window.location = "Customer.php";
  //window.open('register.php','',' scrollbars=yes,menubar=no,width=700,height=600, resizable=yes,toolbar=no,location=no,status=no')
        });
    });

</script>

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

<center><h2>Vacation Packages</h2></center>

<table>

<div id="welcomeDiv" style = "display:none";> </div>

<!--
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <p id="errorid"></p>
</div>
-->

  <?php
//CREATE TABLE destination_db.my_table SELECT * FROM source_db.my_table;


include("mysql_connect.php");
  
date_default_timezone_set("Canada/saskatchewan");
 
 echo "<table id='myform' align='center'cellpadding='5' border='1' >";

// Attempt select query execution
$sql = "SELECT * FROM cuspackages1";
if($result = mysqli_query($bcon, $sql)){
    if(mysqli_num_rows($result) > 0){
       
       
            echo "<tr>";
                echo "<th>Pictures</th>";
                echo "<th>Package Name</th>";
                echo "<th>Package Start Date</th>";
                echo "<th>Package End Date</th>";
                echo "<th>Package Description</th>";
                echo "<th>Package Base Price</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr id = 'tr1'>";
             $PkId = $row['PackageId'];
         
            
            //Start the session
//session_start();
//Dump your POST variables
//$_SESSION['post-data'] = $_POST;
//
//echo "<td> <div class=container>  "  . "<img src = $row[Pictures] width=200 height=150> 
//</div> </td>";

$date_now = date("Y-m-d");


  echo "<td> <div class='grow imagex'>
<a  href='./Customer.php?var=$PkId' onclick= 'return imageexp();'> <img src= $row[Pictures] width=200 height=150 ></a>
  </div> </td>";
  echo "<td>" .  $row['PkgName'] . "</td>";

 // you can get the variable by either $_GET['myVar'] or $_REQUEST['myVar']
//<a href="https://tekeye.uk"><img src="imag return es/home.png" alt="Tek Eye Home"/></a>

//echo "<td> <div class=container>" . "<img src= $row[Pictures] alt=Avatar class=image> <div class='overlay'> <div class='text'>Hello World</div> </div> </div> </td>';

        
           // echo "<td><input type=\"button\" value=\"Edit\" onClick=\"editItem('".$username."')\"> <a href=\"Customer.php\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
				//echo "<td>" . $row['PkgName'] . "</td>";
                             
                               echo "<td>" . $row['PkgStartDate'] . "</td>";
                                                             $pkgedate =$row['PkgEndDate'];
                // $var_value = date("d-m-Y", strtotime($row['PkgEndDate']));  //echo "<td>" . $pkgedate ." "."Expiried"."</td>"; 
              // $_SESSION['varname'] = $var_value;
              $datetime1 = new DateTime($pkgedate);
              $datetime2 = new DateTime($date_now);
              $diff=date_diff($datetime2,$datetime1);

//echo $diff->format("%R%a days");
               
if ( $diff->format("%R%a days") < 0 )
{
  echo "<td  class = 'tdclass1' > <span class='blinking'>$pkgedate</span> </td>"; 
 // echo "<script>
//alert('There are no fields to generate a report');
      //</script>";
}
else
{
    echo "<td class = 'tdclass1'>" . $pkgedate . "</td>";
}

                echo "<td>" . $row['PkgDesc'] . "</td>";
				echo "<td>" . $row['PkgBasePrice'] . "</td>";
            echo "</tr>";
			
        }
        echo "</table>";
      }
    }
    ?>  
    </table>;
    </div>

    <footer>
      <?php include("footer.php") ?>;
  
    </footer>

<script type="text/javascript"> Cufon.now(); </script>

</body>
</html>