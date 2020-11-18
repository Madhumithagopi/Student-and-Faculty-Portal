<?php
session_start();
$connect = mysqli_connect("localhost", "root", "gopi2627");  
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="UTF-8">
    <title>MSW-Faculty</title>   
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
							<form method="POST">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6"><h2>STUDENTS LIST</h2></div>
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
				?>
				<tr>
			<th>S.no</th>
            <th>Name</th>
            <th>Register Number</th>
            </tr> 
				<?php
				$d=date("Y")-1;
			$sql1="SELECT * FROM `msw_student`.`student_details` where `batch`=$d";
			$res1= mysqli_query($connect,$sql1);
            while($row1=mysqli_fetch_array($res1)){
				echo"<tr>";
            echo"<td width='20%'>"; echo $i++;echo "</td>";
            echo "<td width='20%'>";echo $row1['name'];echo"</td>";
            echo"<td width='20%'>";echo"<a href='faculty_student_profile.php?ccode1=$row1[regno]'>"; echo $row1['regno'];echo "</a>";echo"</td>";
			}
			echo"</tr>";
			}
			if($_POST["two"])
			{
				?>
				<tr>
			<th>S.no</th>
            <th>Name</th>
            <th>Register Number</th>
            </tr> 
				<?php
				$d=date("Y")-2;
			$sql1="SELECT * FROM `msw_student`.`student_details` where `batch`=$d";
			$res1= mysqli_query($connect,$sql1);
            while($row1=mysqli_fetch_array($res1)){
				echo "<tr>";
            echo"<td width='20%'>"; echo $i++;echo "</td>";
            echo"<td width='20%'>"; echo $row1['name'];echo"</td>";
			$re=$row['regno'];
            echo"<td width='20%'>";echo"<a href='faculty_student_profile.php?ccode1=$row1[regno]'>"; echo $row1['regno'];echo "</a>";echo"</td>";
			}
			echo"</tr>";
			}
    ?>   
        </table>
    </div>
	</form>
    </div>
</div>
       </div>
</div>	

		<?php
$sql_str= "Select * from `msw_student`.`student_details` where `regno` ='".$_REQUEST['ccode1']."' ";
//echo $sql_str;
$r=$_REQUEST['ccode1'];
        $res_str = mysqli_query($connect,$sql_str);
        while ($row=mysqli_fetch_array($res_str)){ 
		$re=$row['regno'];
		}
		
							if($re==$r) 
							{
								?>
								<div class="content">
            <div class="animated fadeIn">
                   <div class="card">
                            <div class="card-body">
							<h4 class="box-title">STUDENTS PROFILE </h4>
							<div class="w3-content w3-margin-top" style="max-width:1500px;">
 
        <div><table><tr><td></td><td>
		<?php
		$cc=$_REQUEST['ccode1'];
		$query = "SELECT * FROM `msw_student`.`student_details` where `regno`='".$_REQUEST['ccode1']."' ";  
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
		    
		 $sql1="SELECT * FROM `msw_student`.`student_details` where `regno`='".$_REQUEST['ccode1']."'";
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
		  		  $res11="SELECT count(*) AS category11 FROM `msw_student`.`attendance` where uid='".$fac1."' and sid='".$cc."' and ispresent='present'";
		  $res111="SELECT count(*) AS category111 FROM `msw_student`.`attendance` where uid='".$fac1."' and sid='".$cc."' and ispresent='absent'";
		  
		 $sql3="SELECT * FROM `msw_faculty`.`faculty_details` where `empid`='".$fac1."'";
		// echo $sql1;
			$res3= mysqli_query($connect,$sql3);
            while($row3=mysqli_fetch_array($res3)){
				?><tr><td></td><td><h3 style="color:blue;"><b>SEMESTER-1</b></h3></td></tr>
				<tr><td><h4>Total number of Present Days:</h4></td>
				<td><?php 
				$result11=mysqli_query($connect,$res11);
$values11=mysqli_fetch_assoc($result11);
$num_rows11=$values11['category11'];
echo $num_rows11; ?></td></tr>
				<tr><td><h4>Total number of Absent Days:</h4></td><td><?php 
				$result111=mysqli_query($connect,$res111);
$values111=mysqli_fetch_assoc($result111);
$num_rows111=$values111['category111'];
echo $num_rows111; ?></td></tr>
				<td><h3 style="color:red;">Faculty Guide</h3></td><td></td><td></td>
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
		  		 $res112="SELECT count(*) AS category112 FROM `msw_student`.`attendance` where uid='".$fac2."' and sid='".$cc."' and ispresent='present'";
		  $res1111="SELECT count(*) AS category1111 FROM `msw_student`.`attendance` where uid='".$fac2."' and sid='".$cc."' and ispresent='absent'";
 
		 $sql5="SELECT * FROM `msw_faculty`.`faculty_details` where `empid`='".$fac2."'";
		// echo $sql1;
			$res5= mysqli_query($connect,$sql5);
            while($row5=mysqli_fetch_array($res5)){
				?><tr><td></td><td><h3 style="color:blue;"><b>SEMESTER-2</b></h3></td></tr>
				<tr><td><h4>Total number of Present Days:</h4></td>
				<td><?php 
				$result112=mysqli_query($connect,$res112);
$values112=mysqli_fetch_assoc($result112);
$num_rows112=$values112['category112'];
echo $num_rows112; ?></td></tr>
				<tr><td><h4>Total number of Absent Days:</h4></td><td><?php 
				$result1111=mysqli_query($connect,$res1111);
$values1111=mysqli_fetch_assoc($result1111);
$num_rows1111=$values1111['category1111'];
echo $num_rows1111; ?></td></tr>
				<tr><td><h3 style="color:red;">Faculty Guide</h3></td><td></td><td></td>
				<td><h3 style="color:red;">Organisation</h3></td></tr></tr>
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
                $orgn6=$row6['org_name'];
			    $orgc6=$row6['org_category']; 
			    $orga6=$row6['address']; 
		  }	  
		  		  $res117="SELECT count(*) AS category117 FROM `msw_student`.`attendance` where uid='".$fac3."' and sid='".$cc."' and ispresent='present'";
		  $res1117="SELECT count(*) AS category1117 FROM `msw_student`.`attendance` where uid='".$fac3."' and sid='".$cc."' and ispresent='absent'";

		 $sql7="SELECT * FROM `msw_faculty`.`faculty_details` where `empid`='".$fac3."'";
		// echo $sql1;
			$res7= mysqli_query($connect,$sql7);
            while($row7=mysqli_fetch_array($res7)){
				?><tr><td></td><td><h3 style="color:blue;"><b>SEMESTER-3</b></h3></td></tr>
				<tr><td><h4>Total number of Present Days:</h4></td><td><?php 
				$result117=mysqli_query($connect,$res117);
$values117=mysqli_fetch_assoc($result117);
$num_rows117=$values117['category117'];
echo $num_rows117; ?></td></tr>
				<tr><td><h4>Total number of Absent Days:</h4></td><td><?php 
				$result1117=mysqli_query($connect,$res1117);
$values1117=mysqli_fetch_assoc($result1117);
$num_rows1117=$values1117['category1117'];
echo $num_rows1117; ?></td></tr>
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
		  
		  $res="SELECT count(*) AS category FROM `msw_student`.`attendance` where uid='".$fac4."' and sid='".$cc."' and ispresent='present'";
		  $res1="SELECT count(*) AS category1 FROM `msw_student`.`attendance` where uid='".$fac4."' and sid='".$cc."' and ispresent='absent'";
		  		  
		 $sql9="SELECT * FROM `msw_faculty`.`faculty_details` where `empid`='".$fac4."'";
		// echo $sql1;
			$res9= mysqli_query($connect,$sql9);
            while($row9=mysqli_fetch_array($res9)){
				?><tr><td></td><td><h3 style="color:blue;"><b>SEMESTER-4</b></h3></td></tr>
				<tr><td><h4>Total number of Present Days:</h4></td><td><?php 
				$result1=mysqli_query($connect,$res);
$values1=mysqli_fetch_assoc($result1);
$num_rows1=$values1['category'];
echo $num_rows1; ?></td></tr>
				<tr><td><h4>Total number of Absent Days:</h4></td><td><?php 
				$result10=mysqli_query($connect,$res1);
$values10=mysqli_fetch_assoc($result10);
$num_rows10=$values10['category1'];
echo $num_rows10; ?></td></tr>
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
							}
?>
      
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