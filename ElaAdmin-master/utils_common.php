<?php session_start(); 
date_default_timezone_set('Asia/Calcutta');

function college_name(){?>
	<tr><td align="center"style="font-family:Arial; font-size:16pt"><b>LADY DOAK COLLEGE, MADURAI</b></span>
        	<br/><span style="font-size:12px; font-family:Arial Narrow">(An Autonomous Institution affiliated to Madurai Kamaraj University)</span><br/>
    		<span style="font-size:14px; font-family:Arial">Re-accredited (3rd Cycle) by NAAC with Grade 'A' - CGPA 3.44 on a 4-point scale</span><br/>
        </td>
    </tr><?
	return;
}
function rpt_college_name(){?>
	<span style="font-family:Calibri; font-size:16pt; font-weight:bold">LADY DOAK COLLEGE, MADURAI</span><br/>
    <span style="font-size:12px; font-family:Monotype Corsiva">(An Autonomous Institution affiliated to Madurai Kamaraj University)</span><br/>
    <span style="font-size:14px; font-family:Calibri">Re-accredited (3rd Cycle) by NAAC with Grade 'A' - CGPA 3.44 on a 4-point scale</span><?php
	return;
}
function checkform($msg){
	echo "<script language=\"javascript\">alert(\"".$msg."\");</script>";
}
function appln_date(){
	$my_array = array();
	for ($i=1; $i<=31; $i++){ 
		$my_array[$i] = $i;
	}
	return $my_array;
}
function appln_year(){
	$endyr = (date('Y')-16);
	$startyr = ($endyr-11);
	$my_array = array();
	for ($i=$endyr; $i>=$startyr; $i--){ 
		$my_array[$i] = $i;
	}
	return $my_array;
}
function drop_month(){
	$my_array = array(1=>'January', 2=>'February', 3=>'March', 4=>'April', 5=>'May', 6=>'June', 7=>'July', 8=>'August', 9=>'September', 10=>'October', 11=>'November', 12=>'December');
	return $my_array;
}
function month_name($mon_num){
	if ($mon_num==1){
		$mname = "January";
	}elseif ($mon_num==2){
		$mname = "February";
	}elseif ($mon_num==3){
		$mname = "March";
	}elseif ($mon_num==4){
		$mname = "April";
	}elseif ($mon_num==5){
		$mname = "May";
	}elseif ($mon_num==6){
		$mname = "June";
	}elseif ($mon_num==7){
		$mname = "July";
	}elseif ($mon_num==8){
		$mname = "August";
	}elseif ($mon_num==9){
		$mname = "September";
	}elseif ($mon_num==10){
		$mname = "October";
	}elseif ($mon_num==11){
		$mname = "November";
	}elseif ($mon_num==12){
		$mname = "December";
	}
	return $mname;
}
function drop_community(){
	$my_array = array('Select'=>'Select', 'OC'=>'OC', 'BC'=>'BC', 'BCM'=>'BCM (BC Muslim)', 'MBC'=>'MBC', 'DNC'=>'DNC', 'DNT'=>'DNT', 'ST'=>'ST', 'SC'=>'SC', 'SCA'=>'SCA (SC Arunthathiyar)' );
	return $my_array;
}
function drop_applnsex(){
	$my_array = array('Select'=>'Select', 'Female'=>'Female', 'Transgender'=>'Transgender');
	return $my_array;
}
function drop_sex(){
	$my_array = array('Select'=>'Select', 'Female'=>'Female', 'Male'=>'Male', 'Transgender'=>'Transgender');
	return $my_array;
}
function drop_nationality(){
	$my_array = array('Select'=>'Select', 'Indian'=>'Indian', 'NRI'=>'NRI', 'Foreign'=>'Foreign');
	return $my_array;
}
function drop_degree($stream){
	if ($stream=='ug'){
		$my_array = array('Select', 'HSC', 'CBCS', 'ISE');
	}elseif ($stream=='pg'){
		$my_array = array('Select', 'B.A.', 'B.Sc.', 'B.Com.', 'BBA', 'Others');
	}elseif ($stream=='dm'){
		$my_array = array('Select', 'M.A.', 'M.Sc.', 'M.Com.', 'M.S.W.', 'M.B.A.', 'M.C.A.');
	}elseif ($stream=='cc'){
		$my_array = array('Select', 'B.A.', 'B.Sc.', 'B.Com.', 'BBA', 'M.A.', 'M.Sc.', 'M.Com.', 'MSW', 'MBA', 'MCA');
	}
	return $my_array;
}
function drop_all_degree(){
	$my_array = array('Select', 'B.A.', 'B.Sc.', 'B.Sc. (Spl.)', 'B.Com.', 'BBA', 'M.A.', 'M.Sc.', 'M.Com.', 'M.Phil.', 'PG Diploma', 'Diploma', 'Certificate');
	return $my_array;
}
function name_prefix(){
	$my_array = array('Select', 'Mr.', 'Miss', 'Mrs.', 'Dr.', 'Dr. (Miss)', 'Dr. (Mrs.)');
	return $my_array;
}
function drop_religion(){
	$my_array = array('Select'=>'Select', 'Christian'=>'Christian', 'Hindu'=>'Hindu', 'Muslim'=>'Muslim', 'Jain'=>'Jain', 'Others'=>'Others');
	return $my_array;
}
function drop_disability(){
	$my_array = array('Select'=>'Select', 'Physically'=>'Physically', 'Visually'=>'Visually', 'Hearing'=>'Hearing');
	return $my_array;
}
function drop_medium(){
	$my_array = array('Select'=>'Select', 'Tamil'=>'Tamil', 'English'=>'English');
	return $my_array;
}
function drop_marital(){
	$my_array = array('Select'=>'Select', 'Unmarried'=>'Unmarried', 'Married'=>'Married', 'Separated'=>'Separated', 'Widow'=>'Widow', 'Divorcee'=>'Divorcee');
	return $my_array;
}
function drop_sports(){
	$my_array = array('Select'=>'Select', 'District'=>'District Level', 'Divisional'=>'Divisional Level', 'State'=>'State Level', 'National'=>'National Level', 'International'=>'International Level');
	return $my_array;
}
function drop_grade(){
	$my_array = array('Select'=>'Select', 'A+'=>'A+', 'A'=>'A', 'B+'=>'B', 'C+'=>'C', 'D+'=>'D');
	return $my_array;
}
function drop_ugpg(){
	$my_array = array('Select'=>'Select', 'ug'=>'Undergraduate', 'pg'=>'Postgraduate', 'dm'=>'MPhil./Diploma/Certificate Courses');
	return $my_array;
}
function drop_programme(){
	$my_array = array('Select'=>'Select', 'uga'=>'Undergraduate Aided', 'ugs'=>'Undergraduate SF', 'pga'=>'Postgraduate (Shift-I)', 'pgs'=>'Postgraduate (Shift-II)', 'dm'=>'MPhil./Diploma', 'dc'=>'Certificate Courses');
	return $my_array;
}
function drop_coursetype(){
	$my_array = array('Select'=>'Select', 'TH'=>'Theory', 'LT'=>'Lab cum Theory', 'LA'=>'Lab', 'PR'=>'Project', 'VI'=>'Vocational Course', 'VB'=>'Value Based Course', 'EX'=>'Extension Programme', 'FW'=>'Field Work', 'TR'=>'Training', 'CE'=>'Annual e-Assessment', 'TP'=>'Term Paper', 'MP'=>'Mini Project', 'CV'=>'Comprehensive Viva');
	return $my_array;
}
function get_coursetype($coursetype){
	$str = '';
	if ($coursetype=='TH'){
		$str = 'Theory';
	}elseif ($coursetype=='LT'){
		$str = 'Lab cum Theory';
	}elseif ($coursetype=='LA'){
		$str = 'Lab';
	}elseif ($coursetype=='PR'){
		$str = 'Project';
	}elseif ($coursetype=='VI'){
		$str = 'Vocational Course';
	}elseif ($coursetype=='VB'){
		$str = 'Value Based Course';
	}elseif ($coursetype=='EX'){
		$str = 'Extension Programme';
	}elseif ($coursetype=='FW'){
		$str = 'Field Work';
	}elseif ($coursetype=='TR'){
		$str = 'Training';
	}elseif ($coursetype=='CE'){ 
		$str = 'Annual e-Assessment';
	}elseif ($coursetype=='TP'){ 
		$str = 'Term Paper';
	}elseif ($coursetype=='MP'){ 
		$str = 'Mini Project';
	}elseif ($coursetype=='CV'){ 
		$str = 'Comprehensive Viva';
	}
	return $str;
}
function get_programme_text($str){
	$mystr = '';
	if ($str=='uga'){
		$mystr = 'Undergraduate Aided';
	}elseif ($str=='ugs'){
		$mystr = 'Undergraduate SF';
	}elseif ($str=='pga'){
		$mystr = 'Postgraduate (Shift-I)';
	}elseif ($str=='pgs'){
		$mystr = 'Postgraduate (Shift-II)';
	}elseif ($str=='dm'){
		$mystr = 'MPhil./PG Diploma';
	}elseif ($str=='cc'){
		$mystr ='Certificate Courses';
	}
	return $mystr;
}
function get_programme_code($major){
	$mystr = '';
	if (substr($major,0,2)=='AU'){
		$mystr = 'uga';
	}elseif (substr($major,0,2)=='SU'){
		$mystr = 'ugs';
	}elseif (substr($major,0,2)=='AP'){
		$mystr = 'pga';
	}elseif (substr($major,0,2)=='SP'){
		$mystr = 'pgs';
	}elseif (substr($major,0,2)=='SM' || substr($major,0,2)=='SD' || substr($major,0,2)=='UD'){
		$mystr = 'dm';
	}else{
		$mystr ='cc';
	}
	return $mystr;
}
function get_eof_month($mon_no){
	$year = date('Y');
	if ($mon_no == 1 || $mon_no == 3 || $mon_no == 5 || $mon_no == 7 || $mon_no == 8 || $mon_no == 10 || $mon_no == 12){
    	$mCount = 31;
	}elseif ($mon_no == 4 || $mon_no == 6 || $mon_no == 9 || $mon_no == 11){
		$mCount = 30;
	}elseif ($mon_no == 2){
    	if ((($year % 400) == 0 || ($year % 4) == 0) && (($year % 100) % 4) == 0){
        	$mCount = 29;
        }else{
        	$mCount = 28;
        }
	}
	return $mCount;
}
function dbdate_to_str($yyyymmdd){
	$d = substr($yyyymmdd,8,2);;
	$m = substr($yyyymmdd,5,2);;
	$y = substr($yyyymmdd,0,4);
	$dor = ($d.'-'.$m.'-'.$y);
	return $dor;
}
function date_to_dbformat($ddmmyyyy){ //	dd/mm/yyyy => 0123456789
	$d = substr($ddmmyyyy,0,2);;
	$m = substr($ddmmyyyy,3,2);;
	$y = substr($ddmmyyyy,6,4);
	$dor = ($y.'-'.$m.'-'.$d);
	return $dor;
}
function get_semword($semnum){
	if ($semnum=='1'){
		$sem = 'First';
	}elseif ($semnum=='2'){
		$sem = 'Second';
	}elseif ($semnum=='3'){
		$sem = 'Third';
	}elseif ($semnum=='4'){
		$sem = 'Fourth';
	}elseif ($semnum=='5'){
		$sem = 'Fifth';
	}elseif ($semnum=='6'){
		$sem = 'Sixth';
	}
	return $sem;
}
function get_semnum($str){
	$sem = '7';
	if ($str=='I'){
		$sem = '1';
	}elseif ($str=='II'){
		$sem = '2';
	}elseif ($str=='III'){
		$sem = '3';
	}elseif ($str=='IV'){
		$sem = '4';
	}elseif ($str=='V'){
		$sem = '5';
	}elseif ($str=='VI'){
		$sem = '6';
	}
	return $sem;
}
function get_semchar($semnum){
	$sem = '';
	if ($semnum=='1'){
		$sem = 'I';
	}elseif ($semnum=='2'){
		$sem = 'II';
	}elseif ($semnum=='3'){
		$sem = 'III';
	}elseif ($semnum=='4'){
		$sem = 'IV';
	}elseif ($semnum=='5'){
		$sem = 'V';
	}elseif ($semnum=='6'){
		$sem = 'VI';
	}
	return $sem;
}
function get_year_char($batch){
	$str='';
	$year = substr(ac_year(),0,4);
	$str = get_semchar(($year-$batch)+1);
	if (intval($str)>3){$str='';}else{ $str.=' Year';}
	return $str;
}
function drop_class_hour(){
//	$array = array(1=>'First', 2=>'Second', 3=>'Third', 4=>'Fourth', 5=>'Fifth', 6=>'Sixth', 7=>'Seventh');
	$array = array(1=>'First', 2=>'Second', 3=>'Third', 4=>'Fourth', 5=>'Fifth');
	return $array;
}
function drop_semester(){
	$array = array(1=>'I', 2=>'II', 3=>'III', 4=>'IV', 5=>'V', 6=>'VI');
	return $array;
}
function drop_sem_oddeven($sem){
	if ($sem=='odd'){
		$array = array(1=>'I', 3=>'III', 5=>'V');
	}elseif ($sem=='even'){
		$array = array(2=>'II', 4=>'IV', 6=>'VI');
	}
	return $array;
}
function drop_semnum(){
	$array = array(1=>'1', 2=>'2', 3=>'3', 4=>'4', 5=>'5', 6=>'6');
	return $array;
}
function drop_credit(){
	$array = array(1=>'1', 2=>'2', 3=>'3', 4=>'4', 5=>'5', 6=>'6', 7=>'7', 8=>'8', 9=>'9', 10=>'10');
	return $array;
}
function drop_years(){
	$array = array(1=>'I Year', 2=>'II Year', 3=>'III Year');
	return $array;
}
function ac_year(){
	$ayear = "";
	$year = date('Y');
	if (date('m')>5 && date('m')<=12){
		$ayear = $year."-".($year+1);
	}else{
		$ayear = ($year-1)."-".$year;
	}
	return $ayear;
}
function drop_all_acyears(){
	$start_yr = substr(ac_year(),0,4);;
	$my_array = array();
	for ($i=$start_yr; $i>=2014; $i--){ 
		$my_array[] = ($i."-".($i+1));
	}
	return $my_array;
}
function drop_acyears($syear){
	$j=0;
	$start_yr = substr(ac_year(),0,4);;
	$my_array = array();
	for ($i=$start_yr; $i>=$syear; $i--){ 
		$my_array[$j] = ($i."-".($i+1));
		$j++;
	}
	return $my_array;
}
function date_difference($date_fr, $date_to){
	$diff_date=intval((strtotime($date_to)-strtotime($date_fr))/86400+1);
	return $diff_date;
}
function add_date($mydate, $ndays){
	$mydate1 = strtotime(($ndays.' day'), strtotime($mydate));
	$mdate = date('Y-m-d', $mydate1);
	return $mdate;
}
function monyr(){
	$mon = date('m');
	$yr = substr(ac_year(),0,4);
	$mon_yr = $yr.'N';
	if ($mon>11 && $mon<5){
		$mon_yr = ($yr+1).'A';
	}
	return $mon_yr;
}
function exam_monyr($batch, $semnum){
	if ($semnum=='1'){
		$monyr = "NOVEMBER ".$batch;
	}elseif ($semnum=='2'){
		$monyr = "APRIL ".($batch+1);
	}elseif ($semnum=='3'){
		$monyr = "NOVEMBER ".($batch+1);
	}elseif ($semnum=='4'){
		$monyr = "APRIL ".($batch+2);
	}elseif ($semnum=='5'){
		$monyr = "NOVEMBER ".($batch+2);
	}elseif ($semnum=='6'){
		$monyr = "APRIL ".($batch+3);
	}elseif ($semnum=='7'){
		$monyr = "JUNE ".($batch+3);
	}
	return $monyr;
}
function find_month_yr($batch, $sem){
	if ($sem=='1'){
		$monyr = $batch.'N';
	}elseif ($sem=='2'){
		$monyr = ($batch+1).'A';
	}elseif ($sem=='3'){
		$monyr = ($batch+1).'N';
	}elseif ($sem=='4'){
		$monyr = ($batch+2).'A';
	}elseif ($sem=='5'){
		$monyr = ($batch+2).'N';
	}elseif ($sem=='6'){
		$monyr = ($batch+3).'A';
	}
	return $monyr;
}
function find_batch_year($acyear,$sem){
	$batch = substr($acyear,0,4);
	if ($sem>4){
		$batch = ($batch-2);
	}elseif ($sem>2){
		$batch = ($batch-1);
	}
	return $batch;
}
function drop_exam_month($acyear){
	$year = substr($acyear,0,4);
	$array = array();
	$array[$year.'N'] = 'November';
	$array[($year+1).'A'] = 'April';
	$array[($year+1).'J'] = 'June';
	return $ayear;
}
function drop_batches($year){
	$j=1;
	$array = array();
	for ($i=(substr(ac_year(),0,4)); $i>=$year; $i--){ 
		$array[$j] = $i;
		$j++;
	}
	return $array;
}
function drop_batch($acyear){
	$yr = substr($acyear,0,4);
	$array = array($yr=>'I Year', ($yr-1)=>'II Year', ($yr-2)=>'III Year');
	return $array;
}
function ugpg($major){
	if(substr($major,1,1)=="U"){
		$my_course="ug";
	}else if(substr($major,1,1)=="P"){
		$my_course="pg";
	}else if(substr($major,1,1)=="M" || substr($major,1,1)=="D" || substr($major,1,1)=="C"){
		$my_course="dm";
	}
	return $my_course;
}
function ugpg_aided_sf($major){
	$my_course='';
	if(substr($major,0,2)=="AU"){
		$my_course="uga";
	}else if(substr($major,0,2)=="SU"){
		$my_course="ugs";
	}else if(substr($major,0,2)=="AP"){
		$my_course="pga";
	}else if(substr($major,0,2)=="SP"){
		$my_course="pgs";
	}else if(substr($major,1,1)=="M" || substr($major,1,1)=="D"){
		$my_course="dm";
	}
//	checkform($my_course);
	return $my_course;
}
function rupees($num){
	if ($num<=0){
		return "Zero";
	}
	if (strlen($num)==7){
		$lakhs = substr($num,0,2);
		$thousand = substr($num,2,2);
		$hundred = substr($num,strlen($num)-3,1);
		$tens = substr($num,5,2);
		$ones = substr($num,6,1);
		$mystr = tens($lakhs)." Lakhs ";
		$mystr .= tens($thousand)." Thousand ";
		if ($hundred>0){
			$mystr .= tens($hundred)." Hundred ";
			if ($tens>0 || $ones>0){
				$mystr .= " and ";
			}
		}
		if ($tens>0 || $ones>0){
			if ($tens>0){
				$mystr .= tens($tens);
			}else if ($ones>0){
				$mystr .= ones($ones);
			}
		}
	}else if (strlen($num)=="6"){
		$lakhs = substr($num,0,1);
		$thousand = substr($num,1,2);
		$hundred = substr($num,strlen($num)-3,1);
		$tens = substr($num,4,2);
		$ones = substr($num,5,1);
		if ($lakhs>1){
			$mystr = tens($lakhs)." Lakhs ";
		} else {
			$mystr = tens($lakhs)." Lakh ";
		}
		$mystr .= tens($thousand)." Thousand ";
		if ($hundred>0){
			$mystr .= tens($hundred)." Hundred ";
			if ($tens>0 || $ones>0){
				$mystr .= " and ";
			}
		}
		if ($tens>0 || $ones>0){
			if ($tens>0){
				$mystr .= tens($tens);
			}else if ($ones>0){
				$mystr .= ones($ones);
			}
		}
	}else if (strlen($num)=="5"){
		$thousand = substr($num,0,2);
		$hundred = substr($num,strlen($num)-3,1);
		$tens = substr($num,3,2);
		$ones = substr($num,4,1);
		$mystr = tens($thousand)." Thousand ";
		if ($hundred>0){
			$mystr .= tens($hundred)." Hundred ";
			if ($tens>0 || $ones>0){
				$mystr .= " and ";
			}
		}
		if ($tens>0 || $ones>0){
			if ($tens>0){
				$mystr .= tens($tens);
			}else if ($ones>0){
				$mystr .= ones($ones);
			}
		}
	}else if (strlen($num)=="4"){
		$thousand = substr($num,0,1);
		$hundred = substr($num,strlen($num)-3,1);
		$tens = substr($num,strlen($num)-2,2);
		$ones = substr($num,3,1);
		$mystr = ones($thousand)." Thousand ";
		if ($hundred>0){
			$mystr .= tens($hundred)." Hundred ";
			if ($tens>0 || $ones>0){
				$mystr .= " and ";
			}
		}
		if ($tens>0 || $ones>0){
			if ($tens>0){
				$mystr .= tens($tens);
			}else if ($ones>0){
				$mystr .= ones($ones);
			}
		}
	}else if (strlen($num)=="3"){
		$hundred = substr($num,0,1);
		$tens = substr($num,1,2);
		$ones = substr($num,2,1);
		$mystr = ones($hundred)." Hundred ";
		if ($tens>0 || $ones>0){
			$mystr .= " and ";
		}
		if ($tens>0 || $ones>0){
			if ($tens>0){
				$mystr .= tens($tens);
			}else if ($ones>0){
				$mystr .= ones($ones);
			}
		}
	}else if (strlen($num)=="2"){
		$mystr = tens($num);
	}else{
		$mystr = ones($num);
	}
	return $mystr;
}
function tens($num){
	$mystr = "";
	if ($num < 10){
		$mystr .= Ones(substr($num, strlen($num)-1, 1));
    } else if (substr($num, strlen($num)-1, 1) == "0"){
        if (substr($num, 0, 1) == "1"){
	    	$mystr = " Ten ";
        } else if (substr($num, 0, 1) == "2"){
           	$mystr = " Twenty ";
        } else if (substr($num, 0, 1) == "3"){
           	$mystr = " Thirty ";
        } else if (substr($num, 0, 1) == "4"){
           	$mystr = " Forty ";
        } else if (substr($num, 0, 1) == "5"){
           	$mystr = " Fifty ";
        } else if (substr($num, 0, 1) == "6"){
           	$mystr = " Sixty ";
        } else if (substr($num, 0, 1) == "7"){
           	$mystr = " Seventy ";
        } else if (substr($num, 0, 1) == "8"){
           	$mystr = " Eighty ";
        } else if (substr($num, 0, 1) == "9"){
           	$mystr = " Ninety ";
		}
	} else if (substr($num, 0, 1) == "1"){
		if (substr($num, strlen($num)-1, 1) == "1"){
	    	$mystr = " Eleven ";
		} else if (substr($num, strlen($num)-1, 1) == "2"){
    	    $mystr = " Twelve ";
		} else if (substr($num, strlen($num)-1, 1) == "3"){
    	    $mystr = " Thirteen ";
		} else if (substr($num, strlen($num)-1, 1) == "4"){
    	    $mystr = " Fourteen ";
		} else if (substr($num, strlen($num)-1, 1) == "5"){
    	    $mystr = " Fifteen ";
		} else if (substr($num, strlen($num)-1, 1) == "6"){
    	    $mystr = " Sixteen ";
		} else if (substr($num, strlen($num)-1, 1) == "7"){
    	    $mystr = " Seventeen ";
		} else if (substr($num, strlen($num)-1, 1) == "8"){
    	    $mystr = " Eighteen ";
		} else if (substr($num, strlen($num)-1, 1) == "9"){
    	    $mystr = " Nineteen ";
		}
	} else {
		if (substr($num, 0, 1) == "2"){
	    	$mystr = " Twenty ";
            $mystr .= ones(substr($num, strlen($num)-1, 1));
		} else if (substr($num, 0, 1) == "3"){
            $mystr = " Thirty ";
            $mystr .= ones(substr($num, strlen($num)-1, 1));
		} else if (substr($num, 0, 1) == "4"){
            $mystr = " Forty ";
            $mystr .= ones(substr($num, strlen($num)-1, 1));
		} else if (substr($num, 0, 1) == "5"){
            $mystr = " Fifty ";
            $mystr .= ones(substr($num, strlen($num)-1, 1));
		} else if (substr($num, 0, 1) == "6"){
            $mystr = " Sixty ";
            $mystr .= ones(substr($num, strlen($num)-1, 1));
		} else if (substr($num, 0, 1) == "7"){
            $mystr = " Seventy ";
            $mystr .= ones(substr($num, strlen($num)-1, 1));
		} else if (substr($num, 0, 1) == "8"){
            $mystr = " Eighty ";
            $mystr .= ones(substr($num, strlen($num)-1, 1));
		} else if (substr($num, 0, 1) =="9"){
            $mystr = " Ninety ";
            $mystr .= ones(substr($num, strlen($num)-1, 1));
		}
	}
    return $mystr;
}
function ones($num){
	$mystr = "";
	if ($num == "1"){
		$mystr = " One ";
	} else if ($num == "2"){
        $mystr = " Two ";
	} else if ($num == "3"){
        $mystr = " Three ";
	} else if ($num == "4"){
        $mystr = " Four ";
	} else if ($num == "5"){
        $mystr = " Five ";
	} else if ($num == "6"){
        $mystr = " Six ";
	} else if ($num == "7"){
        $mystr = " Seven ";
	} else if ($num == "8"){
        $mystr = " Eight ";
	} else if ($num == "9"){
        $mystr = " Nine ";
	}
	return $mystr;
}
function date_words($num){
	if ($num<=0){
		return "Zero";
	}
	if (strlen($num)=="2"){
		$mystr = date_tens($num);
	}else{
		$mystr = date_ones($num);
	}
	return $mystr;
}
function date_tens($num){
	$mystr = "";
	if ($num < 10){
		$mystr .= date_ones(substr($num, strlen($num)-1, 1));
    } else if (substr($num, strlen($num)-1, 1) == "0"){
        if (substr($num, 0, 1) == "1"){
	    	$mystr = " Tenth ";
        } else if (substr($num, 0, 1) == "2"){
           	$mystr = " Twentieth ";
        } else if (substr($num, 0, 1) == "3"){
           	$mystr = " Thirtieth ";
		}
	} else if (substr($num, 0, 1) == "1"){
		if (substr($num, strlen($num)-1, 1) == "1"){
	    	$mystr = " Eleventh ";
		} else if (substr($num, strlen($num)-1, 1) == "2"){
    	    $mystr = " Twelveth ";
		} else if (substr($num, strlen($num)-1, 1) == "3"){
    	    $mystr = " Thirteenth ";
		} else if (substr($num, strlen($num)-1, 1) == "4"){
    	    $mystr = " Fourteenth ";
		} else if (substr($num, strlen($num)-1, 1) == "5"){
    	    $mystr = " Fifteenth ";
		} else if (substr($num, strlen($num)-1, 1) == "6"){
    	    $mystr = " Sixteenth ";
		} else if (substr($num, strlen($num)-1, 1) == "7"){
    	    $mystr = " Seventeenth ";
		} else if (substr($num, strlen($num)-1, 1) == "8"){
    	    $mystr = " Eighteenth ";
		} else if (substr($num, strlen($num)-1, 1) == "9"){
    	    $mystr = " Nineteenth ";
		}
	} else {
		if (substr($num, 0, 1) == "2"){
	    	$mystr = " Twenty ";
            $mystr .= date_ones(substr($num, strlen($num)-1, 1));
		} else if (substr($num, 0, 1) == "3"){
            $mystr = " Thirty ";
            $mystr .= date_ones(substr($num, strlen($num)-1, 1));
		}
	}
    return $mystr;
}
function date_ones($num){
	$mystr = "";
	if ($num == "1"){
		$mystr = " First ";
	} else if ($num == "2"){
        $mystr = " Second ";
	} else if ($num == "3"){
        $mystr = " Third ";
	} else if ($num == "4"){
        $mystr = " Fourth ";
	} else if ($num == "5"){
        $mystr = " Fifth ";
	} else if ($num == "6"){
        $mystr = " Sixth ";
	} else if ($num == "7"){
        $mystr = " Seventh ";
	} else if ($num == "8"){
        $mystr = " Eighth ";
	} else if ($num == "9"){
        $mystr = " Ninth ";
	}
	return $mystr;
}
function print_zero($value, $length){
	$zero = '';
	if (strlen($value)<$length){
		$loop = ($length - strlen($value));
		for ($i = 0; $i<$loop; $i++){
			$zero .= '0';
		}
		$zero .= $value;
	}else{
		$zero .= $value;
	}
	return $zero;
}
function my_round($number, $digit){
	if ($number < 0){
		return (- my_round(-$number, $digit));
	}elseif ($number == 0){
		return ($number);
	}else{
		$tens = floor(log10($number));
		$divisor = pow(10, ($tens - $digit));
		$significant = ((1.0 * $number)/$divisor);
		$rounded = round($significant);
		return ($rounded * $divisor);
	}
}
function major_class($course){
	if ($course=='ug'){
		$my_array = array('AUECO'=>'ECO', 'AUHIS'=>'HIS', 'AUPHL'=>'PHL', 'AUMAT'=>'MAT', 'AUCHE'=>'CHE', 'AURDS'=>'RDS', 'AUPHY'=>'PHY', 'AUFST'=>'FST', 'SUMAT'=>'MAT(SF)', 'SUCSC'=>'CSC', 'SUCOM'=>'COM', 'SUCOM1'=>'COM(A)', 'SUCOM2'=>'COM(B)', 'SUBBA'=>'BBA', 'SUITM'=>'ITM', 'SUPED'=>'PED', 'SUENG'=>'ENG', 'SUENG1'=>'ENG(A)', 'SUENG2'=>'ENG(B)');
	}elseif ($course=='pg'){
		$my_array = array('APECO'=>'ECO', 'APPHL'=>'PHL', 'APRDS'=>'RDS', 'SPMAT'=>'MAT', 'SPPHY'=>'PHY', 'SPMCA'=>'MCA');
	}
	return $my_array;
}
function exam_time($hour, $session){
	$time = '';
	if ($session=='1'){
		if ($hour=='1'){
			$time ='9 a.m. - 10 a.m.';
		}elseif ($hour=='1.30'){
			$time ='9 a.m. - 10.30 a.m.';
		}elseif ($hour=='2.00'){
			$time ='9 a.m. - 11 a.m.';
		}elseif ($hour=='2.30'){
			$time ='9 a.m. - 11.30 a.m.';
		}elseif ($hour=='3.00'){
			$time ='9 a.m. - 12 noon';
		}
	}elseif ($session=='2'){
		if ($hour=='1'){
			$time ='1 p.m. - 2 p.m.';
		}elseif ($hour=='1.30'){
			$time ='1 p.m. - 2.30 p.m.';
		}elseif ($hour=='2'){
			$time ='1 p.m. - 3 p.m.';
		}elseif ($hour=='2.30'){
			$time ='1 p.m. - 3.30 p.m.';
		}elseif ($hour=='3'){
			$time ='1 p.m. - 4 p.m.';
		}
	}
	return $time;
}
function repeat_char($loop, $str){
	$i='0';
	while($i<$loop){
		$mystr .= $str;
		$i++;
	}
	return $mystr;
}
function drop_bloodgroup(){
	$my_array = array('1'=>'A Positive', '2'=>'A Negative', '3'=>'A1 Positive', '4'=>'A1 Negative', '5'=>'A2 Positive', '6'=>'A2 Negative', '7'=>'A1B Positive', '8'=>'A1B Negative', '9'=>'A2B Positive', '10'=>'A2B Negative', '11'=>'AB Positive', '12'=>'AB Negative', '13'=>'B Positive', '14'=>'B Negative', '15'=>'O Positive', '16'=>'O Negative', '17'=>'Bombay-O');
	return $my_array;
}

function get_ip_address() {
    $ip_keys = array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR');
    foreach ($ip_keys as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                // trim for safety measures
                $ip = trim($ip);
                // attempt to validate IP
                if (validate_ip($ip)) {
                    return $ip;
                }
            }
        }
    }
    return isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : false;
}
/**
 * Ensures an ip address is both a valid IP and does not fall within
 * a private network range.
 */
function validate_ip($ip){
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
        return false;
    }
    return true;
}
function exam_duration($session, $hour){
	$str='';
	if ($session=='1'){
		if ($hour=='1.0'){
			$str = '9:30 a.m. - 10:30 a.m.';
		}elseif ($hour=='1.3'){
			$str = '9:30 a.m. - 11:00 a.m.';
		}elseif ($hour=='2.0'){
			$str = '9:30 a.m. - 11:30 a.m.';
		}elseif ($hour=='2.3'){
			$str = '9:30 a.m. - 12:00 noon';
		}elseif ($hour=='3.0'){
			$str = '9:30 a.m. - 12:30 p.m.';
		}
	}elseif ($session=='2'){
		if ($hour=='1.0'){
			$str = '1:30 p.m. - 2:30 p.m.';
		}elseif ($hour=='1.3'){
			$str = '1:30 p.m. - 3:00 p.m.';
		}elseif ($hour=='2.0'){
			$str = '1:30 p.m. - 3:30 p.m.';
		}elseif ($hour=='2.3'){
			$str = '1:30 p.m. - 4:00 p.m.';
		}elseif ($hour=='3.0'){
			$str = '1:30 p.m. - 4:30 p.m.';
		}
	}
	return $str;
}
function get_batch_year($acyear, $semnum){
	$batch = substr($acyear,0,4);
	if ($semnum>'4'){
		$batch = ($batch-2);
	}elseif ($semnum>'2'){
		$batch = ($batch-1);
	}
	return $batch;
}
function drop_level(){
	$my_array = array('Regional', 'District', 'State', 'National', 'International');
	return $my_array;
}
function drop_games(){
	$my_array = array('Athletic', 'Kho Kho', 'Kabadi', 'Food Ball', 'Basket Ball', 'Throw Ball', 'Hand Ball', 'Volley Ball', 'Hockey', 'Badminton', 'Chess');
	return $my_array;
}
function weeks_in_month($month, $year) {
	$start = mktime(0, 0, 0, $month, 1, $year);						// Start of month
	$end = mktime(0, 0, 0, $month, date('t', $start), $year);		// End of month
	$start_week = date('W', $start);								// Start week
	$end_week = date('W', $end);									// End week
 	if ($end_week < $start_week) { // Month wraps
		return ((52 + $end_week) - $start_week) + 1;
	 }
 	return ($end_week - $start_week) + 1;
}
function get_part($ccode, $ugpg){
	if ($ugpg=='ug'){
		$part='0';
		if (substr($ccode,-2)=='FL' && (substr($ccode,0,3)=='TAM' || substr($ccode,0,3)=='HIN' || substr($ccode,0,3)=='FRE')){
			$part = '1';
		}elseif (substr($ccode,-2)=='FL' && substr($ccode,0,3)=='ENG'){
			$part = '2';
		}elseif (substr($ccode,-2)=='CM' || substr($ccode,-2)=='CT' || substr($ccode,-2)=='CP'){
			$part = '3';
		}elseif (substr($ccode,-2)=='AA' || substr($ccode,-2)=='AT' || substr($ccode,-2)=='AP'){
			$part = '3';
		}elseif (substr($ccode,-2)=='SS' || substr($ccode,-2)=='ST' || substr($ccode,-2)=='SP' || substr($ccode,-2)=='EC'){
			$part = '3';
		}elseif (substr($ccode,-2)=='LM' || substr($ccode,-2)=='DM' || substr($ccode,-2)=='DT' || substr($ccode,-2)=='TC'){
			$part = '3';
		}elseif (substr($ccode,-2)=='FS' || substr($ccode,-2)=='FV' || substr($ccode,-2)=='NI' || substr($ccode,-2)=='VI'){
			$part = '4';
		}elseif (substr($ccode,-2)=='EI' || substr($ccode,-2)=='EP' || substr($ccode,-2)=='EL' || substr($ccode,-2)=='EE'){
			$part = '4';
		}elseif (substr($ccode,-1)=='C'){
			$part = '5';
		}elseif (substr($ccode,-2)=='CD' || substr($ccode,-2)=='CE' || substr($ccode,-2)=='PR'){
			$part = '6';
		}
	}elseif ($ugpg=='pg'){
		$part='3';
		if (substr($ccode,-1)=='D' || substr($ccode,-2)=='CE'){
			$part = '6';
		}elseif (substr($ccode,-2)=='MT' || substr($ccode,-2)=='MP' || substr($ccode,-2)=='MV'){
			$part = '7';
		}elseif ((substr($ccode,0,3)=='PGV' || substr($ccode,0,3)=='PSW') && substr($ccode,-1)=='V'){
			$part = '4';
		}elseif (substr($ccode,-1)=='E'){
			$part = '4';
		}
	}
	return $part;
}
function get_course_order($ccode){
	$corder='0';
	if (substr($ccode,-2)=='FL' && (substr($ccode,0,3)=='TAM' || substr($ccode,0,3)=='HIN' || substr($ccode,0,3)=='FRE')){
		$corder = '1';
	}elseif (substr($ccode,-2)=='FL' && substr($ccode,0,3)=='ENG'){
		$corder = '2';
	}elseif (substr($ccode,-2)=='CM' || substr($ccode,-2)=='CT' || substr($ccode,-2)=='CP'){
		$corder = '3';
	}elseif (substr($ccode,-2)=='AA' || substr($ccode,-2)=='AT' || substr($ccode,-2)=='AP'){
		$corder = '4';
	}elseif (substr($ccode,-2)=='SS' || substr($ccode,-2)=='ST' || substr($ccode,-2)=='SP' || substr($ccode,-2)=='EC'){
		$corder = '5';
	}elseif (substr($ccode,-2)=='DM' || substr($ccode,-2)=='DT' || substr($ccode,-2)=='TC'){
		$corder = '6';
	}elseif (substr($ccode,-2)=='LM'){
		$corder = '7';
	}elseif (substr($ccode,-2)=='FS' || substr($ccode,-2)=='FV' || substr($ccode,-2)=='VI'){
		$corder = '8';
	}elseif (substr($ccode,-2)=='NI' || substr($ccode,-2)=='EI' || substr($ccode,-2)=='EP' || substr($ccode,-2)=='EL' || substr($ccode,-2)=='EE'){
		$corder = '9';
	}elseif (substr($ccode,-2)=='CD' || substr($ccode,-1)=='D' || substr($ccode,-2)=='CE' || substr($ccode,-2)=='PR'){
		$corder = '10';
	}elseif (substr($ccode,-1)=='C'){
		$corder = '11';
//for PG Courses		
	}elseif (substr($ccode,-1)=='M'){
		$corder = '3';
	}elseif (substr($ccode,-1)=='P'){
		$corder = '4';
	}elseif (substr($ccode,-1)=='E'){
		$corder = '5';
	}elseif (substr($ccode,-2)=='MT' || substr($ccode,-2)=='MP' || substr($ccode,-2)=='MV'){
		$corder = '12';
	}elseif ((substr($ccode,0,3)=='PGV' || substr($ccode,0,3)=='PSW') && substr($ccode,-1)=='V'){
		$corder = '13';
	}
	return $corder;
}
function EnterKey_Disable(){
	echo "<script type='text/javascript'> ";
	echo "function disableEnterKey(e){ ";
	echo "var key; ";
    echo "if(window.event){ ";					//if the users browser is internet explorer 
	echo "    key = window.event.keyCode; ";	//store the key code (Key number) of the pressed key 
    echo "} else {";							//otherwise, it is firefox 
	echo "    key = e.which;";   				//store the key code (Key number) of the pressed key 
    echo "} ";
    echo "if(key == 13){";						//if key 13 is pressed (the enter key) 
	echo "    return false; ";					//do nothing 
    echo "} else { 	";							//otherwise 
    echo "	return true; ";						//continue as normal (allow the key press for keys other than "enter") 
    echo "} ";
	echo "}	";									//and don't forget to close the function 
	echo "</script> ";
	return 0;
}
function drop_cur_sem(){
	if (date('m')<'6' || date('m')>'10'){
		$array = array(2=>'II', 4=>'IV', 6=>'VI');
	}else{
		$array = array(1=>'I', 3=>'III', 5=>'V');
	}
	return $array;
}
?>