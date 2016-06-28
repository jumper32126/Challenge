<?php /* 課題2 switch文を利用して、以下の処理を実現してください。
      値が1なら「one」、値が2なら「two」、それ以外は「想定外」と表示する処理*/
$num =' ';
$messege = ' ' ;
switch($num){
	case 1:
		$messege = '「one」';
		break;
        case 2:
        	$messege ='「two」';
        	break;
       default:
       	        $messege ='「想定外」';
       	        break;
   }
   echo $messege;
   ?>
