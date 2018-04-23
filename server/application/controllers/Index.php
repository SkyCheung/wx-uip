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
        $data = array(
            array('link'=>'http://www.nvsupplychain.com/?1','src'=>'http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg'),
            array('link'=>'http://www.nvsupplychain.com/?2','src'=>'http://img06.tooopen.com/images/20160818/tooopen_sy_175866434296.jpg'),
            array('link'=>'http://www.nvsupplychain.com/?3','src'=>'http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg'),
            array('link'=>'http://www.nvsupplychain.com/?4','src'=>'http://img06.tooopen.com/images/20160818/tooopen_sy_175866434296.jpg')
        );

        $this->json($data);
    }


    public function menu(){
        $data = array(
            array('link'=>'http://www.nvsupplychain.com/?1','src'=>'http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg'),
            array('link'=>'http://www.nvsupplychain.com/?2','src'=>'http://img06.tooopen.com/images/20160818/tooopen_sy_175866434296.jpg'),
            array('link'=>'http://www.nvsupplychain.com/?3','src'=>'http://img02.tooopen.com/images/20150928/tooopen_sy_143912755726.jpg'),
            array('link'=>'http://www.nvsupplychain.com/?4','src'=>'http://img06.tooopen.com/images/20160818/tooopen_sy_175866434296.jpg')
        );

        $this->json($data);
    }


    public  function json($data) {
        return $this->output->set_content_type('application/json')->set_output(json_encode($data))->_display();
    }
}