<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-9-16
 * Time: 下午10:13
 */
namespace Home\Controller;
use Think\Controller;
class BookController extends Controller {
    public function book()
    {
        $book = M("Book",'','DB_NEW'); // 实例化User对象
// 查找status值为1name值为think的用户数据
      //  $data['id'] = '8';
        $data['name'] = 'ThinkPHP';
        $data['email'] = 'ThinkPHP@gmail.com';
       $list= $book->create($data);
        dump($data);//关联数组
        dump($list);//空
    }
}