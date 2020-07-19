<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/4/22
 * Time: 23:09
 */

namespace app\index\validate;

use think\Validate;
class Supplier extends Validate
{
    protected $rule =[
        'sup_no|供应商编号' => 'require|unique:supplier',
        'sup_name|供应商名称' => 'require',
        'sup_add|联系地址' => 'require',
        'sup_phone|联系方式' => 'require|unique:supplier'

    ];
    protected $scene = [
        'add'  =>  ['sup_no','sup_name','sup_add','sup_phone'],
        'edit'  =>  ['sup_name','sup_add','sup_phone'],
    ];
}