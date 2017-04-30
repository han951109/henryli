<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $result = ['aaa'=>['aaa'=>123],'b'=>2];
        $this->assign('result',$result);
        $this->display();
    }
}