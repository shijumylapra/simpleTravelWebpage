<!DOCTYPE html>
<!-- Design and Code SHIJU ABRAHAM 
15/Aug/2019
-->
<html lang="en">

<head>
<title>Around the World</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<script type="text/javascript" src="bk.js"></script>


<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<style>

  

</style>

<script>

  function clear()
  {
    document.getElementById('msg').innerHTML = "";
  }
     function sendEnquiryform()
   {
     
        document.getElementById('msg').innerHTML = "";

    if( document.myForm.log_txt.value == "" )
    {
        document.getElementById('msg').innerHTML = "Please provide your email id!";    
     
            document.myForm.log_txt.focus() ;
            return false;
        }
         if( document.myForm.log_pass.value == '' ) 
         {
                 document.getElementById('msg').innerHTML = "Please provide your password!";  
            document.myForm.log_pass.focus() ;
            return false;
         }
         

  return true;

      }

      //document.getElementById('log_txt').value='';
     // document.getElementById('log_pass').value='';

    </script>
    <script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:500,
		pauseTime:3000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.4, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
</head>


<body id="page1" onload ="clear()">
<!-- START PAGE SOURCE -->


<div class="extra">

  <div class="main">

    <header class="hd">

      <div class="headwrapper">
        
      <div class="parent">
        
          <div class="column">
              <h1><a href="index.php" id="logo">TRAVEL EXPERTS</a></h1>
          </div>
              <div class="columnr">
              <details id="dlogin">
    <summary>User Login</summary>
                   <form id="login_form" name="myForm" method="POST"  onsubmit= "return sendEnquiryform()">
                <fieldset>
                  <legend>Please login</legend>
                    <label for="example_email">Email Address</label>
                    <input type="text" size="20" name="log_txt" id="example_email" />
                    <label for="example_password">Password</label>
                    <input type="password" size="20" name="log_pass" id="example_password" />
                    <input type="submit" name="submit1" value="Login" />
                    <label><span> </span>  <div id="msg">
                    </div> </label>
                             </fieldset>
                              </form>
    
  <!--  <p>New User <a href="signup.php">Register Here</a></p> -->
    
</details>
</div>
              <h1><a href="index.php" id="logo1"></a></h1>
                    </div>
              <div class="column1">
                 
      
          <?php 
            include('mysql_connect.php');
            
            if(isset($_POST["submit1"]))
            {
            //echo '<style>.topbar { display:none;}</style>';
            $login = $_POST['log_txt'];
            $passwd = $_POST['log_pass'];
          
            $rs="select CustomerId,CustFirstName from cusregister where CustEmail='".$login."' and CusPassword='".$passwd."' ";
            if(!empty($login))
           //if (isset($_POST['log_txt']) && strlen($_POST['log_pass']) > 0)
            {
             
            if($result = mysqli_query($bcon,$rs) )
              {
         
              if(mysqli_num_rows($result) > 0)
              {
                        while($row = mysqli_fetch_array($result))
                      {
                        session_start();
                        // $_SESSION['username'] = $login;zzzzz
                        $CusId =  $row['CustomerId'];
                        $fname = $row['CustFirstName'];
                        echo "<script> location.href='Result1.php?var1=$CusId?var2=$fname'; </script>";
                        // echo "<input type=\"hidden\" name=\"login_email\" id=\"login_email\" value=\"" . $_SESSION['$login'] . "\"";                }
                    }
              }
              else
            {
              echo '<script type="text/javascript">' . 
              'document.getElementById("msg").innerHTML = "Username or Password id incorrect";' .
              '</script>';
            }
          }
            mysqli_close($bcon);
            }
        }
            ?> 
          
          
          
             </div>

            <nav>
              <ul id="menu">
                <li><a href="index.php" class="nav1">Home</a></li>
                <li><a href="packages.php" class="nav3">Packages</a></li>
                <li><a href="Cuscontact.php" class="nav3">Contacts</a></li>
                <li><a href="log1.php" class="nav5">Login</a></li>
                  </ul>
            </nav>

              <div id="tooplate_middle">
                  
             
              <div id="slider">
                    <a href="Packages.php"><img src="images/slideshow/01.jpg" alt="" title="Airfaire, Hotel and Eco Tour." /></a>
                    <a href="Packages.php"><img src="images/slideshow/02.jpg" alt="" title="8 Day All Inclusive Hawaiian Vacation" /></a>
                    <a href="Packages.php"><img src="images/slideshow/03.png" alt="" title="Cruise the Caribbean & Celebrate the New Year." /></a>
                    <a href="#"><img src="images/slideshow/05.jpg" alt="" title="Euro Tour with Rail Pass and Travel Insurance" /></a>
                       </div>	
             

     </div>
  
    </header>
    

    <section id="content">
      <article class="col1">
        <h3>Hot Travel</h3>
        <div class="pad">
          <div class="wrapper under">
            <figure class="left marg_right1"><img src="images/page1_img1.jpg" alt=""></figure>
            <p class="pad_bot2"><strong>Italy<br>
              Holidays</strong></p>
            <p class="pad_bot2">Italy began as a collection of city-states. Today each of its many cities still feels like its own little world with its own set of world-famous treasures</p>
            <a href="#" class="marker_1"></a> </div>
          <div class="wrapper under">
            <figure class="left marg_right1"><img src="images/page1_img2.jpg" alt=""></figure>
            <p class="pad_bot2"><strong>Kerala<br>
              Travel</strong></p>
            <p class="pad_bot2">This slender coastal strip is defined by its layered landscape: almost 600km of glorious Arabian Sea coast and beaches</p>
            <a href="#" class="marker_1"></a> </div>
          <div class="wrapper">
            <figure class="left marg_right1"><img src="images/page1_img3.jpg" alt=""></figure>
            <p class="pad_bot2"><strong>Vancouver<br>
              Holidays</strong></p>
            <p class="pad_bot2"> Vancouver as “a world-class city with ocean.</p>
            <a href="#" class="marker_1"></a> </div>
        </div>
      </article>
      <article class="col2 pad_left1">
        <h2>Popular Places</h2>
        <div class="wrapper under">
          <figure class="left marg_right1"><img src="images/page1_img4.jpg" alt=""></figure>
          <p class="pad_bot2"><strong>San Francisco</strong></p>
          <p class="pad_bot2">The City by the Bay offers something for everyone. Travelers love the city's iconic sights, including the Golden Gate Bridge and Alcatraz, its vibrant neighborhoods like the Mission District and Chinatown, and its outdoor offerings, such as Muir Woods National Monument, Golden Gate Park and Ocean Beach. </p>
          <p class="pad_bot2"><strong> Palace of Fine Arts to check out!</strong>  San Francisco is home to an excellent and diverse food scene, boasting everything from Michelin-starred eateries to tasty food trucks to the popular Ferry Building Marketplace food hall.</p>
          <a href="#" class="marker_2"></a> </div>
        <div class="wrapper">
          <figure class="left marg_right1"><img src="images/page1_img5.jpg" alt=""></figure>
          <p class="pad_bot2"><strong>Banff, Alberta</strong></p>
          <p class="pad_bot2">Outdoor enthusiasts should add Banff to their bucket lists. Surrounded by the Rocky Mountains and Banff National Park, this Canadian vacation spot offers active pursuits galore, ranging from hiking, whitewater rafting and caving to skiing, dogsledding and snowshoeing. .</p>
          <p class="pad_bot2">The area also hosts cultural and musical performances throughout the year. Plus, the après-ski scene here is top-notch: Skiers and snowboarders can wind down with drinks by the fire and meet new friends after a day on the slopes..</p>
          <a href="#" class="marker_2"></a> </div>
      </article>
    </section>
  </div>
  <div class="block"></div>
</div>


    <footer>
      
      <?php include("footer.php") ?>;
  
    </footer>

<script type="text/javascript"> Cufon.now(); </script>
        

</body>
</html>

<!-- -->