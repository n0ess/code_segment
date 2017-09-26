<?php
namespace app\index\controller;
use think\Controller;
class Index extends Base
{

	public function __construct()
	{
		$this->checkuser();
	}



    public function index()
    {
		return view("\index\index");
    }
}
