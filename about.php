<!DOCTYPE html>
<html>
<title>MSW-About</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="slide/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
}
.bgimg {
  background-position: center;
  background-image: url("coll.jpg");
  min-height: 75%;
  
}

* {
  box-sizing: border-box;
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
  <!--height: 15%;--> 
 
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
    echo "<a href='Elaadmin-master/admin_students_list.php'>"; echo "Field work"; echo "</a>";
	}
	elseif($_SESSION['ugroup']=="student" )
	{
	echo "<a href='Elaadmin-master/student_attendance.php'>"; echo "Field work"; echo "</a>";
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
<header class="bgimg" id="home">
  <div class="w3-display-bottomright w3-center w3-padding-large">
  </div>
</header>
<div class="w3-sand w3-large">
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE MSW</span></h5>
    <p>Masters in Social Work is a masters degree in the field of social work.The Lady Doak college started this MSW department in the year 2007.</p>
	<p>MSW is offered as an integrated course with a combination of community development, Medical and Psychiatry and Human Resource Management.</p>
	<p>MSW has the students forum named as "NEGIZHCHI".</p>
	<p>MSW-NEGIZHCHI is comprised and led by the students of social work through which they engage in various academic activities , extention program and extracurricular activities and acts as a platform to enhance their skills.</p>
	<p>The special encouraging of MSW-Department is students participation through</p>
<li>Seminars</li>
<li>Paper presentation</li>
<li>Group discussions</li>
<li>Survey reports</li>
<li>Field work conference</li>
<li>On the spot study/Field visit</li>
<li>Film making</li>
<li>Street play</li>
<li>Parai and folk dance</li>
<li>Rural camp</li>
<li>Foreign exchange program</li>
<li>Intership</li>
<li>concurrent and block placement apart from regular lectures and guest lectures.</li>
<div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"The main motive is to enable the students to become a professional social worker by offering  Post Graduate Degree course through the department of social sciences.."</i></p>
    </div>
    
  </div>
</div>
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHERE TO FIND US</span></h5>
    <section id="content" >
<h3><font color="#060606">
<p><strong>DEPARTMENT</strong>   : Social Sciences</p>
<p><strong>PROGRAMME</strong>    : MSW-Master of Social Work</p>
<p><strong>SHIFT TIMING</strong> : 8:00am to 12:50pm</p>
</h3></font>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d982.4943969424337!2d78.12930401429139!3d9.9358225928952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c5eb0aa22309%3A0x2ad114e5d02deba!2sLady+Doak+College!5e0!3m2!1sen!2sin!4v1512468925973" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
  </div>
    </div>
</body>
</html>
