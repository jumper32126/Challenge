<?php  /* 課題2 switch文を利用して、以下の処理を実現してください。
       値が'A'なら「英語」、値が'あ'なら「日本語」、それ以外は何も表示しない処理*/

$num = 'A';
$messege = ' ';
switch($num){
	case 'A':
		$messege ='「英語」';
		break;
        case 'あ';
                $messege ='「日本語」';
                break;
    }
    echo $messege;
 ?>
