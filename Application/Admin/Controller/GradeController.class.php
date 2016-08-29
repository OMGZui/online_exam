<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/12
 * Time: 16:18
 */
namespace Admin\Controller;

use Think\Controller;
class GradeController extends MyController{
    public function index(){
        $this->header_info();
        $db = M('Grade');
        $data['username'] = session('admin_username');
        $rs = $db->select();
        $rs1 = $db->where($data)->select();
        $db2 = M('Admin');
        $rs2 = $db2->where($data)->find();
        $this->assign('list',$rs);
        $this->assign('list1',$rs1);
        $this->assign('rs2',$rs2);
        $this->display();
    }
    public function search(){
        $this->header_info();
        if(I('username') != ""){
            $data['username'] = I('username');
        }
        if(I('grade1') != "" ){
            $grade1 = I('grade1');
            $grade2 = I('grade2');
            //$data['grade'] = I('grade1');
            $data['grade'] = array(array('egt',$grade1),array('elt',$grade2),'and') ;
        }
        if(I('name') != "") {
            $data['name'] = array('like', '%' . I('name') . '%');
        }

        $data['_logic'] = 'or';
        $db = M('Grade');
        $list = $db->where($data)->select();
        //dump($db->getLastSql());
        //dump($list);
        $this->assign('list',$list);
        $this->display();
    }
}
