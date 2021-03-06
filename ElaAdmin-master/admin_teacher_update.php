<?php
session_start();
	require("conection/connect_faculty.php");
$id="";
$opr="";
if(isset($_GET['opr']))
	$opr=$_GET['opr'];
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
if(isset($_POST['btn_upd'])){
	$empid=$_POST['empidtxt'];
	$name=$_POST['nametxt'];
	$dept=$_POST['depttxt'];
	$dept_code=$_POST['deptcodetxt'];
	$email=$_POST['emailtxt'];
	$phone=$_POST['phonetxt'];	
	$designation=$_POST['desitxt'];	
	$sql_update=mysql_query("UPDATE faculty_details SET 
	                        empid='$empid',
							name='$name',
							dept='$dept',
							dept_code='$dept_code',
					        email='$email',							
							phone_no='$phone',	
							designation='$designation'
							WHERE
								id=$id
							");
	if($sql_update==true)
		header("location:admin_teachers_list.php");
	else
		$msg="Update Fail".mysql_error();
	}
?>
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
<body>
<?php
if($opr=="upd")
{
	$sql_upd=mysql_query("SELECT * FROM faculty_details WHERE id=$id");
	$rs_upd=mysql_fetch_array($sql_upd);
}
?>
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
                                <h4 class="box-title">FACULTY LIST UPDATE </h4>
                            </div>	
<div id="style_informations">
	<form method="post" >
    <div>
   	  <table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td class="label"><label for="empidtxt">Employee Id</td>
            	<td>
                	<input type="text" name="empidtxt" class="text" value="<?php echo $rs_upd['empid'];?>" required>
                </td><td></td>
				<td class="label"><label for="nametxt">Name</td>
            	<td>
                	<input type="text" name="nametxt" class="text" value="<?php echo $rs_upd['name'];?>" required>
                </td>
            </tr>
            <tr>
            </tr>
            <tr>
            	<td class="label"><label for="depttxt">Department</td>
                <td>
                	<input type="text" name="depttxt" class="text" value="<?php echo $rs_upd['dept'];?>" required>
                </td><td></td>
				<td class="label"><label for="desitxt">Designation</td>
            	<td><select class="text" name="desitxt" class="text" required>
<option value="">select</option>
<option value="Head and Associate professor" <? if($rs_upd['designation']=="Head and Associate professor"){ echo "selected";}?>>Head and Associate professor</option>
<option value="Coordinator" <? if($rs_upd['designation']=="Coordinator"){ echo "selected";}?>>Coordinator</option>
<option value="Associate professor" <? if($rs_upd['designation']=="Associate professor"){ echo "selected";}?>>Associate professor</option>
<option value="Assistant professor" <? if($rs_upd['designation']=="Assistant professor"){ echo "selected";}?>>Assistant professor</option>
</select>
</td>
            </tr>
            <tr>
            	<td class="label"><label for="deptcodetxt">Department Code</td>
               <td>
                	<input type="text" name="deptcodetxt" class="text" value="<?php echo $rs_upd['dept_code'];?>" required>
              </td>
        <td></td>
            	<td class="label"><label for="phonetxt">Phone Number</label></td>
            	<td>
                	<input type="text" name="phonetxt" class="text" value="<?php echo $rs_upd['phone_no'];?>" required></td>
        	</tr>
			<tr>
            	<td class="label"><label for="emailtxt">Email-Id</td>
               <td>
                	<input type="text" name="emailtxt" class="text" value="<?php echo $rs_upd['email'];?>" required>
              </td>
			  </tr>
            <tr>
			<td>            	<a href="admin_teachers_list.php"><input type="button" name="btn_view" value="Back" class="btn"></a>
            </td>
			<td><a href="admin_teachers_list.php"><input class="btn" type="button" name="btn_view" value="Faculty List"/></a>
            </td>
                <td colspan="2">
				<input type="submit" name="btn_upd" value="Update" class="btn">
				
                	</td>
					
                	<td><input type="reset" value="Cancel" class="btn">
                </td>
            </tr>
			
	  </table>
    </div>
    </form>
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