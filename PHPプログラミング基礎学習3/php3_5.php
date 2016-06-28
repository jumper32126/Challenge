<?php   /* 課題5:戻り値としてある人物のid(数値),名前,生年月日、住所を返却し、受け取った後は全情報を表示する */
function profile(){
    $id = ' 01 ';
    $name = ' 島内昌太 ';
    $birthday = ' 1989/03/21' ;
    $address = ' 浦安 ';
    return array('id'=>$id,'名前'=>$name,'誕生日'=>$birthday,'住所'=>$address);

  }
foreach(profile() as $key=> $value) {
  echo  $key.$value.'<br>';
}
?>
