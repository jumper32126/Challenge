<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>"PHPからのDBアクセス"</title>
</head>
<body>
  <form action="DBaccess_from_PHP9.php" method="post">
    名前:<input type="text" name="name">
    電話番号:<input type="text" name="tell">
    年齢:<input type="text" name="age">
    誕生日:<input type="text" name="birthday">
    部署:<input type="text" name="departmentID">
    駅:<input type="text" name="stationID">
    ボタン<input type="submit" name="btnsubmit">
  </form>
  <?php

if(!empty($_POST["name"]) && !empty($_POST["tell"]) && !empty($_POST["age"]) && !empty($_POST["birthday"]) && !empty($_POST["departmentID"]) && !empty($_POST["stationID"])){
if((1<=$_POST["departmentID"] && $_POST["departmentID"]<=3) && (1<=$_POST["stationID"] && $_POST["stationID"]<=5)){
  try{
  $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','shimauchi','shimauchi');
  $sql = "insert into user(name,tell,age,birthday,departmentID,stationID) values(:name,:tell,:age,:birthday,:departmentID,:stationID)";
}catch(PDOException $Exception){
  echo '接続に失敗しました:'.$Exception->getMessage();
}
try{
  $query = $pdo->prepare($sql);
  $query -> bindValue(':name',$_POST['name']);
  $query -> bindValue(':tell',$_POST['tell']);
  $query -> bindValue(':age',$_POST['age']);
  $query -> bindValue(':birthday',$_POST['birthday']);
  $query -> bindValue(':departmentID',$_POST['departmentID']);
  $query -> bindValue(':stationID',$_POST['stationID']);
  $query -> execute();

}catch(PDOException $Exception){
  echo '接続に失敗しました:'.$Exception->getMessage();
}
}else{
  echo 'デパートメントIDかステーションIDに存在しない値が入力されています';
}
}else{
  echo '未入力の項目があります';
}
    ?>
</body>
</html>
