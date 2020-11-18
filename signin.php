<?php
session_start();
include 'connect_login.php';
include 'utils_database.php';
include 'utils_common.php';
?>
    <html>
    <head>
      <meta charset="UTF-8">
      <title>MSW-Login</title>
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
          <link rel="stylesheet" href="style_login.css">
    </head>
	<style>
	.navbar {
  overflow: hidden;
background:#000033;
}
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
    font-size: 20px;


}
.navbar a.right {
  float: right;
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-image: url('MSW1/ori.jpg');
  color: white;
  	opacity: 0.3;


}
.dropdown {
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn {
  font-size: 20px;  
  border: none;
  outline: none;
  color: white;
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
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {
  background-image: url("MSW1/ori.jpg");
  color:white;
}
.dropdown:hover .dropdown-content {
  display: block;
}
.

</style>

<body>
<div class="navbar">
  <a href="home.php">Home</a>


   </div>
    <div class="login-wrap" >
      <div class="login-html" background="black">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
        <div class="login-form">
          <form class="sign-in-htm" action="" method="POST">
            <div class="group">
			<br><br>
			</div>
            <div class="group">
              <label for="email" class="label">Email</label>
              <input name="email" type="text" class="input" required>
            </div>
            <div class="group">
              <label for="password" class="label">Password</label>
              <input name="password" type="password" class="input" data-type="password" required>
            </div>
            <div class="group">
              <input type="submit" class="button" name="loginSubmit" value="Sign In">
            </div>
			<?php
			if(isset($_POST['loginSubmit'])){
				if((substr($_POST['email'],0,2))=='ad')
	{
		$sql="SELECT * from `msw_login`.`admin_login` WHERE `email`='".$_POST['email']."'";
		//echo $sql;
	}
	elseif((substr($_POST['email'],0,1))=='1'){
		$sql="SELECT * from `msw_login`.`student_login` WHERE `email`='".$_POST['email']."'";
		//echo $sql;
	}	
	else{
		$sql="SELECT * from `msw_login`.`faculty_login` WHERE `email`='".$_POST['email']."'";
		//echo $sql;
	}						
	$res = mysql_query($sql); 
				while($row=mysql_fetch_array($res)){ extract($row);
			$password=$row['password'];
					if ($_POST['password'] == $password){
						if((substr($_POST['email'],0,2))=='ad'){
							$_SESSION['email'] = stripslashes($email);
							$_SESSION['empid'] = $adm_id;
							$_SESSION['name'] = $name;
							$_SESSION['ugroup'] = $ugroup;
							$_SESSION['password']=$password;
						}
						elseif ((substr($_POST['email'],0,1))=='1'){
							$_SESSION['email'] = stripslashes($email);
							$_SESSION['empid'] = $reg_no;
							$_SESSION['name'] = $name;
							$_SESSION['ugroup'] = $ugroup;
							$_SESSION['password']=$password;
						}
						else{
							$_SESSION['empid'] = $emp_id;
							$_SESSION['name'] = $name;
							$_SESSION['email'] = stripslashes($email);
							$_SESSION['ugroup'] = $ugroup;
							$_SESSION['password']=$password;
						}
							if ($_SESSION['ugroup']=='admin'){
								echo "<meta http-equiv='refresh' content='0; url=ElaAdmin-master/admin_teachers_list.php' />";
							}elseif ($_SESSION['ugroup']=='faculty'){
								echo "<meta http-equiv='refresh' content='0; url=ElaAdmin-master/faculty_student_list.php' />";
							}else{
							echo "<meta http-equiv='refresh' content='0; url=ElaAdmin-master/student_profile.php' />";
							}
					}
					else{
						$msg = "Sorry !!! <br>Your Password is wrong";
						echo $msg;
						$_SESSION['msghead'] = "Error...";
						$_SESSION['myurl'] = "../signin.php";
						$scr_width = (strlen($msg)*11);
						echo "<meta http-equiv='' content='0; url=signin.php' />";
					}
				} 
			}
			?>
        </div>
      </div>
     </div>
	   </form>
	   </html>