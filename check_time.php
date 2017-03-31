
<?php

$timezone = date_default_timezone_set('Europe/Zurich');

$time = new DateTime();

//$time->setDate(2017, 02, 16);
////
//$time->setTime(11,50,00);

$hour = $time->format('H');

$today = getdate($time->getTimestamp());

//echo $time->format('Y M d H:i:s D') . "\n\n";

if( $hour < 12 && $today['wday'] <= 4 && $today['wday'] != 0 ) {

$str = date("Y M d", strtotime("+1 DAY",$time->getTimestamp())) . "\n";

echo $str;

}

if( $hour > 12 && $today['wday'] <= 3 && $today['wday'] != 0 ) {

$str2 = date("Y M d", strtotime("+2 DAY",$time->getTimestamp())) . "\n";

echo $str2;

}

if( $hour > 12 && $today['wday'] == 4 ) {

$str3 = date("Y M d", strtotime("+4 DAY",$time->getTimestamp())) . "\n";

echo $str3;

}

if( $hour < 12 && $today['wday'] == 5 ) {

$str4 = date("Y M d", strtotime("+3 DAY",$time->getTimestamp())) . "\n";

echo $str4;

}

if( $hour > 12 && $today['wday'] == 5 ) {

$str5 = date("Y M d", strtotime("+4 DAY", $time->getTimestamp())) . "\n";

echo $str5;

}

if( $today['wday'] == 6 ) {

$str6 = date("Y M d", strtotime("+3 DAY", $time->getTimestamp())) . "\n";

echo $str6;

}

if( $today['wday'] == 0 ) {

$str7 = date("Y M d", strtotime("+2 DAY", $time->getTimestamp())) . "\n";

echo $str7;

}