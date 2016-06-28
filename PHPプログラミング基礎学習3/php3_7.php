<?php   /* 課題7:引き数、戻り値はなしの関数を用意。初期値3のglobal値を2倍していく、
              ローカルな値はstaticとしてその関数が何回実行されたのかを保持していくような関数である。
              この関数を20回呼び出す */
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
