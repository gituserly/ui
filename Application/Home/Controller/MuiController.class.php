<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-9-25
 * Time: 上午10:08
 */
namespace Home\Controller;
use Think\Controller;
class MuiController extends  Controller{
    public function mui(){
       echo 'ly';

        $user_id=$_GET['user_id'];
        var_dump($user_id);
        $connection = array(
            'db_type'  => 'mysql',
            'db_user'  => 'root',
            'db_pwd'   => '',
            'db_host'  => 'localhost',
            'db_port'  => '3306',
            'db_name'  => 'ui',
            'db_charset' =>    'utf8',);
        $meiui_user=M('meiui_user','',$connection);
        $data = $meiui_user->where('id="3"')->find();



        $datas = $meiui_user->where("id=$user_id")->find();
       // var_dump($datas);
        if( $datas)
        {
            echo 'success';
        }
       else
       {
        echo 'shibai';
           $document_root=$_SERVER['DOCUMENT_ROOT'];
           //var_dump($document_root);
           $myfile=fopen("$document_root/user_id",'w');
           fwrite($myfile,"user_id=$user_id");
           fclose($myfile);
       }



    }
}