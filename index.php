<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>form(?)</title>
        <script>
            window.onload = function() {
                const body = document.body;
                let a = document.createElement("p");
                a.innerText = "hello javascript";
                body.appendChild(a);
            }
        </script>
    </head>
    <body>
        <h1>へっぉをｒｌｄ</h1>
        <form method="post" action="form.php">
            <h1>お名前</h1>
            <input type="text" name="simei" size="30">
            <h1>メールアドレス</h1>
            <input type="text" name="mail" size="30">
            <input type="submit" size="30">
        </form>
    </body>
</html>
<?php
echo "<h1>HELLO</h1>";
#$name = "jack";
?>