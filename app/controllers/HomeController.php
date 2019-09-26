<?php

use DI\Container;

/**
 * Created by PhpStorm.
 * User: didi
 * Date: 2019/9/18
 * Time: 下午4:19
 */

class HomeController extends BaseController
{
    public function index()
{

    //Using The Eloquent ORM
    $data = Courses::find(2);
    var_dump($data->name);
}

    /**
     * request url:http://localhost:8081/index/demo?user=2
     */
    public function demo()
    {
        echo 'this is demo method';
        $user = $this->request->get('user');
        var_dump($user);
    }
}