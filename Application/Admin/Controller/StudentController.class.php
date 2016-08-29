<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/13
 * Time: 10:56
 */
namespace Admin\Controller;

use Think\Controller;

class StudentController extends MyController
{
    public function index()
    {
        $this->header_info();

        $User = M('User'); // 实例化User对象
        $count = $User->where('id')->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, 5);// 实例化分页类 传入总记录数和每页显示的记录数(5)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->where('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    public function edit_student(){
        $this->header_info();

        $data['id'] = I('id');
        $db = D('User');
        $rs = $db->get_find($data);
        $this->assign('list',$rs);
        $this->display();
    }
    public function edit_student_do(){
        $this->header_info();

        $id['id'] = I('id');
        //$data['id']  = I('id');
        $data['username'] = I('username');
        $data['name'] = I('name');
        $data['age'] = I('age');
        if(I('sex') == '男'){
            $data['sex'] = 0;
        }else{
            $data['sex'] = 1;
        }
        $data['major'] = I('major');
        $data['class'] = I('class');

        $db = D('User');
        $rs = $db->update_user($id,$data);
        if($rs){
            $this->success('提交成功');
        }else{
            $this->error('提交失败');
        }
    }
    public function delete_student(){
        $this->header_info();

        $db = D('User');
        $id['id'] = I('id');
        $rs = $db->delete_user($id);
        if($rs){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    public function search(){
        $this->header_info();
        if(I('username') != ""){
            $data['username'] = I('username');
        }
        if(I('name') != "") {
            $data['name'] = array('like', '%' . I('name') . '%');
        }
        $data['_logic'] = 'or';
        $db = M('User');
        $list = $db->where($data)->select();
        $this->assign('list',$list);
        $this->display();
    }
}