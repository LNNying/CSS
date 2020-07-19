<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/4/23
 * Time: 9:39
 */

namespace app\index\validate;
use think\Validate;

class Order extends Validate
{
    protected $rule =[
        'order_no|订单编号' => 'require|unique:order',
        'pro_id|产品名称' => 'require',
        'client_id|订单客户' => 'require',
        'price|预定价格' => 'require',
        'pro_num|预定数量'=> 'require'

    ];
    protected $scene = [
        'add'  =>  ['order_no','pro_id','client_id','price','pro_num'],
        'edit'  =>  ['price','pro_num'],
    ];
}