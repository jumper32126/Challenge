<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>検索結果画面</title>
</head>
    <body>
      <h1>検索結果</h1>
        <table border=1>
            <tr>
                <th>名前</th>
                <th>生年</th>
                <th>種別</th>
                <th>登録日時</th>
            </tr>
        <?php
        //$result = null;
        //var_dump($_GET['name']);
        //var_dump($_GET['year']);
        //var_dump($_GET['type']);
      if (!isset($_GET['type'])){ $_GET['type'] = null;}
        if(empty($_GET['name']) && empty($_GET['year']) && empty($_GET['type'])){
            $result = search_all_profiles(); //スペル修正aを追加
        }else{
            $result = search_profiles($_GET['name'],$_GET['year'],$_GET['type']); //スペル修正aを追加
        }
        foreach($result as $value){
        ?>
            <tr>
                <td><a href="<?php echo RESULT_DETAIL ?>?id=<?php echo $value['userID']?>"><?php echo $value['name']; ?></a></td>
                <td><?php echo $value['birthday']; ?></td>
                <td><?php echo ex_typenum($value['type']); ?></td>
                <td><?php echo date('Y年n月j日G時i分s秒', strtotime($value['newDate']));?></td>  <?php // 修正;が一つ多い?>
            </tr>
        <?php
      // }
    }echo return_top();?>

        </table>
</body>
</html>
