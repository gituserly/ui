<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-9-22
 * Time: 下午12:18
 */

namespace Home\Controller;
use Think\Controller;
class HomepageController extends  Controller{
   public function  get_pic_list(){

//echo phpinfo();

       $redis = new \Redis();
       echo 1;
      // die();
       $redis->connect('127.0.0.1', 6379);
      // $redis->auth('*****');

       $plan_id = '1';

       $uid = '6';


       $uids_z = $redis->ZREVRANGE("plan:$plan_id:liked", 0, -1, TRUE); //倒序取值
       var_dump($uids_z);
//die();
       $uids_d = $redis->ZRANGE("plan:$plan_id:liked", 0, -1, TRUE); //顺序取值
       var_dump($uids_d);

       $redis->ZREM("plan:$plan_id:liked", $uid);

       $uids_z = $redis->ZREVRANGE("plan:$plan_id:liked", 0, -1, TRUE); //倒序取值
       var_dump($uids_z);





   }





}