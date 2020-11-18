<?php session_start(); 
date_default_timezone_set('Asia/Calcutta');

function drop_dayorder(){
	$array = array();
	$sql = "SELECT * from `idcawsus_common`.`dayorder` order by `dayorder`";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$array[$dayorder] = $cdayorder;
	}
	return $array;
}
function drop_test_date(){
	$col_year = substr(ac_year(),0,4);
	$sem = odd_even_sem(date('Y-m-d'));
	$array = array();
	if ($sem =='even'){
		$sql = "SELECT * from `idcawsus_common`.`calendar_ad_".$col_year."` Where `dayorder`>'7' and `dayorder`<='12' and `cal_date`>'".$col_year."-12-01' order by `cal_date`";
	}else{
		$sql = "SELECT * from `idcawsus_common`.`calendar_ad_".$col_year."` Where `dayorder`>'7' and `dayorder`<='12' and `cal_date`<'".$col_year."-12-01' order by `cal_date`";
	}
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$array[] = $cal_date;
	}
	return $array;
}
function show_dayorder($dorder){
	$array = array();
	$sql = "SELECT * from `idcawsus_common`.`dayorder` where `dayorder`='$dorder' limit 0,1";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);}
	return $cdayorder;
}
function drop_usergroup(){
	$array = array();
	$sql = "SELECT * from `idcawsus_common`.`users_groups` order by `user_group`";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$array[$user_group] = $user_group_name;
	}
	return $array;
}
function drop_faculty($dept){
	$array = array();
	$sql = "SELECT * from `idcawsus_common`.`users_staff` WHERE `dept_code`='$dept' and `user_group`='faculty' order by `name`, `empid`";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$array[$empid] = $name;
	}
	return $array;
}
function drop_salutation(){
	$array = array();
	$sql = "SELECT distinct `salutation` from `idcawsus_common`.`users_staff` where `salutation` is not null order by `salutation`";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$array[] = $salutation;
	}
	return $array;
}
function drop_all_faculty(){
	$array = array();
	$sql = "SELECT * from `idcawsus_common`.`users_staff` WHERE `user_group`='faculty' order by `name`, `empid`";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$array[$empid] = $name;
	}
	return $array;
}
function drop_coursecode($ugpg, $semnum){
	$array = array();
	$sql = "SELECT * from `idcawsus_common`.`course_code_".$ugpg."` Where (`semnum`='$semnum' or `semnum`='0') order by `coursecode`";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$array[$coursecode] = $course_title;
	}
	return $array;
}
function drop_location(){
	$array = array();
	$sql = "SELECT `dept_code`, `dept_name` from `idcawsus_common`.`work_place` order by `dept_name`";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$array[$dept_code] = $dept_name;
	}
	return $array;
}
function drop_department(){
	$array = array();
	$sql = "SELECT `dept_code`, `dept_name` from `idcawsus_common`.`departments` order by `dept_order`";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$array[$dept_code] = $dept_name;
	}
	return $array;
}
function drop_major($ugpg){
	$array = array();
	if ($ugpg=='uga'){
		$sql = "SELECT `major_code`, `major_name` from `idcawsus_common`.`departments` Where substr(`major_code`,1,2)='AU' or `major_code`='SUCPA' or `major_code`='SUCOH' order by `dept_order`";
		if ($_SESSION['semnum']<3){
			$sql = "SELECT `major_code`, `major_name` from `idcawsus_common`.`departments` Where substr(`major_code`,1,2)='AU' order by `dept_order`";
		}
	}elseif ($ugpg=='ugs'){
		$sql = "SELECT `major_code`, `major_name` from `idcawsus_common`.`departments` Where substr(`major_code`,1,2)='SU' and `major_code`<>'SUCPA' and `major_code`<>'SUCOH' order by `dept_order`";
		if ($_SESSION['semnum']<3){
			$sql = "SELECT `major_code`, `major_name` from `idcawsus_common`.`departments` Where substr(`major_code`,1,2)='SU' order by `dept_order`";
		}
	}elseif ($ugpg=='pga'){
		$sql = "SELECT `major_code`, `major_name` from `idcawsus_common`.`departments` Where (substr(`major_code`,1,2)='AP' or `major_code`='SPSOC') order by `dept_order`";
	}elseif ($ugpg=='pgs'){
		$sql = "SELECT `major_code`, `major_name` from `idcawsus_common`.`departments` Where substr(`major_code`,1,2)='SP' and `major_code`<>'SPSOC' order by `dept_order`";
	}elseif ($ugpg=='dm'){
		$sql = "SELECT `major_code`, `major_name` from `idcawsus_common`.`departments` Where substr(`major_code`,1,2)='SM' or substr(`major_code`,1,2)='SD' or substr(`major_code`,1,2)='UD' order by `dept_order`";
	}elseif ($ugpg=='dc'){
		$sql = "SELECT `major_code`, `major_name` from `idcawsus_common`.`departments` Where substr(`major_code`,1,2)='CC' order by `dept_order`";
	}
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		if ($major_code=='SUCOE'){
			$array[$major_code] = 'Commerce with '.$major_name;
		}else{
			$array[$major_code] = $major_name;
		}
	}
	$array['ALLM'] = 'Mixed Student Group';
	return $array;
}
function drop_all_major($ugpg){
	$array = array();
	$sql = "SELECT `major_code`, `major_name`, `degree` from `idcawsus_common`.`departments` Where `programme`='$ugpg' and `major_code` is not null order by `dept_order`";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$array[$major_code] = $degree.' '.$major_name;
	}
	return $array;
}
function odd_even_sem($attdate){
	$sem='';
	$sql = "SELECT `semester` from `idcawsus_common`.`college_open` Where '".$attdate."' between `start_date` and `end_date`";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$sem = $semester;
	}
	return $sem;
}
function college_open_close($attdate, $sem, $mode, $ugpg, $batch){
	$dt='';
	$sql = "SELECT * from `idcawsus_common`.`college_open` Where `batch`='$batch' and `semester`='$sem' and `programme`='$ugpg' and '".$attdate."' between `start_date` and `end_date`";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		if ($mode=='open'){
			$dt = $start_date;
		}elseif ($mode=='close'){
			$dt = $end_date;
		}
	}
	return $dt;
}
function get_dayorder($attdate, $stream){
	$adsf='_ad';
	if ($stream=='Self'){ $adsf='_sf';}
	$dorder = '';
	$sql = "SELECT `dayorder` from `idcawsus_common`.`calendar".$adsf."_".substr(ac_year(),0,4)."` Where `cal_date`='$attdate' Limit 0,1";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$dorder = $dayorder;
	}
	return $dorder;
}
function get_dayorder_new($acyear, $attdate, $stream){
	$adsf='_ad';
	if ($stream=='Self'){ $adsf=='_sf';}
	$dorder = '';
	$sql = "SELECT `dayorder` from `idcawsus_common`.`calendar".$adsf."_".substr($acyear,0,4)."` Where `cal_date`='$attdate' Limit 0,1";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$dorder = $dayorder;
	}
	return $dorder;
}
function generate_empid(){
	$id = '';
	$sql = "SELECT `empid` from `idcawsus_common`.`users_staff` order by `empid` desc Limit 0,1";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$id = ($empid+1);
	}
	return $id;
}
function get_empid($mode, $uname){
	$id = '';
	if ($mode=='staff'){ 
		$sql = "SELECT `empid` from `idcawsus_common`.`users_staff` Where `email`='$uname' Limit 0,1";
	}elseif ($mode=='student'){ 
		$sql = "SELECT `empid` from `idcawsus_common`.`users_student` Where `email`='$uname' Limit 0,1";
	}
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$id = $empid;
	}
	return $id;
}
function get_ugpg($regno, $batch){
	$myear=substr(ac_year(),0,4);
	$ugpg = '';
	$sql = "SELECT 'ug' as `programme` from `idcawsus_admn".$batch."`.`master_ug` Where `regno`='".$regno."' ";
	if($batch>2015){
		$sql .= "Union ALL SELECT 'pg' as `programme` from `idcawsus_admn".$batch."`.`master_pg` Where `regno`='".$regno."' ";
	}
	if($batch>2016){
		$sql .= "Union ALL SELECT 'dm' as `programme` from `idcawsus_admn".$batch."`.`master_dm` Where `regno`='".$regno."' ";
	}
	$res = mysql_query($sql);
//echo $sql.'<br>';
	while ($row = mysql_fetch_array($res)){ extract($row);
		$ugpg = $programme;
	}
	return $ugpg;
}
function get_stud_name($regno, $batch){
	$studname = '';
	$sql = "SELECT `sname` from `idcawsus_admn".$batch."`.`master_".get_ugpg($regno, $batch)."` Where `regno`='$regno' Limit 0,1";
//echo $sql.'<br>';
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$studname = $sname;
	}
	return $studname;
}
function get_stud_major($regno, $batch){
	$studmajor = '';
	$sql = "SELECT `major` from `idcawsus_admn".$batch."`.`master_".get_ugpg($regno, $batch)."` Where `regno`='$regno' Limit 0,1";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$studmajor = $major;
	}
	return $studmajor;
}
function get_staff_name($empid){
	$sname='';
	$sql = "SELECT `salutation`, `name` from `idcawsus_common`.`users_staff` Where `empid`='$empid' Limit 0,1";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$sname = $salutation.' '.$name;
	}
	return $sname;
}
function get_staff_id($email){
	$id='';
	$sql = "SELECT `empid` from `idcawsus_common`.`users_staff` Where `email`='$email' Limit 0,1";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$id = $empid;
	}
	return $id;
}
function get_staff_dept($empid){
	$dept='';
	$sql = "SELECT `department` from `idcawsus_common`.`users_staff` Where `empid`='$empid' Limit 0,1";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$dept = $department;
	}
	return $dept;
}
function get_location_name($dept){
	$deptname = '';
	$sql = "SELECT `dept_name` from `idcawsus_common`.`work_location` Where `dept_code`='$dept' Limit 0,1";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$deptname = $dept_name;
	}
	return $deptname;
}
function get_dept_name($dept){
	$deptname = '';
	$sql = "SELECT `dept_name` from `idcawsus_common`.`departments` Where `dept_code`='$dept' Limit 0,1";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$deptname = $dept_name;
	}
	return $deptname;
}
function get_degree_major($major){
	$smajor = '';
	if ($major=='ALLM'){ $smajor = "Mixed Group"; }
	$sql = "SELECT `major_name`, `degree` from `idcawsus_common`.`departments` Where `major_code`='$major' Limit 0,1";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$smajor = $degree.' '.$major_name;
		if (substr($major,1,1)=='D'){
			$smajor = $degree.' in '.$major_name;
		}
	}
	return $smajor;
}
function get_degree($major){
	$smajor = '';
	$sql = "SELECT `major_name`, `degree` from `idcawsus_common`.`departments` Where `major_code`='$major' Limit 0,1";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$smajor = $degree;
	}
	return $smajor;
}
function get_faculty_timetable($attdate, $dorder, $classhour, $sem, $empid, $url){
	$str = '';
	$sql = "SELECT * from `idcawsus_attend_".substr(ac_year(),0,4)."`.`faculty_group_".$sem."` Where `dayorder`='".$dorder."' and `classhour`='".$classhour."' and `empid`='".$empid."' order by `coursecode`, `batch`";
	if (!mysql_query($sql)){
		$msg = mysql_error($db_con);
		$_SESSION['msghead'] = "Error...";
		$_SESSION['myurl'] = "../faculty/index.php";
		$strlength = (strlen($msg)*11);
		echo "<meta http-equiv='refresh' content='0; url=../includes/message.php?scr_width=$strlength&msg=$msg' />";
	}else{
		$res = mysql_query($sql);
		if (mysql_num_rows($res)>0){
			while ($row = mysql_fetch_array($res)){ extract($row);
				$batchyr = substr(ac_year(),0,4); $myflag=true;
				if ($semnum=='3' || $semnum=='4'){ $batchyr = ($batchyr-1); }elseif ($semnum=='5' || $semnum=='6'){ $batchyr = ($batchyr-2); }
				if ($semnum=='1'){
					if ($programme=='ug'){
						$col_open = college_open_close($_SESSION['attdate'], $sem, 'open', 'uga', $batchyr);
						if ($_SESSION['attdate']<$col_open || $col_open==''){
							$myflag=false;
						}
					}elseif ($programme=='pg'){
						$col_open = college_open_close($_SESSION['attdate'], $sem, 'open', 'pga', $batchyr);
						if ($_SESSION['attdate']<$col_open || $col_open==''){
							$myflag=false;
						}
					}
				}
				$sql_chk = "Select `regno` from `idcawsus_attend_".substr(ac_year(),0,4)."`.`daily_attend_".$batchyr."_".$sem."` Where `att_date`='".$attdate."' and `classhour`='$classhour' and `coursecode`='$coursecode' and `batch`='$batch' and (`attendance`='P' or `attendance`='AA') and `attendance`<>'NG' and `semnum`='$semnum' ";
				$res_chk = mysql_query($sql_chk);
				$flag="red_square.png";
				if (mysql_num_rows($res_chk)>'0'){
					$flag="green_square.png";
				}
				$sql_chk = "Select `regno` from `idcawsus_attend_".substr(ac_year(),0,4)."`.`daily_attend_".$batchyr."_".$sem."` Where `att_date`='".$attdate."' and `classhour`='$classhour' and `coursecode`='$coursecode' and `batch`='$batch' and `attendance`='NG' and `semnum`='$semnum' ";
				$sql_chk1 = "Select `regno` from `idcawsus_attend_".substr(ac_year(),0,4)."`.`daily_attend_".$batchyr."_".$sem."` Where `att_date`='".$attdate."' and `classhour`='$classhour' and `coursecode`='$coursecode' and `batch`='$batch' and (`attendance`='P' or `attendance`='AA') and `semnum`='$semnum' "; 
				$res_chk = mysql_query($sql_chk);
				$res_chk1 = mysql_query($sql_chk1);
				if (mysql_num_rows($res_chk)>'0' && mysql_num_rows($res_chk1)>'0'){
					$flag="yellow_square.png";
				}
				$str = $coursecode;
				if ($batch>0){ $str.='('.$batch.') ';}else{ $str.=' ';}
				if ($dorder==get_dayorder($_SESSION['attdate'],  '')){
					$mystr .= "<img src='../images/".$flag."' width='9px' height='9px'/> <a href='".$url."?empid=$empid&chour=$classhour&ccode=$coursecode&nbatch=$batch&semnum=$semnum'>$str</a><br/>";
				}else{
	   	            $mystr .= $str.'<br/>';
				}
				if ($myflag==false){
					$mystr='';
				}
			}
		}
		return $mystr;
	}
}
function get_faculty_timetable_att($attdate, $dorder, $classhour, $sem, $empid, $url){
	$str = '';
	$sql = "SELECT * from `idcawsus_attend_".substr(ac_year(),0,4)."`.`faculty_group_".$sem."` Where `dayorder`='".$dorder."' and `classhour`='".$classhour."' and `empid`='".$empid."' order by `coursecode`, `batch`";
	if (!mysql_query($sql)){
		$msg = mysql_error($db_con);
		$_SESSION['msghead'] = "Error...";
		$_SESSION['myurl'] = "../attendance/index.php";
		$strlength = (strlen($msg)*11);
		echo "<meta http-equiv='refresh' content='0; url=../includes/message.php?scr_width=$strlength&msg=$msg' />";
	}else{
		$res = mysql_query($sql);
		if (mysql_num_rows($res)>0){
			while ($row = mysql_fetch_array($res)){ extract($row);
				$batchyr = substr(ac_year(),0,4); $myflag=true;
				if ($semnum=='3' || $semnum=='4'){ $batchyr = ($batchyr-1); }elseif ($semnum=='5' || $semnum=='6'){ $batchyr = ($batchyr-2); }
				if ($semnum=='1'){
					if ($programme=='ug'){
						$col_open = college_open_close($_SESSION['attdate'], $sem, 'open', 'uga', $batchyr);
						if ($_SESSION['attdate']<$col_open || $col_open==''){
							$myflag=false;
						}
					}elseif ($programme=='pg'){
						$col_open = college_open_close($_SESSION['attdate'], $sem, 'open', 'pga', $batchyr);
						if ($_SESSION['attdate']<$col_open || $col_open==''){
							$myflag=false;
						}
					}
				}
				$sql_chk = "Select `regno` from `idcawsus_attend_".substr(ac_year(),0,4)."`.`daily_attend_".$batchyr."_".$sem."` Where `att_date`='".$attdate."' and `classhour`='$classhour' and `coursecode`='$coursecode' and `batch`='$batch' and (`attendance`='P' or `attendance`='AA') and `attendance`<>'NG' and `semnum`='$semnum' ";
				$res_chk = mysql_query($sql_chk);
				$flag="red_square.png";
				if (mysql_num_rows($res_chk)>'0'){
					$flag="green_square.png";
				}
				$sql_chk = "Select `regno` from `idcawsus_attend_".substr(ac_year(),0,4)."`.`daily_attend_".$batchyr."_".$sem."` Where `att_date`='".$attdate."' and `classhour`='$classhour' and `coursecode`='$coursecode' and `batch`='$batch' and `attendance`='NG' and `semnum`='$semnum' ";
				$sql_chk1 = "Select `regno` from `idcawsus_attend_".substr(ac_year(),0,4)."`.`daily_attend_".$batchyr."_".$sem."` Where `att_date`='".$attdate."' and `classhour`='$classhour' and `coursecode`='$coursecode' and `batch`='$batch' and (`attendance`='P' or `attendance`='AA') and `semnum`='$semnum' "; 
				$res_chk = mysql_query($sql_chk);
				$res_chk1 = mysql_query($sql_chk1);
				if (mysql_num_rows($res_chk)>'0' && mysql_num_rows($res_chk1)>'0'){
					$flag="yellow_square.png";
				}
				$str = $coursecode;
				if ($batch>0){ $str.='('.$batch.') ';}else{ $str.=' ';}
				if ($dorder==get_dayorder($_SESSION['attdate'],  '')){
					$mystr .= "<img src='../images/".$flag."' width='9px' height='9px'/> <a href='".$url."?empid=$empid&chour=$classhour&ccode=$coursecode&nbatch=$batch&semnum=$semnum'>$str</a><br/>";
				}else{
	   	            $mystr .= $str.'<br/>';
				}
				if ($myflag==false){
					$mystr='';
				}
			}
		}
		return $mystr;
	}
}
function get_week_attendance($attdate, $dorder, $classhour, $sem, $empid){
	$str = '';
	$sql = "SELECT * from `idcawsus_attend_".substr(ac_year(),0,4)."`.`faculty_ttable_".$sem."` Where `att_date`='".$attdate."' and `classhour`='".$classhour."' and `empid`='".$empid."' order by `classhour`";
	echo $sql;
	if (!mysql_query($sql)){
		$msg = mysql_error($db_con);
		$_SESSION['msghead'] = "Error...";
		$_SESSION['myurl'] = "../faculty/index.php";
		$strlength = (strlen($msg)*11);
//		echo "<meta http-equiv='refresh' content='0; url=../includes/message.php?scr_width=$strlength&msg=$msg' />";
	}else{
		$res = mysql_query($sql);
		if (mysql_num_rows($res)>0){
			while ($row = mysql_fetch_array($res)){ extract($row);
				$batchyr = substr(ac_year(),0,4); $myflag=true;
				if ($semnum=='3' || $semnum=='4'){ $batchyr = ($batchyr-1); }elseif ($semnum=='5' || $semnum=='6'){ $batchyr = ($batchyr-2); }
				if ($semnum=='1'){
					if ($programme=='ug'){
						$col_open = college_open_close($attdate, $sem, 'open', 'uga', $batchyr);
						if ($attdate<$col_open || $col_open==''){
							$myflag=false;
						}
					}elseif ($programme=='pg'){
						$col_open = college_open_close($attdate, $sem, 'open', 'pga', $batchyr);
						if ($attdate<$col_open || $col_open==''){
							$myflag=false;
						}
					}
				}
				$sql_chk = "Select `regno` from `idcawsus_attend_".substr(ac_year(),0,4)."`.`daily_attend_".$batchyr."_".$sem."` Where `att_date`='".$attdate."' and `classhour`='$classhour' and `coursecode`='$coursecode' and `batch`='$batch' and (`attendance`='P' or `attendance`='AA') and `attendance`<>'NG' and `semnum`='$semnum' ";
				$res_chk = mysql_query($sql_chk);
				$flag="red_square.png";
				if (mysql_num_rows($res_chk)>'0'){
					$flag="green_square.png";
				}
				$sql_chk = "Select `regno` from `idcawsus_attend_".substr(ac_year(),0,4)."`.`daily_attend_".$batchyr."_".$sem."` Where `att_date`='".$attdate."' and `classhour`='$classhour' and `coursecode`='$coursecode' and `batch`='$batch' and `attendance`='NG' and `semnum`='$semnum' ";
				$sql_chk1 = "Select `regno` from `idcawsus_attend_".substr(ac_year(),0,4)."`.`daily_attend_".$batchyr."_".$sem."` Where `att_date`='".$attdate."' and `classhour`='$classhour' and `coursecode`='$coursecode' and `batch`='$batch' and (`attendance`='P' or `attendance`='AA') and `semnum`='$semnum' "; 
				$res_chk = mysql_query($sql_chk);
				$res_chk1 = mysql_query($sql_chk1);
				if (mysql_num_rows($res_chk)>'0' && mysql_num_rows($res_chk1)>'0'){
					$flag="yellow_square.png";
				}
				$str = $coursecode;
				if ($batch>0){ 
					$str.='('.$batch.') ';
				}else{ 
					$str.=' ';
				}
				$mystr .= "<img src='../images/".$flag."' width='9px' height='9px'/> <a href='week_attendance_preview_3.php?attdate=$attdate&empid=$empid&chour=$classhour&ccode=$coursecode&nbatch=$batch&semnum=$semnum'>$str</a><br/>";
				if ($myflag==false){
					$mystr='';
				}
			}
		}
		return $mystr;
	}
}
function get_faculty_course($empid, $ugpg, $semester){
	$str = '';
	$sql = "SELECT * from `idcawsus_attend_".substr(ac_year(),0,4)."`.`faculty_group_".$semester."` Where `empid`='".$empid."' and `programme`='".$ugpg."' order by `semnum`, `coursecode`";
	$res = mysql_query($sql);
	if (mysql_num_rows($res)>0){
		while ($row = mysql_fetch_array($res)){ extract($row);
			$str .= $coursecode;
			if ($batch>0){ $str.='('.$batch.') &nbsp;D-'.$dayorder.'; H-'.$classhour.'<br>';}else{ $str.=' &nbsp;D-'.$dayorder.'; H-'.$classhour.'<br>';}
		}
	}
	return $str;
}
function get_ccode_semnum($ccode, $sem, $ugpg){
	$str = '0';
	$sql = "SELECT `semnum` from `idcawsus_common`.`course_code_".$ugpg."` Where `coursecode`='".$ccode."' ";
	if ($sem=='odd'){
		$sql .= "and (`semnum`='1' or `semnum`='3' or `semnum`='5') Limit 0,1";
	}else{
		$sql .= "and (`semnum`='2' or `semnum`='4' or `semnum`='6') Limit 0,1";
	}
	$res = mysql_query($sql);
	if (mysql_num_rows($res)>0){
		while ($row = mysql_fetch_array($res)){ extract($row); 	$str .= $semnum; }
	}
	return $str;
}
function get_coursetitle($ccode){
	$str = '';
	$sql = "SELECT `course_title` from `idcawsus_common`.`course_code_ug` Where `coursecode`='".$ccode."' ";
	$sql .= "Union SELECT `course_title` from `idcawsus_common`.`course_code_pg` Where `coursecode`='".$ccode."' ";
	$sql .= "Union SELECT `course_title` from `idcawsus_common`.`course_code_dm` Where `coursecode`='".$ccode."' Limit 0,1";
	$res = mysql_query($sql);
	if (mysql_num_rows($res)>0){
		while ($row = mysql_fetch_array($res)){ extract($row); 	$str .= $course_title; }
	}
	return $str;
}
function get_credit($ccode){
	$str = '0';
	$sql = "SELECT `credit` from `idcawsus_common`.`course_code_ug` Where `coursecode`='".$ccode."' ";
	$sql .= "Union SELECT `credit` from `idcawsus_common`.`course_code_pg` Where `coursecode`='".$ccode."' ";
	$sql .= "Union SELECT `credit` from `idcawsus_common`.`course_code_dm` Where `coursecode`='".$ccode."' Limit 0,1";
	$res = mysql_query($sql);
	if (mysql_num_rows($res)>0){
		while ($row = mysql_fetch_array($res)){ extract($row); 	$str .= $credit; }
	}
	return $str;
}
function find_coursetype($ccode){
	$str = '';
	$sql = "SELECT `course_type` from `idcawsus_common`.`course_code_ug` Where `coursecode`='".$ccode."' ";
	$sql .= "Union SELECT `course_type` from `idcawsus_common`.`course_code_pg` Where `coursecode`='".$ccode."' ";
	$sql .= "Union SELECT `course_type` from `idcawsus_common`.`course_code_dm` Where `coursecode`='".$ccode."' Limit 0,1";
	$res = mysql_query($sql);
	if (mysql_num_rows($res)>0){
		while ($row = mysql_fetch_array($res)){ extract($row); 	$str .= $course_type; }
	}
	return $str;
}
function get_contact_hour($ccode, $mode){
	$str = '0';
	$sql = "SELECT `theory_hour`, `lab_hour` from `idcawsus_common`.`course_code_ug` Where `coursecode`='".$ccode."' ";
	$sql .= "Union SELECT `theory_hour`, `lab_hour` from `idcawsus_common`.`course_code_pg` Where `coursecode`='".$ccode."' ";
	$sql .= "Union SELECT `theory_hour`, `lab_hour` from `idcawsus_common`.`course_code_dm` Where `coursecode`='".$ccode."' Limit 0,1";
	$res = mysql_query($sql);
	if (mysql_num_rows($res)>0){
		while ($row = mysql_fetch_array($res)){ extract($row);
			if ($mode=='theory'){
				$str .= $theory_hour; 
			}elseif ($mode=='lab'){
				$str .= $lab_hour; 
			}
		}
	}
	return $str;
}
function check_fnp($regno, $attdate){
	$sql = "Select * FROM `idcawsus_bursar".substr(ac_year(),0,4)."`.`fee_paid`  WHERE `regno`='$regno' and (`paid`='N' or '".$attdate."' between `frm_date` and `to_date`) and `frm_date` is not NULL and `to_date` is not NULL Limit 0,1";
	$res = mysql_query($sql);
	$tot_rec = mysql_num_rows($res);
	if ($tot_rec>0){
		$fnp_flag = true;
	}
	return $fnp_flag;
}
function get_admn_date($regno, $batch, $ugpg){
	$dt='';
	$sql = "SELECT * from `idcawsus_admn".$batch."`.`master_".substr($ugpg,0,2)."` Where `regno`='$regno' ";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		if (isset($doa)){
			$dt = $doa;
		}
	}
	return $dt;
}
function total_wday_month($month_no, $stream, $acyear){
	$wdays='0';
	if ($stream=='sf'){
		$sql = "SELECT `cal_date` from `idcawsus_common`.`calendar_sf_".substr($acyear,0,4)."` Where month(`cal_date`)='$month_no' and `dayorder`>0 ";
	}else{
		$sql = "SELECT `cal_date` from `idcawsus_common`.`calendar_ad_".substr($acyear,0,4)."` Where month(`cal_date`)='$month_no' and `dayorder`>0 ";
	}
	$res = mysql_query($sql);
	$wdays = mysql_num_rows($res);
	return $wdays;
}
function college_open($acyear, $sem, $ugpg, $batch){
	$copen='';
	$sql = "SELECT * from `idcawsus_common`.`college_open` Where `batch`='$batch' and `semester`='$sem' and `programme`='$ugpg' and `acyear`='$acyear'";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$copen = $start_date;
	}
	return $copen;
}
function college_close($acyear, $sem, $ugpg, $batch){
	$cclose='';
	$sql = "SELECT * from `idcawsus_common`.`college_open` Where `batch`='$batch' and `semester`='$sem' and `programme`='$ugpg' and `acyear`='$acyear'";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$cclose = $end_date;
	}
	return $cclose;
}
function attendance_open($attdate, $sem, $batch, $prog){
	$dt='';
	$sql = "SELECT * from `idcawsus_common`.`college_open` Where `semester`='$sem' and `batch`='$batch' and `programme`='$prog' and '".$attdate."' between `start_date` and `end_date`";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		if (isset($attendance_open)){
			$dt = $attendance_open;
		}else{
			$dt = $attdate;
		}
	}
	return $dt;
}
function attendance_close($acyear, $sem, $ugpg, $batch, $major){
	$cclose='';
	$sql = "SELECT * from `idcawsus_common`.`attendance_close` Where `major`='$major' and `batch`='$batch' and `semester`='$sem' and `programme`='$ugpg' and `acyear`='$acyear'";
//echo $sql.'<br>';
	$res = mysql_query($sql);
	if (mysql_num_rows($res)>'0'){
		while ($row = mysql_fetch_array($res)){ extract($row);
			$cclose = $end_date;
		}
	}
	return $cclose;
}
function semester_start_end($acyear, $sem, $mode){
	$se_semester='';
	$sql = "SELECT * from `idcawsus_common`.`college_open` Where `semester`='$sem' and `acyear`='$acyear' order by `start_date`";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		if ($mode=='start'){
			$se_semester = $start_date;
		}elseif ($mode=='end'){
			$se_semester = $end_date;
		}
	}
	return $se_semester;
}
function find_left($regno, $batch, $ugpg){
	$leftr='';
	$sql = "SELECT * from `idcawsus_admn".$batch."`.`master_".substr($ugpg,0,2)."` Where `regno`='$regno' Limit 0,1";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		if ($dol!=null){
			$left = $dol;
		}
	}
	return $left;
}
function attend_calculation($acyear, $sem, $regno, $major, $batchyr, $admn_date, $col_close){
	if (substr($major,0,1)=='A' || $major=='SPSOC'){
		$start='1'; $end='5';
	}else{
		if ($batchyr<'2017' && ($major=='SUCPA' || $major=='SUCOH')){
			$start='1'; $end='5';
		}else{
			$start='3'; $end='7';
			if ($major=='SDCAP' && $acyear=='2017-2018' && $sem=='odd'){
				$start='3'; $end='5';
			}
		}
	}
	$ugpg = get_programme_code($major);
	$tot_present='0.0'; $tot_absent='0.0';
	$sql_cnt = "SELECT * from `idcawsus_common`.`calendar_ad_".substr($acyear,0,4)."` Where `dayorder`>'0' and `cal_date`>='$admn_date' and `cal_date`<='$col_close' order by `cal_date`";
	$res_cnt = mysql_query($sql_cnt); $xdate='';
	while ($row_cnt=mysql_fetch_array($res_cnt)){ extract($row_cnt);
		$morning_abs=0.0; $evening_abs='0.0'; $attend_1=''; $attend_2=''; $attend_3=''; $attend_4=''; $attend_5='';  $day_order = get_dayorder_new($acyear, $cal_date, '');
		for ($hour=$start; $hour<=$end; $hour++){
			$sql1 = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`daily_attend_".$batchyr."_".$sem."` Where `regno`='".$regno."' and `att_date`='$cal_date' and `classhour`='$hour' ";
			$res1 = mysql_query($sql1);
			if (mysql_num_rows($res1)>0){
				while ($row1=mysql_fetch_array($res1)){extract($row1); 
					if (substr($major,0,1)=='A' || $major=='SPSOC' || ($major=='SUCPA' && $batchyr<'2017') || ($major=='SUCOH' && $batchyr<'2017')){
						if ($classhour==1){ $attend_1 = $attendance;}
						if ($classhour==2){ $attend_2 = $attendance;}
						if ($classhour==3){ $attend_3 = $attendance;}
						if ($classhour==4){ $attend_4 = $attendance;}
						if ($classhour==5){ $attend_5 = $attendance;}
					}elseif (substr($major,0,1)=='S' && $major!='SPSOC' && $major!='SUCPA' && $major!='SUCOH' && $batchyr<'2017'){
						if ($classhour==3){ $attend_1 = $attendance;}
						if ($classhour==4){ $attend_2 = $attendance;}
						if ($classhour==5){ $attend_3 = $attendance;}
						if ($classhour==6){ $attend_4 = $attendance;}
						if ($classhour==7){ $attend_5 = $attendance;}
					}elseif (substr($major,0,1)=='S' && $major!='SPSOC'){
						if ($classhour==3){ $attend_1 = $attendance;}
						if ($classhour==4){ $attend_2 = $attendance;}
						if ($classhour==5){ $attend_3 = $attendance;}
						if ($classhour==6){ $attend_4 = $attendance;}
						if ($classhour==7){ $attend_5 = $attendance;}
					}
				}
				if ($day_order=='7'){
					if ($attend_3==''){ $attend_3='NG';}
					if ($attend_4==''){ $attend_4='NG';}
				}
			}else{
				if (substr($major,0,1)=='A' || $major=='SPSOC' || ($major=='SUCPA' && $batch<'2017') || ($major=='SUCOH' && $batch<'2017')){
					if ($hour==1){ $attend_1 = 'NG';}
					if ($day_order<'7'){
						if ($hour==2){ $attend_2 = 'NG';}
						if ($hour==3){ $attend_3 = 'NG';}
					}
					if ($hour==4){ $attend_4 = 'NG';}
					if ($day_order<'7'){
						if ($hour==5){ $attend_5 = 'NG';}
					}
				}elseif (substr($major,0,1)=='S' && $major!='SPSOC' && $major!='SUCPA' && $major!='SUCOH' && $batch<'2017'){
					if ($hour==3){ $attend_1 = 'NG';}
					if ($day_order<'7'){
						if ($hour==4){ $attend_2 = 'NG';}
						if ($hour==5){ $attend_3 = 'NG';}
					}
					if ($hour==6){ $attend_4 = 'NG';}
					if ($day_order<'7'){
						if ($hour==7){ $attend_5 = 'NG';}
					}
				}elseif (substr($major,0,1)=='S' && $major!='SPSOC'){
					if ($hour==3){ $attend_1 = 'NG';}
					if ($day_order<'7'){
						if ($hour==4){ $attend_2 = 'NG';}
						if ($hour==5){ $attend_3 = 'NG';}
					}
					if ($hour==6){ $attend_4 = 'NG';}
					if ($day_order<'7'){
						if ($hour==7){ $attend_5 = 'NG';}
					}
				}
			}
		}
		if (substr($major,0,1)=='A' || $major=='SPSOC' || ($major=='SUCPA' && $batch<'2017') || ($major=='SUCOH' && $batch<'2017')){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='1' and `attendance`='P' and `sp_mode`='full' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_1='SP'; $attend_2='SP'; $attend_3='SP'; $attend_4='SP'; $attend_5='SP';}
			if (get_dayorder_new($acyear, $cal_date, '')=='1'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`vocational_course` Where `regno`='".$regno."' and `classhour`='2' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ 
					$attend_2='VI';
					if ($attend_1=='AA'){ 
						$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='1' and `attendance`='P' ";
						$res_sp = mysql_query($sql_sp);
						if (mysql_num_rows($res_sp)>'0'){ 
							$attend_2='SP';
						}else{
							$attend_2='AA';
						}
					}
				}
			}
			if ($day_order=='5'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`vocational_course` Where `regno`='".$regno."' and `classhour`='5' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ 
					$attend_5='VI';
					if ($attend_4=='AA'){ 
						$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='4' and `attendance`='P' ";
						$res_sp = mysql_query($sql_sp);
						if (mysql_num_rows($res_sp)>'0'){ 
							$attend_5='SP';
						}else{
							$attend_5='AA';
						}
					}
				}
			}
			if ($attend_1!='P'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='1' and `attendance`='P' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ $attend_1='SP';}
			}
			if ($attend_2!='P'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='2' and `attendance`='P' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ $attend_2='SP';}
			}
			if ($attend_3!='P'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='3' and `attendance`='P' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ $attend_3='SP';}
			}
			if ($attend_4!='P'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='4' and `attendance`='P' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ $attend_4='SP';}
			}
			if ($attend_5!='P'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='5' and `attendance`='P' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ $attend_5='SP';}
			}
			if ($attend_1=='AA' || $attend_1=='NG' || $attend_2=='AA' || $attend_2=='NG' || $attend_3=='AA' || $attend_3=='NG'){
				$morning_abs=0.5;
			}
			if ($attend_4=='AA' || $attend_4=='NG' || $attend_5=='AA' || $attend_5=='NG'){
				$evening_abs=0.5;
			}
		}elseif (substr($major,0,1)=='S' && $major!='SPSOC' && $major!='SUCPA' && $major!='SUCOH' && $batch<'2017'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='1' and `attendance`='P' and `sp_mode`='full' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_1='SP'; $attend_2='SP'; $attend_3='SP'; $attend_4='SP'; $attend_5='SP';}
			if ($day_order=='1' || get_dayorder_new($acyear, $cal_date, '')=='5'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`vocational_course` Where `regno`='".$regno."' and `classhour`='7' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ 
					$attend_5='VI';
					if ($attend_4=='AA'){
						$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='6' and `attendance`='P' ";
						$res_sp = mysql_query($sql_sp);
						if (mysql_num_rows($res_sp)>'0'){ 
							$attend_5='SP';
						}else{
							$attend_5='AA';
						}
					}
				}
			}
			if ($attend_1!='P'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='3' and `attendance`='P' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ $attend_1='SP';}
			}
			if ($attend_2!='P'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='4' and `attendance`='P' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ $attend_2='SP';}
			}
			if ($attend_3!='P'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='5' and `attendance`='P' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ $attend_3='SP';}
			}
			if ($attend_4!='P'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='6' and `attendance`='P' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ $attend_4='SP';}
			}
			if ($attend_5!='P'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='7' and `attendance`='P' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ $attend_5='SP';}
			}
			if ($major=='SDCAP' && $acyear=='2017-2018' && $sem=='odd'){
				if ($attend_1=='AA' || $attend_1=='NG' || $attend_2=='AA' || $attend_2=='NG' || $attend_3=='AA' || $attend_3=='NG'){
					$morning_abs=0.5;
				}
				if ($attend_4=='AA' || $attend_4=='NG' ){
					$evening_abs=0.5;
				}
			}else{
				if ($attend_1=='AA' || $attend_1=='NG' || $attend_2=='AA' || $attend_2=='NG' || $attend_3=='AA' || $attend_3=='NG'){
					$morning_abs=0.5;
				}
				if ($attend_4=='AA' || $attend_4=='NG' || $attend_5=='AA' || $attend_5=='NG'){
					$evening_abs=0.5;
				}
			}
		}elseif (substr($major,0,1)=='S' && $major!='SPSOC'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='1' and `attendance`='P' and `sp_mode`='full' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_1='SP'; $attend_2='SP'; $attend_3='SP'; $attend_4='SP'; $attend_5='SP';}
			if ($day_order=='1' || get_dayorder_new($acyear, $cal_date, '')=='5'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`vocational_course` Where `regno`='".$regno."' and `classhour`='7' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ 
					$attend_5='VI';
					if ($attend_4=='AA'){
						$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='6' and `attendance`='P' ";
						$res_sp = mysql_query($sql_sp);
						if (mysql_num_rows($res_sp)>'0'){ 
							$attend_5='SP';
						}else{
							$attend_5='AA';
						}
					}
				}
			}
			if ($attend_1!='P'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='3' and `attendance`='P' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ $attend_1='SP';}
			}
			if ($attend_2!='P'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='4' and `attendance`='P' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ $attend_2='SP';}
			}
			if ($attend_3!='P'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='5' and `attendance`='P' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ $attend_3='SP';}
			}
			if ($attend_4!='P'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='6' and `attendance`='P' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ $attend_4='SP';}
			}
			if ($attend_5!='P'){
				$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='7' and `attendance`='P' ";
				$res_sp = mysql_query($sql_sp);
				if (mysql_num_rows($res_sp)>'0'){ $attend_5='SP';}
			}
			if ($major=='SDCAP' && $acyear=='2017-2018' && $sem=='odd'){
				if ($attend_1=='AA' || $attend_1=='NG' || $attend_2=='AA' || $attend_2=='NG' || $attend_3=='AA' || $attend_3=='NG'){
					$morning_abs=0.5;
				}
				if ($attend_3=='AA' || $attend_3=='NG'){
					$evening_abs=0.5;
				}
			}else{
				if ($attend_1=='AA' || $attend_1=='NG' || $attend_2=='AA' || $attend_2=='NG' || $attend_3=='AA' || $attend_3=='NG'){
					$morning_abs=0.5;
				}
				if ($attend_4=='AA' || $attend_4=='NG' || $attend_5=='AA' || $attend_5=='NG'){
					$evening_abs=0.5;
				}
			}
		}
		if ($morning_abs=='0' && $evening_abs=='0'){
			$tot_present+=1;
		}elseif ($morning_abs>'0' && $evening_abs=='0'){
			$tot_present+=0.5; $tot_absent+=0.5;
		}elseif ($morning_abs=='0' && $evening_abs>'0'){
			$tot_present+=0.5; $tot_absent+=0.5;
		}elseif ($morning_abs>'0' && $evening_abs>'0'){
			$tot_absent+=1;
		}
//		if ($regno=='17PCPE04'){
//			echo date('d-m-Y', strtotime($cal_date)).' morning-'.$morning_abs.' ['.$attend_1.'/'.$attend_2.'/'.$attend_3.'] &nbsp;&nbsp;&nbsp; evening-'.$evening_abs.' ['.$attend_4.'/'.$attend_5.'] <br>';
//		}
	}
	if ($tot_present>'0'){
	    $percent = (($tot_present/($tot_absent+$tot_present))*100);
	}
	$array = array();
	$array['absent'] = $tot_absent;
	$array['present'] = $tot_present;
	$array['percent'] = $percent;
	return $array;
}
function attend_calculation_new($acyear, $sem, $regno, $major, $batchyr, $admn_date, $col_close){
	$start='1'; $end='5';
	if ($major=='SDCAP'){
		$start='1'; $end='4';
	}
	$ugpg = get_programme_code($major);
	$tot_present='0.0'; $tot_absent='0.0';
	$sql_cnt = "SELECT * from `idcawsus_common`.`calendar_ad_".substr($acyear,0,4)."` Where `dayorder`>'0' and `cal_date`>='$admn_date' and `cal_date`<='$col_close' order by `cal_date`";
	$res_cnt = mysql_query($sql_cnt); $xdate='';
	while ($row_cnt=mysql_fetch_array($res_cnt)){ extract($row_cnt);
		$morning_abs=0.0; $evening_abs='0.0'; $attend_1=''; $attend_2=''; $attend_3=''; $attend_4=''; $attend_5='';  $day_order = get_dayorder_new($acyear, $cal_date, '');
		for ($hour=$start; $hour<=$end; $hour++){
			$sql1 = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`daily_attend_".$batchyr."_".$sem."` Where `regno`='".$regno."' and `att_date`='$cal_date' and `classhour`='$hour' ";
			$res1 = mysql_query($sql1);
			if (mysql_num_rows($res1)>0){
				while ($row1=mysql_fetch_array($res1)){extract($row1); 
					if ($classhour==1){ $attend_1 = $attendance;}
					if ($classhour==2){ $attend_2 = $attendance;}
					if ($classhour==3){ $attend_3 = $attendance;}
					if ($classhour==4){ $attend_4 = $attendance;}
					if ($classhour==5){ $attend_5 = $attendance;}
				}
				if ($day_order=='7'){
					if ($attend_3==''){ $attend_3='NG';}
					if ($attend_4==''){ $attend_4='NG';}
				}
			}else{
				if ($hour==1){ $attend_1 = 'NG';}
				if ($day_order<'7'){
					if ($hour==2){ $attend_2 = 'NG';}
					if ($hour==3){ $attend_3 = 'NG';}
				}
				if ($hour==4){ $attend_4 = 'NG';}
				if ($day_order<'7'){
					if ($hour==5){ $attend_5 = 'NG';}
				}
			}
		}
		$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='1' and `attendance`='P' and `sp_mode`='full' ";
		$res_sp = mysql_query($sql_sp);
		if (mysql_num_rows($res_sp)>'0'){ $attend_1='SP'; $attend_2='SP'; $attend_3='SP'; $attend_4='SP'; $attend_5='SP';}
		if ($attend_1!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='1' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_1='SP';}
		}
		if ($attend_2!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='2' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_2='SP';}
		}
		if ($attend_3!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='3' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_3='SP';}
		}
		if ($attend_4!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='4' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_4='SP';}
		}
		if ($attend_5!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='".$cal_date."' and `classhour`='5' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_5='SP';}
		}
		if ($attend_1=='AA' || $attend_1=='NG' || $attend_2=='AA' || $attend_2=='NG' || $attend_3=='AA' || $attend_3=='NG'){
			$morning_abs=0.5;
		}
		if ($attend_4=='AA' || $attend_4=='NG' || $attend_5=='AA' || $attend_5=='NG'){
			$evening_abs=0.5;
		}
		if ($morning_abs=='0' && $evening_abs=='0'){
			$tot_present+=1;
		}elseif ($morning_abs>'0' && $evening_abs=='0'){
			$tot_present+=0.5; $tot_absent+=0.5;
		}elseif ($morning_abs=='0' && $evening_abs>'0'){
			$tot_present+=0.5; $tot_absent+=0.5;
		}elseif ($morning_abs>'0' && $evening_abs>'0'){
			$tot_absent+=1;
		}
//			echo date('d-m-Y', strtotime($cal_date)).' morning-'.$morning_abs.' ['.$attend_1.'/'.$attend_2.'/'.$attend_3.'] &nbsp;&nbsp;&nbsp; evening-'.$evening_abs.' ['.$attend_4.'/'.$attend_5.'] <br>';
	}
	$percent='0';
	if ($tot_present>'0'){
	    $percent = (($tot_present/($tot_absent+$tot_present))*100);
	}
	$array = array();
	$array['absent'] = $tot_absent;
	$array['present'] = $tot_present;
	$array['percent'] = $percent;
	return $array;
}
function attend_daily_calculation($acyear, $sem, $regno, $major, $batchyr, $att_date){
	$ugpg = ugpg($major); $doleft='';
	$sql_left = "Select `regno`, `dol` from `idcawsus_admn".$batchyr."`.`master_".$ugpg."` Where `regno`='".$regno."' and `dol` is not null";

	if (substr($major,0,1)=='A' || $major=='SPSOC'){
		$start='1'; $end='5';
	}else{
		if ($batchyr<'2017' && ($major=='SUCPA' || $major=='SUCOH')){
			$start='1'; $end='5';
		}else{
			$start='3'; $end='7';
			if ($major=='SDCAP' && $acyear=='2017-2018' && $sem=='odd'){
				$start='3'; $end='5';
			}
		}
	}
	$ugpg = get_programme_code($major);
	$morning_abs=0.0; $evening_abs='0.0'; 
	$attend_1=''; $attend_2=''; $attend_3=''; $attend_4=''; $attend_5='';  $day_order = get_dayorder_new($acyear, $att_date, '');
	for ($hour=$start; $hour<=$end; $hour++){
		$sql1 = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`daily_attend_".$batchyr."_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='$hour' ";
		$res1 = mysql_query($sql1);
		if (mysql_num_rows($res1)>0){
			while ($row1=mysql_fetch_array($res1)){extract($row1); 
				if (substr($major,0,1)=='A' || $major=='SPSOC' || ($major=='SUCPA' && $batchyr<'2017') || ($major=='SUCOH' && $batchyr<'2017')){
					if ($classhour==1){ $attend_1 = $attendance;}
					if ($classhour==2){ $attend_2 = $attendance;}
					if ($classhour==3){ $attend_3 = $attendance;}
					if ($classhour==4){ $attend_4 = $attendance;}
					if ($classhour==5){ $attend_5 = $attendance;}
				}elseif (substr($major,0,1)=='S' && $major!='SPSOC' && $major!='SUCPA' && $major!='SUCOH' && $batchyr<'2017'){
					if ($classhour==3){ $attend_1 = $attendance;}
					if ($classhour==4){ $attend_2 = $attendance;}
					if ($classhour==5){ $attend_3 = $attendance;}
					if ($classhour==6){ $attend_4 = $attendance;}
					if ($classhour==7){ $attend_5 = $attendance;}
				}elseif (substr($major,0,1)=='S' && $major!='SPSOC'){
					if ($classhour==3){ $attend_1 = $attendance;}
					if ($classhour==4){ $attend_2 = $attendance;}
					if ($classhour==5){ $attend_3 = $attendance;}
					if ($classhour==6){ $attend_4 = $attendance;}
					if ($classhour==7){ $attend_5 = $attendance;}
				}
			}
			if ($day_order=='7'){
				if ($attend_3==''){ $attend_3='NG';}
				if ($attend_4==''){ $attend_4='NG';}
			}
		}else{
			if (substr($major,0,1)=='A' || $major=='SPSOC' || ($major=='SUCPA' && $batch<'2017') || ($major=='SUCOH' && $batch<'2017')){
				if ($hour==1){ $attend_1 = 'NG';}
				if ($day_order<'7'){
					if ($hour==2){ $attend_2 = 'NG';}
					if ($hour==3){ $attend_3 = 'NG';}
				}
				if ($hour==4){ $attend_4 = 'NG';}
				if ($day_order<'7'){
					if ($hour==5){ $attend_5 = 'NG';}
				}
			}elseif (substr($major,0,1)=='S' && $major!='SPSOC' && $major!='SUCPA' && $major!='SUCOH' && $batch<'2017'){
				if ($hour==3){ $attend_1 = 'NG';}
				if ($day_order<'7'){
					if ($hour==4){ $attend_2 = 'NG';}
					if ($hour==5){ $attend_3 = 'NG';}
				}
				if ($hour==6){ $attend_4 = 'NG';}
				if ($day_order<'7'){
					if ($hour==7){ $attend_5 = 'NG';}
				}
			}elseif (substr($major,0,1)=='S' && $major!='SPSOC'){
				if ($hour==3){ $attend_1 = 'NG';}
				if ($day_order<'7'){
					if ($hour==4){ $attend_2 = 'NG';}
					if ($hour==5){ $attend_3 = 'NG';}
				}
				if ($hour==6){ $attend_4 = 'NG';}
				if ($day_order<'7'){
					if ($hour==7){ $attend_5 = 'NG';}
				}
			}
		}
	}
	if (substr($major,0,1)=='A' || $major=='SPSOC' || ($major=='SUCPA' && $batch<'2017') || ($major=='SUCOH' && $batch<'2017')){
		$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='1' and `attendance`='P' and `sp_mode`='full' ";
		$res_sp = mysql_query($sql_sp);
		if (mysql_num_rows($res_sp)>'0'){ $attend_1='SP'; $attend_2='SP'; $attend_3='SP'; $attend_4='SP'; $attend_5='SP';}
		if (get_dayorder_new($acyear, $cal_date, '')=='1'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`vocational_course` Where `regno`='".$regno."' and `classhour`='2' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ 
				$attend_2='VI';
				if ($attend_1=='AA'){ 
					$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='1' and `attendance`='P' ";
					$res_sp = mysql_query($sql_sp);
					if (mysql_num_rows($res_sp)>'0'){ 
						$attend_2='SP';
					}else{
						$attend_2='AA';
					}
				}
			}
		}
		if ($day_order=='5'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`vocational_course` Where `regno`='".$regno."' and `classhour`='5' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ 
				$attend_5='VI';
				if ($attend_4=='AA'){ 
					$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='4' and `attendance`='P' ";
					$res_sp = mysql_query($sql_sp);
					if (mysql_num_rows($res_sp)>'0'){ 
						$attend_5='SP';
					}else{
						$attend_5='AA';
					}
				}
			}
		}
		if ($attend_1!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='1' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_1='SP';}
		}
		if ($attend_2!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='2' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_2='SP';}
		}
		if ($attend_3!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='3' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_3='SP';}
		}
		if ($attend_4!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='4' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_4='SP';}
		}
		if ($attend_5!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='5' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_5='SP';}
		}
		if ($attend_1=='AA' || $attend_1=='NG' || $attend_2=='AA' || $attend_2=='NG' || $attend_3=='AA' || $attend_3=='NG'){
			$morning_abs=0.5;
		}
		if ($attend_4=='AA' || $attend_4=='NG' || $attend_5=='AA' || $attend_5=='NG'){
			$evening_abs=0.5;
		}
	}elseif (substr($major,0,1)=='S' && $major!='SPSOC' && $major!='SUCPA' && $major!='SUCOH' && $batch<'2017'){
		$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='1' and `attendance`='P' and `sp_mode`='full' ";
		$res_sp = mysql_query($sql_sp);
		if (mysql_num_rows($res_sp)>'0'){ $attend_1='SP'; $attend_2='SP'; $attend_3='SP'; $attend_4='SP'; $attend_5='SP';}
		if ($day_order=='1' || get_dayorder_new($acyear, $cal_date, '')=='5'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`vocational_course` Where `regno`='".$regno."' and `classhour`='7' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ 
				$attend_5='VI';
				if ($attend_4=='AA'){
					$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='6' and `attendance`='P' ";
					$res_sp = mysql_query($sql_sp);
					if (mysql_num_rows($res_sp)>'0'){ 
						$attend_5='SP';
					}else{
						$attend_5='AA';
					}
				}
			}
		}
		if ($attend_1!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='3' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_1='SP';}
		}
		if ($attend_2!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='4' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_2='SP';}
		}
		if ($attend_3!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='5' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_3='SP';}
		}
		if ($attend_4!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='6' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_4='SP';}
		}
		if ($attend_5!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='7' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_5='SP';}
		}
		if ($major=='SDCAP' && $acyear=='2017-2018' && $sem=='odd'){
			if ($attend_1=='AA' || $attend_1=='NG' || $attend_2=='AA' || $attend_2=='NG' || $attend_3=='AA' || $attend_3=='NG'){
				$morning_abs=0.5;
			}
			if ($attend_4=='AA' || $attend_4=='NG' ){
				$evening_abs=0.5;
			}
		}else{
			if ($attend_1=='AA' || $attend_1=='NG' || $attend_2=='AA' || $attend_2=='NG' || $attend_3=='AA' || $attend_3=='NG'){
				$morning_abs=0.5;
			}
			if ($attend_4=='AA' || $attend_4=='NG' || $attend_5=='AA' || $attend_5=='NG'){
				$evening_abs=0.5;
			}
		}
	}elseif (substr($major,0,1)=='S' && $major!='SPSOC'){
		$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='1' and `attendance`='P' and `sp_mode`='full' ";
		$res_sp = mysql_query($sql_sp);
		if (mysql_num_rows($res_sp)>'0'){ $attend_1='SP'; $attend_2='SP'; $attend_3='SP'; $attend_4='SP'; $attend_5='SP';}
		if ($day_order=='1' || get_dayorder_new($acyear, $cal_date, '')=='5'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`vocational_course` Where `regno`='".$regno."' and `classhour`='7' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ 
				$attend_5='VI';
				if ($attend_4=='AA'){
					$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='6' and `attendance`='P' ";
					$res_sp = mysql_query($sql_sp);
					if (mysql_num_rows($res_sp)>'0'){ 
						$attend_5='SP';
					}else{
						$attend_5='AA';
					}
				}
			}
		}
		if ($attend_1!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='3' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_1='SP';}
		}
		if ($attend_2!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='4' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_2='SP';}
		}
		if ($attend_3!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='5' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_3='SP';}
		}
		if ($attend_4!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='6' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_4='SP';}
		}
		if ($attend_5!='P'){
			$sql_sp = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`spl_permission_".$sem."` Where `regno`='".$regno."' and `att_date`='$att_date' and `classhour`='7' and `attendance`='P' ";
			$res_sp = mysql_query($sql_sp);
			if (mysql_num_rows($res_sp)>'0'){ $attend_5='SP';}
		}
		if ($major=='SDCAP' && $acyear=='2017-2018' && $sem=='odd'){
			if ($attend_1=='AA' || $attend_1=='NG' || $attend_2=='AA' || $attend_2=='NG' || $attend_3=='AA' || $attend_3=='NG'){
				$morning_abs=0.5;
			}
			if ($attend_3=='AA' || $attend_3=='NG'){
				$evening_abs=0.5;
			}
		}else{
			if ($attend_1=='AA' || $attend_1=='NG' || $attend_2=='AA' || $attend_2=='NG' || $attend_3=='AA' || $attend_3=='NG'){
				$morning_abs=0.5;
			}
			if ($attend_4=='AA' || $attend_4=='NG' || $attend_5=='AA' || $attend_5=='NG'){
				$evening_abs=0.5;
			}
		}
	}
	$array = array();
	$array['morning'] = $morning_abs;
	$array['evening'] = $evening_abs;
	$array['left'] = $doleft;
	return $array;
}
function find_fee_dues($regno, $acyear){
	$text='';
	$sql = "Select * from `idcawsus_bursar".substr($acyear,0,4)."`.`fee_paid` Where `regno`='".$regno."' and `paid`='N'";
	$res = mysql_query($sql) or die("Check given querry could not execute.");
	if (mysql_num_rows($res)>0){
		while ($row=mysql_fetch_array($res)){ extract($row);
			$text = 'College Fee Not Paid';
		}
	}
	$sql1 = "Select * from `idcawsus_bursar".substr($acyear,0,4)."`.`other_fee` Where `regno`='".$regno."' and `paid`='N'";
	$res1 = mysql_query($sql1) or die("Check given querry could not execute.");
	if (mysql_num_rows($res1)>0){
		if (strlen($text)>0){ $text.='<br>';}
		while ($row1=mysql_fetch_array($res1)){ extract($row1);
			$text .= $feehead.' Fee Not Paid<br>';
		}
	}
	return $text;
}
function find_not_permit($regno, $batch){
	$text='';
	$sql = "Select * from `idcawsus_admn".$batch."`.`condonation` Where `regno`='".$regno."' and percentage<64.5";
	$res = mysql_query($sql) or die("Check given querry could not execute.");
	if (mysql_num_rows($res)>0){
		while ($row=mysql_fetch_array($res)){ extract($row);
			$text = 'Not Permitted to write a Summative Examination.';
		}
	}
	return $text;
}
function gen_faculty_ttable($acyear, $sem, $attdate){
	$dorder = get_dayorder_new($acyear, $attdate, '');
	$sql = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`faculty_group_".$sem."` Where `dayorder`='".$dorder."' and `dayorder`<'8' ";
//	$res = mysql_query($sql);
	$res = mysql_query($sql) or die("Check given querry could not execute. (gen_faculty_ttable-1)<br>".$sql);
	while ($row=mysql_fetch_array($res)){ extract($row);
		$batchyr=get_batch_year($acyear, $semnum);
		$sql1 = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`faculty_ttable_".$sem."` Where `att_date`='".$attdate."' and `empid`='".$empid."' and `classhour`='".$classhour."' and `coursecode`='".$coursecode."' and `batch`='".$batch."' and `semnum`='".$semnum."' ";
//		$res1 = mysql_query($sql1);
		$res1 = mysql_query($sql1) or die("Check given querry could not execute. (gen_faculty_ttable-2)<br>".$sql1);
		if (mysql_num_rows($res1)=='0'){
			$sql_ins = "INSERT into `idcawsus_attend_".substr($acyear,0,4)."`.`faculty_ttable_".$sem."` SET `att_date`='".$attdate."', `empid`='".$empid."', `classhour`='".$classhour."', `coursecode`='".$coursecode."', `batch`='".$batch."', `semnum`='".$semnum."', ";
			$sql_ins .= "`stud_batch`='$batchyr', `modified_date`='".date('Y-m-d H:i:s')."', `ip_address`='".get_ip_address()."', `lastuser`='system generate' ";
//			mysql_query($sql_ins);	
			mysql_query($sql_ins) or die("Check given querry could not execute (gen_faculty_ttable-3)<br>".$sql_ins);
		}
	}
	return 0;
}
function gen_student_attendance($acyear, $sem, $attdate){
	$dorder = get_dayorder_new($acyear, $attdate, '');
	if ($dorder<'8'){
		$sql = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`faculty_group_".$sem."` Where `dayorder`='".$dorder."' order by `semnum`";
//echo $sql.'<br>';
		$res = mysql_query($sql);
//		$res = mysql_query($sql) or die("Check given querry could not execute.(gen_student_attendance-1)<br>".$sql);
		while ($row=mysql_fetch_array($res)){ extract($row);
			$batchyr=get_batch_year($acyear, $semnum);
			$sql_str = "SELECT * from `idcawsus_attend_".substr($acyear,0,4)."`.`student_group_".$sem."` WHERE `coursecode`='".$coursecode."' and `batch`='".$batch."' and `semnum`='".$semnum."' and  ";
			if ($semnum>4){
				$sql_str.="`regno` in (Select `regno` from `idcawsus_admn".$batchyr."`.`master_ug` Where `left_yn`='N' and `not_eligible`='N' and `long_abs`='N') ";
			}elseif ($semnum>2){
				$sql_str.="( `regno` in (Select `regno` from `idcawsus_admn".$batchyr."`.`master_ug` Where `left_yn`='N' and `not_eligible`='N' and `long_abs`='N') or `regno` in (Select `regno` from `idcawsus_admn".$batchyr."`.`master_pg` Where `left_yn`='N' and `not_eligible`='N' and `long_abs`='N')) ";
			}else{
				$sql_str.="(`regno` in (Select `regno` from `idcawsus_admn".$batchyr."`.`master_ug` Where `left_yn`='N' and `not_eligible`='N' and `long_abs`='N') or `regno` in (Select `regno` from `idcawsus_admn".$batchyr."`.`master_pg` Where `left_yn`='N' and `not_eligible`='N' and `long_abs`='N') or `regno` in (Select `regno` from `idcawsus_admn".$batchyr."`.`master_dm` Where `left_yn`='N' and `not_eligible`='N' and `long_abs`='N')) ";
			}
			$sql_str .= "order by `regno`";
//echo $sql_str.'<br>';
			$res_str = mysql_query($sql_str);
//			$res_str = mysql_query($sql_str) or die("Check given querry could not execute. (gen_faculty_ttable-2)<br>".$sql_str);

			while ($row1=mysql_fetch_array($res_str)){
				$sql_check = "Select * from `idcawsus_attend_".substr($acyear,0,4)."`.`daily_attend_".$batchyr."_".$sem."` where `att_date`='".$attdate."' and `regno`='".$row1['regno']."' and `classhour`='".$row['classhour']."' and `coursecode`='".$row['coursecode']."' and `batch`='".$row['batch']."' and `semnum`='".$row['semnum']."'";
//echo $sql_check.'<br>';
				$res_check = mysql_query($sql_check)  or die("Check given querry could not execute.(gen_student_attendance-3)");
				if (mysql_num_rows($res_check)=='0'){
					$sql_ins = "INSERT into `idcawsus_attend_".substr($acyear,0,4)."`.`daily_attend_".$batchyr."_".$sem."` SET `att_date`='".$attdate."', `regno`='".$row1['regno']."', `classhour`='".$row['classhour']."', `coursecode`='".$row['coursecode']."', `batch`='".$row['batch']."', `semnum`='".$row['semnum']."', ";
					$sql_ins .= "`attendance`='NG', `faculty`='".$row['empid']."', `major`='".$row1['major']."', `modified_date`='".date('Y-m-d H:i:s')."', `ip_address`='".get_ip_address()."', `lastuser`='system generate' ";
//echo $sql_ins.'<br>';
					mysql_query($sql_ins);	
//					mysql_query($sql_ins) or die("Check given querry could not execute.(gen_student_attendance-4)<br>".$sql_ins);
				}
			}
		}
	}
	return 0;
}
function check_ng($regno, $attdate, $ccode, $chour, $batch, $sem){
	$sql = "Select * FROM `idcawsus_attend_".substr(ac_year(),0,4)."`.`daily_attend_".$batch."_".$sem."` WHERE `regno`='$regno' and `att_date`='$attdate' and `coursecode`='$ccode' and `classhour`='$chour' and `attendance`='NG' ";
	$res = mysql_query($sql);
	$tot_rec = mysql_num_rows($res);
	if ($tot_rec>0){
		$fnp_flag = true;
	}
	return $fnp_flag;
}
function my_encrypt($str){
	$mystr = '';
	$decrypt=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9','0','!','@','#','$','%','^','&','*','(',')','-','_','=','+','.',',','/','?','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	$encrypt=array('!','@','#','$','%','^','&','*','(',')','-','_','=','+','.',',','/','?','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i','j','k','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2');
	for ($i=0; $i<strlen($str); $i++){
		$flag=true; $k=0;
		foreach ($decrypt as $value){
			if ($value==substr($str,$i,1)){
				$mystr.=$encrypt[$k];
				$flag=false;
				break;
			}
			$k++;
		}
		if ($flag==true){$mystr.=substr($str,$i,1);}
	}
	return $mystr;
}
function my_decrypt($str){
	$mystr = '';
	$decrypt=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9','0','!','@','#','$','%','^','&','*','(',')','-','_','=','+','.',',','/','?','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	$encrypt=array('!','@','#','$','%','^','&','*','(',')','-','_','=','+','.',',','/','?','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i','j','k','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2');
	for ($i=0; $i<strlen($str); $i++){
		$flag=true; $k=0;
		foreach ($encrypt as $value){
			if ($value==substr($str,$i,1)){
				$mystr.=$decrypt[$k];
				$flag=false;
				break;
			}
			$k++;
		}
		if ($flag==true){$mystr.=substr($str,$i,1);}
	}
	return $mystr;
}
function drop_sp_category(){
	$array = array();
	$sql = "SELECT * from `idcawsus_common`.`sp_category`";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$array[] = $category;
	}
	return $array;
}
function find_category_yn($str){
	$flag=false;
	$sql = "Select * from `idcawsus_common`.`sp_category` Where `category`='".addslashes($str)."'";
	$res = mysql_query($sql) or die("Check given querry could not execute.<br>".$sql);
	if (mysql_num_rows($res)>0){
		while ($row=mysql_fetch_array($res)){ extract($row);
			if ($reports=='Y'){$flag = true;}
		}
	}
	return $flag;
}
function get_staff_empid($name){
	$id='';
	$sql = "SELECT `empid` from `idcawsus_common`.`users_staff` Where `name`='$name' Limit 0,1";
//echo $sql.'<br>';
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		$id = $empid;
	}
	return $id;
}
function get_acbook($ccode){
	$str = '';
	$sql = "SELECT `academic_council` from `idcawsus_common`.`course_code_ug` Where `coursecode`='".$ccode."' ";
	$sql .= "Union SELECT `academic_council` from `idcawsus_common`.`course_code_pg` Where `coursecode`='".$ccode."' ";
	$sql .= "Union SELECT `academic_council` from `idcawsus_common`.`course_code_dm` Where `coursecode`='".$ccode."' Limit 0,1";
	$res = mysql_query($sql);
	if (mysql_num_rows($res)>0){
		while ($row = mysql_fetch_array($res)){ extract($row); 	$str .= $academic_council; }
	}
	return $str;
}
function check_mark_entry($period){
	$cur_date = date('Y-m-d');
	$flag=false;
	$sql = "Select * from `idcawsus_examcommon`.`mark_entry_periods` Where `period`='$period' and `ac_year`='".ac_year()."' and '".$cur_date."' between `date_from` and `date_to`";
	$res = mysql_query($sql);
	if (mysql_num_rows($res)>'0'){
		$flag=true;
	}
	return $flag;
}
function get_given_max($batch, $fldhead, $ccode, $semnum, $batches, $ugpg){
	$fldname = $fldhead; $fldcount='1'; $gm_mark='0';
	if (is_numeric(substr($fldhead,-1))){
		$fldname = substr($fldhead,0,(strlen($fldhead)-1));
		$fldcount = substr($fldhead,-1);
	}
	$flag=false;
	if (strtolower($fldname)=='stheory' || strtolower($fldname)=='slab' || strtolower($fldname)=='sviva' || strtolower($fldname)=='sreport'){
		$sql = "SELECT `".$fldname."_gm` as `gmax` from `idcawsus_exam".$batch."`.`evaluation_".$ugpg."` Where `coursecode`='$ccode' and `semnum`='$semnum' ";
		$res = mysql_query($sql);
		if (mysql_num_rows($res)>0){
			while ($row=mysql_fetch_array($res)){extract($row);}
			$gm_mark = $gmax;
		}
	}else{
		for ($i=1; $i<=9; $i++){
			$sql = "SELECT `fld_".$i."_gm1` as `gm1`, `fld_".$i."_gm2` as `gm2` from `idcawsus_exam".$batch."`.`evaluation_".$ugpg."` Where `fld_".$i."_head`='".$fldname."' and `coursecode`='$ccode' and `semnum`='$semnum' and `batches`='$batches' ";
			$res = mysql_query($sql);
			if (mysql_num_rows($res)>0){
				while ($row=mysql_fetch_array($res)){extract($row);}
				$gm_mark = $gm1;
				if ($fldcount>'1'){
					$gm_mark = $gm2;
				}
				$flag=true;
			}
			if ($flag==true){ break;}
		}
	}
	return $gm_mark;
}
function get_required_max($fldhead, $ccode, $semnum, $batch, $ugpg){
	$fldname = $fldhead; 
	if (is_numeric(substr($fldhead,-1)) && substr($fldhead,0,2)!='CA'){
		$fldname = substr($fldhead,0,(strlen($fldhead)-1));
	}
	$rm_mark='0';
	if (strtolower($fldname)=='stheory' || strtolower($fldname)=='slab' || strtolower($fldname)=='sviva' || strtolower($fldname)=='sreport'){
		$sql = "SELECT `".$fldname."_rm` as `reqmax` from `idcawsus_exam".$batch."`.`evaluation_".$ugpg."` Where `coursecode`='$ccode' and `semnum`='$semnum' ";
		$res = mysql_query($sql);
		if (mysql_num_rows($res)>0){
			while ($row=mysql_fetch_array($res)){extract($row);}
			$rm_mark = $reqmax;
		}
	}else{
		for ($i=1; $i<=9; $i++){
			$sql = "SELECT `fld_".$i."_rm` as `reqmax` from `idcawsus_exam".$batch."`.`evaluation_".$ugpg."` Where `fld_".$i."_head`='".$fldname."' and `coursecode`='$ccode' and `semnum`='$semnum' ";
			$res = mysql_query($sql);
			if (mysql_num_rows($res)>0){
				while ($row=mysql_fetch_array($res)){extract($row);}
				$rm_mark = $reqmax;
				break;
			}
		}
	}
	return $rm_mark;
}
function update_given_max($fldhead, $ccode, $batches, $semnum, $batch, $gm_mark, $ugpg){
	$fldname = $fldhead; $fldcount='1'; 
	if (is_numeric(substr($fldhead,-1))){
		$fldname = substr($fldhead,0,(strlen($fldhead)-1));
		$fldcount = substr($fldhead,-1);
	}
	if ($fldname=='stheory' || $fldname=='slab' || $fldname=='sviva' || $fldname=='sreport'){
		$sql_upd = "Update `idcawsus_exam".$batch."`.`evaluation_".$ugpg."` SET  `".$fldname."_gm`='".$gm_mark."' ";
		$sql_upd .= "Where `coursecode`='$ccode' and `semnum`='$semnum' and `batches`='$batches' ";
//echo $sql_upd.'<br>';
		$res_upd = mysql_query($sql_upd);
	}else{
		for ($i=1; $i<=9; $i++){
			$sql = "SELECT `coursecode` from `idcawsus_exam".$batch."`.`evaluation_".$ugpg."` Where `fld_".$i."_head`='".$fldname."' and `coursecode`='$ccode' and `semnum`='$semnum' ";
			$res = mysql_query($sql);
			if (mysql_num_rows($res)>0){
				$sql_upd = "Update `idcawsus_exam".$batch."`.`evaluation_".$ugpg."` SET  `fld_".$i."_gm1`='".$gm_mark."' ";
				if ($fldcount>'1'){
					$sql_upd = "Update `idcawsus_exam".$batch."`.`evaluation_".$ugpg."` SET  `fld_".$i."_gm2`='".$gm_mark."' ";
				}
				$sql_upd .= "Where `fld_".$i."_head`='".$fldname."' and `coursecode`='$ccode' and `semnum`='$semnum' and `batches`='$batches' ";
				$res_upd = mysql_query($sql_upd);
				break;
			}
		}
	}
	return $sql_upd;
}
function find_sports_student($regno, $acyear){
	$flag=false;
	$sql = "SELECT `regno` from `idcawsus_examcommon`.`sports_".substr($acyear,0,4)."` Where `regno`='$regno' ";
	$res = mysql_query($sql);
	if (mysql_num_rows($res)>0){
		$flag=true;
	}
	return $flag;
}
function check_suspend($regno, $attdate){
	$sql = "Select * FROM `idcawsus_attend_".substr(ac_year(),0,4)."`.`suspend_students` WHERE `regno`='$regno' and '".$attdate."' between `date_from` and `date_to` Limit 0,1";
	$res = mysql_query($sql);
	$tot_rec = mysql_num_rows($res);
	if ($tot_rec>0){
		$fnp_flag = true;
	}
	return $fnp_flag;
}
function check_late($regno, $attdate, $classhour, $major){
	$flag='';
	$sql = "Select * FROM `idcawsus_campus_log`.`late_comer` WHERE `regno`='$regno' and `att_date`='".$attdate."' ";
	$res = mysql_query($sql);
	$tot_rec = mysql_num_rows($res);
	while($row=mysql_fetch_array($res)){extract($row);}
	if ($tot_rec>0){
//echo $sql.'<br>';
		if (substr($major,0,1)=='A' || $major=='SPSOC'){
			if($classhour==1){ 
				if ($time > '08:00'){
					$flag = "<span style='color:red'> (latecomer)</span>";
				}
			}elseif($classhour==2){ 
				if ($time > '08:55'){
					$flag = "<span style='color:red'> (latecomer)</span>";
				}
			}elseif($classhour==3){ 
				if ($time > '10:10'){
					$flag = "<span style='color:red'> (latecomer)</span>";
				}
			}elseif($classhour==4){ 
				if ($time > '11:05'){
					$flag = "<span style='color:red'> (latecomer)</span>";
				}
			}elseif($classhour==5){ 
				if ($time > '12:00'){
					$flag = "<span style='color:red'> (latecomer)</span>";
				}
			}
		}else{
			if($classhour==1){ 
				if ($time > '13:00'){
					$flag = "<span style='color:red'> (latecomer)</span>";
				}
			}elseif($classhour==2){ 
				if ($time > '13:55'){
					$flag = "<span style='color:red'> (latecomer)</span>";
				}
			}elseif($classhour==3){ 
				if ($time > '14:50'){
					$flag = "<span style='color:red'> (latecomer)</span>";
				}
			}elseif($classhour==4){ 
				if ($time > '16:05'){
					$flag = "<span style='color:red'> (latecomer)</span>";
				}
			}elseif($classhour==5){ 
				if ($time > '17:00'){
					$flag = "<span style='color:red'> (latecomer)</span>";
				}
			}
		}
	}
	return $flag;
}
function form_complete_flag($regno, $ccode, $batches, $semnum, $batch, $ugpg){
	$flag=true;
	$sql_1 = "SELECT distinct substr(fld_head,1,(char_length(fld_head)-1)) as fld_head from `idcawsus_exam".$batch."`.`mark_entry_s".$semnum."` Where `coursecode`='$ccode' and (`period`='Test-I' or `period`='Test-II') order by `fld_head` ";
	$res_1 = mysql_query($sql_1);
	while ($row=mysql_fetch_array($res_1)){extract($row);
		$fld_count = get_fld_count($fld_head, $ccode, $semnum, $batch, $ugpg);
		if ($fld_count>1){
			$sql1 = "Select ";
			for ($i=1; $i<=$fld_count; $i++){
				if ($i>1){$sql1.=", ";}
				$sql1 .= "`".$fld_head.$i."` as `fld".$i."`, `".$fld_head.$i."r` as `fld".$i."_r`";
			}
			$sql1 .= " from `idcawsus_exam".$batch."`.`mark_".$ugpg."_s".$semnum."` Where `regno`='".$regno."' and `coursecode`='$ccode' and `semnum`='$semnum' ";
		}else{
			$sql1 = "Select `".$fld_head."1` as `fld`, `".$fld_head."1r` as `fld_r` from `idcawsus_exam".$batch."`.`mark_".$ugpg."_s".$semnum."` Where `regno`='".$regno."' and `coursecode`='$ccode' and `semnum`='$semnum' ";
		}
		$res1 = mysql_query($sql1);
		while ($row1=mysql_fetch_array($res1)){extract($row1);}
		if (find_sports_student($regno, ac_year())==true && $fld_head=='Test' && $fld_count>'1'){
			if ($fld1<'0' && $fld1_r<'0' && $fld2<'0' && $fld2_r<'0'){
				$flag=false;
			}
		}else{
			if ($fld_count>1){
				if (($fld1<'0' && $fld1_r<'0') || ($fld2<'0' && $fld2_r<'0')){
					$flag=false;
				}
			}else{
				if ($fld<'0' && $fld_r<'0'){
					$flag=false;
				}
			}
		}
	}
	return $flag;
}
function formative_process($ccode, $batches, $semnum, $batch, $ugpg){
	$sql = "Select * from `idcawsus_exam".$batch."`.`mark_".$ugpg."_s".$semnum."` Where `coursecode`='$ccode' and `semnum`='$semnum' and `batches`='$batches'";
//echo $sql.'<br>';
	$res = mysql_query($sql);
	if (mysql_num_rows($res)>0){
		while ($sql_stud = mysql_fetch_array($res)){
			$formtotal='0'; 
			$sql_1 = "SELECT distinct substr(fld_head,1,(char_length(fld_head)-1)) as fld_head from `idcawsus_exam".$batch."`.`mark_entry_s".$semnum."` Where `coursecode`='$ccode' and `fld_head`<>'Attd1' and (`period`='Test-I' or `period`='Test-II') order by `fld_head` ";
//echo $sql_1.'<br>';
			$res_1 = mysql_query($sql_1);
			while ($row=mysql_fetch_array($res_1)){extract($row);
				$rm = get_required_max($fld_head, $ccode, $semnum, $batch, $ugpg);
				$fld_count = get_fld_count($fld_head, $ccode, $semnum, $batch, $ugpg);
				$j='1';
				if ($fld_count>1){
					$sql1 = "Select ";
					for ($j=1; $j<=$fld_count; $j++){
						if ($j>1){$sql1.=", ";}
						$sql1 .= "`".$fld_head.$j."` as `fld".$j."`, `".$fld_head.$j."r` as `fld".$j."_r`";
					}
					$sql1 .= " from `idcawsus_exam".$batch."`.`mark_".$ugpg."_s".$semnum."` Where `regno`='".$sql_stud[regno]."' and `coursecode`='$ccode' and `semnum`='$semnum' and `batches`='$batches' ";
				}else{
					$sql1 = "Select `".$fld_head."1` as `fld`, `".$fld_head."1r` as `fld_r` from `idcawsus_exam".$batch."`.`mark_".$ugpg."_s".$semnum."` Where `regno`='".$sql_stud[regno]."' and `coursecode`='$ccode' and `semnum`='$semnum' and `batches`='$batches' ";
					$gm1 = get_given_max($batch, $fld_head.'1', $ccode, $semnum, $batches, $ugpg);
				}
				$res1 = mysql_query($sql1);
				while ($row1=mysql_fetch_array($res1)){extract($row1);}
				if (find_sports_student($sql_stud[regno], ac_year())==true && $fld_head=='Test' && $fld_count>'1'){
					$t1='0'; $t2='0';
					if ($fld1>'0' || $fld1_r>0){
						$gm1 = get_given_max($batch, $fld_head.'1', $ccode, $semnum, $batches, $ugpg);
						if ($fld1>=$fld1_r){
							$t1 = (($fld1/$gm1)*$rm);
						}elseif ($fld1<$fld1_r){
							$t1 = (($fld1_r/$gm1)*$rm);
						}
//echo $sql_stud[regno].' 1- '.$fld_head.'1 - '.$fld1.'/'.$gm1.'*'.$rm.'<br>';
					}
					if ($fld2>'0' || $fld2_r>0){
						$gm2 = get_given_max($batch, $fld_head.'2', $ccode, $semnum, $batches, $ugpg);
						if ($fld2>=$fld2_r){
							$t2 = (($fld2/$gm2)*$rm);
						}elseif ($fld2<$fld2_r){
							$t2 = (($fld2_r/$gm2)*$rm);
						}
//echo $sql_stud[regno].' 1- '.$fld_head.'2 - '.$fld2.'/'.$gm1.'*'.$rm.'<br>';
					}
					if ($t1>$t2){$formtotal+=$t1;}else{$formtotal+=$t2;}
				}else{
					$j='1';
					if ($fld_count>1){
						$ftotal='0';
						for ($j=1; $j<=$fld_count; $j++){
							if($j=='1'){
								if ($fld1>'0' || $fld1_r>0){
									$gm1 = get_given_max($batch, $fld_head.'1', $ccode, $semnum, $batches, $ugpg);
									if ($fld1>=$fld1_r){
										$ftotal += (($fld1/$gm1)*$rm);
									}elseif ($fld1<$fld1_r){
										$ftotal += (($fld1_r/$gm1)*$rm);
									}
								}
//echo $sql_stud[regno].' 1- '.$fld_head.'1 - '.$fld1.'/'.$gm1.'*'.$rm.'<br>';
							}
							if($j=='2'){
								if ($fld2>'0' || $fld2_r>0){
									$gm2 = get_given_max($batch, $fld_head.'2', $ccode, $semnum, $batches, $ugpg);
									if ($fld2>=$fld2_r){
										$ftotal += (($fld2/$gm2)*$rm);
									}elseif ($fld2<$fld2_r){
										$ftotal += (($fld2_r/$gm2)*$rm);
									}
								}
//echo $sql_stud[regno].' 2- '.$fld_head.'2 - '.$fld2.'/'.$gm1.'*'.$rm.'<br>';
							}
							if($j=='3'){
								if ($fld3>'0' || $fld3_r>0){
									$gm3 = get_given_max($batch, $fld_head.'3', $ccode, $semnum, $batches, $ugpg);
									if ($fld3>=$fld3_r){
										$ftotal += (($fld3/$gm3)*$rm);
									}elseif ($fld3<$fld3_r){
										$ftotal += (($fld3_r/$gm3)*$rm);
									}
								}
							}
						}
						$formtotal += ($ftotal/$fld_count);
					}else{
						if ($fld>'0' || $fld_r>0){
							$gm = get_given_max($batch, $fld_head.'1', $ccode, $semnum, $batches, $ugpg);
							if ($fld>=$fld_r){
								$formtotal += (($fld/$gm)*$rm);
							}elseif ($fld<$fld_r){
								$formtotal += (($fld_r/$gm)*$rm);
							}
//echo $sql_stud[regno].' 3- '.$fld_head.'1 - '.$fld.'/'.$gm1.'*'.$rm.'<br>';
						}
					}
				}
			}
			$form_comp_flag=form_complete_flag($sql_stud[regno], $ccode, $batches, $semnum, $batch, $ugpg);
			$sql_upd = "Update `idcawsus_exam".$batch."`.`mark_".$ugpg."_s".$semnum."` SET `form_total`='".round($formtotal)."'";
			if ($form_comp_flag==true){
				$sql_upd .= ", `form_complete`='Yes' ";
			}else{
				$sql_upd .= ", `form_complete`='No' ";
			}
			$sql_upd .= "Where `regno`='".$sql_stud[regno]."' and `coursecode`='$ccode' and `semnum`='$semnum' and `batches`='$batches' ";
//echo $sql_upd.'<br>';
			mysql_query($sql_upd);
		}
	}
	return 0;
}

function get_fld_count($fld_head, $ccode, $semnum, $batch, $ugpg){
	$fldcount='0';
	$sql = "SELECT * from `idcawsus_exam".$batch."`.`evaluation_".$ugpg."` Where `coursecode`='$ccode' and `semnum`='$semnum'  ";
	$res = mysql_query($sql);
	while($row=mysql_fetch_array($res)){extract($row);}
	if ($fld_1_head==$fld_head){
		$fldcount = $fld_1_count;
	}elseif ($fld_2_head==$fld_head){
		$fldcount = $fld_2_count;
	}elseif ($fld_3_head==$fld_head){
		$fldcount = $fld_3_count;
	}elseif ($fld_4_head==$fld_head){
		$fldcount = $fld_4_count;
	}elseif ($fld_5_head==$fld_head){
		$fldcount = $fld_5_count;
	}elseif ($fld_6_head==$fld_head){
		$fldcount = $fld_6_count;
	}elseif ($fld_7_head==$fld_head){
		$fldcount = $fld_7_count;
	}elseif ($fld_8_head==$fld_head){
		$fldcount = $fld_8_count;
	}elseif ($fld_9_head==$fld_head){
		$fldcount = $fld_9_count;
	}
	return $fldcount;
}
function drop_summ_field($batch, $ugpg, $ccode, $batches, $semnum){
	$array = array();
	$sql = "SELECT * from `idcawsus_exam".$batch."`.`evaluation_".$ugpg."` Where `coursecode`='$ccode' and `batches`='$batches' and `semnum`='$semnum' ";
//echo $sql.'<br>';
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)){ extract($row);
		if ($stheory_gm>'0'){$array['STheory'] = $stheory_gm;}
		if ($slab_gm>'0'){$array['SLab'] = $slab_gm;}
		if ($sviva_gm>'0'){$array['SViva'] = $sviva_gm;}
		if ($sreport_gm>'0'){$array['SReport'] = $sreport_gm;}
	}
	return $array;
}
function get_faculty_list($acyear, $ccode, $batch, $oddeven){
	$str = '';
	$sql = "SELECT distinct `empid` from `idcawsus_attend_".substr($acyear,0,4)."`.`faculty_ttable_".$oddeven."` Where `coursecode`='".$ccode."' and `batch`=$batch ";
	$sql .= "Union SELECT distinct `empid` from `idcawsus_attend_".substr($acyear,0,4)."`.`fac_grp_nonattend_".$oddeven."` Where `coursecode`='".$ccode."' and `batch`=$batch";
//echo $sql.'<br>';
	$res = mysql_query($sql);
	$totrec = mysql_num_rows($res);
	if ($totrec>0){
		$count='0';
		while ($row = mysql_fetch_array($res)){ extract($row); ++$count;
			if (strlen($str)>0){
				if ($totrec==$count){
				 	$str .= ' & '.get_staff_name($empid); 
				}else{
				 	$str .= ', '.get_staff_name($empid); 
				}
			}else{
			 	$str .= get_staff_name($empid); 
			}
		}
	}
	return $str;
}
function get_total_formative_reqmax($ccode, $semnum, $batch, $ugpg){
	$form_reqmax='0';
	$sql = "SELECT * from `idcawsus_exam".$batch."`.`evaluation_".$ugpg."` Where `coursecode`='$ccode' and `semnum`='$semnum' ";
//echo $sql.'<br>';
	$res = mysql_query($sql);
	if (mysql_num_rows($res)>0){
		while ($row=mysql_fetch_array($res)){extract($row);}
		for ($i=1; $i<=9; $i++){
			$sql = "SELECT `fld_".$i."_rm` as `reqmax` from `idcawsus_exam".$batch."`.`evaluation_".$ugpg."` Where `coursecode`='$ccode' and `semnum`='$semnum' ";
			$res = mysql_query($sql);
			if (mysql_num_rows($res)>0){
				while ($row=mysql_fetch_array($res)){extract($row);}
				$form_reqmax += $reqmax;
			}
		}
	}
	return $form_reqmax;
}
function get_field_count($fldhead, $ccode, $semnum, $batch, $ugpg){
	$fcount='1';
	for ($i=1; $i<=9; $i++){
		$sql = "SELECT `fld_".$i."_count` as `fldcount` from `idcawsus_exam".$batch."`.`evaluation_".$ugpg."` Where `fld_".$i."_head`='".$fldhead."' and `coursecode`='$ccode' and `semnum`='$semnum' ";
		$res = mysql_query($sql);
		if (mysql_num_rows($res)>0){
			while ($row=mysql_fetch_array($res)){extract($row);}
			$fcount = $fldcount;
			break;
		}
	}
	return $fcount;
}
function find_form_complete($batch, $regno, $ccode, $ugpg, $semnum){
	$flag=true;
	$sql = "SELECT * from `idcawsus_exam".$batch."`.`mark_".$ugpg."_s".$semnum."` Where `regno`='$regno' and `coursecode`='$ccode' and `form_complete`='Yes' ";
	$res = mysql_query($sql);
	if (mysql_num_rows($res)=='0'){ $flag=false;}
	return $flag;
}

?>