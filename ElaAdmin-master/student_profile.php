<?php
session_start();
$connect = mysqli_connect("localhost", "root", "gopi2627");  
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
                                <h4 class="box-title">STUDENTS PROFILE </h4>
							<div class="w3-content w3-margin-top" style="max-width:1500px;">
 
        <div><table><tr><td></td><td>
		<?php
		$query = "SELECT * FROM `msw_student`.`student_details` where `email`='".$_SESSION['email']."' ";  
                $result = mysqli_query($connect,$query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '
					
		<tr><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" />  </tr>
		 ';?></td><td><h4><i class="fa fa-briefcase fa-fw  w3-margin-right w3-text-teal"></i><b>NAME </b></h4></td>
				<td><?php echo $row['name']; ?></td>
			 </tr>	
          <tr>
		 <td><h4><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><b>REGISTER NUMBER </b></h4></td>
		 <td><?php echo $row['regno']; ?></td></tr>
         <tr>
		 <td><h4><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><b>MAIL-ID </b></h4></td>
		 <td><?php echo $row['email']; ?></td></tr>
          <tr>
		  <td><h4><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><b>PHONE NUMBER </b></h4></td>
		  <td><?php echo $row['phone_no']; ?></td></tr>
         </br>
			<?php 
			
			} ?>
          
		  <?php 
		    
		 $sql1="SELECT * FROM `msw_student`.`student_details` where `regno`='".$_SESSION['empid']."'";
		ini_set("date.timezone","America/New_York");
		//echo $d;
			$res1= mysqli_query($connect,$sql1);
            while($row1=mysqli_fetch_array($res1)){
			$fac1=$row1['facid1'];
			$fac2=$row1['facid2'];
			$fac3=$row1['facid3'];
			$fac4=$row1['facid4'];
			$org1=$row1['orgid1'];
			$org2=$row1['orgid2'];
			$org3=$row1['orgid3'];
			$org4=$row1['orgid4'];
			}
			     
			  $sql2="SELECT * FROM `msw_admin`.`organisation_details` where `org_id`='".$org1."'";
			$res2= mysqli_query($connect,$sql2);
            while($row2=mysqli_fetch_array($res2)){
                $orgn1=$row2['org_name'];
			    $orgc1=$row2['org_category']; 
			    $orga1=$row2['address']; 
		  }	  
		  		  
		 $sql3="SELECT * FROM `msw_faculty`.`faculty_details` where `empid`='".$fac1."'";
		// echo $sql1;
			$res3= mysqli_query($connect,$sql3);
            while($row3=mysqli_fetch_array($res3)){
				?><tr><td></td><td><h3 style="color:blue;"><b>SEMESTER-1</b></h3></td></tr>
				<tr><td><h3 style="color:red;">Faculty Guide</h3></td><td></td><td></td>
				<td><h3 style="color:red;">Organisation</h3></td></tr>
         <tr>
		 <td><h4><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><b>NAME </b></h4></td>
		 <td>
			<?php echo $row3['name']; ?>
			<td></td>
			<td><h4><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><b>NAME </b></h4></td>
		 </td>
			<td><?php echo $orgn1; ?></td></tr>
          <tr>
		  <td><h4><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><b>MAIL-ID </b></h4>
		  </td><td><?php echo $row3['email']; ?></td><td>
			<td><h4><i class="fa fa-cc fa-fw w3-margin-right w3-large w3-text-teal"></i><b>CATEGORY </b></h4></td>
		 </td>
			<td><?php echo $orgc1; ?></td></tr>
          <tr>
		  <td><h4><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><b>PHONE NUMBER </b></h4>
		  </td><td><?php echo $row3['phone_no']; ?></td><td></td>
		  <td><h4><i class="fa fa-address-card-o fa-fw w3-margin-right w3-large w3-text-teal"></i><b>ADDRESS </b></h4></td>
		 </td>
			<td><?php echo $orga1; ?></td></tr>
          <br>
			<?php
		  }	

		 $sql4="SELECT * FROM `msw_admin`.`organisation_details` where `org_id`='".$org2."'";
			$res4= mysqli_query($connect,$sql4);
            while($row4=mysqli_fetch_array($res4)){
                $orgn4=$row4['org_name'];
			    $orgc4=$row4['org_category']; 
			    $orga4=$row4['address']; 
		  }	  
		  		  
		 $sql5="SELECT * FROM `msw_faculty`.`faculty_details` where `empid`='".$fac2."'";
		// echo $sql1;
			$res5= mysqli_query($connect,$sql5);
            while($row5=mysqli_fetch_array($res5)){
				?><tr><td></td><td><h3 style="color:blue;"><b>SEMESTER-2</b></h3></td></tr>
				<tr><td><h3 style="color:red;">Faculty Guide</h3></td><td></td><td></td>
				<td><h3 style="color:red;">Organisation</h3></td></tr>
         <tr>
		 <td><h4><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><b>NAME </b></h4></td>
		 <td>
			<?php echo $row5['name']; ?>
			<td></td>
			<td><h4><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><b>NAME </b></h4></td>
		 </td>
			<td><?php echo $orgn4; ?></td></tr>
          <tr>
		  <td><h4><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><b>MAIL-ID </b></h4>
		  </td><td><?php echo $row5['email']; ?></td><td>
			<td><h4><i class="fa fa-cc fa-fw w3-margin-right w3-large w3-text-teal"></i><b>CATEGORY </b></h4></td>
		 </td>
			<td><?php echo $orgc4; ?></td></tr>
          <tr>
		  <td><h4><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><b>PHONE NUMBER </b></h4>
		  </td><td><?php echo $row5['phone_no']; ?></td><td></td>
		  <td><h4><i class="fa fa-address-card-o fa-fw w3-margin-right w3-large w3-text-teal"></i><b>ADDRESS </b></h4></td>
		 </td>
			<td><?php echo $orga4; ?></td></tr>
          <br>
			<?php
		  }	

        $sql6="SELECT * FROM `msw_admin`.`organisation_details` where `org_id`='".$org3."'";
		
			$res6= mysqli_query($connect,$sql6);
            while($row6=mysqli_fetch_array($res6)){
                $orgn=$row6['org_name'];
			    $orgc=$row6['org_category']; 
			    $orga=$row6['address']; 
		  }	  
		  		  
		 $sql7="SELECT * FROM `msw_faculty`.`faculty_details` where `empid`='".$fac3."'";
		// echo $sql1;
			$res7= mysqli_query($connect,$sql7);
            while($row7=mysqli_fetch_array($res7)){
				?><tr><td></td><td><h3 style="color:blue;"><b>SEMESTER-3</b></h3></td></tr>
				<tr><td><h3 style="color:red;">Faculty Guide</h3></td><td></td><td></td>
				<td><h3 style="color:red;">Organisation</h3></td></tr>
         <tr>
		 <td><h4><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><b>NAME </b></h4></td>
		 <td>
			<?php echo $row7['name']; ?>
			<td></td>
			<td><h4><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><b>NAME </b></h4></td>
		 </td>
			<td><?php echo $orgn6; ?></td></tr>
          <tr>
		  <td><h4><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><b>MAIL-ID </b></h4>
		  </td><td><?php echo $row7['email']; ?></td><td>
			<td><h4><i class="fa fa-cc fa-fw w3-margin-right w3-large w3-text-teal"></i><b>CATEGORY </b></h4></td>
		 </td>
			<td><?php echo $orgc6; ?></td></tr>
          <tr>
		  <td><h4><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><b>PHONE NUMBER </b></h4>
		  </td><td><?php echo $row7['phone_no']; ?></td><td></td>
		  <td><h4><i class="fa fa-address-card-o fa-fw w3-margin-right w3-large w3-text-teal"></i><b>ADDRESS </b></h4></td>
		 </td>
			<td><?php echo $orga6; ?></td></tr>
          <br>
			<?php
		  }	

$sql8="SELECT * FROM `msw_admin`.`organisation_details` where `org_id`='".$org4."'";
			$res8= mysqli_query($connect,$sql8);
            while($row8=mysqli_fetch_array($res8)){
                $orgn8=$row8['org_name'];
			    $orgc8=$row8['org_category']; 
			    $orga8=$row8['address']; 
		  }	  
		  		  
		 $sql9="SELECT * FROM `msw_faculty`.`faculty_details` where `empid`='".$fac4."'";
		// echo $sql1;
			$res9= mysqli_query($connect,$sql9);
            while($row9=mysqli_fetch_array($res9)){
				?><tr><td></td><td><h3 style="color:blue;"><b>SEMESTER-4</b></h3></td></tr>
				<tr><td><h3 style="color:red;">Faculty Guide</h3></td><td></td><td></td>
				<td><h3 style="color:red;">Organisation</h3></td></tr>
         <tr>
		 <td><h4><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><b>NAME </b></h4></td>
		 <td>
			<?php echo $row9['name']; ?>
			<td></td>
			<td><h4><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><b>NAME </b></h4></td>
		 </td>
			<td><?php echo $orgn8; ?></td></tr>
          <tr>
		  <td><h4><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><b>MAIL-ID </b></h4>
		  </td><td><?php echo $row9['email']; ?></td><td>
			<td><h4><i class="fa fa-cc fa-fw w3-margin-right w3-large w3-text-teal"></i><b>CATEGORY </b></h4></td>
		 </td>
			<td><?php echo $orgc8; ?></td></tr>
          <tr>
		  <td><h4><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><b>PHONE NUMBER </b></h4>
		  </td><td><?php echo $row9['phone_no']; ?></td><td></td>
		  <td><h4><i class="fa fa-address-card-o fa-fw w3-margin-right w3-large w3-text-teal"></i><b>ADDRESS </b></h4></td>
		 </td>
			<td><?php echo $orga8; ?></td></tr>
          <br>
			<?php
		  }	
?>
      <br>
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