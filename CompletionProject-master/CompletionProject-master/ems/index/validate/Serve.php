<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/4/23
 * Time: 0:23
 */

namespace app\index\validate;

use think\Validate;
class Serve extends Validate
{
    protected $rule =[
        'ser_no|维修单编号' => 'require|unique:serve',
        'client_id|客户名称' => 'require',
        'pro_id|产品名称' => 'require',
        'manger_id|维修人员' => 'require',
        'ser_desc|维系原因' => 'require',
        'ser_day|维修天数' => 'require',
    ];
    protected $scene = [
        'add'  =>  ['ser_no','client_id','pro_id','manger_id','ser_desc','ser_day'],
        'edit'  =>  ['ser_desc','ser_day'],
    ];
}