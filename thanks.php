<?php

require_once('functions.php');
// var_dump($_POST);
//入力された内容を取得
$username = $_POST['username'];
// echo $username;
// echo '<br>';

$email = $_POST['email'];
// echo $email;
// echo '<br>';


$content = $_POST['content'];
// echo $content;
// echo '<br>';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>お問い合わせありがとうございました</h1>
<p>お名前：<?php echo h($username); ?></p>
<p>メールアドレス：<?php echo h($email); ?></p>
<p>お問い合わせ内容：<?= h($content); ?></p>
    
</body>
</html>