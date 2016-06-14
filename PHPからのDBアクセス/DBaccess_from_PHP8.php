<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>"PHPからのDBアクセス"</title>
</head>
<body>
  <form action="DBaccess_from_PHP8.php" method="post">
    検索文字:<input type="text" name="int">
    検索ボタン<input type="submit" name="btnsubmit">
  </form>
  <?php
  if(!isset($_POST['int']) || empty($_POST['int'])) {
  echo '文字を入力してください';
}else{

try{
$txtname = $_POST['int'];
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','shimauchi','shimauchi');
$sql = "select*from user where name like :name;";
$query = $pdo->prepare($sql);
$query -> bindValue(':name',"%$txtname%");
$query -> execute();
$result = $query->fetchall(PDO::FETCH_ASSOC);
var_dump($result);
}catch(PDOException $Exception){
  echo $Exception->getMessage();
}
if($result==null){
echo '検索データと合致しません';
}else{
  foreach($result as $value){
    foreach ($value as $key => $value) {
      echo "$key : $value".'<br>';
    }
    echo'<br>';
  }
}
}
?>
</body>
</html>
