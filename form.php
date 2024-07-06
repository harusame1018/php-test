<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>送信ありがとうございます！</h1>
</body>
</html>
<?php
$to = "ryuuyaryu@gmail.com";
$name = $_POST["simei"];
$from = "From:".$_POST["mail"];
$subject = $_POST["text"];
mail($to, $name, $subject, $from);
?>