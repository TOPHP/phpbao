<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/5/10
 * Time: 17:00
 */
namespace Api\Model;

use Think\Model;

class PictureModel extends Model{
    public function getPictureById($id){
        return $this->where('id',$id)->select();
    }
}