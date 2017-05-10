<?php
namespace Api\Model;
use Think\Model;

/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/5/9
 * Time: 20:39
 */
class ShopModel extends Model{
    public  function getInfo($id,$page=10){
        $field = array(
            'id','content'
        );
        if ($id){
            $data =  $this->field($field)->where('id',$id)->page($page)->select();
        }else{
            $data =  $this->field($field)->page($page)->select();
        }
       return $data;
    }
    public function getShopById($id){
        if ($id){
            $data = $this->where('id',$id)->find();
        }else{
            return '';
        }
    }
    public function findByPage($page){
        return $this->page($page)->select();
    }
}