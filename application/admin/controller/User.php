<?php 
namespace app\admin\Controller;
use think\Db;
use think\Controller;
use app\admin\model\Admin;
use think\facade\Session;
/**
* User控制器
*/
class User extends Controller
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
		return $this->fetch();			//装载视图
	}

	public function getuserlist()
	{
		$count = Admin::count();
		$page_num = isset($_GET['limit'])?$_GET['limit']:10;	//接收limit，每页显示多少条数据
		$pages = ceil($count/$page_num);				  		//总页数，向上取整
		$page = isset($_GET['page'])?$_GET['page']:1;			//当前页数
		$startpos = ($page - 1)*$page_num;

		$result = Admin::order('id desc')
				->limit($startpos,$page_num)
				->select();

		$data = array(
			"code" => 0,
			"msg" => "",
			"count" => $count,
			"data" => $result
		);
		echo json_encode($data);
	}
	
	public function adduser()
	{
		return $this->fetch();
	}

	public function checkname()
	{
		$name = $this->request->post();		//接收来自前端的POST请求

		$admin = Admin::where('name',$name['name'])->find();		//查询

		if ($admin == NULL) {
			$arr['digit'] = 1;
		}else{
			$arr['digit'] = 2;
		}

		// dump($arr);
		echo json_encode($arr);		//向前端ajax返回一个json格式的数组，触发回调函数
	}

	public function saveuser()
	{
		$datas = $this->request->post();
		if ($datas == NULL) {
			$arr['digit'] = 1;
			echo json_encode($arr);
		}else{
			$admin = new Admin;
			$datas['password'] = md5($datas['password']);		//md5加密
			if ($admin->save($datas) == NULL) {
				$arr['digit'] = 1;
			}else{
				$arr["digit"] = 2;
			}
			echo json_encode($arr);
		}
	}
	
	public function deleteuser($id)
	{
		if (Session::get('level') == 1) {
			$deluser = Admin::where('id',$id)->delete();
		}else{
			echo "没有操作权限";
		}
	}

	public function editpwd()
	{
		return $this->fetch();
	}

	public function checkoldpwd()
	{
		$oldpwd = $this->request->post();		//接收来自前端的POST请求

		$oldpwd['oldpwd'] = md5($oldpwd['oldpwd']);

		$admin = Admin::where('name',Session::get('name'))
				->where('password',$oldpwd['oldpwd'])
				->find();		//查询

		if ($admin == NULL) {
			$arr['digit'] = 1;
		}else{
			$arr['digit'] = 2;
		}

		// dump($arr);
		echo json_encode($arr);		//向前端ajax返回一个json格式的数组，触发回调函数
	}

	public function saveeditpwd()
	{
		$datas = $this->request->post();
		$datas['password'] = md5($datas['password']);

		$admin = new Admin;
		if ($admin->save($datas,['name' => Session::get('name')]) == NULL) {
			$arr['digit'] = 1;
		}else{
			$arr["digit"] = 2;
		}
		echo json_encode($arr);
	}
}

 ?>