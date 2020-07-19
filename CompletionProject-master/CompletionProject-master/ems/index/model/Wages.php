<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/5/1
 * Time: 18:34
 */

namespace app\index\model;

use think\Model;
use traits\model\SoftDelete;
use app\index\validate\Wages as wageValidate;
class Wages extends Model
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
    public function savePersonWage($data)
    {
        $wageValidate = new wageValidate();
        if(!$wageValidate->scene('add')->check($data)){
            return $wageValidate->getError();
        }
        $result = $this->save($data);
        if ($result) {
            return 1;
        } else {
            return '操作失败';
        }
    }
    public function approve($data)
    {
        $result = $this->save($data,["id"=>$data['id']]);
        if ($result) {
            return 1;
        } else {
            return '操作失败';
        }
    }
}