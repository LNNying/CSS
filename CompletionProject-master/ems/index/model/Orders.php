<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/4/23
 * Time: 11:00
 */

namespace app\index\model;
use think\Model;
use traits\model\SoftDelete;

class Orders extends Model
{
    use SoftDelete;
    public function saveOrders($data)
    {
        $result = $this->save($data);
        if ($result) {
            return 1;
        } else {
            return '更新订单表失败';
        }
    }
}