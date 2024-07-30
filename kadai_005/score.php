<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題005</title>
</head>

<body>
    <p>
        <?php
        $score = array(80, 60, 55, 40, 100, 25, 80, 95, 30, 60);
        // すべての変数の取得
        list($score1, $score2, $score3, $score4, $score5, $score6, $score7, $score8, $score9, $score10) = $score;
        // 合計点
        $sum = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
        // 平均点
        $average = $sum / 10;

        // 出力
        echo '合計点は' . $sum . 'です。';

        echo '<br>';

        echo '平均点は' . $average . 'です。';
        ?>
    </p>
</body>

</html>