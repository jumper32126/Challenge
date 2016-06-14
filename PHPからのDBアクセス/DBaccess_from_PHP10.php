<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>"PHPからのDBアクセス"</title>
</head>
<body>
  <form action="DBaccess_from_PHP10.php" method="post">
    userID:<input type="text" name="userID">
    削除ボタン<input type="submit" name="btnsubmit">
  </form>
  <?php
  $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','shimauchi','shimauchi');
try{
   $sql = "delete from user where userID = :userID";
   $query = $pdo->prepare($sql);
   $query -> bindValue(':userID',$_POST["userID"]);
   $query -> execute();

}catch(PDOException $Exception){
  echo '接続に失敗しました:'.$Exception->getMessage();}
  var_dump($query);
  ?>
</body>
</html>
