<?php

namespace Api\Controller;

use Think\Controller;

/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/5/9
 * Time: 19:56
 */
class BaseController extends Controller
{
    public function _initialize()
    {

    }

    public function show($data, $total = 10, $pages = 10)
    {

        if ($data) {
            $json = array(
                "total" => '',
                "max_page" => '',
                "list" => $data
            );
            echo json_encode(array(
                "status"=>'1',
                "message"=>'success',
                "data"=> $json

            ));
        }

    }
}
