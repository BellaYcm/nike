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

    }

    public function __destruct()

    {

        $view = $this->view;

        if ( $view instanceof View ) {
            var_dump($view->data);
            extract($view->data);

            require $view->view;

        }
        var_dump($this->mail);
        $mail = $this->mail;

        if ( $mail instanceof Mail ) {

            $mailer = new Nette\Mail\SmtpMailer($mail->config);

            $mailer->send($mail);

        }

    }

}