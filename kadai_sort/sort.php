<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP kadai_sort</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order)
        {
            if ($order == TRUE) {
                echo '昇順にソートします。<br>';
                sort($array);
                foreach ($array as $num) {
                    echo $num . '<br>';
                }
            } else {
                echo '降順にソートします。<br>';
                rsort($array);
                foreach ($array as $num) {
                    echo $num . '<br>';
                }
            }
        }

        // ソートする配列を宣言
        $nums = array(15, 4, 18, 23, 10);

        // 関数を呼び出す
        echo sort_2way($nums, TRUE);
        echo sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>