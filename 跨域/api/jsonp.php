<?php 
    header('Content-Type:text/css;charset=utf-8');

    $name = 'xgg';

    $user = array(
        'name'=>$_GET['name'],
        'age'=>17
    );

    $json = json_encode($user);

    $callback = $_GET['callback'];

    echo $callback.'('.$json.')';

?>