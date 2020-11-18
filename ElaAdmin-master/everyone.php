<?php
	session_start();
	require("conection/connect.php");
	$tag="";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MSW-Admin</title>
<link rel="stylesheet"  type="text/css" href="css/style_entry.css" />
</head>
<body>
            <div id="contents">
            	<div id="informations">
                	<div id="in_informations">
				<?php
   						if($tag=="home" or $tag=="")
							include("home.php");
						elseif($tag=="admin_student_update")
                            include("admin_student_update.php");
							elseif($tag=="admin_teacher_update")
                            include("admin_teacher_update.php");
                        elseif($tag=="admin_resource_update")
                            include("admin_resource_update.php");
							elseif($tag=="admin_guest_update")
                            include("admin_guest_update.php");
							elseif($tag=="admin_guest_entry")
                            include("admin_guest_entry.php");
							elseif($tag=="admin_alumnae_update")
                            include("admin_alumnae_update.php");
							elseif($tag=="admin_org_update")
                            include("admin_org_update.php");
                      
                       
						
						
							/*$tag= $_REQUEST['tag'];
							
							if(empty($tag)){
								include ("Students_Entry.php");
							}
							else{
								include $tag;
							}*/
									
                        ?>
                    </div><!--end of in_informations -->
                </div><!--end of informations -->
    		</div><!--end of contens -->   
     </div><!--end of rmain -->
    	
    </div><!--end of admin -->

</body>
</html>