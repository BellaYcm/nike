<?php

/**
 * Created by PhpStorm.
 * User: sunke_sk
 * Date: 2015/3/4
 * Time: 16:24
 */
class MailController extends BaseController
{

    public function home()
    {

        $this->mail = Mail::to(array('494159770@qq.com', 'sunke@hupu.com'))
            ->from('Jordan <sunkejl@sina.com>')
            ->title('hello!')
            ->content('<h1>Hello~~</h1>');

    }

    /**
     * @throws Exception
     * @throws \Nette\Mail\SmtpException
     */
    public function __destruct()
    {
        var_dump($this->mail);
        $mail = $this->mail;
        if ($mail instanceof Mail) {
            try {
                $mailer = new Nette\Mail\SmtpMailer($mail->config);
                $mailer->send($mail);
                $code = 200;
                $message = "success";
                $data = compact("code", "message");
            } catch (Exception $e) {
                $code = $e->getCode();
                $message = $e->getMessage();
                $data = compact("code", "message");
            }
            return $data;
        }
    }
}