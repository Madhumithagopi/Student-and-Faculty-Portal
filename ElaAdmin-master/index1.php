<?php
session_start();
include 'conection/connect_student.php';
$msg="";
	$opr="";
	if(isset($_GET['opr']))
	$opr=$_GET['opr'];
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];	
echo $id;
	if($opr=="del")
{
	$del_sql=mysql_query("DELETE FROM student_report_submission WHERE sno=$id");
	if($del_sql)
		$msg="1 Record Deleted... !";
	else
		$msg="Could not Delete :".mysql_error();				
}	
?>
<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Msw-faculty</title>
<!--link rel="stylesheet" href="style.css" type="text/css" /-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/cs-skin-elastic.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet"  type="text/css" href="css/style_entry.css" />
<link rel="stylesheet"  type="text/css" href="css/style_button.css" />
</head>
  <style>
  
  
  .btn{

padding:10px 10px;
font-size:13px;
text-transform:uppercase;
font-weight:bold;
color:#000000;
border:3px solid 555;
background:#ff9999;
}
.btn1{
float:left;
padding:10px 9px;
font-size:12px;
text-transform:uppercase;
font-weight:bold;
color:#FF0000;
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
	
.daily{
float:left;
padding:8px 9px;
font-size:17px;
font-weight:bold;
color:white;
border:3px solid 555;
background:#1E90FF;
}
.week{
float:left;
padding:8px 9px;
font-size:17px;
font-weight:bold;
color:white;
border:3px solid 555;
background:#3CB371;
}
.final{
float:left;
padding:8px 9px;
font-size:17px;
font-weight:bold;
color:white;
border:3px solid 555;
background:#DC143C;
}
.upload{
float:left;
padding:8px 9px;
font-size:17px;
font-weight:bold;
color:white;
border:3px solid 555;
background:#ff9933;
}
    </style>
<body>

<div class="content">
            <div class="animated fadeIn">
                   <div class="card">
                            <div class="card-body">
							 <div class="table-wrapper">
 <form action=""method="post" enctype="multipart/form-data">
 <table class="table table-striped table-hover">

        <div class="table-title">
            <div class="row">
                <div class="col-sm-6"><h2>Field Work Report Submission</h2></div>
                <div class="col-sm-6">
				            <input type="submit" class="upload" name="upload" value="Upload">
                            <input type="submit" class="daily" name="daily" value="Daily">
                            <input type="submit" class="week" name="week" value="Weekly">
                            <input type="submit" class="final" name="final" value="Final">
                </div>
            </div>
        </div>
		<?php
			$i=1;
            if($_POST["daily"])
			{
			?>
			
			<th>S.no</th>
			<th>Date</th>
			<th>File</th>
            <th>View</th>
            <th>Delete</th>        			
            </tr>					
			 <?php
	 $sno=1;
 $sql="SELECT * FROM student_report_submission where type='".daily_report."'";
 $result_set=mysql_query($sql);
 while($row=mysql_fetch_array($result_set))
 {
  ?>
        <tr>
		<td><?php echo $sno++ ?></td>
        <td><?php echo $row['date'] ?></td>
        <td><?php echo $row['file'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
		 <td><a href="?tag=index&opr=del&rs_id=<?php echo $row['sno'];?>" title="Delete">delete file</a></td>
        </tr>
        <?php
 }
		}
			if($_POST["week"])
			{
				?>
			
			<th>S.no</th>
			<th>Date</th>
			<th>File</th>
            <th>View</th>
            <th>Delete</th>        			
            </tr>
			 <?php
	 $sno=1;
 $sql="SELECT * FROM student_report_submission where type='".weekly_report."'";
 $result_set=mysql_query($sql);
 while($row=mysql_fetch_array($result_set))
 {
	
  ?>
        <tr>
		<td><?php echo $sno++ ?></td>
        <td><?php echo $row['date'] ?></td>
        <td><?php echo $row['file'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
		 <td><a href="?tag=index&opr=del&rs_id=<?php echo $row['sno'];?>" title="Delete">delete file</a></td>
		 </tr>
        <?php
 }
		 }
			if($_POST["final"])
			{
			?>
			
			<th>S.no</th>
			<th>Date</th>
			<th>File</th>
            <th>View</th>
            <th>Delete</th>        			
            </tr>
			 <?php
	 $sno=1;
 $sql="SELECT * FROM student_report_submission where type='".final_report."'";
 $result_set=mysql_query($sql);
 while($row=mysql_fetch_array($result_set))
 {
	
  ?>
        <tr>
		<td><?php echo $sno++ ?></td>
        <td><?php echo $row['date'] ?></td>
        <td><?php echo $row['file'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
		 <td><a href="?tag=index&opr=del&rs_id=<?php echo $row['sno'];?>" title="Delete">delete file</a></td></tr>
        <?php
 }
			}					
?>		
		</table>
		</form>
	
		
<?php		
	
if(isset($_POST['upload']))
{	
?>
<form action="upload.php "method="post" enctype="multipart/form-data">
        <table class="table table-striped table-hover">
			<tr>
			<th>Report</th>
			<th></th>
            <th>File</th>
            </tr>
<td>			
<select class="text" name="rep" id="rep">
<option value="NULL">select report</option>
<option value="daily_report">Daily Report</option>
<option value="weekly_report">Weekly Report</option>
<option value="final_report">Final Report</option>
</select></td>
<td></td>
			 <td><input type="file" class="btn1" name="file" ></td>
<td><input type="submit" name="btn-upload" value="Upload" class="btn"></a></td>        
<?php	
}
 if(isset($_GET['success']))
 { 
echo "File Uploaded Successfully..";
 }
 else if(isset($_GET['fail']))
 {
	   echo "Problem While File Uploading !";
 }

 ?>
 </table>
		</form>
 	</div>
</div>
</div>

</div>
</div>

</body>
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
</html>