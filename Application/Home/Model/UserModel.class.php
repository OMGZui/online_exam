<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/7
 * Time: 20:48
 */
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
    public function get_list($map){
        $list = $this->where($map)->select();
        return $list;
    }
    public function user_find($map){
        $list = $this->where($map)->find();
        return $list;
    }
    public function add_user($map){
        $rs = $this->add($map);
        return $rs;
    }
    public function update_user($map,$data){
        $rs = $this->where($map)->save($data);
        return $rs;
    }

    // 检测输入的验证码是否正确，$code为用户输入的验证码字符串
    function check_verify($code, $id = ''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }
}