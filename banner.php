<?php
use Vectorface\Whip\Whip;
use Websoftwares\Throttle; 
use Websoftwares\Storage\Memcached;
use Monolog\Logger;

require '/var/www/html/vendor/autoload.php';

ob_start();
ini_set( 'display_errors', '1' );
session_id();
session_start()or die( 'session doesnt start' );

$whip = new Whip();
$identifier = $whip->getValidIpAddress();
$options = [
	"banned" => 6,      	
	"logged" => 10,      
	"timespan" => 3600 
];
$throttle = new Throttle(new Logger('throttle'), new Memcached(), $options);

$starting = $throttle->remaining($identifier);
$throttle->reset($identifier);
$ending = $throttle->remaining($identifier);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Banner</title>
</head>

<body>
	Your ip has been cleared
	<br>Starting: <?= $starting ?>
	<br>Remaining: <?= $ending ?>
</body>
</html>