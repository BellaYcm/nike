<?php
/**
 * Created by PhpStorm.
 * User: sunke_sk
 * Date: 2015/3/4
 * Time: 12:02
 */

    use NoahBuscher\Macaw\Macaw;
//    Macaw::get('/f', function() {
//    echo 'Hello world!';
//    });

    Macaw::get('/', 'HomeController@home');

    Macaw::get('/fuck', function () {
    echo "成功！";
    });
    Macaw::$error_callback = function() {

    throw new Exception("路由无匹配项 404 Not Found");

    };

//    Macaw::get('(:all)', function ($fu) {
//    echo '未匹配到路由<br>' . $fu;
//    });


    Macaw::dispatch();