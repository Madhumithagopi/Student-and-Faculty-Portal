<?php
session_start();	
	require("conection/connect_admin.php");
	$msg="";
	$opr="";
	if(isset($_GET['opr']))
	$opr=$_GET['opr'];
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];	
	if($opr=="del")
{
	$del_sql=mysql_query("DELETE FROM resource_person WHERE res_id=$id");
	if($del_sql)
		$msg="1 Record Deleted... !";
	else
		$msg="Could not Delete :".mysql_error();				
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
	$sql_upd=mysql_query("SELECT * FROM resource_person");
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
                                <h4 class="box-title">RESOURCE PERSONS LIST </h4>
                            </div>
							<div id="style_div" >
<form method="post">
<table width="755">
	<tr>    
<td width="70px">
</td>	
       <td width="40px">
        	<input type="submit"  class="btn" name="btnsearch" value="Search"/></td>
        </td>
<td><input type="text" class="text" name="searchtxt"  autocomplete="off" placeholder="Search"/>
        </td>
		<td width="300px">

</td>
        <td>
        	<a href="admin_resource_entry.php"><input type="button" name="butAdd" value="Add New" class="btn" /></a>
    </tr>
</table>
</form>
</div>
</br>
<div id="content-input">
<form method="post">
    <table border="2" width="1050px" align="center" cellpadding="3"  cellspacing="0">
        <tr>
            <th>Resource Id</th>
            <th>Resource Person</th>
			 <th>Designation</th>
			 <th>Phone Number</th>
             <th>Email</th>
             <th>Address</th>
			 <th>No.of Times(Visited)</th>
			 <th>Guest Lectures</th>
			  <th colspan="2">Operation</th>
        </tr>        
        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM resource_person WHERE resourceperson_name like '%$key%' OR res_id like '%$key%' OR designation like '%$key%' OR phone_no like '%$key%' OR email like '%$key%' OR address like '%$key%' OR times_visited like '%$key%'");
	else
		 $sql_sel=mysql_query("SELECT * FROM resource_person");   
   $i=0;
    while($row=mysql_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $row['res_id'];?></td>
            <td><?php echo $row['resourceperson_name'];?></td>
            <td><?php echo $row['designation'];?></td>
            <td><?php echo $row['phone_no'];?></td>
            <td><?php echo $row['email'];?></td>            
            <td><?php echo $row['address'];?></td>
            <td><?php echo $row['times_visited'];?></td>
			<td align="center"><a href="everyone.php?tag=admin_guest_entry&opr=app&rs_id=<?php echo $row['res_id'];?>">Add</a></td>
            <td><a href="everyone.php?tag=admin_resource_update&opr=upd&rs_id=<?php echo $row['res_id'];?>" title="Update"><img src="picture/update.png"/></a></td>
            <td><a href="?tag=admin_resource_list&opr=del&rs_id=<?php echo $row['res_id'];?>" title="Delete"><img src="picture/delete.png" /></a></td>
             </tr>
    <?php	
    }	
    ?>
    </table>
	</form>
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