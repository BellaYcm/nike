<?php
/**
 * Created by PhpStorm.
 * User: sunke_sk
 * Date: 2015/3/4
 * Time: 16:24
 */
class RedisController extends BaseController
{

    public function home()
    {
        RedisNike::set('key','value',5,'s');
        echo RedisNike::get('key');
        //hash//map//array
        $this->redis->hSet('HASHkey','key1','hello2');
        var_dump($this->redis->hGet('HASH','key1'));
        //list列表
        $this->redis->rPush('LISTkey','hello');
        var_dump($this->redis->lRange('list',0,-1));
        //SET集合//向名称为key的set中添加元素value,如果value存在，不写入，return false
        $this->redis->sADD('SETkey',"value1");
        $this->redis->sADD('SETkey',"value2");
        $this->redis->sRemove("SETkey","value1");
        //名称为key的集合中查找是否有value元素，有ture 没有 false
        var_dump($this->redis->sContains('SETkey','value1'));
        var_dump($this->redis->sContains('SETkey','value3'));
        var_dump($this->redis->sSize('SETkey'));


        //事务
        $this->redis->watch("key");
        $this->redis->multi();
        $this->redis->set("key","value");
        $this->redis->exec();
        var_dump($this->redis->get("key"));
        $this->redis->expireAt("list" , time() + 36000);


    }
}
