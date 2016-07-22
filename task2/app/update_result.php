<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
 session_start();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>更新結果画面</title>
</head>
  <body><?php
    $_POST['mode'] = isset($_POST['mode'])?$_POST['mode'] :'';  // 追加修正undefined回避
    if(!$_POST['mode']=="RESULT"){ //追加修正 直接アクセス禁止
        echo 'アクセスルートが不正です。もう一度トップページからやり直してください<br>';
    }else{?>

  <? $id = $_POST['id'];
     $name = $_POST['name'];
     $birthday[0] = $_POST['year'];
     $birthday[1] = $_POST['month'];
     $birthday[2] = $_POST['day'];
     $tell = $_POST['tell'];
     $type = $_POST['type'];
     $comment = $_POST['comment'];
  ?>
    <?php
    $birthday = array($birthday[0],$birthday[1],$birthday[2]); //追加修正 関数の引数で使う為にexplodeでバラしたものをまとめる
    $birthday = implode("-",$birthday);

    $result = update_profile($name,$birthday,$tell,$type,$comment,$id);//追加修正 引数
    //エラーが発生しなければ表示を行う
    if(!isset($result)){
    ?>
    <h1>更新確認</h1>
    以上の内容で更新しました。<br>
    <?php
    }else{
        echo 'データの更新に失敗しました。次記のエラーにより処理を中断します:'.$result;
    }}
    echo return_top();
    ?>
  </body>
</html>
