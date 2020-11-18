<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>MSW-Admin</title>   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
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
<body>    
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li></br></li>   
                    <li class="menu-title">ENTRY LIST</li>
                     <li>
                        <a href="admin_teachers_list.php"> <i class="menu-icon fa fa-address-card"></i>Faculty Enrollment </a>
                    </li>
					 <li>
                        <a href="admin_students_list.php"> <i class="menu-icon fa fa-address-card-o"></i>Student Enrollment </a>
                    </li>
                    <li class="menu-title">ACADEMICS</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil-square-o"></i>Field Work</a>
                        <ul class="sub-menu children dropdown-menu">                         
                            <li>
							 <a href="admin_field_atten.php"><i class="menu-icon fa fa-user-plus"></i>Attendance</a></li>
							<li>
							 <a href="admin_student_leave.php"><i class="menu-icon fa fa-user-times"></i>Leave</a></li>
							 <li>
							  <a href="admin_org_details.php"><i class="menu-icon fa fa-fort-awesome"></i>Organisation Details</a></li>
							  <li>
							   <a href="admin_field_report.php"><i class="menu-icon fa fa-newspaper-o"></i>Report</a></li>
                        </ul>
                    </li>
                     
					 <li>
                        <a href="admin_guest_list.php"> <i class="menu-icon fa fa-book"></i>Guest Lectures </a>
                    </li>
                     <li class="menu-title">CONTENT</li>
                     <!--li>
                        <a href="admin_alumnae_list.php"> <i class="menu-icon fa fa-group"></i>Alumnae </a>
                    </li!-->
					 <li>
                        <a href="admin_resource_list.php"> <i class="menu-icon fa fa-id-badge"></i>Resource Person </a>
                    </li>
					<li>
                        <a href="../multiple-image/index.php"> <i class="menu-icon fa fa-group"></i>Gallery</a>
                    </li>
					 <!--li class="menu-title">LOGIN</li>
                            <li>
							 <a href="admin_field_atten.php"><i class="menu-icon fa fa-user-plus"></i>Admin-login</a></li>
							<li>
							 <a href="admin_student_leave.php"><i class="menu-icon fa fa-user-times"></i>Alumnae-Register</a></li>
							 <li>
							  <a href="admin_org_details.php"><i class="menu-icon fa fa-fort-awesome"></i>Alumnae-Login</a></li!-->
							   
                   <li class="menu-title">SOCIAL MEDIA</li>
					
					 <li>
                        <a href="../chat/index.php"> <i class="menu-icon fa fa-id-badge"></i>Message/chat </a>
                    </li>
					 <li>
                        <a href="../news-portal/newsportal"> <i class="menu-icon fa fa-id-badge"></i> MSW-Newsletter</a>
                    </li>
					<li>
                        <a href="../twitter/login.php"> <i class="menu-icon fa fa-id-badge"></i>Sociogram</a>
                    </li>
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
    <a href="/MSW/MSW/activities.html">Activities</a>
	  <a href="/MSW/MSW/msw_gallery.html">Gallery</a>
</div>
                <div class="navbar0" id="main0">                  
<button class="openbtn" onclick="openNav()"><i class="fa fa-bars"></i><img src="new logo.jpg" width="45px" height="45px" alt="Logo"></button>
</div> </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="adminlogo.png" alt="User Avatar">
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
	<h4 class="box-title">STUDENT'S SEMESTER ENROLLMENT</h4>
                           
<div id="style_informations">
	<form method="post" >
    <div>
   	 <table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td class="label"><label for="restxt">Academic Year</td>
               <td><select class="text" type="text" name="restxt" required>
<option value="NULL" ></option>
<option value="2019-2020" >2017-2018</option>
<option value="2020-2021" >2018-2019</option>
<option value="2021-2022" >2019-2020</option>
</select></tr>
			  <tr>
				<td class="label"><label for="sem" >Semester</label></td>
<td><input type="radio" name="sem" id="sem" value="odd" required>
<label for="sem">Odd</label>
<input type="radio" name="sem" value="even" id="sem" required>
<label for="sem">Even</label>
            </tr>
	  </table>
    </form>
	 </div>
	</div>
	
                            <div class="card-body">
								<form method="POST">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6"><h2>SEMESTER ENROLLMENT</h2></div>
                <div class="col-sm-6">
                            <input type="submit" class="pres" name="one" value="1st Years">
                            <input type="submit" class="all" name="two" value="2nd Years">
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
		<?php
			$i=1;
			ini_set("date.timezone","America/New_York");
            if($_POST["one"])
			{
				
			$d=date("Y")-1;
			$sql1="SELECT * FROM `msw_student`.`student_details` where `batch`=$d";
			$res1= mysql_query($sql1);
            while($row1=mysql_fetch_array($res1)){
				echo"<tr>";
            
        
            echo"<td align='center'>";?><input type="checkbox" name="sem" value="even" id="sem">
<?php echo $row1['regno'];echo"</td>";
			
			
			}
			?>
			<tr>
			<td align="center">
				<input type="submit" name="sub" value="Submit" class="btn">
                </td>	
            </tr>
			<?php
			}
            if($_POST["two"])
			{
						$d=date("Y")-2;
			$sql1="SELECT * FROM `msw_student`.`student_details` where `batch`=$d";
			$res1= mysql_query($sql1);
            while($row1=mysql_fetch_array($res1)){
				echo "<tr>";
            echo"<td align='center'>";?><input type="checkbox" name="stu" id="stu">
<?php 
$r=$row1['regno'];
echo $row1['regno'];echo"</td>";
			}
			
			?>
			<tr>
			<td align="center">
				<input type="submit" name="sub" value="Submit" class="btn">
                </td>	
            </tr>
			<?php
			if($_POST['sub'] && ($_POST['stu']))
			{
				
				if (isset($_POST['stu'])) {
								$ispresent =  $_POST['stu'];	
							}
							for($j = 0; $j < 2; $j++)
							{
							if (count($ispresent)) {
										$p = (in_array($st_sid[$j], $ispresent)) ? 'present' : 'absent';
										}
										echo "<tr>"; echo "<td>";echo $p;echo "</tr>"; echo "</tr>";
									
							}
				
			}
			
			}
    ?>   
	
        </table>
    </div>
	</form>
                            </div>
	
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