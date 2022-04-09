

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>日本の首都は？</h1>
    <form action="main.php" method="post">
    <input type="text" name="inputCapital">
    <input type="submit" value="OK" name="submit">
    </form>
    <?php 

$jpCapital = '東京';

if(isset($_POST['submit'])) {

   $inputCapital = $_POST['inputCapital'];

    if($inputCapital === $jpCapital) {
        echo '正解';
    } else {
        echo '不正解';
    }
}
    ?>
</body>
</html>