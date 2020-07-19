<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/5/2
 * Time: 9:32
 */

namespace app\index\validate;
use think\Validate;

class Wages extends Validate
{
    protected $rule =[
        'manger_id|员工姓名' => 'require',
        'dep_id|所属部门' => 'require',
        'allWage|应得工资' => 'require',
        'surplusWage|税款' => 'require',

    ];
    protected $scene = [
        'add'  =>  ['manger_id','dep_id','allWage','surplusWage'],
    ];
}