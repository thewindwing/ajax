<?php 
    header('Content-Type:text/html;charset=utf-8');

    $arr = array(
        'name'=>$_POST['name']
    );

    echo json_encode($arr);
?>