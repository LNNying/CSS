<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/5/2
 * Time: 11:00
 */

namespace app\index\validate;

use think\Validate;
class Profit extends Validate
{
    protected $rule =[
        'rent|房租费用' => 'require|number',
        'electricity|电费费用' => 'require|number',
        'charge_for_water|水费费用' => 'require|number',
    ];
    protected $scene = [
        'add'  =>  ['rent','electricity','charge_for_water'],
    ];
}