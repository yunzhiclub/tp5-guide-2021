<?php
namespace app\index\controller;
use app\common\model\Teacher;
use think\Controller; 
class TeacherController extends Controller
{
    public function index()
    {
    	// $teacher = new Teacher();

    	$htmls = $this->fetch();


    	return $htmls;
    }
}
