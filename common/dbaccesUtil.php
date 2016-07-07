<?php

//DBへの接続用を行う。成功ならPDOオブジェクトを、失敗なら中断、メッセージの表示を行う
function connect2MySQL(){
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','hayashi','password');
        return $pdo;
    } catch (PDOException $e) {
        die('接続に失敗しました。次記のエラーにより処理を中断します:'.$e->getMessage());
    }
}
$today = date("Y年m月d日H時:i分:s秒"); // 課題 6.insert_result.phpにて、SQLを実行した際に現在時刻が正しい型で格納されない。これを修正しなさい

//db接続を確立       //課題7 データベースアクセス系の処理を切り離す
$insert_db = connect2MySQL();

//DBに全項目のある1レコードを登録するSQL
$insert_sql = "INSERT INTO user_t(name,birthday,tell,type,comment,newDate)"
        . "VALUES(:name,:birthday,:tell,:type,:comment,:newDate)";

//クエリとして用意
$insert_query = $insert_db->prepare($insert_sql);

//SQL文にセッションから受け取った値＆現在時をバインド
$insert_query->bindValue(':name',$name);
$insert_query->bindValue(':birthday',$birthday);
$insert_query->bindValue(':tell',$tell);
$insert_query->bindValue(':type',$type);
$insert_query->bindValue(':comment',$comment);
$insert_query->bindValue(':newDate', $today);   //time()); // 課題 6.insert_result.phpにて、SQLを実行した際に現在時刻が正しい型で格納されない。これを修正しなさい

//SQLを実行
$insert_query->execute();

//接続オブジェクトを初期化することでDB接続を切断
$insert_db=null;
