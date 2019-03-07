<?php
include('functions.php');

//DB接続
$pdo = db_conn();

//データ表示SQL作成
$sql = 'SELECT * FROM camp_reserve';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//データ表示
if ($status==false) {
    errorMsg($stmt);
} else {
    $view='';
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<li class="list-group-item">';
        $view .= '<p>'.$result['camp_ground_name'].'</p>';
        $view .= '<p>'.$result['name'].'</p>';
        $view .= '<p>'.$result['checkin'].'</p>';
        $view .= '<p>'.$result['checkout'].'</p>';
        $view .= '<p>'.$result['adlut_number'].'</p>';
        $view .= '<p>'.$result['child_number'].'</p>';
        $view .= '<p>'.$result['comment'].'</p>';

        // $view .= '<img src="'.$result['image'].'" alt="" height="150px">';
        // // imgタグで出力しよう！
        $view .= '<div><a href="detail.php?id='.$result[id].'" class="badge badge-primary">予約内容変更</a>';
        $view .= '<a href="delete.php?id='.$result[id].'" class="badge badge-danger">予約の削除</a></div>';
        $view .= '</li>';
    }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>todoリスト表示</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">現在のご予約一覧</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">予約画面へ戻る</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="select.php">現在のご予約一覧</a> -->
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div>
        <ul class="list-group">
            <?=$view?>
        </ul>
    </div>

</body>

</html>