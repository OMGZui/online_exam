<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/13
 * Time: 13:40
 */
namespace Admin\Controller;

use Think\Controller;
class MyController extends Controller{
    public function header_info(){
        if (session('admin_username')) {
            $db = D('Admin');
            $data['id'] = session('admin_id');
            $rs = $db->get_find($data);
            if($rs){
                $this->assign('admin',$rs);
                $this->assign('username', $rs['username']);
            }else{
                $this->error('非法登陆',U('Admin/index'));
            }
        } else {
            $this->error('非法登陆',U('Admin/index'));
        }
    }

}