<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends MyController {
    public function index(){
        $this->info();
        $db = D('User');
        $data['id'] = session('id');
        $rs = $db->user_find($data);
        $title = '主页面';
        if($rs['sex'] == 0){
            $sex = '男';
        }else{
            $sex = '女';
        }
        $this->assign('list',$rs);
        $this->assign('title',$title);
        $this->assign('sex',$sex);
        $this->display();
    }

    public function logout(){
        session('id',null);
        session('username',null);
        session('subject_id',null);
        session('name',null);
        $this->success('退出成功',U('User/index'));
    }
}