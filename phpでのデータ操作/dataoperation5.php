<HTML>  //課題5.5
    <head>
    </head>
    <body>
        <form enctype="multipart/form-data" action="dataoperation5.php" method="post">
            ファイル選択：<input name="userfile" type="file" />
            <input type="submit" name="btnSubmit">
        </form>
        <?php
            // サーバー側に保存する名前
            $file_name = 'upload.txt';
            // アップロードされたファイルを移動する
          if(!empty($_FILES)){
            move_uploaded_file( $_FILES['userfile']['tmp_name'], '福岡.txt');
}

?>
    </body>
</HTML>
