<?php
    header('Content-Type:text/html;charset=utf-8');
    $message=array('你叫什么名字','吃饭了吗','睡觉觉','你嘛呢？');
    echo $message[array_rand($message)];
    sleep(1);
?>