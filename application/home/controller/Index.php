<?php
namespace app\home\controller;

use think\Controller;

class Index extends Controller{
   public function index(){
       return view("index/index");
   }
}
