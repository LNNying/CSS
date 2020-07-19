<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/5/2
 * Time: 10:45
 */

namespace app\index\model;

use think\Model;
use traits\model\SoftDelete;
use app\index\validate\Profit as profitValidate;
class Profit extends Model
{
    use SoftDelete;
    public function saveProfit($data)
    {
        $profitValidate = new profitValidate();
        if(!$profitValidate->scene('add')->check($data)){
            return $profitValidate->getError();
        }
        $result = $this->save($data);
        if ($result) {
            return 1;
        } else {
            return '操作失败';
        }
    }
}