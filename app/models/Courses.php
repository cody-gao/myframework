<?php

/**
 * Created by PhpStorm.
 * User: didi
 * Date: 2019/9/23
 * Time: 下午5:18
 * Using The Eloquent ORM
 */
class Courses extends Illuminate\Database\Eloquent\Model
{
    public $primaryKey = 'num';
    public $table = 'courses';
}