<?php
namespace app\home\controller;

use app\common\controller\Common;
use think\Controller;
use think\Loader;
use think\Request;
use think\Url;
use think\Session;
use think\Config;

class Index extends Common
{
    public function index()
    {
    	$list = model("Code")->getCodeList();
		return view();
    }

    public function upCode()
    {
    	return view();
    }

    public function runCode()
    {
    	$re['status'] = -1;
    	if (Request::instance()->isPost() && Request::instance()->isAjax()){
    		$re = model("Code")->runCode();
    	}
    	return json($re);
    }

}