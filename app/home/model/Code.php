<?php
namespace app\home\model;

use app\common\model\Common;
use think\Db;
use think\Config;
use think\Model;


class Code extends Common
{
    public function getCodeList()
    {
    
    }

    public function runCode()
    {
        $re['status'] = -2;
        $data['title'] = input("title");
        $data['remark'] = input("remark");
        $data['language'] = input("language");
        $data['code'] = input("code");
        $data['time'] = time();
        $id = (int)input("id");
        if(empty($data['title'])){$re['status'] = -3;}
        if(empty($data['language'])){$re['status'] = -4;}
        if(empty($data['code'])){$re['status'] = -5;}
        if(!empty($id)){
            $find = model("code")->where(['id'=>$id,'isFlag'=>1])->find();
            if(!empty($find)){
                $rs = model("code")->where(['id'=>$id,'isFlag'=>1])->update($data);
            }
        }else{
            $rs = model('code')->insert($data);
        }
        if(!empty($rs)){
            $re['status'] = 1;
        }
        return $re;
    }
}
