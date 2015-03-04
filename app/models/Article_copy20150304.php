<?php
/**
 * Created by PhpStorm.
 * User: sunke_sk
 * Date: 2015/3/4
 * Time: 16:30
 */

class Article
{
    public static function first()
    {
        $connection = mysql_connect("localhost","root","");
        var_dump($connection);
        if (!$connection) {
            die('Could not connect: ' . mysql_error());
        }

        mysql_set_charset("UTF8", $connection);

        mysql_select_db("minisite_361", $connection);

        $result = mysql_query("SELECT * FROM user ");

        if ($row = mysql_fetch_array($result)) {
            return $row;
        }


        mysql_close($connection);
    }
}