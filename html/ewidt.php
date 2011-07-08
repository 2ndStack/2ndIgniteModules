<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EWIDT</title>
<meta name="description" content="your description here"/>
<meta name="keywords" content="your keywords here"/>
<meta name="generator" content="generator"/>
<meta name="language" content="language here"/>
<meta name="author" content="http://www.getcsstemplates.com/adsense_ready_templates/adsense-ready-template-63.html"/>
<meta name="robots" content="All"/>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="icon" type="image/png" href="images/onebit_01.png"/>
<!--[if IE 6]>    <link rel="stylesheet" type="text/css" href="ie6.css" media="screen" /> <![endif]-->
</head>

<body>

   <!-- Begin Wrapper -->
   <div id="wrapper">
   
         <!-- Begin Header -->
         <div id="header">
		 
                <div class="logo">
					<h1 id="lineone">Euronet Worldwide Information Distribution Tool</h1> 
                </div>	
                
		 </div>
		 <!-- End Header -->
		 

		 
		 <!-- Begin Left Column -->
		 <div id="leftcolumn">
				 <div class="ads">
					<center>EWIDT 4.1 Indonesia</center>
				 </div>
				<div class ="leftnav">
					<ul>
						<!--<li><a href="ewidt.php?pg=netOverview">Network overview</a></li>-->
						<li><a href="main.html">Dashboard</a></li>
						<li><a href="ewidt.php?pg=atmStatus">ATM status</a></li>
						<li><a href="ewidt.php?pg=atmFaults">ATM faults</a></li>
						<li><a href="ewidt.php?pg=atmCommand">ATM commands</a></li>
						<li><a href="ewidt.php?pg=nodeStatus">Node status</a></li>
						<li><a href="ewidt.php?pg=reports">Report/Statistics</a></li>
						<li><a href="ewidt.php?pg=query">Query</a></li>
						<!--<li><a href="ewidt.php?pg=scheduler">Scheduler</a></li>-->
						<!--<li><a href="ewidt.php?pg=help">Help</a></li>-->
					</ul>
				</div>
       </div>
		 <!-- End Left Column -->
		 
		 <!-- Begin Right Column -->
		 <div id="rightcolumn">
				<?php
					switch($_GET['pg']){
						case 'netOverview':
							include "";
							break;
						case 'atmStatus':
							include "Status_Atm.html";
							break;
						case 'atmFaults':
							include "View_All_Atm_Faults.html";
							break;
						case 'atmCommand':
							include "";
							break;
						case 'nodeStatus':
							include "Node_Status_Monitor.html";
							break;
						case 'nodeHistory':
							include "Node_History.html";
							break;
						case 'reports':
							include "Atm_Uptime.html";
							break;
						case 'scheduler':
							include "";
							break;
						case 'help':
							include "";
							break;
						case 'devIdDetail':
							include "Tab_Device_Status.html";
							break;
						case 'tabStatusHistory':
							include "Tab_Status_History.html";
							break;
						case 'tabTransaksiHistory':
							include "Tab_Transaksi_history.html";
							break;
						case 'tabCapturedCard':
							include "Tab_Captured_Cards.html";
							break;
						case 'tabStartingCash':
							include "Tab_Starting_Cash.html";
							break;
						case 'node':
							include "Node_Uptime.html";
							break;
						case 'viewAllAtm':
							include "View_All_Atm.html";
							break;
						case 'query':
							include "hal_query.html";
							break;
						case 'idle':
							include "Idle_Atms.html";
							break;
						case 'viewfaults':
							include "Atm_With_Fault.html";
							break;
						case 'reports':
							include "Atm_Uptime.html";
							break;
						case 'capCard':
							include "Rep_capture_art.html";
							break;
						case 'repCard':
							include "Rep_Card_number.html";
							break;
						case 'repFraud':
							include "Rep_fraud_check.html";
							break;
						case 'repMachines':
							include "Rep_machines_down.html";
							break;
						case 'repResponese':
							include "Rep_Responese_Code.html";
							break;
						case 'repTransaksi':
							include "Rep_Transaksi_different.html";
							break;
						default:
							include "";
							break;
					}
				?>
		
		 </div>
		 <!-- End Right Column -->
		 
		 <!-- Begin Footer -->
                <div id="footer">
					<p> <a href="http://validator.w3.org/">Valid CSS</a> :: <a href="http://validator.w3.org/">Valid XHTML</a> 
					Copyright &copy; 2007 by Free CSS Templates and Layouts :: Designed by: <a href="http://www.getcsstemplates.com/adsense_ready_templates/adsense-ready-template-63.html" title="Adsense Templates" class="now">Adsense Ready Templates</a> </p> 
                </div>
		 <!-- End Footer -->
		 
   </div>
   <!-- End Wrapper -->
   
</body>
</html>
