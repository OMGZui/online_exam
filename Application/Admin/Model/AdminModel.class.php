<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/9
 * Time: 15:42
 */
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model{
    public function get_admin($map){
        $rs = $this->where($map)->select();
        return $rs;
    }
    public function get_find($map){
        $rs = $this->where($map)->find();
        return $rs;
    }
    public function update_admin($map,$data){
        $rs = $this->where($map)->save($data);
        return $rs;
    }
    // 检测输入的验证码是否正确，$code为用户输入的验证码字符串
    function check_verify($code, $id = ''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }

}