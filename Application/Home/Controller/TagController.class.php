<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-9-25
 * Time: 下午7:35
 */
namespace Home\Controller;

use Think\Controller;

class TagController extends Controller
{
    public function  tag()
    {
        $connection = array(
            'db_type' => 'mysql',
            'db_user' => 'root',
            'db_pwd' => '',
            'db_host' => 'localhost',
            'db_port' => '3306',
            'db_name' => 'ui',
            'db_charset' => 'utf8',);
        $tag = M('meiui_tag', '', $connection);
        $data = $tag->where('id=3')->find();
        var_dump($data);

        //1.写入数据
        //$data['id'] = '12';
        $data['create_user'] = 'ly';
        $data['create_time'] = time();
        // $tag->add($data); z//直接加入数据
        $list = $tag->create($data); //在内存中，数据不加入
        var_dump($list);
        // add($data='',$options=array(),$replace=false)
        //$tag->add();//先内存后加入
        $list = $tag->field('create_user,create_time')->create($data); //只允许这2个字段
        var_dump($list);
        $sql = $tag->fetchSql(true)->add($data);
        echo $sql; //显示为INSERT INTO `meiui_tag` (`id`,`tag_name`,`……) VALUES ('12','validate','……)
        // 批量添加数据
        $dataList[] = array('id' => '15', 'create_user' => 'joy');
        $dataList[] = array('id' => '20', 'create_user' => 'stv');
        // $tag->addAll($dataList);

        //2.查找数据
        $data = $tag->where('tag_type=2')->find(); //读取初始的一条数据
        var_dump($data);
        $list = $tag->where('tag_type=2')->order('create_time')->limit(3)->select(); //返回10条数据
        // var_dump($list);

        $list = $tag->getField('id', true); // 获取id数组
        // var_dump($list);
        //$tag->getField('id,create_user',5); // 限制返回5条记录
        $list = $tag->getField('id', 3); // 获取id数组 限制3条记录
        var_dump($list);
        $list = $tag->getField('id,tag_type');
//两个字段的情况下返回的是array(`id`=>`tag_type`)的关联数组，以id的值为key，nickname字段值为value
        //  var_dump($list);

        $list = $tag->getField('id,tag_type,create_user');
//返回的数组格式是array(`id`=>array(`id`=>value,`tag_type`=>value,`create_user`=>value))是一个二维数组，key还是id字段的值，
        //  但value是整行的array数组，类似于select()方法的结果遍历将id的值设为数组key

        $list = $tag->getField('id,tag_type,create_user', ':');
        // 那么返回的结果就是一个数组，键名是用户id，键值是 tag_type,create_user的输出字符串。

        //3.数据的修改//必须包含主键信息
        $data['id'] = 5; //主键
        $data['create_user'] = '8';
        $data['tag_type'] = '6';
        $tag->where('id=5')->save($data); // 根据条件更新记录

        // $tag->where('id=5')->field('create_user')->filter('strip_tags')->save($data); // 根据条件保存修改的数据

//当使用field('create_user')的时候，只允许更新create_user字段的值（采用strip_tags方法过滤），tag_type字段的值将不会被修改。

        $tag->where('id=1')->setField('tag_type', '5'); //更新字段
        // 详情更多


        //4.删除数据
        $tag->where('id=2')->delete(); // 删除id为2的用户数据
        $tag->delete('1,2,5'); // 删除主键为1,2和5的用户数据
        // 删除所有状态为0的5 个用户数据 按照创建时间排序
        $tag->where('id=0')->order('create_time')->limit('5')->delete();

    }

}