<?php
function my_profile(){
	echo '島内昌太'.'<br>';
        echo'3/21/1989'.'<br>';
	echo'ジムが好きです'.'<br>';

  return true;
}
 $a = my_profile();
  if($a==true){
      echo 'この処理は正しく実行できました';
		}else{
      echo '正しく実行できませんでした';
}









?>
