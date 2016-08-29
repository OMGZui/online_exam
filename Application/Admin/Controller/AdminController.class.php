<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/8
 * Time: 13:21
 */
namespace Admin\Controller;

use Admin\Model\AdminModel;
use Think\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $this->display();

    }

    public function verify()
    {
        $config = array(
            'fontSize' => 14, // 验证码字体大小
            'length' => 4, // 验证码位数
            'useNoise' => false, // 关闭验证码杂点
            'imageW' => 120,
            'imageH' => 30,
            'useCurve' => false
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }

    public function login_do()
    {
        $user['username'] = I('username');
        $password = md5(I('password'));
        $code = I('code');
        $state = I('t1');
        $data['ip'] = get_client_ip();
        $data['time'] = time();
        $admin = D('Admin');
        $rs = $admin->get_admin($user);
        $id['id'] = $rs[0]['id'];
        $aa = new AdminModel();
        if ($aa->check_verify($code) == false) {
            $this->error('验证码错误');
        }
        if ($rs[0]['state'] != $state) {
            $this->error('选择身份错误');
        }
        if ($rs[0]['password'] == $password) {
            session('admin_id', $id['id']);
            session('admin_username', $user['username']);
            $res = $admin->update_admin($id, $data);
            if ($res) {
                $this->success('登陆成功', U("Grade/index"));
            }
        } else {
            $this->error('用户名或密码错误');
        }
    }

    public function change_password()
    {
        $db = D('Admin');
        $data['id'] = session('admin_id');
        $rs = $db->get_find($data);
        //dump($rs);
        $username = $rs['username'];
        $this->assign('username',$username);
        $this->assign('admin',$rs);
        $this->display();
    }

    public function change_password_do(){
        $db = D('Admin');
        $data['id'] =session('admin_id');
        $res = $db->get_find($data);
        $old_password = md5(I('old_password'));
        if($res['password'] != $old_password){
            $this->error('你输入的原始密码不正确');
        }
        $new_password = md5(I('new_password'));
        $new_password_re = md5(I('new_password_re'));
        if($new_password != $new_password_re){
            $this->error('两次密码输入不同');
        }
        $password['password'] = $new_password_re;
        $rs = $db->update_admin($data,$password);
        if($rs){
            $this->success('密码修改成功');
        }else{
            $this->error('密码修改失败');
        }
    }
    public function test()
    {
        $this->display();
    }
}