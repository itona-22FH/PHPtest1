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
            <select name="player">
                <option value="グー">グー</option>
                <option value="チョキ">チョキ</option>
                <option value="パー">パー</option>
            </select>
            <br>
            <input type="submit" value="じゃんけん！" name="submit">
        </form>
        <?php
        $comArray = ["グー", "チョキ", "パー"];

        if (isset($_POST["submit"])) {
            $player = $_POST['player'];
            $key = array_rand($comArray);
            $com = $comArray[$key];
            if ($player === "グー") {
                switch ($com) {
                    case "チョキ":
                    $result = "あなたの勝利です！";
                    break;
                    case "グー":
                    $result = "あいこ";
                    break;
                    case "パー":
                    $result = "あなたの敗北です。。。";
                    break;
                }
            } elseif ($player === "チョキ") {
                switch ($com) {
                    case "パー":
                    $result = "あなたの勝利です！";
                    break;
                    case "チョキ":
                    $result = "あいこ";
                    break;
                    case "グー":
                    $result = "あなたの敗北です。。。";
                    break;
                }
            } elseif ($player === "パー") {
                switch ($com) {
                    case "グー":
                    $result = "あなたの勝利です！";
                    break;
                    case "パー":
                    $result = "あいこ";
                    break;
                    case "チョキ":
                    $result = "あなたの敗北です。。。";
                    break;
                }
            }
            echo "自分: $player";
            echo "<br>";
            echo "相手: $com";
            echo "<br>";
            echo $result;
            }
        ?>
    </body>
</html>