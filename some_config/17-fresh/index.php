<?php
require_once(__DIR__ . '/config.php');

$quizSet = [];
$quizSet[] = [
 'q' => 'アニメ好き10代20代に聞きました、あなたが住みたい街はどこ(東京編)ですか？',
 'a' => [
        '千代田区',
        '中央区',
        '港区',
        '新宿区',
        '文京区',
        '台東区',
        '墨田区',
        '江東区',
        '品川区',
        '目黒区',
        '大田区',
        '世田谷区',
        '渋谷区',
        '中野区',
        '杉並区',
        '豊島区',
        '北区',
        '荒川区',
        '板橋区',
        '練馬区',
        '足立区',
        '葛飾区',
        '江戸川区',
  ]
];

$current_num = 0;

$data = $quizSet[$current_num];

shuffle($data['a']);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Quiz</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div id="container">
    <h1>Q. <?= h($data['q']); ?></h1>
    <ul>
       <?php foreach ($data['a'] as $a) : ?>
      <li class="answer"><?= h($a); ?></li>
       <?php endforeach; ?>
    </ul>
    <div id="btn" class="disabled">Next Question</div>
  </div>
</body>
</html>

