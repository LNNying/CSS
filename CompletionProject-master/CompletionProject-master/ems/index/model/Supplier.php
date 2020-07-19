<?php
/**
 * Created by PhpStorm.
 * User: 宁宁
 * Date: 2019/4/7
 * Time: 10:25
 */

namespace app\index\model;

use think\Model;
use traits\model\SoftDelete;
use app\index\validate\Supplier as supValidate;
class Supplier extends Model
{
    use SoftDelete;
    public function product()
    {
        return $this->hasMany('Product','sup_id','id');
    }
    public function mangerS()
    {
        return $this->belongsTo('Manger','manger_id','id');
    }
    public function saveInfo($data)
    {
        $supValidate = new supValidate();
        if(!$supValidate->scene('add')->check($data)){
            return $supValidate->getError();
        }
        $result = $this->save($data);
        if ($result) {
            return 1;
        } else {
            return '操作失败';
        }
    }
    public function updateInfo($data)
    {
        $supValidate = new supValidate();
        if(!$supValidate->scene('edit')->check($data)){
            return $supValidate->getError();
        }
        $result = $this->save($data,['id' => $data['id']]);
        if ($result) {
            return 1;
        } else {
            return '操作失败';
        }
    }
}