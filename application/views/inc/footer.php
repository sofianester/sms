</div> <!--/container-fluid-->


<!-- boostrap js -->
<script type="text/javascript" src="<?=base_url()?>/assets/bootstrap/js/bootstrap.min.js"></script>

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


<!-- DataTables JavaScript -->
<script src="<?=base_url()?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/js/dataTables.bootstrap.min.js"></script>
 
<script type="text/javascript">
	window.onload = get_activity_log();
	function get_activity_log(){

		$('#dataTables-user-log-advance').dataTable({
			//"sScrollY": "400px",
			"bProcessing": true,
				"bServerSide": true,
				"sServerMethod": "GET",
				"sAjaxSource": $("#base-url").val()+"admin/get_activity_log",
				"iDisplayLength": 50,
				"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"aaSorting": [[0, 'desc']],
				"aoColumns": [
				{ "bVisible": true, "bSearchable": true, "bSortable": true },
				{ "bVisible": true, "bSearchable": true, "bSortable": true },
				{ "bVisible": true, "bSearchable": true, "bSortable": true },
				{ "bVisible": true, "bSearchable": true, "bSortable": true }
				]
		});
	}
</script>
<!-- Kida js -->


</body>
</html>