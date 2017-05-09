<?php

namespace Api\Controller;

use Api\Controller\BaseController;


/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/5/9
 * Time: 19:55
 */
class IndexController extends BaseController
{

    public function index($id=1,$page=10){

        $data = D('Shop')->getInfo( $id,$page);
        echo json_encode($data);
    }

}