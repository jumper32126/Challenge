<html>
<head>
<meta charset="utf-8">
<title>"課題5.2"</title>
</head>
<body>
<form action="dataoperation2.php" method="post">
名前：<input type="text" name="name"><br>
性別：<br>
男：      <input type="radio" name="SEX" value="男"><br>
女：      <input type="radio" name="SEX" value="女"><br>
その他：  <input type="radio" name="SEX" value="その他"><br>
趣味:     <textarea type="text" name="hobby"></textarea><br>
       <input type="submit"  name = "btn" value ="送信"/>
</form>

</body>
</html>
<?php
echo $_POST["name"];
echo $_POST["SEX"];
echo $_POST["hobby"];
//echo $name;
//echo $sex;
//echo $hobby;

?>
