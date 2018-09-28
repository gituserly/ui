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

        $username=$_GET['username'];
        $nickname=$_GET['nickname'];
        $user_pic=$_GET['user_pic'];
        $phone=$_GET['phone'];
        $password=$_GET['password'];
        $email=$_GET['email'];

        if($nickname){
            $meiui_user=M('meiui_user');
           $datalist[]=array('username'=>$username,'nickname'=>$nickname,'user_pic'=>$user_pic,
                        'phone'=>$phone,'password'=>$password,'email'=>$email);


            $id= $meiui_user->addAll($datalist);
           $list= $meiui_user->where("id=$id")->find();

                $this->outData($list);
        }
            else{
                  $this->outData('',-1,'缺少对应标签');
                LogTool::write_log('缺少对应标签');
                }
        }





    //2.修改一个用户信息，可以修用户的名字、号码、email
    public  function updateUserItem(){
        $id = $_GET['id'];
        $nickname = $_GET['nickname'];
        $phone = $_GET['phone'];
        $email = $_GET['email'];
     if($id){
        $meiui_user=M('meiui_user');
        $data['id'] = $id;
        $data['nickname'] = $nickname;
        $data['phone'] = $phone;
        $data['email'] = $email;
        $meiui_user->where("id=$id")->save($data);
        $list=$meiui_user->where("id=$id")->find();
        if($list){
            $this->outData($list);
        }
        else{
            $this->outData('',-11,'没得id的参数');
               LogTool::write_log('没有id的参数'); }

        }
      else{
            $this->outData('',-12,'缺少id');
            LogTool::write_log('缺少id');
        }
    }




    //3.获取一个用户的信息
    public  function getUserItem(){
        $id=$_GET['id'];
        if($id){
            $meiui_user=M('meiui_user');
            $list=$meiui_user->where("id=$id")->find();
            if($list){
                $this->outData($list);
            }
            else{
                $this->outData('',-21,'没有id的参数');
                LogTool::write_log('没有id的参数');
            }
        }
        else{
            $this->outData('',-22,'缺少id');
            LogTool::write_log('缺少id');
        }
    }

    //4.删除一个用户记录
    public  function  dropUserItem(){
        $id=$_GET['id'];
        if($id){
            $meiui_user=M('meiui_user');
            $list=$meiui_user->where("id=$id")->delete();
            if($list){
                $this->outData($list);
            }
            else{
                $this->outData('',-31,'没有id的参数');
                LogTool::write_log('没有id的参数');
            }
        }
        else{
            $this->outData('',-32,'缺少id');
            LogTool::write_log('缺少id');
        }
    }

    public static  function outData($content, $error_code = 200, $msg = 'success' ){
        $out_data = array(
            'error_code' => $error_code,
            'msg' =>$msg,
            'data' => $content,
        );
        echo json_encode($out_data);


}
}

