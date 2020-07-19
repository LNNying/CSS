<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/4/23
 * Time: 1:57
 */

namespace app\index\validate;
use think\Validate;

class System extends Validate
{
    protected $rule =[
        'webname|系统名称' => 'require',
        'edition|版本编号' => 'require',

    ];
    protected $scene = [
        'edit'  =>  ['webname','edition'],
    ];
}