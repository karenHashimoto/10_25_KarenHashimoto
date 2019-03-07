<?php
include('functions.php');

// 入力チェック
if (
    !isset($_POST['set_rental']) || $_POST['set_rental']=='' ||
    !isset($_POST['set_rental_number']) || $_POST['set_rental_number']=='' ||
    !isset($_POST['rental_start']) || $_POST['rental_start']=='' ||
    !isset($_POST['rental_end']) || $_POST['rental_end']=='' 
   
) {
    exit('ParamError');
}

//POSTデータ取得

$set_rental = $_POST['set_rental'];
$set_rental_number = $_POST['set_rental_number'];
$rental_start = $_POST['rental_start'];
$rental_end = $_POST['rental_end'];
$comment = $_POST['comment'];

//DB接続
$pdo = db_conn();

$sql ='INSERT INTO goods_rental(id, set_rental, set_rental_number, rental_start, rental_end, comment) VALUES(NULL, :a1, :a2, :a3, :a4 :a5)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $set_rental, PDO::PARAM_STR); 
$stmt->bindValue(':a2', $set_rental_number, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $rental_start, PDO::PARAM_STR);
$stmt->bindValue(':a4', $rental_end, PDO::PARAM_STR);
$stmt->bindValue(':a5', $comment, PDO::PARAM_STR);


$status = $stmt->execute();

//データ登録処理後
if ($status==false) {
    errorMsg($stmt);
} else {
    //index.phpへリダイレクト
    header('Location: goods_rental_index.php');
}
