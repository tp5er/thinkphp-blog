<?php


namespace app\common\controller;


class AdminBase extends Base
{
    public function _initialize()
    {
        $a = db('admin')->where('adminhead', session('adminhead'))->find();
        $pas = md5($a['password']);
        if ($pas != session('password') || !session('kouling') || !session('adminname') || !session('adminhead')) {
            $this->error('请登录', url('login/index'));
        }
    }

}