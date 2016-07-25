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
      <title>変更入力画面</title>
</head>
<body>  <?php
  //$_POST['mode'] = isset($_POST['mode'])?$_POST['mode'] :''; // 追加修正undefined回避
  if(!isset ($_POST['mode']) ||!$_POST['mode']=="update"){   //追加修正 直接アクセス禁止
      echo 'アクセスルートが不正です。もう一度トップページからやり直してください<br>';
  }else{?>
    <?php
    $result = profile_detail($_POST['id']);
    ?>
      <form action="<?php echo UPDATE_RESULT  ?>" method="POST"> <?//追加修正update_resultに送る?>
    名前:
  <?  //var_dump($result[0]);?>
    <input type="text" name="name" value="<?php echo $result[0]['name']; ?>">
    <br><br>

    生年月日:
  <? // var_dump ($result[0]['birthday']);?>
<?  $birthday = explode("-", $result[0]['birthday']);?><?//追加修正バラして使えるようにする?>
<?// var_dump($birthday[0]);?>
    <select name="year">
        <option value="">----</option>
        <?php
        for($i=1950; $i<=2010; $i++){ ?>
        <option value="<?php echo $i;?>" <?php if(isset ($birthday[0]) && $i== $birthday[0]){echo 'selected';}?>><? echo $i;?></option>
        <?php ;} ?> <?//追加修正 年を表示しつつ保持?>
    </select>年
    <select name="month">
        <option value="">--</option>
        <?php
        for($i = 1; $i<=12; $i++){?>
        <option value="<?php echo $i;?>" <?php if(isset ($birthday[1]) && $i==$birthday[1]){echo 'selected';}?>><? echo $i;?></option>
        <?php ;} ?> <?//追加修正 月を表示しつつ保持?>
    </select>月
    <select name="day">
        <option value="">--</option>
        <?php
        for($i = 1; $i<=31; $i++){ ?>
        <option value="<?php echo $i; ?>"<?php if(isset ($birthday[2]) && $i==$birthday[2]){echo 'selected';}?>><? echo $i;?></option>
        <?php ;} ?><?//追加修正 日を表示しつつ保持?>
    </select>日
    <br><br>

    種別:<? //var_dump($result[0]['type']);?>
    <br>
    <?php
    for($i = 1; $i<=3; $i++){ ?>
    <input type="radio" name="type" value="<?php echo $i; ?>"<?php if($i==$result[0]['type']){echo "checked";}?>><?php echo ex_typenum($i);?><br>
    <?php } ?>
    <br>

    電話番号:
    <input type="text" name="tell" value="<?php echo $result[0]['tell']; ?>">
    <br><br>

    自己紹介文
    <br>
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard"><?php echo $result[0]['comment']; ?></textarea><br><br>


    <input type="hidden" name="mode"  value="RESULT">
    <input type="hidden" name="id"  value=<?php echo $_POST['id']?>> <? //追加?>
    <input type="submit" name="btnSubmit" value="以上の内容で更新を行う">

    </form>
    <form action="<?php echo RESULT_DETAIL; ?>" method="POST">
      <input type="submit" name="NO" value="詳細画面に戻る"style="width:100px">
    </form>
    <?php }echo return_top(); ?>

</body>

</html>
