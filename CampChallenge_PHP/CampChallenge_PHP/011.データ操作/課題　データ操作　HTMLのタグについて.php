<html>
<head>
  <title>コントロールサンプル</title>
</head>
<body>
  <form action="./sample.php" method="post">
    <u>名前</u><input type="text" name="txtName">
    <b>性別:</b>
    <input type="radio" name="sex" value="man" checked="checked">男
    <input type="radio" name="sex" value="woman">女

    趣味<textarea name="mulText"></textarea>

    <input type="reset" value="リセット">
  </form>
</body>
</html>
