<?php require_once '../common/defineUtil.php'; ?>
<?php require_once '../common/scriptUtil.php'; ?> <!--課題1-->
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>登録確認画面</title>
</head>
  <body>
    <?php
    if(!empty($_POST['name']) && !empty($_POST['year']) && !empty($_POST['month']) && !empty($_POST['day']) && !empty($_POST['type'])
            && !empty($_POST['tell']) && !empty($_POST['comment'])){ //課題2 month day を追加


        $post_name = $_POST['name'];
        //date型にするために1桁の月日を2桁にフォーマットしてから格納
        $post_birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']);
        $post_type = $_POST['type'];
        $post_tell = $_POST['tell'];
        $post_comment = $_POST['comment'];
echo var_dump($post_birthday);
        //セッション情報に格納
        session_start();
        $_SESSION['name'] = $post_name;
        $_SESSION['birthday'] = $post_birthday;
        $_SESSION['type'] = $post_type;
        $_SESSION['tell'] = $post_tell;
        $_SESSION['comment'] = $post_comment;
    ?>
    <?php
    $birthday = explode("-", $post_birthday);
    echo $birthday[0]; // piece1
    echo $birthday[1]; // piece2
    echo $birthday[2];?>
        <h1>登録確認画面</h1><br>
        名前:<?php echo $post_name;?><br>
        生年月日:<?php echo $post_birthday;?><br>
        種別:<?php echo $post_type?><br>
        電話番号:<?php echo $post_tell;?><br>
        自己紹介:<?php echo $post_comment;?><br>

        上記の内容で登録します。よろしいですか？

        <form action="<?php echo INSERT_RESULT ?>" method="POST">
          <input type="submit" name="yes" value="はい">
        </form>
        <form action="<?php echo INSERT ?>" method="POST">
            <input type="hidden" name="name" value="<?php echo $post_name;?>"><!--課題4-->
            <input type="hidden" name="tell" value="<?php echo $post_tell;?>">
            <input type="hidden" name="comment" value="<?php echo $post_comment;?>">
            <input type="hidden" name="year" value="<?php echo $birthday[0];?>">


            <input type="submit" name="no" value="登録画面に戻る">
            <?php echo var_dump($birthday[0]);?>
        </form>

    <?php }else{ ?>
        <h1>入力項目が不完全です</h1><br>
        再度入力を行ってください<br>
        <?php // 課題3
        $arr = array('名前'=>$_POST['name'],'生年月日の年'=>$_POST['year'],'生年月日の月'=>$_POST['month'],'生年月日の日'=>$_POST['day'],'種別'=>$_POST['type'],'電話番号'=>$_POST['tell'],'自己紹介文'=>$_POST['comment']);
        foreach ($arr as $key => $value) {
          if(empty($value)) {
            echo $key.'が未入力です<br>';
          }
        }
?>

        <form action="<?php echo INSERT ?>" method="POST">
            <input type="submit" name="no" value="登録画面に戻る">
        </form>
    <?php }?>
    <?php echo return_top(); ?> <!--課題1-->
</body>
</html>
