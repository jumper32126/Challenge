<?php
try{
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','shimauchi','shimauchi');
$sql ="insert into user values(6,'島内 昌太','080-4119-0677',27,'1989-03-21',1,1)";
$query = $pdo->prepare($sql);
$query -> execute();
}catch(PDOException $Exception){
  echo $Exception->getMessage();

}



 ?>
