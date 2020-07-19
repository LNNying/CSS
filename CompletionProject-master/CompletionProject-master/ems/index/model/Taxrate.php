<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/5/2
 * Time: 8:08
 */

namespace app\index\model;
use think\Model;
use traits\model\SoftDelete;

class Taxrate extends Model
{
    use SoftDelete;
    public function saveTax($data)
    {
        $result = $this->save($data,["id" => $data["id"]]);
        if ($result) {
            return 1;
        } else {
            return '操作失败';
        }
    }
}