<?php
include('functions.php');

// 入力チェック
if (
    !isset($_POST['task']) || $_POST['task']=='' ||
    !isset($_POST['deadline']) || $_POST['deadline']==''
) {
    exit('ParamError');
}

//POSTデータ取得
$task = $_POST['task'];
$deadline = $_POST['deadline'];
$comment = $_POST['comment'];

// Fileアップロードチェック
if (isset($_FILES['upfile']) && $_FILES['upfile']['error'] ==0) {
    // ファイルをアップロードしたときの処理
    // ①送信ファイルの情報取得
    $file_name = $_FILES['upfile']['name']; 
    $tmp_path = $_FILES['upfile']['tmp_name'];
    $file_dir_path = 'upload/';  //保存フォルダの名前は自分で作る

     // ②File名の準備
    $extension = pathinfo($file_name, PATHINFO_EXTENSION); 
    $uniq_name = date('YmdHis').md5(session_id()) . "." . $extension; 
    $file_name = $file_dir_path.$uniq_name;

    

    // ③サーバの保存領域に移動&④表示
    if (is_uploaded_file($tmp_path)) {
    if (move_uploaded_file($tmp_path, $file_name)) {
         chmod($file_name, 0644);
         $sql ='INSERT INTO php_02table(id, task, deadline, comment, image, indate)
         VALUES(NULL, :a1, :a2, :a3, :image, sysdate())';
         
    } else { exit('Error:アップロードできませんでした.');
    } 
}
} else {
    // ファイルをアップしていないときの処理
    // exit('画像が送信されていません');
    $sql ='INSERT INTO php_02table(id, task, deadline, comment, image, indate)
VALUES(NULL, :a1, :a2, :a3, NULL, sysdate())';

}



// DB接続
$pdo = db_conn();

// データ登録SQL作成
// imageカラムとバインド変数を追加
// $sql ='INSERT INTO php_02table(id, task, deadline, comment, image, indate)
// VALUES(NULL, :a1, :a2, :a3, :image, sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $task, PDO::PARAM_STR);
$stmt->bindValue(':a2', $deadline, PDO::PARAM_STR);
$stmt->bindValue(':a3', $comment, PDO::PARAM_STR);
// :imageを$file_nameで追加！
if(isset($file_name)){
    $stmt->bindValue(':image', $file_name, PDO::PARAM_STR);
}
$status = $stmt->execute();

//データ登録処理後
if ($status==false) {
    errorMsg($stmt);
} else {
    //index.phpへリダイレクト
    header('Location: index.php');
}
