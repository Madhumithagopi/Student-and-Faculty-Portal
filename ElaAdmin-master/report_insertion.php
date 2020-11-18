<?php
session_start();
include 'conection/connect_common.php';
if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
	 $sql1="SELECT * FROM `msw_student`.`student_details` where `regno`='".$_SESSION['empid']."'";
			$res1= mysql_query($sql1);
            while($row1=mysql_fetch_array($res1)){
			
			//echo $row1['fac_id'];
			$fac_id= $row1['facid1'];
			$sem=$row1['semester'];
			}
	  $type=$_POST['rep'];
  $sql="INSERT INTO `msw_student`.`student_report_submission` VALUES(NULL,'".$_SESSION['empid']."','$fac_id','$final_file','$type','$new_size',CURDATE(),'sem')";
  mysql_query($sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='student_report_submission.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='student_report_submission.php?fail';
        </script>
  <?php
 }
}
?>