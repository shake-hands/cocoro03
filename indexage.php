<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>年齢チェック</title>
</head>
<body>
    <h1>PHP 年齢チェック</h1>
    <p>
        <?php
            $age = 30;

            if ($age < 18) {
                echo "未成年です。";
            } else {
                echo "成人です。";
            }
        ?>
    </p>
</body>
</html>

