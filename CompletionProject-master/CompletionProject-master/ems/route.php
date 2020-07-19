<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;
Route::group('phone',function (){
   Route::rule('login','index/login/login','post|get');
   Route::rule('index','index/index/index','post|get');
   Route::rule('personInfo','index/index/personInfo','post|get');
   Route::rule('role','index/index/role','post|get');
   Route::rule('manger','index/index/mangerList','post|get');
   Route::rule('editManger','index/index/editManger','post|get');
   Route::rule('transfer','index/index/transfer','post|get');
   Route::rule('department','index/index/department','post|get');
   Route::rule('product','index/index/productList','post|get');
   Route::rule('add_pro','index/index/addPro','post|get');
   Route::rule('edit_pro','index/index/editProduct','post|get');
   Route::rule('product_role','index/index/productRole','post|get');
   Route::rule('sup_list','index/index/supList','post|get');
   Route::rule('client_list','index/index/clientList','post|get');
   Route::rule('serve_list','index/index/serveList','post|get');
   Route::rule('evaluate_list','index/index/evaluateList','post|get');
   Route::rule('system_view','index/index/systemView','post|get');
   Route::rule('order_list','index/index/orderList','post|get');
   Route::rule('add_order','index/index/addOrder','post|get');
   Route::rule('edit_order','index/index/editOrder','post|get');
   Route::rule('wage_manger','index/index/wageManger','post|get');
   Route::rule('profit_manger','index/index/profitManger','post|get');
   Route::rule('sale_analysis','index/index/saleAnalysis','post|get');

});
