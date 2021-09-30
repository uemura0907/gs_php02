<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍登録アプリ</title>
</head>
<body>
<header>
        <nav class="navbar navbar-default">
            <div class="select">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">登録した書籍一覧</a></div>
            </div>
        </nav>
    </header>

    <form method="POST" action="insert.php">
        <div class="form">
        <fieldset>
    <legend>データ1</legend>
    <p>名前：<input type="text" name="name" size="30"></p>
    <p>url  ：<input type="url" name="url" size="30"></p>
    <p>感想：<input type="text" name="comment" size="100"></p>
    <p>日付：<input type="date" name="date" size="30"></p>
  </fieldset>
  <p><input type="submit" value="送信"></p>
</form>

        </fieldset>
        </div>
    </form>


</body>
</html：