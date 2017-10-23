<?php
/**
 * Created by PhpStorm.
 * User: CRR
 * Date: 2017/10/18
 * Time: 15:10
 */
namespace app\account\controller;

use think\Controller;

class Login extends Controller
{
    public function index()
    {
        return $this->fetch('/index');
    }
}