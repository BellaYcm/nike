<?php
/**
 * Created by PhpStorm.
 * User: sunke_sk
 * Date: 2015/3/4
 * Time: 12:00
 */
// 定义 PUBLIC_PATH /opt/www/minisites/nike/public
//var_dump(__DIR__);

define('PUBLIC_PATH', __DIR__);

// 启动器

require PUBLIC_PATH.'/../bootstrap.php';

// 路由配置、开始处理

require BASE_PATH.'/config/routes.php';