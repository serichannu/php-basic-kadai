<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        function sort_2way($order, $array) {
            $nums = [15, 4, 18, 23, 10];
            
            if($order) {
                echo '昇順にソートします。<br>';
                sort($nums, $array);
            } else {
                echo '降順にソートします。<br>';
                rsort($nums, $array);
                }
            foreach ($nums as $num) {
                echo $num . '<br>';
            }
        }
        echo sort_2way(true, true);
        echo sort_2way(false, true);
        ?>
    </p>
</body>
</html>
