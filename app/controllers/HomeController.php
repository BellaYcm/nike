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
        //throw new Exception("aa","123");#异常触发whoops
//        $article=User::find(1);
//        var_dump($article->username);
//        var_dump($article);
//        require dirname(__FILE__).'/../views/home.php';
        RedisNike::set('key','value',5,'s');

        echo RedisNike::get('key');

        $this->view = View::make('home')->with('user',User::first())

            ->withTitle('MFFC :-D')

            ->withFuckMe('OK!');

        $this->mail = Mail::to(array('494159770@qq.com', 'sunke@hupu.com'))

            ->from('Jordan <sunkejl@sina.com>')

            ->title('hello!')

            ->content('<h1>Hello~~</h1>');


    }
}