<?php 
namespace app\admin\Controller;
use think\Db;
use think\Controller;
use app\admin\model\Job;
use think\facade\Session;
/**
* newsinfo新闻资讯
*/
class Jobinfo extends Controller
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
		return $this->fetch();
	}

	public function jobadd()
	{
		return $this->fetch();
	}

	public function getjoblist()
	{
		$count = Job::count();
		$page_num = isset($_GET['limit'])?$_GET['limit']:10;	//接收limit，每页显示多少条数据
		$pages = ceil($count/$page_num);				  		//总页数，向上取整
		$page = isset($_GET['page'])?$_GET['page']:1;			//当前页数
		$startpos = ($page - 1)*$page_num;

		$result = Job::order('id desc')
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

	public function savepicture()
	{
		$files = $_FILES['pic'];
		if ($files["size"] > 0) {
			$file = $this->request->file('pic');
		    // 移动到框架应用根目录/uploads/ 目录下
		    $path = config("uploads");
		    $info = $file->move($path);
		    if($info){
		        // // 成功上传后 获取上传信息
		        // // 输出 jpg
		        // echo $info->getExtension();
		        // // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
		        // echo $info->getSaveName();
		        // // 输出 42a79759f284b767dfcb2a0197904287.jpg
		        // echo $info->getFilename();
		        $data = array(
					"code" => 0,
					"msg" => "",
					"data" => array(
						"src" => 'static/uploads/' .$info->getSaveName()
					)
				);
				echo json_encode($data);
		    }else{
		        // // 上传失败获取错误信息
		        // echo $file->getError();
		        $data = array(
					"code" => 0,
					"msg" => "",
					"data" => $file->getError()
				);
				echo json_encode($data);
		    }
		}
	}

	public function savejob()
	{
		$datas = $this->request->post();
		if ($datas == NULL) {
			$arr["digit"] = 1;
			echo json_encode($arr);
		}else{
			$datas['addtime'] = time();
			$job = new Job;

			if ($job->save($datas) == NULL) {
				$arr["digit"] = 1;
			}else{
				$arr["digit"] = 2;
			}
			echo json_encode($arr);
		}
	}

	public function editjob($id)
	{
		$job = Job::where('id',$id)->find();
		$this->assign('job',$job);

		return $this->fetch();
	}

	public function saveedit()
	{
		$datas = $this->request->post();
		if ($datas == NULL) {
			$arr["digit"] = 1;
			echo json_encode($arr);
		}else{
			$datas['addtime'] = time();
			$job = new Job;

			if ($job->save($datas,['id' => $datas['id']]) == NULL) {
				$arr["digit"] = 1;
			}else{
				$arr["digit"] = 2;
			}
			echo json_encode($arr);
		}
	}
	public function deletejob($id)
	{
		$deljob = Job::where('id',$id)->delete();
	}

	public function deletejobs()
	{
		$jobId = $_GET['jobId'];
		job::destroy($jobId);
	}
}
 ?>