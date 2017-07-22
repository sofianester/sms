<!DOCTYPE html>
<html>
<head>
  <title>Login</title>

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

  <!-- jquery -->
  <script type="text/javascript" src="<?=base_url()?>/assets/jquery/jquery.min.js"></script>
  

</head>
<body>
	<div class="container">
		<br /><br /><br /><br /><br /><br />
		<div class="row">
	        <div class="col-md-4 col-md-offset-4">
	            <div class="login-panel panel panel-default">
	                <div class="panel-heading">
	                    <h3 class="panel-title">Please Sign In</h3>
	                </div>
	                <div class="panel-body">
	                	<small id="login-empty-input" class="error">email or password cannot be empty <br>&nbsp;</small>
	                	<?php if($alert): ?>
	                		<small id="login-invalid-input" class="error">invalid email or password<br>&nbsp;</small>
	                	<?php endif; ?>

	                    <form role="form" method="post" onsubmit="return checkEmptyInput();" action="<?=base_url()?>authentication/login/">
	                        <fieldset>
	                            <div class="form-group">
	                                <input class="form-control" id="email" placeholder="E-mail" name="email" type="email" autofocus>
	                            </div>
	                            <div class="form-group">
	                                <input class="form-control" id="password" placeholder="Password" name="password" type="password" value="">
	                            </div>
	                            <div class="form-group">
	                                <small><a href="#" onclick="alert('Please contact the administrator to reset your password!')">Forgot Password?</a></small>
	                            </div>
	                            <input id="login-submit" type="submit" value="Login" class="btn btn-lg btn-success btn-block">
	                        </fieldset>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>

	</div> <!--/container-->


<!-- boostrap js -->
  <script type="text/javascript" src="<?=base_url()?>/assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- datatables js -->
  <script type="text/javascript" src="<?=base_url()?>/assets/datatables/media/js/jquery.dataTables.min.js"></script>
  <!-- fileinput js -->
  <script type="text/javascript" src="<?=base_url()?>/assets/fileinput/js/fileinput.min.js"></script>

  <!-- full calendar -->
  <script type="text/javascript" src="<?=base_url()?>/assets/fullcalendar/moment.min.js"></script>  
  <script type="text/javascript" src="<?=base_url()?>/assets/fullcalendar/fullcalendar.min.js"></script>  

  <!-- keith calendar -->
  <script type="text/javascript" src="<?=base_url()?>/assets/keith-calendar/jquery.calendars.js"></script> 
  <script type="text/javascript" src="<?=base_url()?>/assets/keith-calendar/jquery.calendars.plus.js"></script> 
  <script type="text/javascript" src="<?=base_url()?>/assets/keith-calendar/jquery.plugin.js"></script> 
  <script type="text/javascript" src="<?=base_url()?>/assets/keith-calendar/jquery.calendars.picker.js"></script>
  <script type="text/javascript" src="<?=base_url()?>/assets/keith-calendar/jquery.calendars.picker.js"></script>

  <script>
    	window.onload = hideLoginErrors();
    	function hideLoginErrors(){
    		$("#login-empty-input").hide();
    	}

		function checkEmptyInput(){
			hideLoginErrors();
			$("#login-invalid-input").hide();
			if( $("#email").val() == '' || $("#password").val() == '' ){
				$("#login-empty-input").show();
				return false;
			}
		}
	</script>


</body>
</html>