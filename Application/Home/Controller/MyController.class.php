<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/15
 * Time: 15:45
 */
namespace Home\Controller;
use Think\Controller;
class MyController extends Controller{
    public function info(){
        if(session('username')){

        }else{
            $this->error('非法登陆',U('User/index'));
        }
    }
}