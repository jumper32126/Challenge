<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>"PHPからのDBアクセス"</title>
</head>
<body>
  <form action="DBaccess_from_PHP11.php" method="post">
    userID指定:<input type="text" name="profilesID">
          名前:<input type="text" name="name">
      電話番号:<input type="text" name="tell">
          年齢:<input type="text" name="age">
        誕生日:<input type="text" name="birthday">
  departmentID:<input type="text" name="departmentID">
    stationID:<input type="text" name="stationID">
        ボタン<input type="submit" name="btnsubmit">
  </form>
  <?php
  try{
   $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','shimauchi','shimauchi');
 }catch(PDOException $Exception){
   echo '接続に失敗しました:'.$Exception->getMessage();}
   $sql = "update profiles set name = :name, tell = :tell, age= :age, birthday = :birthday, departmentID = :departmentID, stationID = :stationID where profilesID = :profilesID";
   $query = $pdo->prepare($sql);
   $query -> bindValue(':userID',$_POST["profilesID"]);
   $query -> bindValue(':name',$_POST["name"]);
   $query -> bindValue(':tell',$_POST["tell"]);
   $query -> bindValue(':age',$_POST["age"]);
   $query -> bindValue(':birthday',$_POST["birthday"]);
   $query -> bindValue(':departmentID',$_POST["departmentID"]);
   $query -> bindValue(':stationID',$_POST["stationID"]);
   try{
     $query -> execute();
}catch(PDOException $Exception){
  echo '接続に失敗しました:'.$Exception->getMessage();}
  var_dump($_POST);
  ?>
</body>
</html>
