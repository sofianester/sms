<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/bootstrap/css/bootstrap.min.css">
	<!-- boostrap theme -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/bootstrap/css/bootstrap-theme.min.css">
	<!-- datatables css -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/datatables/media/css/jquery.dataTables.min.css">
	<!-- fileinput css -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/fileinput/css/fileinput.min.css">
	<!-- fullcalendar css -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/fullcalendar/fullcalendar.min.css">  
	<!-- keith calendar css -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/keith-calendar/jquery.calendars.picker.css"> 
	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/custom/css/custom.css"> 
	<!-- jQuery -->
	<script src="<?=base_url()?>custom/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>custom/js/kida.js"></script>

	<input type="hidden"  id="base-url" value="<?=base_url()?>"/>
</head>

<body>
	<div class="overlay"></div>
	<img id="loading"  width="250px" src="<?=base_url()?>assets/images/loading.gif" alt="Loading...">

	<nav class="navbar navbar-default navbar-static-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?=base_url() ?>">KidAble Thailand</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">

					<?php if($this->session->userdata('role') == 'admin'): ?>
					
					<li class="dropdown" id="topAdminMainNav">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-cog"></i> Administrator <span class="caret"></span></a>

						<ul class="dropdown-menu">
							<li id="topNavUser"> <a href="<?=base_url('admin/user_list')?>">User List</a> </li>
							<li id="topNavActivity"> <a href="<?=base_url('admin/activity_log')?>">Activity Log</a> </li>        
						</ul>
					</li>

					<?php endif; ?>

					<li class="dropdown" id="topClassMainNav">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-edit"></i> Class <span class="caret"></span></a>
						<ul class="dropdown-menu">            
							<li id="topNavClass"><a href="<?php echo base_url('pages/classes'); ?>">Manage Class</a></li>                        
							<li id="topNavSection"><a href="<?php echo base_url('pages/section') ?>">Manage Section</a></li>                                 
							<li id="topNavSubject"><a href="<?php echo base_url('pages/subject') ?>">Manage Subject</a></li>           
						</ul>
					</li>

					<li id="topNavTeacher"><a href="<?=base_url('pages/teacher') ?>"> <i class="glyphicon glyphicon-briefcase"></i> Teacher</a></li>

					<li class="dropdown" id="topStudentMainNav">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-list-alt"></i> Student <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li id="addStudentNav"><a href="<?=base_url('pages/student?opt=addst') ?>">Add Student</a></li>                        
							<li id="addBulkStudentNav"><a href="<?=base_url('pages/student?opt=bulkst') ?>">Add Bulk Student</a></li>                        
							<li id="manageStudentNav"><a href="<?=base_url('pages/student?opt=mgst') ?>">Manage Student</a></li>           
						</ul>
					</li>
					<li class="dropdown" id="topAttendanceMainNav">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-time"></i> Attendance <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li id="takeAttendNav"><a href="<?php echo base_url('pages/attendance?atd=add') ?>">Take Attendance</a></li>
							<li id="attenReport"><a href="<?php echo base_url('pages/attendance?atd=report') ?>">Attendance Report</a></li>
						</ul>
					</li>       
					<li class="dropdown" id="topMarksheetMainNav">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-duplicate"></i> Marksheet <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li id="manageMarksheet"><a href="<?php echo base_url('pages/marksheet?opt=mngms') ?>">Manage Marksheet</a></li>
							<li id="manageMarks"><a href="<?php echo base_url('pages/marksheet?opt=mgmk') ?>">Manage Marks</a></li>
						</ul>
					</li>

					<li class="dropdown" id="topAccountMainNav">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-indent-left"></i> Accounting <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li id="createStudentNav"><a href="<?php echo base_url('pages/accounting?opt=crtpay') ?>">Create Student Payment</a></li>                        
							<li id="managePayNav"><a href="<?php echo base_url('pages/accounting?opt=mgpay') ?>">Manage Payment</a></li>                        
							<li id="expNav"><a href="<?php echo base_url('pages/accounting?opt=mgexp') ?>">Expenses</a></li>           
							<li id="incomeNav"><a href="<?php echo base_url('pages/accounting?opt=ime') ?>">Income</a></li>           
						</ul>
					</li>

					</ul>      
				
				<ul class="nav navbar-nav navbar-right"> 
					<li class=" navbar-brand navbar-access-level">
						<p>Access Level: <?=ucfirst($this->session->userdata('role'));?></p>
					</li>
					<!--  
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
						<ul class="dropdown-menu">            
							<li><a href="<?=base_url('setting') ?>">Setting</a></li>                       
							<li><a href="<?=base_url('users/logout'); ?>">Logout</a></li>
						</ul>
					</li> -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#" data-toggle="modal" data-target="#changePasswordModal"><i class="fa fa-refresh fa-fw"></i> Change Password</a></li>
							<li class="divider"></li>
							<li><a href="<?=base_url();?>authentication/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header modal-blue">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">CHANGE PASSWORD (<?=$this->session->userdata('email')?>)</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-12">
							<label class="error" id="error_changePassword">invalid current password</label>
							<label class="error" id="error_changePassword2">password must be at least 8 characters (alphanumeric or special characters)</label>
						</div>
					</div>
					&nbsp;
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label>Current Password</label> &nbsp;&nbsp;
								<label class="error" id="error_currentPassword"> field is required.</label>
								<input class="form-control" id="currentPassword" placeholder="Current Password" name="currentPassword" type="password" autofocus>
							</div> 
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>New Password</label> &nbsp;&nbsp;
								<label class="error" id="error_newPassword"> field is required.</label>
								<label class="error" id="error_newPassword2"> password not match</label>
								<input class="form-control" id="newPassword" placeholder="New Password" name="newPassword" type="password" autofocus>
							</div> 
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Confirm New Password</label> &nbsp;&nbsp;
								<input class="form-control" id="confirmNewPassword" placeholder="Confirm New Password" name="confirmNewPassword" type="password" autofocus>
							</div> 
						</div>
				  </div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
					<button id="changePasswordSubmit" type="button" class="btn btn-primary">UPDATE</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<div class="container-fluid">

  
