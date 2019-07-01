<?php 
namespace app\admin\Controller;
use think\Db;
use think\Controller;
use app\admin\model\Admin;
use think\facade\Session;
/**
* Login登录界面
*/
class Login extends Controller
{
	public function index()
	{
		return $this->fetch();
	}

	public function logincheck()
	{
		$datas = $this->request->post();
		$datas['password'] = md5($datas['password']);
		$admin = Admin::where('name',$datas["name"])
				->where('password',$datas["password"])
				->find();
		if ($admin == NULL) {
			$arr["digit"] = 1;
		}else{
			$admin->lastlogintime = time();
			$admin->save();
			Session::set('name',$datas['name']);
			Session::set('level',$admin->level);
			$arr["digit"] = 2;
		}
		echo json_encode($arr);

		// $datas = $this->request->post();
		// $digit = Db::name('admin')->where('name',$datas["name"])->where('password',$datas["password"])->find();
		// if ($digit == NULL) {
		// 	$arr["digit"] = 1;
		// }else{
		// 	$arr["digit"] = 2;
		// }
		// echo json_encode($arr);
	}

	public function logout()
	{
		Session::delete('name');
		Session::clear();
    	$this->redirect('/admin/login');
	}
}
 ?>