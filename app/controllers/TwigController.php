<?php
/**
 * Created by PhpStorm.
 * User: sunke_sk
 * Date: 2015/3/4
 * Time: 16:24
 */
use Twig\Twig;
class TwigController extends BaseController
{

    public function home()
    {

        //require_once '../vendor/autoload.php';exit;
       // require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem('views/');
        $twig = new Twig_Environment($loader);
//        echo $twig->render('index.html', array('the' => 'variables', 'go' => 'here'));
        $template = $twig->loadTemplate('index.twig');
        $template->display(array('test' => 'example','go'=>'here'));
        $a=array('a'=>123456,'b'=>234);
        $template->display(array('a'=>$a));





    }
}