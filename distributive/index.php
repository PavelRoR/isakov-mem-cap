<?php
$date = array(strtotime('2020-02-06'),strtotime('2020-02-07'),strtotime('2020-02-08'));
$now = strtotime('now');

if ($now < $date[0]) {
    header('location: https://start.bizon365.ru/room/18087/memory-capabilities_d1');
}
else if (($now >= $date[0])&&($now < $date[1])) {
    header('location: https://start.bizon365.ru/room/18087/memory-capabilities_d2');
}
else if (($now >= $date[1])&&($now < $date[2])) {
    header('location: https://start.bizon365.ru/room/18087/memory-capabilities_d3');
}
else {
    header('location: https://isakov.mastervision.su/memory-capabilities/course/');
}
?>