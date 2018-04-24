<?php
/**
 * 
 * @Author: Sky Cheung<sky_zhang@live.com>
 * Date: 18/4/23
 * @Copyright (C) Hoyoyo Inc. All rights reserved
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');


class Index extends CI_Controller{

    protected $output = null;

    public function __construct()
    {
        $this->output = new CI_Output();
    }

    public function index()
    {

        $data = ['code' => -1, 'error' => 'error'];
        $this->json($data);
        //$this->output->set_content_type('application/json')->set_output(json_encode($data))->_display();
        //exit;
    }


    public function banner(){
        $data['banner'] = array(
            array('link'=>'http://www.nvsupplychain.com/?1','src'=>'http://www.xiaobaiupin.com/upload/img/banner/7f9479a142c57c8d568fdfc97b303980_b.jpg'),
            array('link'=>'http://www.nvsupplychain.com/?2','src'=>'http://www.xiaobaiupin.com/upload/img/banner/8bdfc4942c4b4124da72f72c8c27316e_b.jpg'),
            array('link'=>'http://www.nvsupplychain.com/?3','src'=>'http://www.xiaobaiupin.com/upload/img/banner/798cb80e0b89b2e42dc8841002d75234_b.jpg'),
        );

        $data['icon'] = array(
            array('link'=>'http://www.nvsupplychain.com/?1','src'=>'http://www.xiaobaiupin.com/upload/img/banner/bb2a1f3403a9e95c87ebfdc0f9e55ccd_b.png','title'=>'安卓'),
            array('link'=>'http://www.nvsupplychain.com/?2','src'=>'http://www.xiaobaiupin.com/upload/img/banner/3b15bbea736be7cf80185257c7f0300b_b.png','title'=>'苹果'),
            array('link'=>'http://www.nvsupplychain.com/?3','src'=>'http://www.xiaobaiupin.com/upload/img/banner/80d40b90e7617ae4b69f0c71a115ae5f_b.png','title'=>'笔记本'),
            array('link'=>'http://www.nvsupplychain.com/?4','src'=>'http://www.xiaobaiupin.com/upload/img/banner/26044a121c305d87bbaaa9d377d27ee1_b.png','title'=>'配件')
        );

        $this->json($data);
    }


    public function menu(){
        $data = array(
            array('link'=>'http://www.nvsupplychain.com/?1','src'=>'http://www.xiaobaiupin.com/upload/img/banner/bb2a1f3403a9e95c87ebfdc0f9e55ccd_b.png','title'=>'安卓'),
            array('link'=>'http://www.nvsupplychain.com/?2','src'=>'http://www.xiaobaiupin.com/upload/img/banner/3b15bbea736be7cf80185257c7f0300b_b.png','title'=>'苹果'),
            array('link'=>'http://www.nvsupplychain.com/?3','src'=>'http://www.xiaobaiupin.com/upload/img/banner/80d40b90e7617ae4b69f0c71a115ae5f_b.png','title'=>'笔记本'),
            array('link'=>'http://www.nvsupplychain.com/?4','src'=>'http://www.xiaobaiupin.com/upload/img/banner/26044a121c305d87bbaaa9d377d27ee1_b.png','title'=>'配件')
        );

        $this->json($data);
    }


    public  function json($data) {
        return $this->output->set_content_type('application/json')->set_output(json_encode($data))->_display();
    }
}