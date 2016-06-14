<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>"PHPからのDBアクセス"</title>
</head>
<body>
  <form action="DBaccess_from_PHP12.php" method="post">
    検索名前:<input type="text" name="name">
    検索年齢:<input type="text" name="age">
    検索誕生日:<input type="text" name="birthday">
    検索ボタン<input type="submit" name="btnsubmit">
  </form>
<?php
if(!isset($_POST['name']) || empty($_POST['name']) || !isset($_POST['age'])  || !isset($_POST['birthday']) || empty($_POST['birthday']))
{  echo '文字を入力してください';
}else{
  try{
$txtname = $_POST['name'];
$txtage = $_POST['age'];
$txtbirthday = $_POST['birthday'];
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','shimauchi','shimauchi');
$sql = "select * from user where name like :name and age like :age and birthday like :birthday";
$query = $pdo->prepare($sql);
$query -> bindValue(':name',"%$txtname%");
$query -> bindValue(':age',"%$txtage%");
$query -> bindValue(':birthday',"%$txtbirthday%");
$query -> execute();
$result = $query->fetchall(PDO::FETCH_ASSOC);
var_dump($sql);
}catch(PDOException $Exception){
  echo $Exception->getMessage();
}if($result==null){
  echo '検索データと合致しません';
}else{
  foreach($result as $value){
    foreach ($value as $key => $value) {
      echo "$key : $value".'<br>';}}
}
}
?>
</body>
</html>
