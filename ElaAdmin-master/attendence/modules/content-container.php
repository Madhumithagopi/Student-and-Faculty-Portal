<!-- Page Content -->
	<div id="page-content-wrapper">
		<button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
			<span class="hamb-top"></span>
			<span class="hamb-middle"></span>
			<span class="hamb-bottom"></span>
		</button>
			<div class="container">
				<div class="row">
				<?php
					$start=false;
					// session_start();
					
		
							if (isset($_GET['page'])) {
								$page = $_GET['page'];
								switch ($page) {
										case 'dashboard':
								    case 'logout':
									case 'help':
									case 'studentinfo':
									case 'reports':
										include 'attendence/modules/'.$page.'.php';
										break;
									default:
										include 'attendence/modules/attendance.php';
										break;
								}
							}
							else {
								include 'attendence/modules/attendance.php';
							}
						
						
						
					
					?>
				</div>
			</div>
	</div>
	<!-- /#page-content-wrapper -->