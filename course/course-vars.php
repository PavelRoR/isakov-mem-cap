<?php
$videos = array('','','');
$hides = array('','','');

$sales1 = array('1 500р.','1 000р.','500р.');
$sales2 = array('3 000р.','2 000р.','1 000р.');
$sales3 = array('6 000р.','4 000р.','2 000р.');

$todays1 = array('5 400р.','5 900р.','6 400р.');
$todays2 = array('10 900р.','11 900р.','12 900р.');
$todays3 = array('14 900р.','16 900р.','18 900р.');

$links1 = array('https://shop.mastervision.su/?r=ordering/cart/as1&id=4440&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4441&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4442&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4443&clean=true&lg=ru');
$links2 = array('https://shop.mastervision.su/?r=ordering/cart/as1&id=4444&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4445&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4446&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4447&clean=true&lg=ru');
$links3 = array('https://shop.mastervision.su/?r=ordering/cart/as1&id=4448&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4449&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4450&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=4451&clean=true&lg=ru');

$dates = array(strtotime('2020-02-06'),strtotime('2020-02-07'),strtotime('2020-02-08'),strtotime('2020-02-11'));
$now = strtotime('now');

if ($now < $dates[0]) {
    $sale1 = $sales1[0];
    $sale2 = $sales2[0];
    $sale3 = $sales3[0];

    $today1 = $todays1[0];
    $today2 = $todays2[0];
    $today3 = $todays3[0];

    $link1 = $links1[0];
    $link2 = $links2[0];
    $link3 = $links3[0];
}
elseif (($now >= $dates[0])&&($now < $dates[1])) {
    $sale1 = $sales1[1];
    $sale2 = $sales2[1];
    $sale3 = $sales3[1];

    $today1 = $todays1[1];
    $today2 = $todays2[1];
    $today3 = $todays3[1];

    $link1 = $links1[1];
    $link2 = $links2[1];
    $link3 = $links3[1];
}
elseif (($now >= $dates[1])&&($now < $dates[2])) {
    $sale1 = $sales1[2];
    $sale2 = $sales2[2];
    $sale3 = $sales3[2];

    $today1 = $todays1[2];
    $today2 = $todays2[2];
    $today3 = $todays3[2];

    $link1 = $links1[2];
    $link2 = $links2[2];
    $link3 = $links3[2];
}
else {
    $link1 = $links1[3];
    $link2 = $links2[3];
    $link3 = $links3[3];
}
?>