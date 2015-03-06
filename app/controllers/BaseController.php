<?php
/**
 * Created by PhpStorm.
 * User: sunke_sk
 * Date: 2015/3/4
 * Time: 16:23
 */
class BaseController

{

    protected $view;



    public function __construct()

    {
        $this->_redis();
    }

    /**
     *
     */
    private function _redis() {
        try{
        $redis = new Redis();
        $redis->connect("127.0.0.1","6379");
        $this->redis = $redis;
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }


    /**
     *
     */
    public function __destruct()

    {

        $view = $this->view;

        if ( $view instanceof View ) {
            var_dump($view->data);
            extract($view->data);

            require $view->view;

        }


    }

}