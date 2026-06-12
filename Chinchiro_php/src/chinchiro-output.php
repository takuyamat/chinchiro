<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>チンチロ</title>
</head>
<body>

<?php 
require 'Chinchiro.php';
require 'Judge.php';
//プレイヤーとディーラーのインスタンス生成
$player = new Chinchiro();
$dealer = new Chinchiro();
$judge = new Judge();
//自分の目を表示し判定の結果を返す
echo '<p>【自分の目】</p>';
$player->getDice();
$player->setRank();

//相手の目の表示し判定の結果を返す
echo '<p>【相手の目】</p>';
$dealer->getDice();
$dealer->setRank();

//勝敗判定
echo '<p>【勝敗】</p>';
$judge->getJudge($player,$dealer);
?>

<form action="chinchiro-output.php">
<input type="submit" value="サイコロを振り直す">
</form>

</body>
</html>