<?php 
	session_start(); 
	include 'connect_login.php';
include 'utils_database.php';
include 'utils_common.php';
?>
<html lang="en">
<head>
<title>MSW-Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="slide/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
* {
  box-sizing: border-box;
}
.footer {
  padding: 10px;
  height:50%;
  text-align: center;
  background: 000000;
}
.row1 {  
  display: flex;
  font-size:20px;
 background-image:url('gh.jpg') ;
}
.side1 {
  flex: 30%;
  padding: 20px 60px;
  height:40%;
}
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
   background:black;
}
.row::after {
  clear: both;
  display: table;
  background:black;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
.header {
  background-image: url("to.jpg");
   padding: 40px;
  color: black;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.header h1 {
  font-size: 25px;
}
.navbar {
  overflow: hidden;
 background-image:url('tr.jpg');
 border:3px solid #000000;
}
.navbar a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
    font-size: 20px;
}
.navbar a.right {
  float: right;
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-image: url("ori.jpg");
  color: white;
}
.row {  
  display: flex;
  font-size:20px;
  background-image:url('logo3.jpg');
}
.side {
  flex: 30%;
  padding: 20px 10px;
  height:120%;
}
.main {   
  -ms-flex: 70%;
  flex: 70%;
  background-image:url('ui.jpg') ;
  padding: 20px;
}
.fakeimg {
 background-image:url('gh.jpg') ;
  width: 100%;
  padding:10px 10px;
  font-family:verdana;
  font-size:20px;
  color:white;
}
.label{
float:left;
width:100%;
font-size:14px;
font-weight:bold;
padding-bottom:10px;
padding-top:10px;
}
.text{
float:left;
width:280px;
height:35px;
font-size:17px;
padding:5px;
box-sizing:border-box;
}
.textarea{
float:left;
width:280px;
height:60px;
font-size:17px;
padding:5px;
box-sizing:border-box;
}
.btn{
float:left;
width:280px;
height:35px;
padding:5px;
font-size:17px;
font-family:bold;
color:#000000;
box-sizing:border-box;
background:grey;
}
.dropdown {
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn {
  font-size: 20px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.dropdown-content {
  display: none;
    font-size: 16px;
  position: absolute;
  background-image:url('tr.jpg');
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 23px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {
  background-image: url("ori.jpg");
  color:white;
}
.dropdown:hover .dropdown-content {
  display: block;
}
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
	height:20%;
  }
}
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
}
}
</style>
<body>
<div id="header" class="header">
            <div class="top-left">              
                    <img src="neg.jpeg" alt="Logo" width="6%" height="10%"><a style="font-size:30px;">  <b>DEPARTMENT OF SOCIAL SCIENCES<br /></b></a>
					<a style="font-size:25px;"><b>MASTERS IN SOCIAL WORK</b></a>
                </div>
            </div>
			
<div class="navbar">
  <a href="home.php"><i class="fa fa-institution"></i>  Home</a>
  <a href="about.php"><i class="fa fa-user-circle-o"></i>  About us</a>
  <div class="dropdown">
    <button class="dropbtn"><i class="fa fa-graduation-cap"></i>  Academics
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
	<?php 
	if($_SESSION['empid']!=NULL)
	{							
    if($_SESSION['ugroup']=="admin" )
    {                     
    echo "<a href='Elaadmin-master/admin_teachers_list.php'>"; echo "Field work"; echo "</a>";
	}
	elseif($_SESSION['ugroup']=="student" )
	{
	echo "<a href='Elaadmin-master/student_profile.php'>"; echo "Field work"; echo "</a>";
	}
	elseif($_SESSION['ugroup']=="faculty" )
	{
     echo "<a href='Elaadmin-master/faculty_student_list.php'>"; echo "Field work"; echo "</a>";
     }
	else{
	}
	}
	else{
 echo "<a href='signin.php'>"; echo "Field work"; echo "</a>";
	}
	?>
      <a href="activities.html">Other activities</a>
	  <?php
if($_SESSION['empid']!=NULL)
	{							
    if($_SESSION['ugroup']=="admin" )
    {                     
    echo "<a href='Elaadmin-master/admin_guest_list.php'>"; echo "Guest lectures"; echo "</a>";
	}
	elseif($_SESSION['ugroup']=="student" )
	{
	echo "<a href='Elaadmin-master/student_guest_list.php'>"; echo "Guest lectures"; echo "</a>";
	}
	elseif($_SESSION['ugroup']=="faculty" )
	{
     echo "<a href='Elaadmin-master/faculty_guest_list.php'>"; echo "Guest lectures"; echo "</a>";
     }
	else{
	}
	}
	else{
	echo "<a href='signin.php'>"; echo "Guest lectures"; echo "</a>";
	}	  
	  ?>
      
    </div>
  </div> 
   <?php
if($_SESSION['empid']!=NULL)
	{							
    if($_SESSION['ugroup']=="admin" )
    {                     
     echo "<a href='Elaadmin-master/admin_resource_list.php'>";echo "<i class='fa fa-id-badge'>"; echo "</i>"; echo "Resource Persons"; echo "</a>";
	}
	elseif($_SESSION['ugroup']=="student" )
	{
	echo "<a href='Elaadmin-master/student_resource_list.php'>"; echo "<i class='fa fa-id-badge'>"; echo "</i>";echo "Resource Persons"; echo "</a>";
	}
	elseif($_SESSION['ugroup']=="faculty" )
	{
     echo "<a href='Elaadmin-master/faculty_resource_list.php'>";echo "<i class='fa fa-id-badge'>"; echo "</i>"; echo "Resource Persons"; echo "</a>";
     }
	else{
	}
	}
	else{
	echo "<a href='signin.php'>";echo "<i class='fa fa-id-badge'>"; echo "</i>"; echo "Resource Persons"; echo "</a>"; 
	}	  
	  ?>
      <form method="POST" action="">
   <?php 
   if($_SESSION['empid']!=NULL)
	{
		echo "<a href='home.php?logout=1' class='right'>"; echo "<i class='fa fa-user'>"; echo "</i>";  echo "Logout"; echo "</a>";
if(!empty($_REQUEST['logout']))
{
session_destroy();  
unset($_SESSION['empid']);
}
	}
	else{
	echo "<a href='signin.php' class='right'>"; echo "<i class='fa fa-user'>"; echo "</i>";  echo "Login"; echo "</a>";
	}
	?>
  </div>
<div class="row">
  <div class="side">
    <div class="fakeimg">UPDATES</div>
    <marquee height=300px style='font-size:23px;' behavior="scroll" direction="up">Negzhchi<br><br>Madras coats street play Training<br><br>Kalaisalingam intercollege meet<br><br>Anugrha institute of social science conducting seminar on csr<br><br>Human Rights Defender training programme at madura conducted by people's watch<br><br>Counselling course inauguration programme at MISS<br><br>Contemporary ethical issues pseminar conducted by social religious department,American college</marquee>
    </br>
	</br>
    <div >
	<a href="f1.php" class="fakeimg">FIELD WORK INSTRUCTION</a></div></br></br>
    <div >
	<a href="msw_gallery.html" class="fakeimg">MSW-GALLERY</a>
  </div> </br></br>
  <div >
	<a href="activities.html" class="fakeimg">ACTIVITIES</a>
  </div>
  </div>
  <div class="main">
  <div class="cd-slider">
    <ul>
      <li>
        <div class="image" style="background-image:url('bluebox3.jpg');"></div>
      </li>
      <li>
        <div class="image" style="background-image:url('neg.jpeg');"></div>
      </li>
      <li>
        <div class="image" style="background-image:url('3.jpeg');"></div>
      </li>
      <li>
        <div class="image" style="background-image:url('4.jpeg');"></div>
      </li>
      <li>
        <div class="image" style="background-image:url('1.jpeg');"></div>
      </li>     
    </ul>
  </div>
   <script  src="slide/index.js"></script>
    <div class="fakeimg">LATEST ACTIVITIES</div>
    <p>MSW has the student forum named as "NEGZHCHI".</p>
	<p>MSW-NEGZHCHI is comprised and led by the students of social work through which they engaged in various academic activities , extention program and extracurricular activities.</p>
    <p>This year Negzhchi'19 was organized as "One day state level youth festival" on "YOUTH AND ONLINE SAFETY" in collaboration with UNICEF and Thozhamai.</p>
    <br>
	<div class="row">
  <div class="column">
    <img src="parai.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="rural.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="4.jpeg" alt="Mountains" style="width:100%">
  </div>
  </div>
<a href="multiple-image/inde.php" >see more photos</a>
</div>
</div>
</div>
</div>
<footer id="footer">
<div class="row1"> 
	
      <table align="center">	 
         <tr><td>
       <tr><td><center><h2>General Links</h2></center></td></tr>
       <tr><td><h4><a href="about.php"><i class="fa fa-info-circle"></i>   About us</a></h4></td></tr>
       <tr><td><h4><a href="activities.html"><i class="fa fa-file-text-o"></i>   Activities</a></h4></td></tr>
       <tr><td> <h4><a href="msw_gallery.html"><i class="fa fa-image"></i>   Gallery</a></h4></td></tr>
       <table align="right"><tr><td><center><h2>Contact Us</h2></td></tr>
       <tr><td><h4><a href="https://www.google.com/maps/place/Lady+Doak+College/@9.935716,78.131734,20z/data=!4m5!3m4!1s0x0:0x2ad114e5d02deba!8m2!3d9.9358226!4d78.1314927?hl=en-US"><i class="fa fa-map-marker"></i>  Lady Doak College</a></h4></td></tr>
       <tr><td><h4><i class="fa fa-phone"></i>   9994475585</h4></td></tr>
       <tr><td><h4><i class="fa fa-envelope"></i>   socialwork@ldc.edu.in</h4></td></tr></center>
       </table>       
  </footer>
</div>
</form>
</body>
</html>