<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/4/23
 * Time: 1:56
 */

namespace app\index\model;
use think\Model;
use traits\model\SoftDelete;
use app\index\validate\System as SystemValidate;

class System extends Model
{
    use SoftDelete;
    public function editSystem($data)
    {
        $SystemValidate = new SystemValidate();
        if(!$SystemValidate->scene('edit')->check($data)){
            return $SystemValidate->getError();
        }
        $result = $this->save($data,['id'=>$data['id']]);
        if ($result) {
            return 1;
        } else {
            return '操作失败';
        }
    }
}