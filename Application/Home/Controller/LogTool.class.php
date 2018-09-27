<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-9-25
 * Time: 下午9:57
 */
namespace Home\Controller;
use Think\Controller;
class LogTool extends  Controller{
    public static function write_log($content){
        $user_id = intval($_GET['user_id']);
        $pre_log = $user_id % 100;
        // 100    165
        // 65   1/100   65_error_log

        // 1-100000
        // 100000- 200000

        //blue (2 66 88 )
        //red (33  55  80)
        $document_root=$_SERVER['DOCUMENT_ROOT'] . '/log';
        $myfile=fopen("$document_root/$pre_log" . "_error_log",'a');
        fwrite($myfile, $content);
        fclose($myfile);
    }
}