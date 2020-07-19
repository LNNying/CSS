<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/4/22
 * Time: 23:42
 */

namespace app\index\validate;

use think\Validate;
class Client extends Validate
{
    protected $rule =[
        'client_no|客户编号' => 'require|unique:client',
        'client_name|客户名称' => 'require',
        'address|联系地址' => 'require',
        'phone|联系方式' => 'require|unique:client',

    ];
    protected $scene = [
        'add'  =>  ['client_no','client_name','phone','address'],
        'edit'  =>  ['client_name','address'],
    ];
}