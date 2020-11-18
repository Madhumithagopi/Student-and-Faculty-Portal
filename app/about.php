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
  background-image: url("5.jpeg");
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
                    <img src="new logo.jpg" alt="Logo" width="6%" height="10%"><a style="font-size:30px;">  <b>MSW-SOCIAL WORK PROGRAMME</b></a>
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
      <a href="Elaadmin-master/admin_students_list.php">Field work</a>
      <a href="activities.html">Other activities</a>
      <a href="Elaadmin-master/admin_guest_list.php">Guest lectures</a>
    </div>
  </div> 
  <a href="Elaadmin-master/admin_alumnae_list.php"><i class="fa fa-group"></i>  Alumnae</a>
   <a href="Elaadmin-master/admin_resource_list.php"><i class="fa fa-id-badge"></i>  Resource persons</a>
   <a href="app/index.php" class="right"><i class="fa fa-user"></i>  Login</a>
</div>

<header class="bgimg" id="home">
  <div class="w3-display-bottomright w3-center w3-padding-large">
    
  </div>
</header>
<div class="w3-sand w3-large">
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE MSW</span></h5>
    <p>The Cafe was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p>In addition to our full espresso and brew bar menu, we serve fresh made-to-order breakfast and lunch sandwiches, as well as a selection of sides and salads and other good stuff.</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"Use products from nature for what it's worth - but never too early, nor too late." Fresh is the new sweet.</i></p>
      <p>Chef, Coffeeist and Owner: Liam Brown</p>
    </div>
  </div>
</div>
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHERE TO FIND US</span></h5>
    <section id="content" >
<h3><font color="#060606">
<p><strong>DEPARTMENT</strong>   : Social science</p>
<p><strong>PROGRAMME</strong>    : MSW-Master Of Social Work</p>
<p><strong>SHIFT TIMING</strong> : 8:00am to 12:50pm</p>
</h3></font>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d982.4943969424337!2d78.12930401429139!3d9.9358225928952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c5eb0aa22309%3A0x2ad114e5d02deba!2sLady+Doak+College!5e0!3m2!1sen!2sin!4v1512468925973" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
  </div>
    </div>
</body>
</html>
