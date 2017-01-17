<?php
    // header("Content-type: text/html; charset=utf-8");
    session_start();

    $table = array(
        'pic0' => '虎',
        'pic1' => '鼠',
        'pic2' => '牛',
        'pic3' => '兔',
        'pic4' => '龙',
        'pic5' => '蛇',
        'pic6' => '马',
        'pic7' => '羊',
        'pic8' => '猴',
        'pic9' => '狗',
        'pic10' => '猪',
    );

    $index = rand(0, 10);
    $value = $table['pic'.$index];
    $_SESSION['authcode'] = $value;

    $filename = dirname(__FILE__).'/images/pic'.$index.'.jpg';
    $contents = file_get_contents($filename);

    header('content-type: image/jpg');

    echo $contents;
?>
