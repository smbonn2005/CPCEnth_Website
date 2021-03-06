<?php
  if(isset($_COOKIE['username'])){
  header('Location: loggedin.php');
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Custom PC Enthusiasts</title>
  <meta name="description" content="Website for Computer and Gaming Enthusiasts" />
  <meta name="keywords" content="pc, computers, gaming, technology, hardware" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="icon" type="image/ico" href="images/favicon.ico" sizes="16x16">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
  <script type="text/javascript">
  $(window).load(function() {
    $('#slider').nivoSlider();
    $.get('./news.html',function(data){
      $('#sidebar').html(data);
    });
  });

  function login(user,pass){
    $.ajax({
      method: "POST",
      url: "./login.php",
      data: {
        username: user,
        password: pass
      },
      success: function(data){
        if(data == "true"){
          window.location = './loggedin.php';
        }else{
          alert("Login failed.");
        }
      },
      error: function(){alert("There was a problem logging in.");}
    });
  }
  </script>
  <style>
    div.submitWrapper  {
      width: 250px;
      margin: 0 auto;    
}    
  </style>
</head>

<body>
  <div id="main"> 
   <div id="site_content">
    <div id="heading">
     <div class="site_heading">
       <h1 style="width: 446px">Custom<span> PC </span>Enthusiasts</h1> 
     </div><!--close site_heading-->
     <div class="site_slogan">    
      <h2>Share and Discuss Anything Related to PC's</h2>
    </div><!--close site_slogan-->
  </div><!--close heading-->
  <div id="header">
   <div id="menubar">
    <ul id="menu">
      <li><a href="index.html">Home</a></li>
      <li><a href="adminprojects.html">Admin Projects</a></li>
      <li><a href="store.html">Store</a></li>
      <li><a href="vip.html">VIP</a></li>
      <li><a href="links-referrals.html">Links / Referrals</a></li>
      <li><a href="contactus.html">Contact Us</a></li>
      <li class="current"><a href="admin.php">Admin Login</a></li>
    </ul>
  </div><!--close menubar-->
</div><!--close header-->   
<div id="banner_image">
 <div id="slider-wrapper">        
  <div id="slider" class="nivoSlider">
    <img src="images/slide1.jpg" alt="" />
    <img src="images/slide2.jpg" alt="" />
    <img src="images/slide3.jpg" alt="" />
  </div><!--close slider-->
</div><!--close slider_wrapper-->
</div><!--close banner_image-->       
<div id="content">
  <h1>Admins Please Login</h1>
  <div class="content_underline"></div>
  <div class="content_text">
    <form onsubmit='login($("#username").val(),$("#password").val());return false;'>
      Username: <input type='text' id='username' /><br />
      <br />
      Password: <input type='password' id='password' /><br />
      <div class='submitWrapper'>  
        <input type='submit' value='Login!' />
      </div>    
    </form>
  </div><!--close content_text-->  
  <br style="clear:both"/>
</div><!--close content-->      

<div class="sidebar_container">       
  <div id="sidebar">

  </div><!--close sidebar-->  
</div><!--close sidebar_container-->    

</div><!--close site_content--> 
</div><!--close main-->
</body>
</html>
