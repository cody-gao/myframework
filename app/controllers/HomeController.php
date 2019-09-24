<?php
/**
 * Created by PhpStorm.
 * User: didi
 * Date: 2019/9/18
 * Time: 下午4:19
 */

class HomeController extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {

        //Using The Eloquent ORM
       //$data = (array) Courses::all();
       $data = Courses::find(2);
        var_dump($data->name);
    }

    /**
     * request url:http://localhost:8081/index/demo
     */
    public function demo()
    {
        echo 'this is demo method';
    }
}