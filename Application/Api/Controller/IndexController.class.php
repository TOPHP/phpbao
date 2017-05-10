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

    public function index($id = 1, $page = 10)
    {
        $shops = D('Shop')->findByPage(10);
        foreach ($shops as $shop) {
            $pic = get_cover($shop["cover_id"]);
            $data = array(
                "id" => $shop['id'],
                'sid' => '',
                'title' => $shop['meta_title'],
                'thumb' => 'http://192.168.1.93/' . $pic['path'],
                'yunjiage' => 1,
                'zongrenshu' => 100,
                'canyurenshu' => 50,
                'qishu' => '',
                'default_renci' => '',
                'is_ten' => $shop['ten'],
            );
            $datas[] = $data;

        }

        $this->show($datas);
    }

}