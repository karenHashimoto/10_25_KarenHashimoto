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
            <a class="navbar-brand" href="#">キャンプ場予約画面</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="index.php">キャンプ場予約画面</a> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="select.php">ご予約確認画面</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- 必要な属性を追加 -->
    <form method="post" action="insert.php">
        
        <div class="form-group">
            <label for="camp_ground_name">キャンプ場名</label>
            <select name="camp_ground_name">
            <option value="久住ボイボイキャンプ場">久住ボイボイキャンプ場</option>
            <option value="蔵迫温泉さくらオートキャンプ場">蔵迫温泉さくらオートキャンプ場</option>
            <option value="志高湖キャンプ">志高湖キャンプ場</option>
        </select>
        </div>
        <div class="form-group">
            <label for="name">お名前</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
         
        <div class="form-group">
            <label for="checkin">チェックイン</label>
            <input type="datetime-local" class="form-control" id="checkin" name="checkin">
        </div>
        <div class="form-group">
            <label for="checkout">チェックアウト</label>
            <input type="datetime-local" class="form-control" id="chekout" name="checkout">
        </div>

        <div class="form-group">
            <label for="adlut_number">大人</label>
            <input type="number" min="1" max="5" class="form-control" id="adlut_number" name="adlut_number">
        </div>
       <div class="form-group">
            <label for="child_number">子供</label>
            <input type="number" min="0" max="4" class="form-control" id="child_number" name="child_number">
        </div>
            <label for="comment">その他ご要望・ご質問</label>
            <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">予約内容確認</button>
        </div>
    </form>

</body>

</html>