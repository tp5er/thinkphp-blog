<?php


namespace app\common\controller;


class IndexBase extends Base
{
    public function __construct(){
        parent::__construct();
        $tptop = db('navtop')->where("tid = 0")->order('sort ASC')->select();
        $tptops = db('navtop')->where("tid != 0")->order('sort ASC')->select();
        $tptuser = db('member')->where('validate', session('validate'))->find();
        $this->assign(array('tptop' => $tptop, 'tptops' => $tptops, 'tptuser' => $tptuser));
    }

}