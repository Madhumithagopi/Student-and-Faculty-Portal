<?php 
	include 'config1.php';
	$updateFlag = 0;
	
	ini_set("date.timezone", "America/New_York");
?>

<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-12">
			<h1 class="page-header">Take Attendance</h1>  
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-lg-12">
			<form action="index22.php" method="get" class="form-inline" id="subjectForm" data-toggle="validator">
				
				<div class="form-group" data-provide="datepicker">
					<label for="select" class="control-label">Date:</label>
					<input type="date" class="form-control" name="date" value="<?php print isset($_GET['date']) ? $_GET['date'] : ''; ?>" required>
				</div>

				<input type="submit" class="btn btn-info" name="sbt_stn" value="Load Student">
			</form>
				


			<?php
				if(isset($_GET['date'])) :
			?>
			
			<?php 
				$todayTime = time();
				$submittedDate = $_GET['date'];
				if ($submittedDate <= $todayTime) :
			?>
			<form action="index22.php" method="post">
			
			
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Roll No</th>
						<th></th>
						<th> Present</th>
					</tr>
				</thead>
				<?php
					 $dat = $_GET['date'];
					

					$que= "SELECT sid, aid, ispresent  from attendance  WHERE date =$dat
					 ORDER BY sid";
					$ret=$conn->query($que);
					$attData=$ret->fetchAll(PDO::FETCH_ASSOC);
					
					if(count($attData))
					{
						$updateFlag=1;
					}
					else{
						$updateFlag=0;

					}

					$qu = "SELECT student_details.regno from student_details where facid1=100";
					$stu=$conn->query($qu);
					$rstu=$stu->fetchAll(PDO::FETCH_ASSOC);

					
					echo"<tbody>";
					for($i = 0; $i<count($rstu); $i++)
					{
						echo"<tr>";

						if($updateFlag) {
							echo"<td>".$rstu[$i]['regno']."<input type='hidden' name='st_sid[]' value='" . $rstu[$i]['regno'] . "'>" ."<input type='hidden' name='att_id[]' value='" . $attData[$i]['aid'] . "'>".  "</td>";
							echo"<td>".$rstu[$i]['name']."</td>";

							
								if(($rstu[$i]['regno'] ==  $attData[$i]['regno']) && ($attData[$i]['ispresent']))
								{

									echo "<td><input class='chk-present' checked type='checkbox' name='chbox[]' value='" . $rstu[$i]['regno'] . "'></td>";
								}
								else
								{
									echo "<td><input class='chk-present' type='checkbox' name='chbox[]' value='" . $rstu[$i]['regno'] . "'></td>";
								}
							}
							else {
								echo"<td>".$rstu[$i]['regno']."<input type='hidden' name='st_sid[]' value='" . $rstu[$i]['regno'] . "'></td>";
								echo"<td>".$rstu[$i]['name']."</td>";
								echo"<td><input class='chk-present' type='checkbox' name='chbox[]' value='" . $rstu[$i]['regno'] . "'></td>";	
							}
							
							
						echo"</tr>";

					}
					echo"</tbody>";
				
				?>
			</table> 

			<?php if($updateFlag) : ?>
				<input type="hidden" name="updateData" value="1">
			<?php else: ?>
				<input type="hidden" name="updateData" value="0">
			<?php endif; ?>

			<input type="hidden" name="date" value="<?php print isset($_GET['date']) ? $_GET['date'] : ''; ?>">
						<input type="submit" class="btn btn-primary btn-block" name="sbt_top" value="Save Attendance">
			
			</form>
			
			
			<?php
				else :
			?>
			
			<p>&nbsp;</p>
			<div class="alert alert-dismissible alert-danger">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>Sorry!</strong> Attendance cannot be recorded for future dates!.
			</div>	
			
			<?php
				endif;
			?>
			
			<?php endif;?>
			
			<?php

				if (isset($_POST['sbt_top'])) {
					if(isset($_POST['updateData']) && ($_POST['updateData'] == 1) ) {							
						// prepare sql and bind parameters
					
							//$id = $_POST['subject'];
							$uid = 1;
							$p = 0;
							$st_sid =  $_POST['st_sid'];
							$attt_aid =  $_POST['att_id'];
							$ispresent = array();
							if (isset($_POST['chbox'])) {
								$ispresent =  $_POST['chbox'];	
							}
							
							for($j = 0; $j < count($st_sid); $j++)
							{
									//echo "hii";
								 //UPDATE `attendance` SET `ispresent` = '1' WHERE `attendance`.`aid` = 79;

									$stmtInsert = $conn->prepare("UPDATE attendance SET ispresent = :isMarked WHERE aid = :aid"); 
														
									if (count($ispresent)) {
										$p = (in_array($st_sid[$j], $ispresent)) ? 'present' : 'absent';	
									}
									
									$stmtInsert->bindParam(':isMarked', $p);
									$stmtInsert->bindParam(':aid', $attt_aid[$j]); 
									$stmtInsert->execute();
								//echo "data upadted";
							}		
						echo '<p>&nbsp;</p><div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Well done!</strong> Attendance Recorded Successfully!.
              </div>';	
					}
					else {
						
						// prepare sql and bind parameters
							$date = $_POST['date'];
						
							//$id = $_POST['subject'];
							$uid = 1;
							$p = 0;
							$st_sid =  $_POST['st_sid'];
							$ispresent = array();
							if (isset($_POST['chbox'])) {
								$ispresent =  $_POST['chbox'];	
							}
							
							//session_start();
									//$fac=$_SESSION['empid'];
									$fac=100;
							for($j = 0; $j < count($st_sid); $j++)
							{
									$stmtInsert = $conn->prepare("INSERT INTO attendance (sid, date, ispresent, uid) 
								VALUES (:sid, :date, :ispresent, :uid)");
									
									if (count($ispresent)) {
										$p = (in_array($st_sid[$j], $ispresent)) ? 'present' : 'absent';	
									}
									

									$stmtInsert->bindParam(':sid', $st_sid[$j]);
									$stmtInsert->bindParam(':date', $date);
									$stmtInsert->bindParam(':ispresent', $p);
									$stmtInsert->bindParam(':uid', $fac);
									//$stmtInsert->bindParam(':id', $id); 
									$stmtInsert->execute();
							//	echo "data upadted".$j;
						}
						echo '<p>&nbsp;</p><div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Well done!</strong> Attendance Recorded Successfully!.
              </div>';	
					}
				}			
			?>
		</div>
	</div>
</div>

<script>
	$('#subjectForm').validator();	
</script>