<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
		<head>
				<meta charset="utf-8">
				<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
				<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
				<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
				<title>Store Inventory System</title>
				<style>
						.container-white {
								background-color: white;
						}
						
						h1 { 
								line-height: 10px;
						}
						
						.navbar {
								border-bottom-color: #428bca;
								border-bottom-width: 2px;
						}
						
						.panel-line-bottom {
								border-bottom-color: #428bca;
								border-bottom-width: 2px;
						}
						
						td, th{
								text-align: center;
						}
				</style>
		</head>
		<body style="background-color: #E5E5E5; color: darkslategray; padding:70px;">
				<nav class="navbar navbar-default navbar-fixed-top" >
						<div class="container">
								<div class="navbar-header">
										<a class="navbar-brand"  href="<?php echo base_url(); ?>home">Store Inventory System</a>
								</div>
								<ul class="nav navbar-nav">
										<li><a href="<?php echo base_url(); ?>item/register">Item Registration</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
										<?php if ($this->session->userdata("loggedIn") == true): ?>
											<li><a>Hi, <?php echo $this->session->userdata("username"); ?></a></li>
											<li><a href="<?php echo base_url(); ?>auth/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
										<?php endif; ?>		
								</ul>
						</div>
				</nav>


