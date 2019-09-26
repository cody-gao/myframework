<?php

use DI\Container;

/**
 * Created by PhpStorm.
 * User: didi
 * Date: 2019/9/18
 * Time: 下午5:07
 */

class BaseController
{
    public $app;
    public $request;
    public function __construct(Container $app)
    {
        $this->app = $app;

        $this->request = $this->app->get('request');    //Request object
        $this->app->get('Courses'); //ORM object
    }
}