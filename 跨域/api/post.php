<?php 
    header('Content-Type:text/html;charset=utf-8');
    /*允许跨域请求访问*/
    /*cors在移动终端支持的不错，可以考虑在移动端全面尝试*/
    /*PC上有不兼容和没有完美支持，所以小心踩坑*/
    /*jsonp是get形式，承载的信息量有限，所以信息量较大时CORS是不二选择*/
    header('Access-Control-Allow-Origin:http://www.study.com');

    header('Access-Control-Allow-Origin:*');

    $arr = array(
        'name'=>$_POST['name']
    );

    echo json_encode($arr);
?>