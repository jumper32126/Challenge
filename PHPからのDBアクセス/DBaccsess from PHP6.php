<?php
try{
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','shimauchi','shimauchi');
$sql ="delete from user where userID = 6";
$query = $pdo->prepare($sql);
$query -> execute();
}catch(PDOException $Exception){
  echo $Exception->getMessage();

}
$result = $query->fetchall(PDO::FETCH_ASSOC);
foreach($result as $value){
  foreach ($value as $key => $value) {
    echo "$key : $value".'<br>';
  }
  echo'<br>';
}





 ?>
