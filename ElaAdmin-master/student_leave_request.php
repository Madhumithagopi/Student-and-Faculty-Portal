<?php
session_start();
include('conection/connect_student.php');
if(isset($_POST['apply']))
{
$regno=$_SESSION['empid'];
$name=$_SESSION['name'];
$leavetype=$_POST['leavetypetxt'];
$reason=$_POST['reasontxt'];  
$fromdate=$_POST['fromdatetxt'];  
$todate=$_POST['todatetxt'];
$org_permission=$_POST['orgpertxt'];
 $sql1="SELECT * FROM `student_details` where `regno`='".$_SESSION['empid']."'";

			$res1= mysql_query($sql1);
            while($row1=mysql_fetch_array($res1)){
			
			//echo $row1['fac_id'];
			$facid1= $row1['facid1'];
			$sem=$row1['semester'];
			}
if($fromdate < $todate){
$sql=mysql_query("INSERT INTO student_leave_request VALUES(
NULL,
'$regno',
'$name',
'$facid1',
'$leavetype',
'$reason',
'waiting for Approval',
'$fromdate',
'$todate',
'$org_permission','$sem'
)");
}
if($sql==true)
{
$msg="Leave applied successfully";
}
else 
{
$error="Please try again..ToDate should be greater than FromDate";
}
}
    ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>MSW-Student</title>   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"  type="text/css" href="css/style_entry.css" />
<link rel="stylesheet"  type="text/css" href="css/style_button.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
   <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
	.text{
float:left;
width:250px;
height:30px;
padding:5px;
box-sizing:border-box;
}
.card{
	width:1000px;
}
.labe{
text-transform:uppercase;
float:left;
width:200px;
font-size:16px;
font-weight:bold;
padding-bottom:15px;
color:red;
padding-top:15px;
}
.label{
text-transform:uppercase;
float:left;
width:1000px;
font-size:20px;
font-weight:bold;
padding-bottom:15px;
color:red;
padding-top:15px;
}
.tex{
float:left;
font-width:250px;
height:40px;
padding:8px;

box-sizing:border-box;
}
    </style>
<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li></br></li>
                    <li class="menu-title">PROFILE</li>
                     <li>
                        <a href="student_profile.php"> <i class="menu-icon fa fa-address-card"></i>Student Profile </a>
                    </li>
                    <li class="menu-title">FIELD WORK</li>
							<li><a href="student_attendance.php"><i class="menu-icon fa fa-user-plus"></i>Attendance</a></li>
							<li><a href="student_organisation_list.php"><i class="menu-icon fa fa-fort-awesome"></i>Organisation Details</a></li>
							<li><a href="student_report_submission.php"><i class="menu-icon fa fa-newspaper-o"></i>Report Submission</a></li>
							 <li class="menu-title">LEAVE REQUEST</li>
                     <li>
                        <a href="student_leave_request.php"> <i class="menu-icon fa fa-address-card"></i>Apply for Leave </a>
                    </li>
					 <li>
                        <a href="student_leave_history.php"> <i class="menu-icon fa fa-address-card-o"></i>Leave history </a>
                    </li>
                    </li>
                    <li class="menu-title">SOCIAL MEDIA</li>
					
					 <li>
                        <a href="../chat/index.php"> <i class="menu-icon fa fa-envelope"></i>Message/chat </a>
                    </li>
					<li>
                        <a href="student_announcement.php"> <i class="menu-icon fa fa-bell"></i>Announcements </a>
                    </li>
					 <li>
                        <a href="../news-portal/newsportal"> <i class="menu-icon fa fa-id-badge"></i> MSW-Newsletter</a>
                    </li>
					<li>
                        <a href="../twitter/login.php"> <i class="menu-icon fa fa-id-badge"></i>Sociogram</a>
                    </li><!--li>
                        <a href="widgets.html"> <i class="menu-icon fa fa-map-o"></i>Research Work </a>
                    </li!-->
                </ul>
            </div>
        </nav>
    </aside>
    <div id="right-panel" class="right-panel">
        <header id="header" class="header">		
           <div class="top-left">
		   <div id="mySidebar" class="sidebar0">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</br></a>
  <a href="/MSW/MSW/home.php"></br>Home</a>
  <a href="/MSW/MSW/about.php">About Us</a>
  <a href="student_resource_list.php">Resource person</a>
  <a href="student_guest_list.php">Guest Lectures</a>
    <a href="/MSW/MSW/activities.html">Activities</a>
	  <a href="/MSW/MSW/gallery.html">Gallery</a>
</div>
                <div class="navbar0" id="main0">                  
<button class="openbtn" onclick="openNav()"><i class="fa fa-bars"></i><img src="new logo.jpg" width="45px" height="45px" alt="Logo"></button>
</div> </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        
                       
                    </div>
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="Userlogo.png" >
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="../signin.php?logout1=1"><i class="fa fa-power -off"></i>Logout</a>
                      <?php 
   if(!empty($_REQUEST['logout1']))
{
session_destroy();  
unset($_SESSION['empid']);
}
	?>
						</div>
                    </div>
                </div>
            </div>
        </header>
        <div class="content">
            <div class="animated fadeIn">
                   <div class="card">
                            <div class="card-body">
							</div>
                              <form method="post">
							<div class="w3-content w3-margin-top" style="max-width:1500px;">
        <div align="center"><table>
		 <h3 color="red">APPLY FOR LEAVE</h3>
		<tr>
		<td class="labe"><label for="leavetypetxt">Leave Type</label></td>
		<td><select class="tex" name="leavetypetxt" type="text">
<option value="NULL">Select leave type</option>
<option value="Medical Leave">Medical Leave</option>
<option value="Casual Leave">Casual Leave</option>
</select>
		</td>
		</tr>
		<tr>
		<td class="labe"><label for="orgpertxt">Organisation Permission</label></td>
<td>
		<select class="tex" name="orgpertxt" type="text" required>
<option value="NULL"></option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
		</td></tr>
<tr>
		
		<td class="labe"><label for="fromdatetxt">From Date</label></td>
<td><input name="fromdatetxt" class="tex" type="date" required></td></tr>
<tr>
<td class="labe"><label for="todatetxt">To Date</label></td>
<td><input name="todatetxt" class="tex" type="date" required></td>
</tr>
<tr>
<td class="labe"><label for="reasontxt">Reason</label>
<td>
<textarea class="txt"name="reasontxt" rows="3" cols="26" required></textarea></td>
</tr>
</br>
<tr><td></td>
<td><input type="submit" class="btn" name="apply"></td></tr>
<tr><td></td><td><?php
if($sql==true)
{
	echo "Leave Request sent successfully";
}else
{
	echo "Kindly check and send";
	}?>
</td></tr>
</br>
</table>
        </div>
      <br>
    </div>
    </div>
  </div>
</div>
	 </div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main0").style.marginLeft = "250px";
}
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main0").style.marginLeft= "0";
}
</script>
   <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>