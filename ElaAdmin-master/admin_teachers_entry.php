<?php
session_start();
	require("conection/connect_faculty.php");
$id="";
$opr="";
if(isset($_GET['opr']))
	$opr=$_GET['opr'];
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
if(isset($_POST['btn_sub'])){
		$empid=$_POST['empidtxt'];
	$name=$_POST['nametxt'];
	$dept='Social Science';
	$dept_code='MSW';
	$email=$_POST['emailtxt'];
	$phone=$_POST['phonetxt'];	
	$designation=$_POST['desitxt'];
	$file=addslashes(file_get_contents($_FILES["image_name"]["tmp_name"]));
	
$sql_ins=mysql_query("INSERT INTO faculty_details VALUES(							
							NULL,
							'$empid',
							'$name' ,
							'$dept',
							'$dept_code',
							'$email',
							'$phone',
							'$designation',
							'$file'
)");
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
<style>
</style>
	<script>  
 $(document).ready(function(){  
      $('#btn_sub').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script> 
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
                                <h4 class="box-title">FACULTY ENROLLMENT</h4>
                            </div>
<div id="style_informations">
	<form method="post" enctype="multipart/form-data" >
    <div>
   	  <table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td class="label"><label for="empidtxt">Employee Id</td>
            	<td>
                	<input type="text" name="empidtxt" class="text" placeholder="Employee Id" required>
                </td><td></td>
				<td class="label"><label for="nametxt">Name</td>
            	<td>
                	<input type="text" name="nametxt" class="text" placeholder="Name" required>
                </td>
            </tr>
            <tr>
            </tr>
            <tr>
			<td class="label"><label for="phonetxt">Phone Number</label></td>
            	<td>
                	<input type="text" name="phonetxt" class="text" placeholder="Phone Number" required></td>
            	<td></td>
				<td class="label"><label for="desitxt">Designation</td>
            	<td><select class="text" name="desitxt" class="text" placeholder="Designation" required>
<option value="">select</option>
<option value="Head and Associate professor">Head and Associate professor</option>
<option value="Coordinator">Coordinator and Associate Professor</option>
<option value="Associate professor">Associate professor</option>
<option value="Assistant professor">Assistant professor</option>
</select>
</td>
            </tr>
            <tr>
            	<td class="label"><label for="emailtxt">Email-Id</td>
               <td>
                	<input type="text" name="emailtxt" class="text" placeholder="Email" required>
              </td>
        <td></td>
            	<td class="label"><label for="image_name">Photo</td>
               <td>
                	<input type="file" name="image_name" placeholder="Photo" required>
              </td>
        	</tr>
			<tr>
            	
			  </tr>
            <tr>
			<td></td>
			<td><a href="admin_teachers_list.php"><input class="btn" type="button" name="btn_view" value="Faculty List" style="width:120px;"></a>
            </td>
                <td colspan="2">
				<input type="submit" name="btn_sub" value="Register" class="btn">
                	</td>
					
                	<td><input type="reset" value="Cancel" class="btn">
                </td>
            </tr>
			<tr><td></td><td><?php if($sql_ins==true)
			{
				echo "Name added Successfully";
			}
			
			?></td></tr>
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