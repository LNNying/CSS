<?php
/**
 * Created by PhpStorm.
 * User: LNN
 * Date: 2019/5/2
 * Time: 17:26
 */

namespace app\index\controller;

use think\Controller;
class Base extends Controller
{
    public function _initialize()
    {
        if (!session('id')) {
            $this->redirect('index/index/login');
        }
    }
}