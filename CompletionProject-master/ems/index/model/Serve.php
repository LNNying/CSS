<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/4/23
 * Time: 0:22
 */

namespace app\index\model;
use think\Model;
use traits\model\SoftDelete;
use app\index\validate\Serve as serveValidate;

class Serve extends Model
{
    use SoftDelete;
    public function productSer()
    {
        return $this->belongsTo('Product','pro_id','id');
    }
    public function clientSer()
    {
        return $this->belongsTo('Client','client_id','id');
    }
    public function mangerSer()
    {
        return $this->belongsTo('Manger','manger_id','id');
    }
    public function evaluateSer()
    {
        return $this->hasMany('Evaluate','ser_id','id');
    }

    public function saveServe($data)
    {
        $serveValidate = new serveValidate();
        if(!$serveValidate->scene('add')->check($data)){
            return $serveValidate->getError();
        }
        $result = $this->save($data);
        if ($result) {
            return 1;
        } else {
            return '操作失败';
        }
    }
    public function updateServe($data)
    {
        $serveValidate = new serveValidate();
        if(!$serveValidate->scene('edit')->check($data)){
            return $serveValidate->getError();
        }
        $result = $this->save($data,['id'=>$data['id']]);
        if ($result) {
            return 1;
        } else {
            return '操作失败';
        }
    }
}