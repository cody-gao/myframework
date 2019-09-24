<?php
/**
 * Created by PhpStorm.
 * User: didi
 * Date: 2019/9/24
 * Time: 上午10:49
 *
 * 启动文件，放到项目根目录，定义BASE_PATH根目录为当前文件所在目录。
 */
use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * 初始化目录配置都放到这里
 */
define('BASE_PATH',__DIR__); //项目基础目录，即项目根目录
define('APP_PATH',BASE_PATH.'/app'); //app目录

/**
 * models启动配置
 */
$capsule = new Capsule();
$capsule->addConnection(require BASE_PATH."/config/database.php");
$capsule->setAsGlobal(); //让 capsule 能在全局使用
$capsule->bootEloquent(); // Setup the Eloquent ORM.