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
    <div class="login-wrap">
      <div class="login-html">
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
	elseif((substr($_POST['email'],0,2))=='16'){
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
						elseif ((substr($_POST['email'],0,2))=='16'){
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
								echo "<meta http-equiv='refresh' content='0; url=ElaAdmin-master/admin_students_list.php' />";
							}elseif ($_SESSION['ugroup']=='faculty'){
								echo "<meta http-equiv='refresh' content='0; url=ElaAdmin-master/faculty.php' />";
							}else{
							echo "<meta http-equiv='refresh' content='0; url=ElaAdmin-master/admin_resource_list.php' />";
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