<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/4/27
 * Time: 14:19
 */

namespace app\index\model;
use think\Model;

class Thing extends Model
{
    public function mangerT()
    {
        return $this->belongsTo('Manger','manger_id','id');
    }
    public function departmentT()
    {
        return $this->belongsTo('Department','dep_id','id');
    }
    public function addThing($data)
    {
        $this->save($data);
    }
}