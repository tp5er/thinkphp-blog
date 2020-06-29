<?php
namespace app\admin\controller;

use app\common\controller\AdminBase;

class Index extends AdminBase
{
    public function index()
    {
        $tptadmin = db('admin')->where('adminhead', session('adminhead'))->find();
		$this->assign('tptadmin', $tptadmin);
		return tptc();
    }
    public function home()
    {
       return view();
    }
    function update()
    {
        array_map('unlink', glob(TEMP_PATH . '/*.php'));
        rmdir(TEMP_PATH);
        return tpta('清理缓存成功');
    }
}