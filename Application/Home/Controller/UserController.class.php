<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-9-27
 * Time: 下午10:56
 */
namespace Home\Controller;
use Think\Controller;
class UserController extends  Controller{
    //1. 增加一个用户信息 6个字段，返回客户端永福信息带id 和日志
    public function insertUserItem(){
        if(true){
            // 正确 返回 用户信息 带ID
        } else {
            // 错误 返回 错误code 记录 日志
        }
    }
    //
    //2.修改一个用户信息，可以修用户的名字、号码、email
    public function  updateUserItem(){

        
    }
    //3.获取一个用户的信息
    //4.删除一个用户记录
}