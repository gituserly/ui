<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-9-17
 * Time: 下午5:42
 */
namespace Home\Model;
use Think\Model;
class BkModel extends Model
{
    protected  $tablename='bk';
 //   protected $dbName = 'xiaoshuo';
    protected $fields = array('id', 'username', 'email', 'age',
        '_type'=>array('id'=>'int','username'=>'varchar','email'=>'varchar','age'=>'int')
    );

}