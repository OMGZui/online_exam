<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/15
 * Time: 16:30
 */

namespace Home\Controller;

use Think\Controller;

class OnlineController extends MyController
{
    public function index()
    {
        $this->info();
        $db = M('Subject');
        $rs = $db->select();
        $this->assign('list', $rs);
        $this->display();
    }

    public function protocol()
    {
        $this->info();
        $name = I('name');
        $id = I('id');
        session('subject_name', $name);
        session('subject_id', $id);
        $this->display();
    }

    public function online()
    {
        $this->info();
        $subject_name = session('subject_name');
        $subject_id = session('subject_id');
        $db = M('Objective_item');
        $db2 = M('Subjective_item');
        $arr = array('A', 'B', 'C');
        $num = mt_rand(0, 2);
        $paper_type = $arr[$num];
        $rs = $db->where("paper_type='$paper_type' and subject_id='$subject_id'")->order('paper_type,title_type asc')->select();
        //单选
        $rs1 = $db->where("paper_type='$paper_type' and subject_id='$subject_id' and title_type=1")->order('id asc')->select();
        //多选
        $rs2 = $db->where("paper_type='$paper_type' and subject_id='$subject_id' and title_type=2")->order('id asc')->select();
        //判断
        $rs3 = $db->where("paper_type='$paper_type' and subject_id='$subject_id' and title_type=3")->order('id asc')->select();
        //填空
        $rs4 = $db->where("paper_type='$paper_type' and subject_id='$subject_id' and title_type=4")->order('id asc')->select();

        $rs5 = $db2->where("paper_type='$paper_type' and subject_id='$subject_id' and title_type=5")->order('id asc')->select();

        $this->assign('paper', $rs);
        $this->assign('paper1', $rs1);
        $this->assign('paper2', $rs2);
        $this->assign('paper3', $rs3);
        $this->assign('paper4', $rs4);
        $this->assign('paper5', $rs5);
        $this->assign('paper_type', $paper_type);
        $this->assign('subject', $subject_name);
        $this->display();
    }

    public function item()
    {
        $db = M('Objective_item');
        $id = session('subject_id');
        $rs = $db->where("subject_id = '$id' and paper_type= 'A'")->order('title_type,id asc')->getField('answer', true);
        //dump($rs);
        $grade1 = 0;
        $grade2 = 0;
        $grade3 = 0;
        $grade4 = 0;
        for ($i = 1; $i <= 10; $i++) {
            $radio = I("radio$i");
            if (!empty($radio)) {
                if ($radio == $rs[$i - 1]) {
                    $index = 2;
                    $grade1 = $grade1 + $index;
                } else {
                    $index = 0;
                    $grade1 = $grade1 + $index;
                }
            }
        }
        //echo $grade1 . "<br/>";//单选题得分

        for ($i = 11; $i <= 15; $i++) {
            $checkbox = I("checkbox$i");
            if (!empty($checkbox)) {
                $checkbox = implode("", $checkbox);
                if ($checkbox == $rs[$i - 1]) {
                    $index = 4;
                    $grade2 = $grade2 + $index;
                } else {
                    $index = 0;
                    $grade2 = $grade2 + $index;
                }
            }
        }
        //echo $grade2 . "<br/>";//多选题得分

        for ($i = 16; $i <= 20; $i++) {
            $judge = I("judge$i");
            if (!empty($judge)) {
                if ($judge == $rs[$i - 1]) {
                    $index = 2;
                    $grade3 = $grade3 + $index;
                } else {
                    $index = 0;
                    $grade3 = $grade3 + $index;
                }
            }
        }
        //echo $grade3 . "<br/>";//判断题得分

        for ($i = 21; $i <= 25; $i++) {
            $text = I("text$i");
            if (!empty($text)) {
                if ($text == $rs[$i - 1]) {
                    $index = 4;
                    $grade4 = $grade4 + $index;
                } else {
                    $index = 0;
                    $grade4 = $grade4 + $index;
                }
            }
        }
        //echo $grade4 . "<br/>";//填空题得分

        $object_grade = $grade1 + $grade2 + $grade3 + $grade4;
        //echo $object_grade;//客观题总分

        $db = M('Subjective_item');
        $db2 = M('Grade');
        $content['content'] = htmlspecialchars_decode(trim(I("content26")));
        $content['username'] = session('username');
        $content['name'] = session('name');
        $subject_id = session('subject_id');
        $paper_type = I('paper_type');
        $rs1 = $db->where(" subject_id='$subject_id' and paper_type='$paper_type'")->save($content);
        if ($rs1 == "") {
            $this->error('内容写入失败');
        }

        $data['subject_id'] = session('subject_id');
        $subject_id = session('subject_id');
        $data['username'] = session('username');
        $username = session('username');
        $data['name'] = session('name');
        $data['object_grade'] = $object_grade;
        $rs3 = $db2->where("username= '$username' and subject_id='$subject_id' ")->save($data);
        //dump($rs3);
        if ($rs3 == "") {
            $rs2 = $db2->add($data);
            if ($rs2 == "") {
                $this->error('内容写入失败');
            }else {
                $this->success('成功', U('Online/grade'));
            }
        } else {
            $this->success('成功', U('Online/grade'));
        }
    }

    public function grade()
    {
        $db = M('Grade');
        $data['username'] = session('username');
        $data['subject_id'] = session('subject_id');
        $data['name'] = session('name');
        $rs = $db->where($data)->select();
        $this->assign('list', $rs);
        $this->display();
    }
}