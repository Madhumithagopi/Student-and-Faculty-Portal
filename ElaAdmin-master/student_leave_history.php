<?php
session_start();
include 'conection/connect_common.php';
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <title>MSW-Student</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style1.css">
<link rel="stylesheet"  type="text/css" href="css/style_entry.css" />
<link rel="stylesheet"  type="text/css" href="css/style_button.css" />
</head>
   <style>
    body {
        color: #566787;
        background: #f5f5f5;
		font-family: 'Roboto', sans-serif;
	}
	.table-wrapper {
        width: 850px;
        background: #fff;
        padding: 20px 30px 5px;
        margin: 30px auto;
        box-shadow: 0 0 1px 0 rgba(0,0,0,.25);
    }
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		min-width: 50px;
		border-radius: 2px;
		border: none;
		padding: 6px 12px;
		font-size: 95%;
		outline: none !important;
		height: 30px;
	}
    .table-title {
		border-bottom: 1px solid #e9e9e9;
		padding-bottom: 15px;
		margin-bottom: 5px;
		background: rgb(0, 50, 74);
		margin: -20px -31px 10px;
		padding: 15px 30px;
		color: #fff;
    }
    .table-title h2 {
		margin: 2px 0 0;
		font-size: 24px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 40px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table td a {
        color: #2196f3;
    }
	table.table td .btn.manage {
		padding: 2px 10px;
		background: #37BC9B;
		color: #fff;
		border-radius: 2px;
	}
	table.table td .btn.manage:hover {
		background: #2e9c81;		
	}
	.all{
float:left;
padding:8px 9px;
font-size:17px;
font-weight:bold;
color:white;
border:3px solid 555;
background:#1E90FF;
}
.pres{
float:left;
padding:8px 9px;
font-size:17px;
font-weight:bold;
color:white;
border:3px solid 555;
background:#3CB371;
}
.abse{
float:left;
padding:8px 9px;
font-size:17px;
font-weight:bold;
color:white;
border:3px solid 555;
background:#DC143C;
}
    </style>
</head>

<body>
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
        </header><div class="content">
            <div class="animated fadeIn">
                   <div class="card">
                            <div class="card-body">
                                
								<form method="POST">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6"><h2>Field Work Attendance</h2></div>
                <div class="col-sm-6">
				<input type="submit" class="all" name="all" value="Waiting List">
                            <input type="submit" class="pres" name="approve" value="Approved">
                            <input type="submit" class="abse" name="disapprove" value="Disapproved">
                        	
                </div>
            </div>
        </div>
        
			<?php
			$i=1;
            if($_POST["approve"])
			{
				?>
				<table class="table table-striped table-hover">
            <tr>
			<th>S.no</th>
            <th>From Date</th>
            <th>To Date</th>
			<th>Leave Type</th>
			<th>Reason</th>
            <th>Status</th>
            </tr> 
				<?php
			$sql="SELECT * FROM `msw_student`.`student_leave_request` where `regno`='".$_SESSION['empid']."' and `status`='Approved'";
			$res= mysql_query($sql);
			//echo $sql;
            while($row=mysql_fetch_array($res)){
            echo"<tr data-status='approve'>";
            echo"<td>"; echo $i++;echo "</td>";
            echo "<td>";echo $row['from_date'];echo"</td>";
            echo"<td>"; echo $row['to_date'];echo"</td>";
			  echo"<td>"; echo $row['leave_type'];echo"</td>";
			  echo"<td>"; echo $row['reason'];echo"</td>";
			echo"<td data-status='approve'>";echo"<span class='label label-success'>";echo $row['status'];echo "</span>";echo"</td>";           
            echo"</tr>";
			}
			}
			elseif($_POST["disapprove"])
			{
				?>
				<table class="table table-striped table-hover">
            <tr>
			<th>S.no</th>
            <th>From Date</th>
            <th>To Date</th>
			<th>Leave Type</th>
			<th>Reason</th>
            <th>Status</th>
            </tr> 
				<?php
			$sql="SELECT * FROM `msw_student`.`student_leave_request` where `regno`='".$_SESSION['empid']."' and `status`='DisApproved'";
			$res= mysql_query($sql);
            while($row=mysql_fetch_array($res)){
            echo"<tr data-status='disapprove'>";
            echo"<td>"; echo $i++;echo "</td>";
            echo "<td>";echo $row['from_date'];echo"</td>";
            echo"<td>"; echo $row['to_date'];echo"</td>";
			  echo"<td>"; echo $row['leave_type'];echo"</td>";
			  echo"<td>"; echo $row['reason'];echo"</td>";
			echo"<td data-status='disapprove'>";echo"<span class='label label-danger'>";echo $row['status'];echo "</span>";echo"</td>";           
            echo"</tr>";
			}
    }
	else
	{
		?>
				<table class="table table-striped table-hover">
            <tr>
			<th>S.no</th>
            <th>From Date</th>
            <th>To Date</th>
			<th>Leave Type</th>
			<th>Reason</th>
            <th>Status</th>
            </tr> 
				<?php
			$sql="SELECT * FROM `msw_student`.`student_leave_request` where `regno`='".$_SESSION['empid']."' and `status`='waiting for Approval'";
			$res= mysql_query($sql);
            while($row=mysql_fetch_array($res)){
            
            echo"<td>"; echo $i++;echo "</td>";
            echo "<td>";echo $row['from_date'];echo"</td>";
            echo"<td>"; echo $row['to_date'];echo"</td>";
			  echo"<td>"; echo $row['leave_type'];echo"</td>";
			  echo"<td>"; echo $row['reason'];echo"</td>";
			echo"<td data-status='all'>";echo"<span class='label label-warning'>";echo $row['status'];echo "</span>";echo"</td>";           
            echo"</tr>";
			}
    }
	?>   
        </table>
    </div>
	</form>
</div>
<div id="style_div" >
</div>
</br>
<div id="content-input">
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