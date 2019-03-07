<?php
include('functions.php');

//入力チェック(受信確認処理追加)
if (
    !!isset($_POST['camp_ground_name']) || $_POST['camp_ground_name']=='' ||
    !isset($_POST['name']) || $_POST['name']=='' ||
    !isset($_POST['checkin']) || $_POST['checkin']=='' ||
    !isset($_POST['checkout']) || $_POST['checkout']=='' ||
    !isset($_POST['adlut_number']) || $_POST['adlut_number']=='' ||
    !isset($_POST['child_number']) || $_POST['child_number']==''
) {
    exit('ParamError');
}

//POSTデータ取得
$camp_ground_name = $_POST['camp_ground_name'];
$name = $_POST['name'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$adlut_number = $_POST['adlut_number'];
$child_number = $_POST['child_number'];
$comment = $_POST['comment'];


//DB接続します(エラー処理追加)
$pdo = db_conn();

//データ登録SQL作成
$sql ='INSERT INTO camp_reserve(id, camp_ground_name, name, checkin, checkout, adlut_number, child_number, comment) VALUES(NULL, :a1, :a2, :a3, :a4, :a5, :a6, :a7)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $camp_ground_name, PDO::PARAM_STR); 
$stmt->bindValue(':a2', $name, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $checkin, PDO::PARAM_STR);
$stmt->bindValue(':a4', $checkout, PDO::PARAM_STR);
$stmt->bindValue(':a5', $adlut_number, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a6', $child_number, PDO::PARAM_STR);
$stmt->bindValue(':a7', $comment, PDO::PARAM_STR);

$status = $stmt->execute();

//4．データ登録処理後
if ($status==false) {
    errorMsg($stmt);
} else {
    header('Location: select.php');
    exit;
}
