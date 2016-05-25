<?php
$num = 3;
function exsample(){
         global $num;
         $num*=2;
         static $count = 0;

         echo '回数'.++$count.','.$num.',<br>';

       }
for ($count=0; $count < 20; $count++) {
exsample();
}





     ?>
