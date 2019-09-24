<?php
/**
 * Created by PhpStorm.
 * User: codygao
 * Date: 2019/9/18
 * Time: 下午3:19
 */

use \NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'HomeController@index');
Macaw::get('/index.php', 'HomeController@index');
Macaw::get('/index/demo', 'HomeController@demo');

Macaw::error(function() {
    echo '404 :: Not Found';
});

//路由分发
Macaw::dispatch();