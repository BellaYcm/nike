<?php
/**
 * Created by PhpStorm.
 * User: sunke_sk
 * Date: 2015/3/4
 * Time: 16:24
 */
class HomeController extends BaseController
{

    public function home()
    {

        $article=User::first();
        var_dump($article);
        require dirname(__FILE__).'/../views/home.php';
    }
}