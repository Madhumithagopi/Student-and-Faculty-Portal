<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<div class="container">
    <h2>Create a New Account</h2>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
		  <label ><b>NAME</b></label>
            <input type="text" name="name" placeholder="NAME" required="">
		  <label ><b>REGISTER NO</b></label>
            <input type="text" name="regno" placeholder="REGISTER NO" required="">
			 <label ><b>EMAIL ID</b></label>
            <input type="email" name="email" placeholder="EMAIL" required="">
			 <label><b>PHONE NO</b></label>
            <input type="text" name="phone_no" placeholder="PHONE NUMBER" required="">
			  <label ><b>PASSWORD</b></label>
            <input type="password" name="password" placeholder="PASSWORD" required="">
			   <label ><b>CONFIRM PASSWORD</b></label>
            <input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required="">
            <div class="send-button">
                <input type="submit" name="signupSubmit" value="CREATE ACCOUNT">
            </div>
        </form>
    </div>
</div>
