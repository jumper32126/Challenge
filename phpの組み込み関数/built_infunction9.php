<?php
$file = fopen('../text2.txt','r');
$filetxt = fgets($file);
echo $filetxt;
fclose($file);


 ?>
