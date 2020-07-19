<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/5/1
 * Time: 18:21
 */

namespace app\index\model;

use think\Model;
use traits\model\SoftDelete;
class Wage extends Model
{
    use SoftDelete;
    public function mangerW()
    {
        return $this->belongsTo('Manger','manger_id','id');
    }
    public function departmentW()
    {
        return $this->belongsTo('Department','dep_id','id');
    }
    public function saveInfo($data)
    {
        $result = $this->save($data);
        if ($result) {
            return 1;
        } else {
            return "操作失败";
        }
    }
}