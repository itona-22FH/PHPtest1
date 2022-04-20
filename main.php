<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $question["問題"] = "日本の首都は？";
            $answer["回答1"] = "大阪";
            $answer["回答2"] = "北海道";
            $answer["回答3"] = "箱根";
            $answer["回答4"] = "東京";

            foreach ($question as $questionKey => $questionValue) {
                echo $questionKey . " " . $questionValue;
            }

            echo "<br>";

            foreach ($answer as $answerKey => $answerValue) {
                echo "<br>" . $answerKey . " " . $answerValue;
            }
        ?>
    </body>
</html>