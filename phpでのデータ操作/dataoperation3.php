<?php

$accses_time = date('H時:i分:s秒');
setcookie('Date',$accses_time);
$acceses_time = $_COOKIE;
$LastDate = $_COOKIE['LastLoginDate'];
echo $accses_time.'<br>';
echo '前回のログイン時間は'.$LastDate;
?>
