<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends MyController
{
    public function index()
    {
        $this->header_info();
        $db = M('Subject');
        $rs = $db->select();
        $this->assign('list',$rs);
        $this->display();

    }

    public function paper(){
        $this->header_info();
        $subject = I('name');
        $id = I('id');
        $this->assign('subject',$subject);
        $db = M('Objective_item');
        $count = $db->where("subject_id='$id'")->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count, 10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $db
            ->where("subject_id='$id'")
            ->order('paper_type,title_type asc')
            ->limit($Page->firstRow . ',' . $Page->listRows)
            ->select();
        $this->assign('list', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        //dump($rs);
        $this->display();
    }
    public function edit_paper(){
        $this->header_info();
        $db = M('Objective_item');
        $id = I('id');
        $rs = $db->where("id='$id'")->select();
        $this->assign('list',$rs);
        $this->display();
    }
    public function edit_paper_do(){
        $id = I('id');
        $data['s_title'] = I('s_title');
        if(I('title_type') == '单选题'){
            $data['title_type'] = 1;
        }
        if(I('title_type') == '多选题'){
            $data['title_type'] = 2;
        }
        if(I('title_type') == '判断题'){
            $data['title_type'] = 3;
        }
        if(I('title_type') == '填空题'){
            $data['title_type'] = 4;
        }
        $data['options'] = I('options');
        $data['answer'] = I('answer');
        $data['paper_type'] = I('paper_type');
        $db = M('Objective_item');
        $rs = $db->where("id='$id'")->save($data);
        if($rs){
            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }
    }
    public function delete_paper(){
        $id = I('id');
        $db = M('Objective_item');
        $rs = $db->where("id='$id'")->delete();
        if($rs){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    public function add_paper(){
        $this->header_info();

        $this->display();
    }
    public function add_paper_do(){
        $this->header_info();
        $data['s_title'] = I('s_title');
        $data['options'] = I('options');
        $data['answer'] = I('answer');
        $data['title_type'] = I('title_type');
        $data['subject_id'] = I('subject_id');
        if(I('paper_type') == 1){
            $data['paper_type'] = 'A';
        }
        if(I('paper_type') == 2){
            $data['paper_type'] = 'B';
        }
        if(I('paper_type') == 3){
            $data['paper_type'] = 'C';
        }
        if(I('title_type') ==5){
            $db2 = M('Subjective_item');
            $rs =$db2->add($data);
        }else{
            $db =M('Objective_item');
            $rs = $db->add($data);
        }
        if($rs){
            $this->success('添加成功');
        }else{
            $this->error('添加失败');
        }


    }
    public function paper_list(){
        $this->header_info();
        $db = M('User');
        $rs = $db->select();
        $this->assign('list',$rs);
        $this->display();
    }
    public function subject_list(){
        $this->header_info();
        $db = M('subject');
        $username['username'] = I('username');
        session('s_username',$username['username']);//考生学号
        $rs = $db->select();
        $this->assign('list',$rs);
        $this->display();
    }
    public function correct_paper(){
        $this->header_info();
        $data['subject_id'] = I('id');
        session('s_subject_id',$data['subject_id']);//科目id
        $data['username'] =session('s_username');
        $db = M('Subjective_item');
        $rs = $db->where($data)->find();
        $this->assign('list',$rs);
        $this->display();
    }
    public function correct_do(){
        if(I('content1') ==""){
            $this->error('如果分数为0请输入0，不能为空');
        }else{
            $content1 = I('content1');
        }
        $data['subject_grade'] = $content1;
        $db = M('grade');
        $dd['username'] = session('s_username');
        $dd['subject_id']= session('s_subject_id');
        $rs1 = $db->where($dd)->find();
        if($rs1){
            $data['grade'] = $data['subject_grade']+$rs1['object_grade'];
        }else{
            $this->error('没有这条数据');
        }
        $rs = $db->where($dd)->save($data);
        if($rs){
            $this->success('批改成功');
        }else{
            $this->error('批改失败');
        }

    }
    public function logout(){
        session('s_username',null);
        session('s_subject_id',null);
        session('admin_username',null);
        session('admin_id',null);
        $this->success('退出成功',U('Admin/index'));
    }


}