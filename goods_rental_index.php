<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>キャンプ場予約</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div{
            padding: 10px;
            font-size:16px;
            }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">グッズレンタル画面</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="index.php">キャンプ場予約画面</a> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="goods_rental_select.php">ご予約確認画面</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- 必要な属性を追加 -->
    <form method="post" action="goods_rental_insert.php">
        
        <div class="form-group">
            <label for="set_rental">レンタルセットを選択▼
          <input type="radio" class="form-control" id="set_rental" name="set_rental">ファミリーキャンプセット（３〜４人用）
            <input type="radio" class="form-control" id="set_rental" name="set_rental"> 女子キャンプセット（３〜４人用）
            <input type="radio" class="form-control" id="set_rental" name="set_rental"> グランピングセット（３〜４人用用）
</label>
</div>
<div class="form-group">
            <label for="set_rental_number">レンタル個数</label>
            <input type="number" min="1" max="5" class="form-control" id="set_rental_number" name="set_rental_number">
        </div>
 
        <div class="form-group">
            <label for="rental_start">レンタル開始日</label>
            <input type="date" class="form-control" id="rental_start" name="rental_start">
        </div>
        <div class="form-group">
            <label for="rental_end">返却日</label>
            <input type="date" class="form-control" id="rental_end" name="rental_end">
        </div>
        <div class="form-group">
            <label for="comment">その他ご要望・ご質問</label>
            <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">レンタル内容確認</button>
        </div>
    </form>

</body>

</html>