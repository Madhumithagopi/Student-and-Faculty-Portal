<?php
session_start();
$connect = mysqli_connect("localhost", "root", "gopi2627");  
?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="UTF-8">
    <title>MSW-Faculty</title>   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style1.css">
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
    </style>
<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li></br></li>
					<li>
                        <a href="faculty_profile1.php"> <i class="menu-icon fa fa-user-circle-o"></i>Faculty Profile</a>
                    </li>
                    <li class="menu-title">ENTRY LIST</li>
                     <li>
                        <a href="faculty_student_list.php"> <i class="menu-icon fa fa-address-card-o"></i>Student List </a>
                    </li>
					 <li>
                        <a href="faculty_organisation_list.php"> <i class="menu-icon fa fa-fort-awesome"></i>Organisation List</a>
                    </li>
                <li class="menu-title">ACADEMICS</li>
                <li>
                        <a href="faculty_student_profile.php"> <i class="menu-icon fa fa-user-circle-o"></i>Student Profile </a>
                    </li>
                    <li>
                        <a href="index22.php"><i class="menu-icon fa fa-user-plus"></i>Student Attendance </a>
                    </li>
					<li>
                        <a href="index2.php"><i class="menu-icon fa fa-user-plus"></i>View Attendance </a>
                    </li>
					 <li>
                        <a href="faculty_report_view.php"><i class="menu-icon fa fa-newspaper-o"></i>Student Report</a>
                    </li>
					
                     <li>
                        <a href="faculty_leave_report.php"> <i class="menu-icon fa fa-user-times"></i>Leave Request</a>
                    </li>
                    <li class="menu-title">SOCIAL MEDIA</li>
					
					 <li>
                        <a href="../chat/index.php"> <i class="menu-icon fa fa-envelope"></i>Message/chat </a>
                    </li>
					<li class="menu-title">ANNOUNCEMENTS</li>
					<li>
                        <a href="../ann/index.php"> <i class="menu-icon fa fa-bell"></i>Make Announcements </a>
                    </li>
					<li>
                        <a href="faculty_announcement.php"> <i class="menu-icon fa fa-bell"></i>View Announcements</a>
                    </li>
					
					 <li>
                        <a href="../news-portal/newsportal"> <i class="menu-icon fa fa-id-badge"></i> MSW-Newsletter</a>
                    </li>
					<li>
                        <a href="../twitter/login.php"> <i class="menu-icon fa fa-id-badge"></i>Sociogram</a>
                    </li></ul>
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
  <a href="faculty_resource_list.php">Resource person</a>
  <a href="faculty_guest_list.php">Guest Lectures</a>
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
                            <img class="user-avatar rounded-circle" src="userlogo.png" >
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
		
	<form method="post" >
    <div>
   	 <table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td class="label"><label for="restxt">Academic Year</td>
               <td><select class="text" type="text" name="restxt" required>
<option value="NULL" >Select Year</option>
<option value="2018" >2018-2019</option>
</select></tr>
			  <tr>
				<td class="label"><label for="sem" >Semester</label></td>
<td><input type="radio" name="sem" id="sem" value="Odd" required>
<label for="sem">Odd</label>
<input type="radio" name="sem" value="Even" id="sem" required>
<label for="sem">Even</label>
            </tr>
			<tr>
			<td><input class="btn" type="submit" value="Submit" name="sub"></td>
			</tr>
	  </table>
    </form>
	
	 </div>
                    </div>
                </div>
            </div>
			<?php if($_POST['sub'])
			{
				?>
        <div class="content">
            <div class="animated fadeIn">
                   <div class="card">
                            <div class="card-body">
							 <h4 class="box-title">FACULTY PROFILE </h4>
							<div class="w3-content w3-margin-top" style="max-width:1200px;">
  <div class="w3-row-padding">
    <div class="w3-third">
      <div class="w3-white w3-card-4">
        <div><table>
		<?php
		$query = "SELECT * FROM `msw_faculty`.`faculty_details` where `email`='".$_SESSION['email']."' ";  
                $result = mysqli_query($connect,$query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '
					
		<tr><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" />  </tr>
		 ';
				?><td><h4><i class="fa fa-briefcase fa-fw  w3-margin-right w3-text-teal"></i><b>NAME </b></h4></td>
				
			 <td><?php echo $row['name']; ?></td></tr>	
          <tr>
		 <td><h4><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><b> DESIGNATION</b></h4></td>
		 <td><?php echo $row['designation']; ?></td></tr>
         <tr>
		 <td><h4><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><b>MAIL-ID </b></h4></td>
		 <td><?php echo $row['email']; ?></td></tr>
          <tr>
		  <td><h4><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><b>PHONE NUMBER </b></h4></td>
		  <td><?php echo $row['phone_no']; ?></td></tr>
         </br>
			<?php 
			
			} ?>
          <tr><td><h3><b>STUDENT LIST</b></h3></td></tr>
		  
		  <?php 
		    if($_POST['restxt']=='2018' and $_POST['sem']=='Odd')
			{
		 $sql1="SELECT count(*) as one FROM `msw_student`.`student_details` where `facid1`='".$_SESSION['empid']."' and batch='2018'";
		$result=mysqli_query($connect,$sql1);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['one'];

		?>
			<tr><td>Number of 1st Years</td><td><? echo $num_rows;
			}
			
			if($_POST['restxt']=='2018' and $_POST['sem']=='Even')
			{
		 $sql1="SELECT count(*) as one FROM `msw_student`.`student_details` where `facid2`='".$_SESSION['empid']."' and batch='2018'";
		$result=mysqli_query($connect,$sql1);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['one'];

		?>
			<tr><td>Number of 1st Years</td><td><? echo $num_rows;
			}
			
			?></td></tr>
			<?php 
		    if($_POST['restxt']=='2018' and $_POST['sem']=='Odd')
			{
		 $sql1="SELECT count(*) as two FROM `msw_student`.`student_details` where `facid3`='".$_SESSION['empid']."' and batch='2017'";
		$result=mysqli_query($connect,$sql1);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['two'];
		?>
			<tr><td>Number of 2nd Years</td><td><? echo $num_rows;
			}
			if($_POST['restxt']=='2018' and $_POST['sem']=='Even')
			{
		 $sql1="SELECT count(*) as two FROM `msw_student`.`student_details` where `facid4`='".$_SESSION['empid']."' and batch='2017'";
		$result=mysqli_query($connect,$sql1);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['two'];
		?>
			<tr><td>Number of 2nd Years</td><td><? echo $num_rows;
			}?></td></tr>
			
        </div>
      <br>
    </div>
    </div>
  </div>
</div>
                            </div>
</div>
       </div>
</div>	   
			<?php } ?>
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