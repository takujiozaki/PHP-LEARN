<?php

//get form value
$answer = $_POST['answer'];
$correct_answer = $_POST['correct_answer']

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Alphabets</title>
</head>
<body>
    <h1>Find Alphabets</h1>
    <h2>解答</h2>
    <?php
        if($answer == $correct_answer){
            echo "<p>正解！</p>";
        }else{
            echo "<p>不正解！ あなたの解答".$answer." 正解は".$correct_answer."でした</p>";
        }
    ?>
    <p><a href="./">もう一回！</a>
</body>
</html>