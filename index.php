<!DOCTYPE html>
<html>
<head>
	<title>Booking System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="script/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="script/vendor/bootstrap-calendar-master/css/calendar.css">
</head>
<body>
	<!-- head -->
	<div class="btn-group">
		<button class="btn btn-primary" data-calendar-nav="prev">&lt;&lt; Prev</button>
		<button class="btn" data-calendar-nav="today">Today</button>
		<button class="btn btn-primary" data-calendar-nav="next">Next &gt;&gt;</button>
	</div>
	<!-- calendar -->
	<div id="calendar"></div>
	<!-- modal -->
<div class="modal fade" id="booking-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Booking</h3>
            </div>
            <div class="modal-body" style="height: 400px">
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
            </div>
        </div>
    </div>
</div>



	<script type="text/javascript" src="script/vendor/jquery/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="script/vendor/underscore/underscore-min.js"></script>
	<script type="text/javascript" src="script/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="script/vendor/bootstrap-calendar-master/js/calendar.js"></script>
	<script type="text/javascript">
		var calendar = $("#calendar").calendar(
			{
				tmpl_path: "script/vendor/bootstrap-calendar-master/tmpls/",
				events_source: 'api/get_booking.php',
				modal: "#booking-modal",
				modal_type : "iframe"
			});			
	</script>
</body>
</html>