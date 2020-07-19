<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/4/22
 * Time: 23:41
 */

namespace app\index\model;

use think\Model;
use traits\model\SoftDelete;
use app\index\validate\Client as cliValidate;
class Client extends Model
{
    use SoftDelete;
    public function mangerC()
    {
        return $this->belongsTo('Manger','manger_id','id');
    }
    public function serveC()
    {
        return $this->hasMany('Serve','client_id','id');
    }
    public function clientE()
    {
        return $this->hasMany('Evaluate','client_id','id');
    }
    public function orderE()
    {
        return $this->hasMany('Order','client_id','id');
    }
    public function saveClientInfo($data)
    {
        $clivalidate = new cliValidate();
        if(!$clivalidate->scene('add')->check($data)){
            return $clivalidate->getError();
        }
        $result = $this->save($data);
        if ($result) {
            return 1;
        } else {
            return '操作失败';
        }
    }
    public function updateClient($data)
    {
        $clivalidate = new cliValidate();
        if(!$clivalidate->scene('edit')->check($data)){
            return $clivalidate->getError();
        }
        $result = $this->save($data,['id' => $data['id']]);
        if ($result) {
            return 1;
        } else {
            return '操作失败';
        }
    }
}