<?php
/**
 * Created by PhpStorm.
 * User: codygao
 * Date: 2019/9/18
 * Time: 下午3:16
 */

//自动加载composer下的组件
require "../vendor/autoload.php";

//加载启动配置
require "../bootstrap.php";

//url路由分发
require BASE_PATH."/config/routes.php";
