<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/7
 * Time: 20:48
 */
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
    public function get_user($map){
        $rs = $this->where($map)->select();
        return $rs;
    }
    public function get_find($map){
        $rs = $this->where($map)->find();
        return $rs;
    }
    public function update_user($map,$data){
        $rs = $this->where($map)->save($data);
        return $rs;
    }
    public function delete_user($map){
        $rs = $this->where($map)->delete();
        return $rs;
    }
}