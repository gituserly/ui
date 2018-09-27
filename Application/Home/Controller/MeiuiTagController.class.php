<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-9-26
 * Time: 下午4:46
 */
namespace Home\Controller;
use Home\Model\TagModel;
use Think\Controller;
class MeiuiTagController extends  Controller{
    public function getTagItem(){
        $tag_id = intval($_GET['tag_id']);
        if($tag_id){
            $meiui_tag = M('MeiuiTag','','DB_NEWS');
            $data = $meiui_tag->where("id=$tag_id")->find();
            $tag_item = $data;
            if($tag_item){
                $msg = 'ok';
                $this->outData($tag_item);
                // 后续 操作 返回 json
            } else {
                $this->outData('',-100,'mysql 没有 这个 标签 ');
                LogTool::write_log('mysql 没有 这个 标签 ');
            }
        } else {
            $this->outData('', -200, '缺少 tag_id');
            LogTool::write_log('缺少 tag_id ');
        }
    }

    public function insertTagItem(){
        // 客户端给你meiui—tag的一些参数，吧这些参数存入mysql tag_name
        $create_user=$_GET['create_user'];
        $tag_name = $_GET['tag_name'];
        if($create_user){
            $meiui_tag = M('MeiuiTag');
            $data['create_user'] = $create_user;
            $data['tag_name'] = $tag_name;
            $data['create_time'] =  time();
            $data['id'] =  115;
            $result = $meiui_tag->add($data);
            $data['id'] = $result;
            if($result){
                $this->outData($data);
            }
        }else{
            $this->outData('',-2,'缺少create_user参数');
            LogTool::write_log('缺少create_user参数');
        }


    }

    public function updateTagItem(){
        //客户端给你一些tag的数据，根据id更新其他的字段数据
        $tag_id = $_GET['tag_id'];
        $create_user = $_GET['create_user'];
        $tag_name  =  $_GET['tag_name'];
        if($tag_id){
            $meiui_tag = M('MeiuiTag');
            $data['id'] = $tag_id;
            $data['create_user'] = $create_user;
            $data['tag_name'] = $tag_name;
            $meiui_tag->where("id=$tag_id")->save($data);
            $list = $meiui_tag->where("id=$tag_id")->find();
            if($list){
                $this->outData($list);
            } else {
                $this->outData('',-11,'mysql不存在这个id');
                LogTool::write_log('mysql不存在这个id');
            }
        } else {
                $this->outData('',-12,'缺少id数据');
                LogTool::write_log('缺少id数据');
            }
        }

    public static function outData($content, $error_code = 200, $msg = 'success' ){
        $out_data = array(
            'error_code' => $error_code,
            'msg' =>$msg,
            'data' => $content,
        );
        echo json_encode($out_data);
        die();
















    }

}