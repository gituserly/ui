<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-9-16
 * Time: 下午10:23
 */
namespace Home\Controller;
use Think\Controller;
class AuthorController extends Controller {
  protected $connection = array(
        'db_type'  => 'mysql',
        'db_user'  => 'root',
        'db_pwd'   => '',
        'db_host'  => 'localhost',
        'db_port'  => '3306',
        'db_name'  => 'xiaoshuo',
        'db_charset' =>    'utf8',
    );
    public $user_sex = 'man';
    public function book()
    {

       // $author = M("Author",'','DB_NEW');
      //$author = M("Author",'',$this->connection); // 实例化User对象
       $author = new \Home\Model\AuthorModel('Author','',$this->connection);
// 查找status值为1name值为think的用户数据
        $data = $author->where('sex="1"')->find();
        dump($data);
        dump($this->user_sex);
        $user_name = $this->getName();
        var_dump($user_name);
    }

    public function getName(){
        return 'monkey';
    }
}









