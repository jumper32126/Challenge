<HTML> //課題5.6
    <head>
    </head>
    <body>
        <form enctype="multipart/form-data" action="dataoperation6.php" method="post">
            ファイル選択：<input name="userfile" type="file" />
            <input type="submit" name="btnSubmit">
        </form>
        <?php
            // サーバー側に保存する名前
            $file_name = 'upload.txt';
            // アップロードされたファイルを移動する
          if(!empty($_FILES)){
            move_uploaded_file( $_FILES['userfile']['tmp_name'], '神保町.txt');
            $a = '神保町.txt';
            $fp = fopen($a, 'r');
            $file_name = fgets($fp);
            echo $file_name;

}




?>
    </body>
</HTML>
