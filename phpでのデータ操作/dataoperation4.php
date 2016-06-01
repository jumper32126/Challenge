//課題5.4
<?php
session_start();
$accses_time = date('H時:i分:s秒');


$lasttime = $_SESSION['LastLoginDate']; //一回目は@_SESSIONに入っていないのでエラー。二回目以降の時間が@lasttimeに入る
echo $accses_time.'<br>';
echo '前回のアクセスタイムは'.$lasttime;

$_SESSION['LastLoginDate'] = $accses_time;//$accses_timeに入っている時間が$_SESSION['LastLoginDate']に入る



 ?>
