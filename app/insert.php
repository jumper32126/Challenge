<?php require_once '../common/defineUtil.php'; ?>
<?php require_once '../common/scriptUtil.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>登録画面</title>
</head>
<body>
  <?php
  //session_start();
  //$_SESSION['name'] = $name ;
  //$_SESSION['birthday'] = $birthday;
  //$_SESSION['type'] = $type ;
  //$_SESSION['tell']= $tell ;
  //$_SESSION['comment']= $comment;

  //echo  var_dump($_POST['year']);
  ?>
    <form action="<?php echo INSERT_CONFIRM ?>" method="POST">
    名前:
    <input type="text" name="name" value="<?php //課題4 vallueの部分追加
    if(empty($_POST['name'])) {
      echo '';
    }else{
      echo $_POST['name'];
    }?>">
    <br><br>

    生年月日:
    <select name="year">
        <option value="">----</option>  <!--課題2 空文字として送る-->
        <?php
        for($i=1950; $i<=2010; $i++){ ?>  <!--課題4 保持する-->
        <option value = "<?php echo $i; ?>" <?php if (isset($_POST['year']) && $i==$_POST['year']){echo 'selected';}?>>
              <?php echo $i;?> </option><?php;}?>
    </select>年
    <select name="month">
        <option value="">--</option>   <!--課題2 空文字として送る-->
        <?php
        for($i = 1; $i<=12; $i++){?>  <!--課題4 保持する-->
        <option value ="<?php echo $i;?>"<?php if (isset($_POST['month'])&& $i==$_POST['month']){echo 'selected';}?>>
        <?php echo $i;?> </option><?php ;} ?>
    </select>月
    <select name="day">
        <option value="">--</option>   <!--課題2 空文字として送る-->
        <?php
        for($i = 1; $i<=31; $i++){ ?> <!--課題4 保持する-->
        <option value="<?php echo $i;?>"<?php if(isset($_POST['day'])&& $i==$_POST['day']){echo 'selected';} ?>>
        <?php echo $i;?> </option><?php ;} ?>
    </select>日
    <br><br>
<?php $_POST['type'] = '種別';?> <!-- 初めてページに飛んだ時に未定義を回避-->
    種別:
    <br> <!--課題4 保持する-->
    <input type="radio" name="type" value="エンジニア"<?php if(($_POST['type'])=="エンジニア"){echo 'checked';}?>>エンジニア<br>
    <input type="radio" name="type" value="営業"<?php if(($_POST['type'])=="営業"){echo 'checked';}?>>営業<br>
    <input type="radio" name="type" value="その他"<?php if(($_POST['type'])=="その他"){echo 'checked';}?>>その他<br>
    <br>

    電話番号:
    <input type="text" name="tell" value = "<?php  // 課題4 vallueの部分追加
    if(empty($_POST['tell'])){
      echo '';
    }else{
      echo $_POST['tell'];
    }?>">
    <br><br>

    自己紹介文
    <br>
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard"><?php    //課題4 vallueの部分追加
    if(empty($_POST['comment'])){
       echo '';
    }else{
      echo $_POST['comment'];
    }?>
    </textarea><br><br>

    <input type="submit" name="btnSubmit" value="確認画面へ">
    </form>
    <?php echo return_top(); ?>
</body>
</html>
