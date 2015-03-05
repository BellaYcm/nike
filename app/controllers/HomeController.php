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
        //throw new Exception("aa","123");
//        $article=User::find(1);
//        var_dump($article->username);
//        var_dump($article);
//        require dirname(__FILE__).'/../views/home.php';
        $this->view = View::make('home')->with('user',User::first())

            ->withTitle('MFFC :-D')

            ->withFuckMe('OK!');
    }
}