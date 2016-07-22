<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>削除結果画面</title>
</head>
<body>
   <?php $_POST['mode'] = isset($_POST['mode'])?$_POST['mode'] :'';  // 追加修正undefined回避?>
   <?php if(!$_POST['mode']=="result"){ //追加修正 直接アクセス禁止
      echo 'アクセスルートが不正です。もう一度トップページからやり直してください<br>';
    }else
    {?>
    <?php
    $result = delete_profile($_POST['id']);
    //エラーが発生しなければ表示を行う
    if(!isset($result)){
    ?>
    <h1>削除確認</h1>
    削除しました。<br>
    <?php
    }else
    {
      echo 'データの削除に失敗しました。次記のエラーにより処理を中断します:'.$result;
    }
    }
    echo return_searchresults().'<br>'.return_top();//修正 トップ、検索詳細画に飛ぶように
    ?>
  </body>
  </html>
