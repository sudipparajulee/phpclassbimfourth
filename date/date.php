<?php
$mydate = date('s');
//Today is day 27 of January and day 27 of the year 2023. The time is 10:00 am.
$day = date('d');
$month = date('F');
$yearday = date('z');
$year = date('Y');
$hour = date('H');
$min = date('i');
$am = date('a');
echo "Today is day $day of $month and day $yearday of the year $year. The time is $hour:$min $am";
?>