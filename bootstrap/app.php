<?php
use DI\ContainerBuilder;
use FastRoute\RouteCollector;
use Illuminate\Database\Capsule\Manager as Capsule;
use Symfony\Component\HttpFoundation\Request;

//创建容器
$builder = new ContainerBuilder();
//$builder->addDefinitions($configFile);
$app = $builder->build();

//注入request
$app->set('request',function(){
    return Request::createFromGlobals();
});

//注入db
$app->set('Courses',function(){
    /**
     * models启动配置
     */
    $capsule = new Capsule();
    $dbConfig = require BASE_PATH . "/config/database.php";
    $capsule->addConnection($dbConfig);
    $capsule->setAsGlobal(); //让 capsule 能在全局使用
    $capsule->bootEloquent(); // Setup the Eloquent ORM.
    return $capsule;
});

//替换为新路由组件nikic/fast-route
$dispatcher = FastRoute\simpleDispatcher(function(RouteCollector $r){
    $r->addRoute('GET', '/', ['HomeController','index']);
    $r->addRoute('GET', '/index/demo', ['HomeController','demo']);
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$route = $dispatcher->dispatch($httpMethod,$uri);
switch ($route[0]){
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '404 Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo '405 Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        // We could do $container->get($controller) but $container->call()
        // does that automatically
        $controller = $route[1];    // 这里是数组 [controller,action]
        $parameters = $route[2];    // 这里是request，后面可以替换为request对象
        $app->call($controller,$parameters);    //使用容器
}

//使用Macaw组件做路由分发 被替换掉了！
//require BASE_PATH."/config/routes.php";