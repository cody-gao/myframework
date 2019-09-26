<?php
/**
 * Created by PhpStorm.
 * User: codygao
 * Date: 2019/9/18
 * Time: 下午3:16
 */

//自动加载composer下的组件
use FastRoute\RouteCollector;
use Symfony\Component\HttpFoundation\Request;

require "../vendor/autoload.php";

/**
 * 初始化目录配置都放到这里
 */
define('BASE_PATH',dirname(__DIR__)); //项目基础目录，即项目根目录
define('APP_PATH',BASE_PATH.'/app'); //app目录

//加载启动配置
require BASE_PATH."/bootstrap/app.php";