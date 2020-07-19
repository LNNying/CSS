<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/4/23
 * Time: 1:35
 */

namespace app\index\model;
use think\Model;
use traits\model\SoftDelete;

class Evaluate extends Model
{
    use SoftDelete;
    public function serveE()
    {
        return $this->belongsTo('Serve','ser_id','id');
    }
    public function clientE()
    {
        return $this->belongsTo('Client','client_id','id');
    }
}