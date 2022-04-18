<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="inputFruit">
            <input type="submit" value="検索" name="submit">
        </form>
        <?php
            $fruits = ['apple', 'orange', 'strawberry'];
            if(isset($_POST["submit"])) {
                $inputFruit = $_POST["inputFruit"];
                if(in_array($inputFruit, $fruits)) {
                    echo "$inputFruit は、配列fruitsの中に存在します。";
                } else {
                    echo "$inputFruit は、配列fruitsの中に存在していません。";
                }
            }
        ?>
    </body>
</html>