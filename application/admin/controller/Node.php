<?php
namespace app\admin\controller;

use app\admin\service\NodeService;
use think\Controller;
use think\facade\Cookie;
use think\facade\Session;

class Node extends Common{
    public function index(){
        $nodeModel=new \app\admin\model\Node();
        $nodeServer=new NodeService();
        $nodeOrder=$nodeServer->getNodeOrder($nodeModel->all());
        return view('',["nodeOrder"=>$nodeOrder]);
    }
    public function add(){
        if(request()->isGet()){
            $nodeModel=new \app\admin\model\Node();
            $nodeServer=new NodeService();
            $nodeOrder=$nodeServer->getNodeOrder($nodeModel->all());
            return view('',["nodeOrder"=>$nodeOrder]);
        }
        if(request()->post()){
            $nodeModel=new \app\admin\model\Node();
            if($nodeModel->allowField(true)->save(request()->post())){
                $this->success("添加权限成功",'index');
            }else{
                $this->error("添加权限失败");
            }
        }
    }
    public function update(){
        echo "我是权限修改";
    }
    public function delete(){
        echo "我是权限删除";
    }
}