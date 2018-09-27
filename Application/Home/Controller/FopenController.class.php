<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-9-23
 * Time: 上午8:45
 */
namespace Home\Controller;
use Think\Controller;
class FopenController extends  Controller{
    public function getTagItem(){
        echo 'ss';
        $tag_id = intval($_GET['tag_id']);
        if($tag_id){
            // 后续 操作
            $tag_item = 'mysql data';
            if($tag_item){
                // 后续 操作 返回 json
            } else {
                LogTool::write_log('mysql 没有 这个 标签 ');
            }
        } else {
            LogTool::write_log('缺少 tag_id ');
        }
    }


    public  function  fopen()
    {
     // 写一个TXT 文件  内容 为      hello  ： " i am 'monkey' "；
        //  客户端 提供  了 一个post  字段  叫user_id ； 清打印出对应的值
        $g = $_GET;
        $p = $_POST;
        var_dump($g);
        var_dump($p);
        $user_id=$g['user_id'];
        var_dump($user_id);
$user_name=$_POST['user_name'];
var_dump($user_name);
       /*
        $root = $_SERVER['DOCUMENT_ROOT'];
        $myfile = fopen("$root/open.txt",'w');
        $file2=' hello ;"' . 'i am' ."'monkey'" . '"' . ':';
        fwrite($myfile,$file2);
        fclose($myfile);
        echo 'success';die();
     */
        // 25   meiui_25

        // 33  meiui_33
        $document_root=$_SERVER['DOCUMENT_ROOT'];
        var_dump($document_root);
        $mui='meiui' .$user_id .'.txt';
        $myfile=fopen("$document_root/$mui",'w');
        fwrite($myfile,'fopen and fwrite');
        fclose($myfile);

    }


    public function damon(){
        $html_code = '
        <html>
<head>
<meta charset="utf-8">
<title>post learn </title>
</head>
<body>

<form action="/Home/Fopen/fopen?user_id=22&user_name=monkey" method="post">
名字: <input type="text" name="fname">
年龄: <input type="text" name="age">
<input type="submit" value="提交">
</form>

</body>
</html>

        ';
        echo $html_code;
    }
}