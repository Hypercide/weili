<?php 
namespace app\admin\Controller;
use think\Db;
use think\Controller;
use think\facade\Session;
/**
* Homepage主页
*/
class Homepage extends Controller
{
	protected function initialize()
    {
        if (!Session::has('name')) {
        	$this->redirect('/admin/login');
    		echo "aaaa";
    	}
    }

	public function index()
	{
		$this->assign('logname',Session::get('name'));
		return $this->fetch();
	}

	public function console()
	{
		return $this->fetch();
	}
}
 ?>