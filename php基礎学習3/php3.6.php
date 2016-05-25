<?php
  $id = ' 01 ';
  $name = 'ヒグマ';
  $birthday = ' 1989/03/21' ;
  $address = ' 北海道 ';
  $pro =array('id'=>$id,'名前'=>$name,'誕生日'=>$birthday,'住所'=>$address);

  $id2 = ' 02 ';
  $name2 = 'グリズリー';
  $birthday2 = '1989/03/22';
  $address2 = ' アメリカ ';
  $pro2 = array('id'=>$id2,'名前'=>$name2,'誕生日'=>$birthday2,'住所'=>$address2);


  $id3 = ' 03 ';
  $name3 = '北極熊';
  $birthday3 = '1989/03/23';
  $address3 = '北極';
  $pro3 = array('id'=>$id3,'名前'=>$name3,'誕生日'=>$birthday3,'住所'=>$address3);
  $proall = array($pro,$pro2,$pro3);

function family($kuma,$name){


        if($name==$kuma[0]['名前']){
        return $kuma[0];
      }elseif($name==$kuma[1]['名前']){
        return $kuma[1];
      }elseif ($name==$kuma[2]['名前']){
      return $kuma[2];
        }else {
           return array('表示不可能');
         }

      }
    $result =  family($proall,'北極熊');
    foreach ($result as $key => $value)
    echo $key.$value;




  # code...













 ?>
