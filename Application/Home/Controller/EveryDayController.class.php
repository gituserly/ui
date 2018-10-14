<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-10-14
 * Time: 上午11:08
 */

namespace Home\Controller;
use Think\Controller;
class EveryDayController extends Controller{

    public function getLaGouData(){
        header("Content-type:text/html;charset=utf-8");
        $array_data = array(
            'header' => array(
                'user_name' => '廖耘',
                'user_edu' => '西南科技大学 / 本科 / 应届毕业生',
                'user_phone'=>'18308462575',
                'user_age' => '23',
                'user_email'=>'1291829902@qq.com',
            ),
            'to introduce myself' => array(
                'user_tag' => array('个人能力','执行力','抗压能力','适应能力','责任心'),
                'self description'=>'路子野，就是莽，自学能力强。不怕碰到问题，善于解决问题提高自己',
            ),
            'education experience'=>array(
               'content'=> '西南科技大学/本科 /动物科学','time'=>'2014-2018',
            ),
            'work experience'=>array(
                'the internship units'=>'麻乌科技/后端开发－实习',
                'self description'=>'学校学长推荐，一起开发app,开发美UIapp，后端接口功能',
                'time'=>'2017.11-2018-4',
            ),
            'experience in project'=>array('name'=>'美ui','content'=>'使用wamp开发接口,用简化的thinkPHP框架开发,
            使用git 进行版本,开发首页推荐列表功能（redis sort list 处理）,
            开发标签的正常增删改查,处理日志分文件存储','time'=>'2017.12-2018.4',
            'social home page'=>''
            ),
        );


        $json_data = json_encode($array_data);
        var_dump($json_data);
      //  $this->outdata();
    }



















































}