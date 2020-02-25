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

    
<script>
     function sendEnquiryform()
   {
  
       var msg = '<span style="color:red;"> </span><br /><br />';
        document.getElementById('msg').innerHTML = msg;

               if( document.myForm.txtfname.value == "" ) {
        document.getElementById('msg').innerHTML = "Please provide your First name!";    
      
            document.myForm.txtfname.focus() ;
            return false;
             /*
                var msg = '<span style="color:red;">You must select your gender!</span><br /><br />';
                 document.getElementById('msg').innerHTML = msg;
                  document.myForm.txtfname.focus() ;
                  return false; */
    
         }
         if( document.myForm.txtphone.value == '' ) {
                 document.getElementById('msg').innerHTML = "Please provide your Contact Number!";  
            document.myForm.txtphone.focus() ;
            return false;
         }
         
           if( document.myForm.txtemail.value === "" ) {
        document.getElementById('msg').innerHTML = "Please provide your Email!";        
   
            document.myForm.txtemail.focus() ;
            return false;
         }
       
        // var genders = document.getElementsByName("gender");
               // if (genders[0].checked == fas) 
               // {
               //       return false;
                //} 
               // else if (genders[1].checked == true)
               // {
               //     return false;
                //} 
                //else 
               // {
                //     document.getElementById('msg').innerHTML = "You must select your gender!";
                 //   return false;
                //}


                if( document.myForm.txtpass1.value === "")
                {
   
                     document.getElementById('msg').innerHTML = "Please provide your password!";   
                    document.myForm.txtpass1.focus() ;
                    return false;
                 }
                if( document.myForm.txtpass2.value === "")
                {
     
                     document.getElementById('msg').innerHTML = "Please confirm your password!";   
                    document.myForm.txtpass2.focus() ;
                    return false;
                 }
                 
                var Pass1=document.forms["myForm"]["txtpass1"].value;
                var Pass2 =document.forms["myForm"]["txtpass2"].value;
                        if(!(Pass1 === Pass2))
                        {
                        document.getElementById('msg').innerHTML = "Both passwords are not matching"; 
                        return false;
                        }
                

                

  return true;

      }
    </script>
    
<style>

      .form-style-2{
          float: left;
   	max-width: 500px;
	padding: 20px 12px 10px 20px;
	font: 13px Arial, Helvetica, sans-serif;
       
}
.form-style-2-heading{
	font-weight: bold;
	font-style: italic;
	border-bottom: 2px solid #ddd;
	margin-bottom: 15px;
	font-size: 15px;
	padding-bottom: 3px;
}
.form-style-2 label{
	display: block;
	margin: 0px 0px 15px 0px;
}
.form-style-2 label > span{
	width: 100px;
	font-weight: bold;
	float: left;
	padding-top: 8px;
	padding-right: 5px;
}
.form-style-2 span.required{
	color:red;
}
.form-style-2 .tel-number-field{
	width: 40px;
	text-align: center;
}
.form-style-2 input.input-field, .form-style-2 .select-field{
	width: 48%;	
}
.form-style-2 input.input-field, 
.form-style-2 .tel-number-field, 
.form-style-2 .textarea-field, 
 .form-style-2 .select-field{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	border: 1px solid #C2C2C2;
	box-shadow: 1px 1px 4px #EBEBEB;
	-moz-box-shadow: 1px 1px 4px #EBEBEB;
	-webkit-box-shadow: 1px 1px 4px #EBEBEB;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	padding: 7px;
	outline: none;
}
.form-style-2 .input-field:focus, 
.form-style-2 .tel-number-field:focus, 
.form-style-2 .textarea-field:focus,  
.form-style-2 .select-field:focus{
	border: 1px solid #0C0;
}
.form-style-2 .textarea-field{
	height:100px;
	width: 55%;
}
.form-style-2 input[type=submit],
.form-style-2 input[type=button]{
	border: none;
	padding: 8px 15px 8px 15px;
	background: #FF8500;
	color: #fff;
	box-shadow: 1px 1px 4px #DADADA;
	-moz-box-shadow: 1px 1px 4px #DADADA;
	-webkit-box-shadow: 1px 1px 4px #DADADA;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
}
.form-style-2 input[type=submit]:hover,
.form-style-2 input[type=button]:hover{
	background: #EA7B00;
	color: #fff;
}
.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

#main-wrap
{
    overflow: hidden;
}
#split-sright
{
    float: right;
    margin-top: 20px;
    width: 45%;
}
</style>

</head>
<body id="page1">

  
    
    
    <?php
    
    



    if(isset($_POST['submit']))
    {
        $nameError = "";
     include('mysql_connect.php');
     $Query1 = ("INSERT INTO cusregister(CustFirstName,CustLastName,CusGender,CusAddress,CustCity,CustPostal,CustCountry,CustEmail,CusPassword,AgentId) VALUES('$_POST[txtfname]','$_POST[txtlname]','$_POST[txtaddress]','$_POST[txtaddress]','$_POST[txtcity]','$_POST[txtpostal]','$_POST[txtcountry]','$_POST[txtemail]','$_POST[txtpass1]','2')");
    if (mysqli_query($bcon, $Query1)) 
    {
 
     $nameError = "Your contact information is saved successfully.";
  
     
   // mysqli_close($bcon);
    } 
    else 
    {
    echo "Error: " . $Query1 . "" . mysqli_error($bcon);
        }
     }
    ?>
    

    
<div class="extra" >
    <div class="main">
      
            <div class="wrapper">
                <h1><a href="index.html" id="logo">TRAVEL EXPERTS</a></h1>
                <div class="right">
                    <div class="wrapper">
                        <form id="search" action="#" method="post">
                            <div class="bg">
                                <input type="text" class="input">
                            </div>
                        </form>
                    </div>
                    <div class="wrapper">
                        <nav>
                            <ul id="top_nav">
                               <li> <a onclick=" window.open('register.php','',' scrollbars=yes,menubar=no,width=700,height=600, resizable=yes,toolbar=no,location=no,status=no')">Register </a> </li>
                                  <li><a href="#">Log In</a></li>
                              <li><a href="#">Help</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
 
            <nav>
            <ul id="menu">
                <li><a href="index.php" class="nav1">Home</a></li>
                <li><a href="about.html" class="nav2">About Us </a></li>
                <li><a href="packages.php" class="nav3">Packages</a></li>
                <li><a href="destinations.html" class="nav4">Destinations</a></li>
                <li class="end"><a href="contacts.html" class="nav5">Contacts</a></li>
              </ul>
            </nav>

              
    
     
        <div id="main-wrap">
           
            <div class="form-style-2">
                <div class="form-style-2-heading">Provide your information</div>
                  
                <form id="form_id" name="myForm" method = "post" onsubmit= "return sendEnquiryform()"> 
                    <label for="field1"><span>First Name <span class="required">*</span></span><input type="text" class="input-field" name="txtfname" value="" /></label>
                    <label for="field1"><span>Last Name <span class="required">*</span></span><input type="text" class="input-field" name="txtlname" value="" /></label>
                    <label for="field1"><span>Contact Number <span class="required">*</span></span><input type="text" class="input-field" name="txtphone" value="" /></label>

                    <label for="field1"><span>Gender</span>

                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="unknown" disabled> Unknown </label>	


                    <label for="field1"><span>City <span class="required">*</span></span><input type="text" class="input-field" name="txtcity" value="" /></label>

                    <label for="field1"><span>Postal Code <span class="required">*</span></span><input type="text" class="input-field" name="txtpostal" value="" /></label>

                    <?php 
                        include('mysql_connect.php');
                    $sql = 'SELECT * FROM cuscountry';
                    $result = mysqli_query($bcon, $sql);
                    if (mysqli_num_rows($result) > 0)
                    {
                    //echo "<select class = field-select name='txtcon' ";
                        echo("<label for='field4'><span>Country</span><select  style= 'max-width:30%'  name='txtcountry'>");

                    while($row = mysqli_fetch_assoc($result))
                    {
                    echo "<option class = field-option value = '" . $row['iso'] ."'>" . $row['name'] ."</option>";
                    }
                    echo "</select></label>";
                    }
                    else
                    {
                    echo "0 results";
                    }




                    mysqli_close($bcon);

                    ?> 

                    <label for="field5"><span>Message <span class="required">*</span></span><textarea cols="5" rows="15" maxlength="250" name="txtaddress" class="textarea-field"></textarea></label>
                    <label for="field1"><span>E-mail <span class="required">*</span></span><input type="text" class="input-field" name="txtemail" value="" /></label>

                    <label for="field1"><span>Password <span class="required">*</span></span><input   type="password" class="input-field" name="txtpass1" value="" /></label>
                    <label for="field1"><span>Confirm Password <span class="required">*</span></span><input type="password" class="input-field" name="txtpass2" value="" /></label>

                    <label><span> </span>  <input type="submit" name="submit" class="btn-submit" value="Submit Records" /> </label>



                                        <div id="statusMessage"> 
                                        <?php
                                        if (! empty($message)) {
                                        ?>
                                        <h5 id="msg"> <?php echo $message; ?> </h5>
                                        <?php
                                        }
                                        ?>
                                        </div>


                            <label><span> </span>  <div id="msg">
                                      <span><?php echo ((isset($nameError) && $nameError != '') ? $nameError : ''); ?> </span>   
                        </div> </label>
                </form>
            </div>
      
            <div id="split-sright">
                <div class="form-style-2-heading">Package Information</div>
        <table width=100%>
                  <caption>
		
	</caption>
            <thead>
		<tr>
			<td></td>
			<th id="Base Price" colspan="1">Base Price</th>
			<th id="Packages Description" colspan="3">Packages Description</th>
		</tr>
    <?php   
         include('mysql_connect.php');
         $PckID = $_GET['var'];
    $Query3 = "SELECT * FROM cuspackages where PackageId = $PckID";
    if($data = mysqli_query($bcon, $Query3))
    {
    if(mysqli_num_rows($data) > 0)
    {
        while($records = mysqli_fetch_array($data))
        {
            
                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>" . $records['PkgBasePrice']. "</td>";
                    echo "<td>" . $records['PkgName']. "</td>";
                    echo "<td>" . date("d-m-Y", strtotime($records['PkgStartDate']))  ."</td>";
                    echo "<td >" . date("d-m-Y", strtotime($records['PkgEndDate'])) ."</td>";
                    echo "</tr>";
     
        }
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

</div>
    
</body>
</html>
<!-- 

<table id="ctbl-01">
	<caption>
		Imported and domestic orange and apple prices
		in Sydney and Melbourne
	</caption>
	<thead>
		<tr>
			<td></td>
			<th id="imported" colspan="2">Imported</th>
			<th id="domestic" colspan="2">Domestic</th>
		</tr>
		<tr>
			<td></td>
			<th id="oranges-imp">Oranges</th>
			<th id="apples-imp">Apples</th>
			<th id="oranges-dom">Oranges</th>
			<th id="apples-dom">Apples</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th id="sydney" colspan="5">Sydney</th>
		</tr>
		<tr>
			<th id="wholesale-sydney" headers="sydney">Wholesale</th>
			<td headers="imported oranges-imp sydney wholesale-sydney">$1.00</td>
			<td headers="imported apples-imp sydney wholesale-sydney">$1.25</td>
			<td headers="domestic oranges-dom sydney wholesale-sydney">$1.20</td>
			<td headers="domestic apples-dom sydney wholesale-sydney">$1.00</td>
		</tr>
		<tr>
			<th id="retail-sydney" headers="sydney">Retail</th>
			<td headers="imported oranges-imp sydney retail-sydney">$2.00</td>
			<td headers="imported apples-imp sydney retail-sydney">$3.00</td>
			<td headers="domestic oranges-dom sydney retail-sydney">$1.80</td>
			<td headers="domestic apples-dom sydney retail-sydney">$1.60</td>
		</tr>
		<tr>
			<th id="melbourne" colspan="5">Melbourne</th>
		</tr>
		<tr>
			<th id="wholesale-melbourne" headers="melbourne">Wholesale</th>
			<td headers="imported oranges-imp melbourne wholesale-melbourne">$1.20</td>
			<td headers="imported apples-imp melbourne wholesale-melbourne">$1.30</td>
			<td headers="domestic oranges-dom melbourne wholesale-melbourne">$1.00</td>
			<td headers="domestic apples-dom melbourne wholesale-melbourne">$0.80</td>
		</tr>
		<tr>
			<th id="retail-melbourne" headers="melbourne">Retail</th>
			<td headers="imported oranges-imp melbourne retail-melbourne">$1.60</td>
			<td headers="imported apples-imp melbourne retail-melbourne">$2.00</td>
			<td headers="domestic oranges-dom melbourne retail-melbourne">$2.00</td>
			<td headers="domestic apples-dom melbourne retail-melbourne">$1.50</td>
		</tr>
	</tbody>
</table>
-->