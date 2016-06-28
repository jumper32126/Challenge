<?php     /* 課題6:名前による検索プログラムを実装する。3人分のプロフィール(項目は課題5参照)をあらかじめ定義しておく。
                引き数にそれらのプロフィールと文字列をとり、戻り値は1人分のプロフィール情報を返却する。
                引き数の文字が名前に含まれる(部分一致)プロフィール情報(複数名合致する場合は最初のプロフィールとする)を戻り値として返却する。
                それ以降などは課題5と同じ扱いに */
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
    echo $key . $value;
  # code...
?>
