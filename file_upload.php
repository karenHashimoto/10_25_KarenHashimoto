<?php
//Fileアップロードチェックエラーが出ていないか確認
if (isset($_FILES['upfile']) && $_FILES['upfile']['error'] ==0) { //ファイルがあるのを確認してかつ、エラーもファイルもある時
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

    $img='';
if (is_uploaded_file($tmp_path)) {
if (move_uploaded_file($tmp_path, $file_name)) {
     chmod($file_name, 0644);
$img = '<img src="'. $file_name . '" >';
} else { exit('Error:アップロードできませんでした.');
} }

} else {
    // ファイルをアップしていないときの処理
    $img = '画像が送信されていません';
}

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FileUploadテスト</title>
</head>

<body>
    <!-- ここに画像出力！ -->
    <?=$img_name?>
    <?=$img?>

</body>

</html>