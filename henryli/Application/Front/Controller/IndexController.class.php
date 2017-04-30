<?php
namespace Front\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $user = D('User');

        $result =$user->select();
        $this->assign('result',$result);
        $this->display();
    }
}