<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use app\admin\model\News;
use app\admin\model\Staff;
use app\admin\model\Job;

class Index extends Controller
{
    public function index()
    {
    	$news = News::order('id desc')
    			->field('id,title,content')
				->limit(3)
				->select();
		$this->assign('news',$news);

		$policy = News::where('newstype','政策法规')
				->field('id,title')
				->order('id desc')
				->limit(7)
				->select();
		$this->assign('policy',$policy);

		$jobs = Job::order('id desc')
    			->field('id,position,department')
				->limit(6)
				->select();
		$this->assign('jobs',$jobs);

        return $this->fetch();
    }

    public function getlimitnews()
    {
		
		dump($result);
		// $data = array(
		// 	"code" => 0,
		// 	"msg" => "",
		// 	"count" => $count,
		// 	"data" => $result
		// );
		// echo json_encode($data);
    }
    public function aboutus()
    {
        return $this->fetch();
    }

    public function culture()
    {
        return $this->fetch();
    }

    public function honor()
    {
        return $this->fetch();
    }

    public function news($newstype = 1)
    {
    	if ($newstype == 1) {
    		$result = News::field('id,title,content,addtime')
    				->order("id desc")
    				->paginate(5);
			$datas["result"] = $result;
    	}else{
    		$result = News::where('newstype',$newstype)
    				->field('id,title,content,addtime')
    				->order("id desc")
    				->paginate(5);
			$datas["result"] = $result;
    	}
    	$datas["newstype"] = $newstype;
    	$this->assign($datas);
    	return $this->fetch();
    }

    public function newscontent($id = "temp")
    {
    	if ($id == "temp") {
    		$this->redirect('/index/index/news');
    	}else{
    		$result = News::where('id',$id)
    				->find();
    		$result['addtime'] = date('Y-m-d H:i:s', $result['addtime']);
			$datas["result"] = $result;
    	}
    	$this->assign($datas);
    	return $this->fetch();
    }

    public function entservice1()
    {
        return $this->fetch();
    }

    public function entservice2()
    {
        return $this->fetch();
    }

    public function entservice3()
    {
        return $this->fetch();
    }

    public function entservice4()
    {
        return $this->fetch();
    }

    public function entservice5()
    {
        return $this->fetch();
    }

    public function entservice6()
    {
        return $this->fetch();
    }

    public function entservice7()
    {
        return $this->fetch();
    }

    public function staffservice($stafftype = 1)
    {
    	if ($stafftype == 1) {
    		$result = Staff::field('id,title,content,addtime')
    				->order("id desc")
    				->paginate(5);
			$datas["result"] = $result;
    	}else{
    		$result = Staff::where('stafftype',$stafftype)
    				->field('id,title,content,addtime')
    				->order("id desc")
    				->paginate(5);
			$datas["result"] = $result;
    	}
    	$datas["stafftype"] = $stafftype;
    	$this->assign($datas);
    	return $this->fetch();
    }

    public function staffcontent($id = "temp")
    {
    	if ($id == "temp") {
    		$this->redirect('/index/index/staffservice');
    	}else{
    		$result = Staff::where('id',$id)
    				->find();
    		$result['addtime'] = date('Y-m-d H:i:s', $result['addtime']);
			$datas["result"] = $result;
    	}
    	$this->assign($datas);
    	return $this->fetch();
    }

    public function jobs()
    {
    	$result = Job::order("id desc")->paginate(8);
    	foreach ($result as $key => $value) {
			$value['addtime'] = date('Y-m-d', $value['addtime']);
    	}
		$datas["result"] = $result;
		$this->assign($datas);
		return $this->fetch();
    }

    public function contactus()
    {
    	return $this->fetch();
    }
}
