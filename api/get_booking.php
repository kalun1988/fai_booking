<?php

date_default_timezone_set('Asia/Hong_Kong');
$out = array();
 

 /*
document: https://github.com/Serhioromano/bootstrap-calendar


$start = $_REQUEST['from'] / 1000;
$end   = $_REQUEST['to'] / 1000;
the range will be passed from index.php

below dummy data should be replaced by MySQL data
 */
$start_time = "2017-08-09 00:00:00";
$end_time = "2017-08-09 01:59:59";
$out[] = array(
 	'id' => 1,
	'title' => '[0am-2am] Available',
	'url' => 'make_booking.php?id=1',
	'class' => 'event-success',
	'start' => strtotime($start_time).'000',
	'end' => strtotime($end_time).'000'
); 
$start_time = "2017-08-09 02:00:00";
$end_time = "2017-08-09 03:59:59";
$out[] = array(
 	'id' => 2,
	'title' => '[2am-4am] 08533879d',
	'url' => 'api/get_details.php?id=2',
	'class' => 'event-important',
	'start' => strtotime($start_time).'000',
	'end' => strtotime($end_time).'000'
);
$start_time = "2017-08-09 04:00:00";
$end_time = "2017-08-09 05:59:59";
$out[] = array(
 	'id' => 3,
	'title' => '[4am-6am] 08533871d',
	'url' => 'api/get_details.php?id=3',
	'class' => 'event-important',
	'start' => strtotime($start_time).'000',
	'end' => strtotime($end_time).'000'
);
$start_time = "2017-08-09 06:00:00";
$end_time = "2017-08-09 07:59:59";
$out[] = array(
 	'id' => 4,
	'title' => '[6am-8am] 08533872d',
	'url' => 'api/get_details.php?id=4',
	'class' => 'event-important',
	'start' => strtotime($start_time).'000',
	'end' => strtotime($end_time).'000'
);
$start_time = "2017-08-09 08:00:00";
$end_time = "2017-08-09 09:59:59";
$out[] = array(
 	'id' => 5,
	'title' => '[8am-10am] 08533873d',
	'url' => 'api/get_details.php?id=5',
	'class' => 'event-important',
	'start' => strtotime($start_time).'000',
	'end' => strtotime($end_time).'000'
);
$start_time = "2017-08-09 10:00:00";
$end_time = "2017-08-09 11:59:59";
$out[] = array(
 	'id' => 6,
	'title' => '[10am-12am] 08533874d',
	'url' => 'api/get_details.php?id=6',
	'class' => 'event-important',
	'start' => strtotime($start_time).'000',
	'end' => strtotime($end_time).'000'
);
$start_time = "2017-08-09 12:00:00";
$end_time = "2017-08-09 13:59:59";
$out[] = array(
 	'id' => 7,
	'title' => '[12am-2pm] 08533875d',
	'url' => 'api/get_details.php?id=7',
	'class' => 'event-important',
	'start' => strtotime($start_time).'000',
	'end' => strtotime($end_time).'000'
);
$start_time = "2017-08-09 14:00:00";
$end_time = "2017-08-09 15:59:59";
$out[] = array(
 	'id' => 8,
	'title' => '[2pm-4pm] 08533876d',
	'url' => 'api/get_details.php?id=8',
	'class' => 'event-important',
	'start' => strtotime($start_time).'000',
	'end' => strtotime($end_time).'000'
);
$start_time = "2017-08-09 16:00:00";
$end_time = "2017-08-09 17:59:59";
$out[] = array(
 	'id' => 9,
	'title' => '[4pm-6pm] 08533877d',
	'url' => 'api/get_details.php?id=9',
	'class' => 'event-important',
	'start' => strtotime($start_time).'000',
	'end' => strtotime($end_time).'000'
);
$start_time = "2017-08-09 18:00:00";
$end_time = "2017-08-09 19:59:59";
$out[] = array(
 	'id' => 10,
	'title' => '[6pm-8pm] 08533878d',
	'url' => 'api/get_details.php?id=10',
	'class' => 'event-important',
	'start' => strtotime($start_time).'000',
	'end' => strtotime($end_time).'000'
);
$start_time = "2017-08-09 20:00:00";
$end_time = "2017-08-09 21:59:59";
$out[] = array(
 	'id' => 11,
	'title' => '[8pm-10pm] 08533878d',
	'url' => 'api/get_details.php?id=11',
	'class' => 'event-important',
	'start' => strtotime($start_time).'000',
	'end' => strtotime($end_time).'000'
);
$start_time = "2017-08-09 22:00:00";
$end_time = "2017-08-09 23:59:59";
$out[] = array(
 	'id' => 12,
	'title' => '[10pm-0am] 08533878d',
	'url' => 'api/get_details.php?id=12',
	'class' => 'event-important',
	'start' => strtotime($start_time).'000',
	'end' => strtotime($end_time).'000'
);

//next day
 
$start_time = "2017-08-10 00:00:00";
$end_time = "2017-08-10 01:59:59";
$out[] = array(
 	'id' => 13,
	'title' => '[0am-2am] Available',
	'url' => 'make_booking.php?id=13',
	'class' => 'event-success',
	'start' => strtotime($start_time).'000',
	'end' => strtotime($end_time).'000'
); 
echo json_encode(array('success' => 1, 'result' => $out));
exit;
?>