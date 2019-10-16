<?php
namespace app\admin\controller;

use app\admin\model\Admin;
use think\captcha\Captcha;
use think\Controller;
use think\Db;
use think\facade\Cookie;
use think\facade\Session;
use think\Validate;

class Login extends Controller{
    public function login()
    {
        if (request()->isGet()) {
            return view("");
        }
        if (request()->isPost()) {


            $arr = [
                "admin_id" => 2,
                "admin_name" => "zhangsan"
            ];

            Session::set("admin", $arr);

            //$times=Admin::addTime($admin,$time);

                echo json_encode(["status" => 4, "msg" => "登录成功"]);
        }
    }
        //退出
    public function logout(){
        if(!Session::delete('admin')){
            $this->success('退出成功','Login/login');
        }else{
            $this->error('退出失败');
        }
    }






}