<?php
/*
任意に欠落させたアルファベット配列から欠けているアルファベットを探すゲーム
本プログラムは初級者向けに極力関数などを使用せずに組み立てています。
関数を加えることで難易度を調整できます。(表示順をランダム、大文字小文字を分けるなど)
アクセス順の制御は加えていません。
*/

//alphabetsを設定
$alphabets = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
//正解番号をけって
$answer_index = rand(0, count($alphabets)-1);
$answer = $alphabets[$answer_index];
//出題用配列を生成
$question = array();
for($i = 0; $i < count($alphabets); $i++){
    if($i != $answer_index){
        $question[] = $alphabets[$i];
    }
}
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
    <h2>出題</h2>
    <p>下記のアルファベットから欠けている文字を探してください。</p>
    <?php
    foreach($question as $value){
        echo $value;
    }
    ?>
    <h2>解答</h2>
    <form action="./answer.php" method="post">
        <select name="answer">
            <?php
                foreach($alphabets as $value){
                    echo "<option value=".$value.">".$value."</option>";
                }
            ?>
        </select>
        <input type="hidden" name="correct_answer" value="<?php echo $answer ?>">
        <button type="submit">送信</button>
    </form>
</body>
</html>