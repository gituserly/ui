<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-9-17
 * Time: 下午5:48
 */
namespace Home\Controller;
use Think\Controller;
class  BkController extends Controller{
    public function bk()
    {
       $bk= M('Bk');
       // $data=$bk->find();
        $data=$bk->find();
      //  $data=$bk->where('id=3')->find();
   // dump($data) ;

        $bk->where('id=1 AND title="mudi"')->find();
       // dump($bk->data());

     // $list = $bk->where('author= "ly" ')->order ('create_time')->limit(10)->select();
        $name = $bk->where('id=2')->getField('author');
        dump($name);
       $idlie = $bk->getField('id',true); // 获取id数组
//返回数据格式如array(1,2,3,4,5)一维数组，其中value就是id列的每行的值
      // dump($idlie);
        $list = $bk->getField('id,author');
//两个字段的情况下返回的是array(`id`=>`nickname`)的关联数组，以id的值为key，nickname字段值为value
    //   dump($list);
        $list= $bk->getField('id,author',3);
      //  dump($list);
        $list = $bk->getField('id,title,author',':');
      //  dump($list);



        // 要修改的数据对象属性赋值
        $data['id'] = '8';
        $data['title'] = 'mm';
        $data['author'] = 'Think';
    $bk->where('id=8')->save($data); // 根据条件更新记录
      $list=$bk->where('id=8')->find();
        dump($list);
    }

}
