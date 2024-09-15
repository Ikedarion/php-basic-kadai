<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <?php
        function sort_2way($array,$order)
        {

            if ($order === true ) {
                sort($array);
            }else{
                rsort($array);
            }
            foreach ($array as $v) {
                echo $v . '<br>';
            }
        }

    $nums = [15, 4, 18, 23, 10];

    echo "昇順にソートします。<br>";
    echo sort_2way($nums,true);

    echo "降順にソートします。<br>";
    echo sort_2way($nums,false);

    ?>
</body>

</html>