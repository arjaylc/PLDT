<?php
$time = strtotime('12:04PM');
$newformat = date('H:i:s',$time);

echo $newformat;
?>