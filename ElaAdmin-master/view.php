<?php
session_start();
include 'conection/connect_student.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
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


        <div class="table-title">
            <div class="row">
                <div class="col-sm-6"><h2>Field Work Report Submission</h2></div>
                <div class="col-sm-6">
				            <input type="submit" class="upload" name="upload" value="All">
                            <input type="submit" class="daily" name="daily" value="Daily">
                            <input type="submit" class="week" name="week" value="Weekly">
                            <input type="submit" class="final" name="final" value="Final">
                        	
                </div>
            </div>
			
        </div>
		
	
		</form>

 <table class="table table-striped table-hover">

   <?php

			$i=1;
            if($_POST["daily"])
			{
			?>
			<tr>
			<th>S.no</th>
			<th>regno</th>
			<th>File Name</th>
	          <th>Date</th>
            <th>View</th>       			
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
        <td><?php echo $row['regno'] ?></td>
        <td><?php echo $row['file'] ?></td>
		<td><?php echo $row['date'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
		}
			elseif($_POST["week"])
			{
				?>
			
			<tr>
			<th>S.no</th>
			<th>regno</th>
			<th>File Name</th>
	        <th>Date</th>
            <th>View</th>       			
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
        <td><?php echo $row['regno'] ?></td>
        <td><?php echo $row['file'] ?></td>
		<td><?php echo $row['date'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
		 }
			elseif($_POST["final"])
			{
			?>
			<tr>
			<th>S.no</th>
			<th>regno</th>
			<th>File Name</th>
	          <th>Date</th>
            <th>View</th>       			
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
        <td><?php echo $row['regno'] ?></td>
        <td><?php echo $row['file'] ?></td>
		<td><?php echo $row['date'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
			}

else{			
?>		 <tr>
	<th>S.no</th>
    <th>regno</th>
    <th>File Name</th>
	<th>Date</th>
    <th>View</th>
    </tr>
    <?php
	 $sno=1;
 $sql="SELECT * FROM student_report_submission";
 $result_set=mysql_query($sql);
 while($row=mysql_fetch_array($result_set))
 {
	
  ?>
        <tr>
		<td><?php echo $sno++ ?></td>
        <td><?php echo $row['regno'] ?></td>
        <td><?php echo $row['file'] ?></td>
		<td><?php echo $row['date'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
}}?>
 
    </table>
    
</div>
</body>
</html>