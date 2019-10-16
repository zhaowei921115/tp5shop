<?php
namespace app\admin\model;
use think\Db;
use think\Model;

class Role extends Model{
    protected $pk="role_id";

    public function node(){
        return $this->belongsToMany("Node",'role_node',"node_id","role_id");
    }
}