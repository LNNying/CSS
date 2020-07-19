<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/4/23
 * Time: 9:38
 */

namespace app\index\model;
use think\Model;
use traits\model\SoftDelete;
use app\index\validate\Order as orderValidate;

class Order extends Model
{
    use SoftDelete;
    public function productO()
    {
        return $this->belongsTo('Product','pro_id','id');
    }
    public function mangerO()
    {
        return $this->belongsTo('Manger','manger_id','id');
    }
    public function clientO()
    {
        return $this->belongsTo('Product','client_id','id');
    }
    public function saveOrder($data)
    {
        $orderValidate = new orderValidate();
        if(!$orderValidate->scene('add')->check($data)){
            return $orderValidate->getError();
        }
        $result = $this->save($data);
        if ($result) {
            return 1;
        } else {
            return '操作失败';
        }
    }
    public function approveOrder($data)
    {
        $result = $this->save($data,['id'=>$data['id']]);
        if ($result) {
            return 1;
        } else {
            return '操作失败';
        }
    }
    public function updateOrder($data)
    {
        $orderValidate = new orderValidate();
        if(!$orderValidate->scene('edit')->check($data)){
            return $orderValidate->getError();
        }
        $result = $this->save($data,['id' => $data['id']]);
        if ($result) {
            return 1;
        } else {
            return '操作失败';
        }
    }
}