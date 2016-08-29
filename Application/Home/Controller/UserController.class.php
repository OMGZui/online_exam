<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/7
 * Time: 20:45
 */
namespace Home\Controller;

use Home\Model\UserModel;
use Think\Controller;

class UserController extends MyController
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

    public function reg_do()
    {
        $data['username'] = I('username');
        $data['password'] = md5(I('password'));
        $data['password_re'] = md5(I('password_re'));
        if (I('sex') == '男') {
            $data['sex'] = 0;
        }
        if (I('sex') == '女') {
            $data['sex'] = 1;
        }
        $data['name'] = I('name');
        $data['age'] = I('age');
        $data['major'] = I('major');
        $data['class'] = I('class');
        //$data['time'] = date("Y-m-d H:i:s");
        $data['time'] = time();
        $data['ip'] = get_client_ip();
        $user = D('User');
        $rs = $user->add_user($data);
        if ($rs) {
            $this->success('注册成功');
        } else {
            $this->error('注册失败');
        }
    }

    public function login_do()
    {
        $username = I('username');
        $password = md5(I('password'));
        $user['username'] = $username;
        $db = D('User');
        $rs = $db->get_list($user);
        $id['id'] = $rs[0]['id'];
        $code = I('code');
        $aa = new UserModel();

        $data['ip'] = get_client_ip();
        $data['time'] = time();

        if ($aa->check_verify($code) == false) {
            $this->error('验证码错误');
        }
        if ($rs[0]['password'] == $password) {
            session('id', $id['id']);
            session('username', $username);
            session('name', $rs[0]['name']);
            $res = $db->update_user($id, $data);
            if ($res) {
                $this->success('登陆成功', U("Index/index"));
            }
        } else {
            $this->error('用户名或密码错误');
        }
    }
    public function change_password(){
        $this->info();
        $this->display();
    }
    public function change_password_do(){
        $db = D('User');
        $data['id'] =session('id');
        $res = $db->user_find($data);
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
        $rs = $db->update_user($data,$password);
        if($rs){
            $this->success('密码修改成功',U('User/index'));
        }else{
            $this->error('密码修改失败');
        }
    }
}