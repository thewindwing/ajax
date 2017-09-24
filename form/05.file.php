<?php
    header('Content-Type:text/html;charset=utf-8');

    var_dump($_POST);

    /*$_POST $_GET 获取字符串类型*/
    /*$_FILES 获取文件类型数据的*/

    var_dump($_FILES);

    /*
    array
        'headIcon' =>
          array
            'name' => string 'icon_cart.png' (length=13)
            'type' => string 'image/png' (length=9)
            'tmp_name' => string 'C:\wamp\tmp\phpD1A.tmp' (length=22)
            'error' => int 0
            'size' => int 3009
    */
    /*模拟打印的数据*/
    /*二维数组*/
    $files = array(
        'headIcon' => array(
            /*文件名称*/
            'name' => 'icon_cart.png',
            /*文件类型*/
            'type' => 'image/png',
            /*文件的临时存放地址*/
            /*在上传完成的一刻保存下来，临时文件自动删除*/
            'tmp_name' => 'C:\wamp\tmp\phpD1A.tmp',
            /*错误代码*/
            'error' => 0,
            /*文件大小 B */
            'size' => 3009
        )
    );

    var_dump($files);

    /*保存*/
    /*1.目标文件的地址*/
    /*2.存放的地址*/
    /*
    $_FILES['headIcon']['name']
    绝对路径
    */
    move_uploaded_file($_FILES['headIcon']['tmp_name'],'05.file.png');
?>