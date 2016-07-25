<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>ユーザー情報詳細画面</title>
</head>
  <body>

    <?php
    $result = profile_detail($_GET['id']);
    //エラーが発生しなければ表示を行う
    if(is_array($result)){
    ?>

    <h1>詳細情報</h1>
    名前:<?php echo $result[0]['name'];?><br>
    生年月日:<?php echo $result[0]['birthday'];?><br>
    種別:<?php echo ex_typenum($result[0]['type']);?><br>
    電話番号:<?php echo $result[0]['tell'];?><br>
    自己紹介:<?php echo $result[0]['comment'];?><br>
    登録日時:<?php echo date('Y年n月j日G時i分s秒', strtotime($result[0]['newDate'])); ?><br>

    <form action="<?php echo UPDATE; ?>" method="POST"> <? //ポストに変更?>
        <input type="submit" name="update" value="変更"style="width:100px">
        <input type= "hidden" name="id"  value = "<?php echo $_GET['id']?>"> <? //追加?>
        <input type="hidden" name="mode" value="update" > <? //追加修正 認証キー?>

    </form>
    <form action="<?php echo DELETE; ?>" method="POST"> <? //ポストに変更?>
        <input type="submit" name="delete" value="削除"style="width:100px">
        <input type= "hidden" name="id"  value = "<?php echo $_GET['id']?>"> <? // 追加?>
        <input type="hidden" name="mode" value="delete" > <? //追加修正 認証キー?>

    </form>

    <?php
    }else{
        echo 'データの検索に失敗しました。次記のエラーにより処理を中断します:'.$result;
    // }
    }
        echo return_searchresults().'<br>'.return_top(); //修正 検索結果に飛ぶように
   ?>

  </body>
</html>