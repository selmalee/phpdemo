<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        header("Content-type: text/html; charset=utf-8");
        if (isset($_POST['authcode'])) {
            session_start();
            if (strtolower($_POST['authcode']) == $_SESSION['authcode']) {
                echo '<h4 style="color:#0000CC">输入正确</h4>';
            } else {
                echo '<h4 style="color:#CC0000">输入错误</h4>';
            }
            exit();
        }
    ?>
</head>
<body>
    
</body>
</html>