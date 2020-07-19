<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class Index extends Controller
{
    // 主页面
    public function index()
    {
        $mangerId = session('id');
        $result = model('Manger')->with('department')->find($mangerId);
        $loginTime = date('Y-m-d');
        $thing = model("Thing")->with('mangerT', 'departmentT')->order('id', 'desc')->select();
        $orderCount = model("Order")->count("id");
        $clientCount = model("Client")->count("id");
        $mangerCount = model("Manger")->count();
        $this->assign("order", $orderCount);
        $this->assign("client", $clientCount);
        $this->assign("manger", $mangerCount);
        $this->assign('loginTime', $loginTime);
        $this->assign("data", $thing);
        $this->assign('result', $result);
        return view();
    }

// 客户占比
    public function clientInfo()
    {
        $stu = model("Client")->where("job", "学生")->count();
        $job = model("Client")->where("job", "就业人士")->count();
        $noJob = model("Client")->where("job", "待业人士")->count();
        $old = model("Client")->where("job", "老年人")->count();
        $other = model("Client")->where("job", "其他")->count();
        $data = [
            "stu" => $stu,
            "job" => $job,
            "noJob" => $noJob,
            "old" => $old,
            "other" => $other
        ];
        return json($data);
    }
    public function clientNum()
    {
        $date = date('m');
        $client = [];
        for ($i = 1; $i < $date; $i++) {
            $num = model('Client')->where('months','=',$i)->count('id');
            array_push($client,['month'=>$i,'num'=>$num]);
        }
        return json($client);
    }
// 产品占比
    public function productInfo()
    {
        $data = model("Rolepro")->with('product')->select();
        return $data;
    }
// 个人信息
    public function personInfo()
    {
        $mangerId = session('id');
        $result = model('Manger')->with('department', 'role')->find($mangerId);
        $this->assign('info', $result);
        return view();
    }

// 修改密码
    public function changePass()
    {
        if (request()->isAjax()) {
            $data = [
                'pass' => input("post.pass"),
                'id' => input("post.id")
            ];
            $result = model('Manger')->change($data);
            if ($result == 1) {
                $this->success('修改密码成功！', 'index/index/personInfo');
            } else {
                $this->error($result);
            }
        }
    }

    public function changeInfo()
    {
        if (request()->isAjax()) {
            $data = [
                'id' => input("post.id"),
                'manger_name' => input("post.name"),
                'phone' => input("post.phone"),
                'email' => input("post.email")
            ];
            $result = model("Manger")->changeInfo($data);
            if ($result == 1) {
                $this->success('保存成功！', 'index/index/personInfo');
            } else {
                $this->error($result);
            }
        }
    }

//    角色
    public function role()
    {
        if (isset($_GET['page'])) {
            $pageinit = $_GET['page'];
        } else {
            $pageinit = 1;
        }
        if (request()->isAjax()) {
            $id = input("post.id");
            $result = model("Role")->with('manger')->where('id', $id)->paginate(1);
            $page = $result->render();
            $data = [
                "data" => $result,
                "pageinit" => $pageinit,
            ];
            return json($data);
        }
        $result = model('Role')->order("id", "asc")->select();
        $department = model("Department")->select();
        $this->assign('data', $result);
        $this->assign('page', null);
        $this->assign('department', $department);
        return view();
    }

    // 伴随更改
    public function changeRole()
    {
        if (request()->isAjax()) {
            $id = input("post.id");
            $data = model("Role")->where('department_id', $id)->where('id', '>', 1)->select();
            return $data;
        }
    }

    public function roleEditInfo()
    {
        if (request()->isAjax()) {
            $id = input("post.id");
            $data = model("Role")->with('department')->find($id);
            return $data;
        }
    }

    // 编辑
    public function roleEdit()
    {
        if (request()->isAjax()) {
            $data = [
                'id' => input("post.id"),
                'role_name' => input("post.roleName"),
                'role_desc' => input("post.roleDesc")
            ];
            $result = model("Role")->roleEdit($data);
            if ($result == 1) {
                $this->success('编辑成功', 'index/index/role');
            } else {
                $this->error($result);
            }
        }
    }

    // 添加
    public function roleAdd()
    {
        if (request()->isAjax()) {
            $data = [
                'department_id' => input('post.department'),
                'role_name' => input("post.name"),
                'role_desc' => input("post.desc")
            ];
            $result = model("Role")->add($data);
            if ($result == 1) {
                $this->success('添加成功', 'index/index/role');
            } else {
                $this->error($result);
            }
        }
    }

    // 员工管理
    public function mangerList()
    {
        if (isset($_GET["page"])) {
            $pageinit = $_GET["page"];
        } else {
            $pageinit = 1;
        }
        $role = session('roleId');
//        echo $role;
//        return;
        if ($role == 1) {
            $data = model('Manger')->with('department', 'role')->order('id', 'asc')->paginate(2);
        } else if ($role == 4) {
            $data = model('Manger')->with('department', 'role')->where('department_id', 1)->order('id', 'asc')->paginate(4);
        } else if ($role == 5) {
            $data = model('Manger')->with('department', 'role')->where('department_id', 2)->order('id', 'asc')->paginate(4);
        }
        $page = $data->render();
        $this->assign('data', $data);
        $this->assign('page', $page);
        $this->assign('pageinit', $pageinit);
        return view();
    }

    // 删除
    public function delManger()
    {
        if (request()->isAjax()) {
            $id = input("post.id");
            $result = model("Manger")->delManger($id);
            if ($result == 1) {
                $this->success('删除成功！', 'index/index/mangerList');
            } else {
                $this->error($result);
            }
        }
    }

    // 添加
    public function addManger()
    {
        if (request()->isAjax()) {
            $createTime = date('Y-m-d');
            $data = [
                'manger_no' => input("post.no"),
                'manger_name' => input("post.name"),
                'pass' => input("post.pass"),
                'phone' => input("post.phone"),
                'email' => input("post.email"),
                'department_id' => input("post.department"),
                'role_id' => input("post.role"),
                'jobyear' => input("post.year"),
                'sex' => input("post.sex"),
                'address' => input("post.address"),
                'marry' => input("post.marry"),
                'incumbency' => input("post.incumbency"),
                'create_date' => $createTime
            ];
            $result = model("Manger")->addManger($data);
            if ($result == 1) {
                $this->success('添加成功！', 'index/index/mangerList');
            } else {
                $this->error($result);
            }
        }
        $department = model("Department")->select();
        $role = model("Role")->where('id', '>', 1)->select();
        $this->assign('department', $department);
        $this->assign('role', $role);
        return view();
    }

    // 编辑
    public function editManger()
    {
        if (request()->isAjax()) {
            $data = [
                'id' => input("post.id"),
                'manger_no' => input("post.no"),
                'manger_name' => input("post.name"),
                'pass' => input("post.pass"),
                'phone' => input("post.phone"),
                'email' => input("post.email"),
                'department_id' => input("post.department"),
                'role_id' => input("post.role"),
                'jobyear' => input("post.year"),
                'sex' => input("post.sex"),
                'address' => input("post.address"),
                'marry' => input("post.marry"),
                'incumbency' => input("post.incumbency")
            ];
            $result = model('Manger')->editManger($data);
            if ($result == 1) {
                $this->success('操作成功！', 'index/index/mangerList');
            } else {
                $this->error($result);
            }
        }
        if ($_GET['id']) {
            $id = $_GET['id'];
        }
        $data = model("Manger")->find($id);
        $department = model("Department")->select();
        $role = model("Role")->where('id', '>', 1)->select();
        $this->assign('data', $data);
        $this->assign('department', $department);
        $this->assign('role', $role);
        return view();
    }

    // 设置(调动)
    public function transfer()
    {
        if (request()->isAjax()) {
            $info = [
                "id" => input("post.id"),
                "states" => 1,
            ];
            $res = model('Transfer')->save($info, ['id' => $info['id']]);
            if ($res) {
                $this->success('操作成功！', 'index/index/transfer');
            } else {
                $this->error('操作失败！');
            }
        }
        if (isset($_GET["page"])) {
            $pageinit = $_GET["page"];
        } else {
            $pageinit = 1;
        }
        $transferData = model("Transfer")->with('mangers')->order('id', 'asc')->paginate(2);
        $page = $transferData->render();
        $this->assign('page', $page);
        $this->assign('pageinit', $pageinit);
        $this->assign('transferData', $transferData);
        $department = model("Department")->select();
        $role = model("Role")->where('id', '>', 1)->select();
        $manger = model("Manger")->where('id', '>', 1)->select();
        $this->assign('manger', $manger);
        $this->assign('department', $department);
        $this->assign('role', $role);
        return view();
    }

    public function getManger()
    {
        if (request()->isAjax()) {
            $id = input("post.id");
            $data = model("Manger")->find($id);
            $role = model("Role")->where('id', $data['role_id'])->select();
            $department = model("Department")->where('id', $data['department_id'])->select();
            $info = [
                "data" => $data,
                "role" => $role[0],
                "department" => $department[0]
            ];
            return json($info);
        }
    }

    public function editTran()
    {
        if (request()->isAjax()) {
            $data = [
                "id" => input("post.id"),
                "department_id" => input("post.department"),
                "role_id" => input("post.role")
            ];
            $tranData = [
                "manger_id" => input("post.id"),
                "states" => 0,
                "tr_desc" => input("post.desc")
            ];
            $result = model('Manger')->save($data, ['id' => $data['id']]);
            $res = model("Transfer")->save($tranData);
            if ($result && $res) {
                $this->success('操作成功！', 'index/index/transfer');
            } else {
                $this->error('操作失败！');
            }
        }
    }

    //部门设置
    public function department()
    {
        if (request()->isAjax()) {
            $id = input("post.id");
            $result = model("Department")->find($id);
            return $result;
        }
        if (isset($_GET["page"])) {
            $pageinit = $_GET["page"];
        } else {
            $pageinit = 1;
        }
        $data = model("Department")->order('id', 'asc')->paginate(4);
        $page = $data->render();
        $this->assign('data', $data);
        $this->assign('page', $page);
        $this->assign('pageinit', $pageinit);
        return view();
    }

    public function getDepInfo()
    {
        if (request()->isAjax()) {
            $id = input("post.id");
            $result = model("Manger")->with("role")->where('department_id', $id)->select();
            return $result;
        }
    }

    public function getModify()
    {
        if (request()->isAjax()) {
            $data = [
                "id" => input("post.id"),
                "department_name" => input("post.name"),
                "department_desc" => input("post.desc")
            ];
            $result = model("Department")->saveDepart($data);
            if ($result == 1) {
                $this->success('操作成功！', 'index/index/department');
            } else {
                $this->error($result);
            }
        }
    }

    public function addDepart()
    {
        $data = [
            "department_id" => input("post.no"),
            "department_name" => input("post.name"),
            "department_desc" => input("post.desc")
        ];
        $id = session("id");
        $dep_id = model("Manger")->where("id", "=", $id)->find();
        $thName = "添加部门" . input("post.name");
        $result = model('Department')->addDepart($data);
        if ($result == 1) {
            $info = [
                "manger_id" => $id,
                "dep_id" => $dep_id['department_id'],
                "th_name" => $thName,
                "state" => "已添加",
                "create_date" => date("Y-m-d")
            ];
            model("Thing")->addThing($info);
            $this->success('操作成功！', 'index/index/department');
        } else {
            $this->error($result);
        }
    }

    public function productList()
    {
        if (isset($_GET["page"])) {
            $pageinit = $_GET["page"];
        } else {
            $pageinit = 1;
        }
        $data = model("Product")->with('manger', 'Role')->order('id', 'desc')->paginate(2);
        $page = $data->render();
        $this->assign('page', $page);
        $this->assign('pageinit', $pageinit);
        $this->assign('data', $data);
        return view();
    }

    public function addPro()
    {
        if (request()->isAjax()) {
            $data = [
                "manger_id" => session('id'),
                "sup_id" => input('post.supplier'),
                "pro_no" => input('post.no'),
                "salenumber" => 0,
                "pro_name" => input('post.name'),
                "role_id" => input('post.role'),
                "quantity" => input("post.number"),
                "costprice" => input('post.costPrice'),
                "price" => input("post.price"),
                "model" => input("post.model"),
                "months" => date('m') - 1,
                "allcost" => input('post.number') * input('post.costPrice'),
                "add_time" => date('Y-m-d')
            ];
            $result = model('Product')->saveData($data);
            if ($result == 1) {
                $this->success('添加成功', 'index/index/productList');
            } else {
                $this->error($result);
            }
        }
        $dataSup = model('Supplier')->select();
        $dataRole = model('Rolepro')->select();
        $this->assign('supplier', $dataSup);
        $this->assign('role', $dataRole);
        return view();
    }

    //伴随供应商
    public function changeProRole()
    {
        $id = input('post.id');
        $roleId = model('Supplier')->find($id);
        $data = model('Rolepro')->find($roleId['role_id']);
        return $data;
    }

    public function infoPro()
    {
        $id = input('post.id');
        $data = model('Product')->with('supplier', 'Role')->find($id);
        return $data;
    }

    // 编辑产品
    public function editProduct()
    {
        if (request()->isAjax()) {
            $data = [
                'id' => input("post.id"),
                "sup_id" => input('post.supplier'),
                "pro_no" => input('post.no'),
                "pro_name" => input('post.name'),
                "role_id" => input('post.role'),
                "quantity" => input("post.number"),
                "costprice" => input('post.costPrice'),
                "price" => input("post.price"),
                "model" => input("post.model"),
            ];
            $result = model('Product')->saveDataPro($data);
            if ($result == 1) {
                $this->success('操作成功', 'index/index/productList');
            } else {
                $this->error($result);
            }
        }
        $id = $_GET['id'];
        $data = model('Product')->with('Role', 'supplier')->find($id);
        $dataSup = model('Supplier')->select();
        $this->assign('data', $data);
        $this->assign('supplier', $dataSup);
        return view();
    }

//    产品角色
    public function productRole()
    {
        if (request()->isAjax()) {
            $data = [
                "id" => input('post.id'),
                "role_name" => input("post.name")
            ];
            $result = model('Rolepro')->edit($data);
            if ($result == 1) {
                $this->success('操作成功', 'index/index/productRole');
            } else {
                $this->error($result);
            }
        }
        $data = model('Rolepro')->with('addManger')->order('id', 'desc')->select();
        $this->assign('data', $data);
        return view();
    }

    public function editRolePro()
    {
        if (request()->isAjax()) {
            $id = input('post.id');
            $data = model('Rolepro')->find($id);
            return $data;
        }
    }

    public function addRolePro()
    {
        if (request()->isAjax()) {
            $data = [
                "role_name" => input('post.name'),
                "manger_id" => session('id'),
                "add_time" => date('Y-m-d')
            ];
            $result = model('Rolepro')->add($data);
            if ($result == 1) {
                $this->success('操作成功', 'index/index/productRole');
            } else {
                $this->error($result);
            }
        }
    }

    public function deleteRolePro()
    {
        if (request()->isAjax()) {
            $id = input('post.id');
            $result = model('Rolepro')->where('id', '=', $id)->delete();
            if ($result) {
                $this->success('操作成功', 'index/index/productRole');
            } else {
                $this->error('操作失败');
            }
        }
    }

    public function showInfo()
    {
        if (request()->isAjax()) {
            $id = input('post.id');
            $result = model('Product')->with('supplier')->where('role_id', '=', $id)->select();
            return $result;
        }
    }

    // 供应商
    public function supList()
    {
        if (isset($_GET["page"])) {
            $pageinit = $_GET["page"];
        } else {
            $pageinit = 1;
        }
        $data = model("Supplier")->with('mangerS')->order('id', 'desc')->paginate(2);
        $page = $data->render();
        $this->assign('page', $page);
        $this->assign('pageinit', $pageinit);
        $this->assign('data', $data);
        return view();
    }

    public function saveSupInfo()
    {
        if (request()->isAjax()) {
            $data = [
                "sup_no" => input('post.no'),
                "sup_name" => input('post.name'),
                "sup_add" => input('post.address'),
                "sup_phone" => input('post.phone'),
                "create_date" => date('Y-m-d'),
                "manger_id" => session('id')
            ];
            $id = session("id");
            $dep_id = model("Manger")->where("id", "=", $id)->find();
            $thName = "添加供应商" . input("post.name");
            $result = model('Supplier')->saveInfo($data);
            if ($result == 1) {
                $info = [
                    "manger_id" => $id,
                    "dep_id" => $dep_id['department_id'],
                    "th_name" => $thName,
                    "state" => "已添加",
                    "create_date" => date("Y-m-d")
                ];
                model("Thing")->addThing($info);
                $this->success('操作成功', 'index/index/supList');
            } else {
                $this->error($result);
            }
        }
    }

    // 获取信息
    public function getInfo()
    {
        if (request()->isAjax()) {
            $id = input('post.id');
            $data = model('Supplier')->find($id);
            return $data;
        }
    }

    public function updateSupInfo()
    {
        if (request()->isAjax()) {
            $data = [
                "id" => input('post.id'),
                "sup_name" => input('post.name'),
                "sup_phone" => input('post.phone'),
                "sup_add" => input('post.address')
            ];
            $result = model('Supplier')->updateInfo($data);
            if ($result == 1) {
                $this->success('操作成功', 'index/index/supList');
            } else {
                $this->error($result);
            }
        }
    }

    public function deleteSupInfo()
    {
        if (request()->isAjax()) {
            $id = input('post.id');
            $data = model('Supplier')->where('id', '=', $id)->find();
            $result = model('Supplier')->where('id', '=', $id)->delete();
            $mangerId = session("id");
            $dep_id = model("Manger")->where("id", "=", $mangerId)->find();
            $thName = "删除供应商" . $data['sup_name'];
            if ($result) {
                $info = [
                    "manger_id" => $mangerId,
                    "dep_id" => $dep_id['department_id'],
                    "th_name" => $thName,
                    "state" => "已删除",
                    "create_date" => date("Y-m-d")
                ];
                model("Thing")->addThing($info);
                $this->success('操作成功', 'index/index/supList');
            } else {
                $this->error('操作失败');
            }
        }
    }

//    客户列表
    public function clientList()
    {
        if (isset($_GET["page"])) {
            $pageinit = $_GET["page"];
        } else {
            $pageinit = 1;
        }
        $data = model("Client")->with('mangerC')->order('id', 'desc')->paginate(2);
        $page = $data->render();
        $this->assign('page', $page);
        $this->assign('pageinit', $pageinit);
        $this->assign('data', $data);
        return view();
    }

    public function saveClientInfo()
    {
        if (request()->isAjax()) {
            $data = [
                "client_no" => input('post.no'),
                "client_name" => input('post.name'),
                "phone" => input('post.phone'),
                "address" => input('post.address'),
                "job" => input('post.job'),
                "manger_id" => session('id'),
                "months" => date('m'),
                "create_date" => date('Y-m-d')
            ];
            $id = session("id");
            $dep_id = model("Manger")->where("id", "=", $id)->find();
            $thName = "添加客户" . input("post.name");
            $result = model('Client')->saveClientInfo($data);
            if ($result == 1) {
                $info = [
                    "manger_id" => $id,
                    "dep_id" => $dep_id['department_id'],
                    "th_name" => $thName,
                    "state" => "已添加",
                    "create_date" => date("Y-m-d")
                ];
                model("Thing")->addThing($info);
                $this->success('操作成功', 'index/index/clientList');
            } else {
                $this->error($result);
            }
        }
    }

    // 获取客户信息
    public function getClientInfo()
    {
        if (request()->isAjax()) {
            $id = input('post.id');
            $data = model('Client')->find($id);
            return $data;
        }
    }

//    更新
    public function updateClientInfo()
    {
        if (request()->isAjax()) {
            $data = [
                "id" => input('post.id'),
                "client_name" => input('post.name'),
                "phone" => input('post.phone'),
                "address" => input('post.address'),
                "job" => input('post.job')
            ];
            $result = model('Client')->updateClient($data);
            if ($result == 1) {
                $this->success('操作成功', 'index/index/clientList');
            } else {
                $this->error($result);
            }
        }
    }

    public function deleteClientInfo()
    {
        if (request()->isAjax()) {
            $id = input('post.id');
            $data = model('Client')->where('id', '=', $id)->find();
            $result = model('Client')->where('id', '=', $id)->delete();
            $mangerId = session("id");
            $dep_id = model("Manger")->where("id", "=", $mangerId)->find();
            $thName = "删除客户" . $data['client_name'];
            if ($result) {
                $info = [
                    "manger_id" => $mangerId,
                    "dep_id" => $dep_id['department_id'],
                    "th_name" => $thName,
                    "state" => "已删除",
                    "create_date" => date("Y-m-d")
                ];
                model("Thing")->addThing($info);
                $this->success('操作成功', 'index/index/clientList');
            } else {
                $this->error('操作失败');
            }
        }
    }

    // 售后
    public function serveList()
    {
        if (isset($_GET["page"])) {
            $pageinit = $_GET["page"];
        } else {
            $pageinit = 1;
        }
        $data = model("Serve")->with('productSer', 'clientSer', 'mangerSer')->order('id', 'desc')->paginate(2);
        $product = model("Product")->select();
        $client = model("Client")->select();
        $manger = model('Manger')->where('role_id = 3 or role_id = 5')->select();
        $page = $data->render();
        $this->assign('product', $product);
        $this->assign('client', $client);
        $this->assign('manger', $manger);
        $this->assign('page', $page);
        $this->assign('pageinit', $pageinit);
        $this->assign('data', $data);
        return view();
    }

//    新增
    public function saveServeInfo()
    {
        if (request()->isAjax()) {
            $data = [
                'ser_no' => input('post.no'),
                'client_id' => input('post.name'),
                'pro_id' => input('post.proName'),
                'manger_id' => input('post.manger'),
                'ser_desc' => input('post.desc'),
                'ser_day' => input('post.day'),
                'creat_date' => date('Y-m-d')
            ];
            $id = session("id");
            $dep_id = model("Manger")->where("id", "=", $id)->find();
            $thName = "新增维修单" . input("post.no");
            $result = model('Serve')->saveServe($data);
            if ($result == 1) {
                $info = [
                    "manger_id" => $id,
                    "dep_id" => $dep_id['department_id'],
                    "th_name" => $thName,
                    "state" => "已添加",
                    "create_date" => date("Y-m-d")
                ];
                model("Thing")->addThing($info);
                $this->success('操作成功', 'index/index/serveList');
            } else {
                $this->error($result);
            }
        }
    }

//    获取编辑信息
    public function getServeInfo()
    {
        if (request()->isAjax()) {
            $id = input('post.id');
            $data = model('Serve')->find($id);
            $pro = model('Product')->find($data['pro_id']);
            $client = model("Client")->find($data['client_id']);
            $manger = model("Manger")->find($data['manger_id']);
            $result = [
                "serve" => $data,
                "product" => $pro,
                "client" => $client,
                "manger" => $manger
            ];
            return json($result);
        }
    }

//    更新信息
    public function updateServeInfo()
    {
        if (request()->isAjax()) {
            $data = [
                'id' => input('post.id'),
                'ser_desc' => input('post.reason'),
                'ser_day' => input('post.day')
            ];
            $result = model('Serve')->updateServe($data);
            if ($result == 1) {
                $this->success('操作成功', 'index/index/serveList');
            } else {
                $this->error($result);
            }
        }
    }

//    删除
    public function deleteServeInfo()
    {
        $id = input('post.id');
        $data = model('Serve')->where('id', '=', $id)->find();
        $mangerId = session("id");
        $dep_id = model("Manger")->where("id", "=", $mangerId)->find();
        $thName = "删除维修单" . $data['ser_no'];
        $result = model('Serve')->where('id', '=', $id)->delete();
        if ($result) {
            $info = [
                "manger_id" => $mangerId,
                "dep_id" => $dep_id['department_id'],
                "th_name" => $thName,
                "state" => "已删除",
                "create_date" => date("Y-m-d")
            ];
            model("Thing")->addThing($info);
            $this->success('操作成功', 'index/index/serveList');
        } else {
            $this->error('操作失败');
        }
    }

    // 评价
    public function evaluateList()
    {
        if (isset($_GET["page"])) {
            $pageinit = $_GET["page"];
        } else {
            $pageinit = 1;
        }
        $data = model("Evaluate")->with('serveE', 'clientE')->order('id', 'desc')->paginate(2);
        $page = $data->render();
        $this->assign('page', $page);
        $this->assign('pageinit', $pageinit);
        $this->assign('data', $data);
        return view();
    }

    public function deleteEvaluateInfo()
    {
        if (request()->isAjax()) {
            $id = input('post.id');
            $result = model('Evaluate')->where('id', '=', $id)->delete();
            if ($result) {
                $this->success('操作成功', 'index/index/evaluateList');
            } else {
                $this->error('操作失败');
            }
        }
    }

    public function systemView()
    {
        $request = Request::instance();
        //获取当前域名
        $domain = $request->domain();
        $ip = $request->ip();
        $file = $request->baseFile();
        $url = $request->url();
        $pathinfo = $request->pathinfo();
        $data = model('System')->find();
        $this->assign('domain', $domain);
        $this->assign('ip', $ip);
        $this->assign('file', $file);
        $this->assign('url', $url);
        $this->assign('pathinfo', $pathinfo);
        $this->assign('data', $data);
        return view();
    }

    public function editSystemInfo()
    {
        if (request()->isAjax()) {
            $data = [
                "id" => input('post.id'),
                "webname" => input('post.name'),
                "edition" => input('post.no')
            ];
            $result = model('System')->editSystem($data);
            if ($result == 1) {
                $this->success('操作成功', 'index/index/systemView');
            } else {
                $this->error($result);
            }
        }
    }

    // 销售订单
    public function orderList()
    {
        if (isset($_GET["page"])) {
            $pageinit = $_GET["page"];
        } else {
            $pageinit = 1;
        }
        $data = model("Order")->with('mangerO', 'clientO', 'productO')->order('id', 'desc')->paginate(2);
        $page = $data->render();
        $this->assign('page', $page);
        $this->assign('pageinit', $pageinit);
        $this->assign('data', $data);
        return view();
        return view();
    }

//    生成订单
    public function addOrder()
    {
        $product = model('Product')->select();
        $client = model('Client')->select();
        $this->assign('product', $product);
        $this->assign('client', $client);
        return view();
    }

    public function getProductInfo()
    {
        if (request()->isAjax()) {
            $id = input('post.id');
            $data = model('Product')->find($id);
            return $data;
        }
    }

    // 生成订单
    public function saveOrderInfo()
    {
        if (request()->isAjax()) {
            $data = [
                "order_no" => input('post.no'),
                "pro_id" => input('post.product'),
                "manger_id" => session('id'),
                "client_id" => input('post.client'),
                "pro_num" => input('post.num'),
                "price" => input('post.price'),
                "state" => 0,
                "months" => date('m')-1,
                "create_date" => date('Y-m-d')
            ];
            $id = session("id");
            $dep_id = model("Manger")->where("id", "=", $id)->find();
            $thName = "新增订单" . input("post.no");
            $result = model('Order')->saveOrder($data);
            if ($result == 1) {
                $info = [
                    "manger_id" => $id,
                    "dep_id" => $dep_id['department_id'],
                    "th_name" => $thName,
                    "state" => "未审批",
                    "create_date" => date("Y-m-d")
                ];
                model("Thing")->addThing($info);
                $this->success('操作成功', 'index/index/orderList');
            } else {
                $this->error($result);
            }
        }
    }

    public function deleteOrderInfo()
    {
        if (request()->isAjax()) {
            $id = input('post.id');
            $data = model('Order')->where('id', '=', $id)->find();
            $mangerId = session("id");
            $dep_id = model("Manger")->where("id", "=", $mangerId)->find();
            $thName = "删除订单" . $data['order_no'];
            $result = model('Order')->where('id', '=', $id)->delete();
            if ($result) {
                $info = [
                    "manger_id" => $mangerId,
                    "dep_id" => $dep_id['department_id'],
                    "th_name" => $thName,
                    "state" => "已删除",
                    "create_date" => date("Y-m-d")
                ];
                model("Thing")->addThing($info);
                $this->success('操作成功', 'index/index/orderList');
            } else {
                $this->error('操作失败');
            }
        }
    }

//    审批
    public function approve()
    {
        if (request()->isAjax()) {
            $data = [
                "id" => input('post.id'),
                "state" => 1
            ];
            $result = model('Order')->approveOrder($data);
            if ($result) {
                $order = model('Order')->find($data['id']);
                $orderInfo = [
                    "order_no" => $order['order_no'],
                    "pro_id" => $order['pro_id'],
                    "manger_id" => $order['manger_id'],
                    "client_id" => $order['client_id'],
                    "pro_num" => $order['pro_num'],
                    "price" => $order['price'],
                    "months" => $order['months'],
                    "create_date" => $order['create_date'],
                ];
                $orderResult = model('Orders')->saveOrders($orderInfo);
                if ($orderResult == 1) {
                    $product = model('Product')->find($order['pro_id']);
                    $salenumber = $product['salenumber'] + $order['pro_num'];
                    $productInfo = [
                        "id" => $order['pro_id'],
                        "salenumber" => $salenumber
                    ];
                    $proResult = model('Product')->updateNumber($productInfo);
                    if ($proResult == 1) {
                        $mangerId = session("id");
                        $dep_id = model("Manger")->where("id", "=", $mangerId)->find();
                        $thName = "审批订单" . $order['order_no'];
                        $info = [
                            "manger_id" => $mangerId,
                            "dep_id" => $dep_id['department_id'],
                            "th_name" => $thName,
                            "state" => "已审批",
                            "create_date" => date("Y-m-d")
                        ];
                        model("Thing")->addThing($info);
                        $this->success('操作成功', 'index/index/orderList');
                    } else {
                        $this->error($proResult);
                    }
                } else {
                    $this->error($orderResult);
                }
            } else {
                $this->error($result);
            }
        }
    }

//    编辑
    public function editOrder()
    {
        $id = $_GET['id'];
        $data = model('Order')->find($id);
        $client = model('Client')->find($data['client_id']);
        $product = model('Product')->find($data['pro_id']);
        $this->assign('client', $client);
        $this->assign('product', $product);
        $this->assign('data', $data);
        return view();
    }

    public function updateOrderInfo()
    {
        if (request()->isAjax()) {
            $data = [
                "id" => input('post.id'),
                "pro_num" => input('post.num'),
                "price" => input('post.price')
            ];
            $result = model('Order')->updateOrder($data);
            if ($result == 1) {
                $this->success('操作成功', 'index/index/orderList');
            } else {
                $this->error($result);
            }
        }
    }

//    工资管理
    public function wageManger()
    {
        if (isset($_GET["page"])) {
            $pageinit = $_GET["page"];
        } else {
            $pageinit = 1;
        }
        $data = model("Wages")->with('mangerW', 'departmentW')->order('state', 'desc')->paginate(2);
        $tax = model("Taxrate")->find();
        $manger = model('Manger')->where('id', '>', '1')->select();
        $department = model('Department')->select();
        $page = $data->render();
        $this->assign('page', $page);
        $this->assign('pageinit', $pageinit);
        $this->assign('data', $data);
        $this->assign('tax', $tax);
        $this->assign('manger', $manger);
        $this->assign('department', $department);
        return view();
    }

//    税率管理
    public function updateTaxRate()
    {
        $data = [
            "id" => input('post.id'),
            "tax5" => input('post.tax5'),
            "tax8" => input('post.tax8'),
            "royalty" => input('post.royalty')
        ];
        $result = model('Taxrate')->saveTax($data);
        if ($result == 1) {
            $this->success('操作成功', 'index/index/wageManger');
        } else {
            $this->error($result);
        }
    }

//    获取发工资人信息
    public function getMangerInfo()
    {
        $id = input('post.id');
        $data = model('Manger')->find($id);
        $department = model('Department')->find($data['department_id']);
        $tax = model('Taxrate')->find();
        $order = model('Orders')->where('manger_id', '=', $id)->count();
        $info = [
            "department" => $department,
            "tax" => $tax,
            "order" => $order
        ];
        return json($info);
    }

//    形成工资单
    public function saveWage()
    {
        $data = [
            "manger_id" => input('post.manger_id'),
            "dep_id" => input('post.department'),
            "allWage" => input('post.allWage'),
            "state" => 0,
            "surplusWage" => input('post.surplusWage'),
            "bonus" => input('post.bonus'),
            "months" => date('m') - 1,
            "create_date" => date('Y-m-d')
        ];
        $result = model("Wages")->savePersonWage($data);
        if ($result == 1) {
            $this->success('操作成功', 'index/index/wageManger');
        } else {
            $this->error($result);
        }
    }

//    审批
    public function approveWage()
    {
        $data = [
            "id" => input('post.id'),
            "state" => 1
        ];
        $result = model('Wages')->approve($data);
        if ($result == 1) {
            $info = model('Wages')->find($data['id']);
            $wageInfo = [
                "id" => $info['id'],
                "manger_id" => $info['manger_id'],
                "dep_id" => $info['dep_id'],
                "allWage" => $info['allWage'],
                "surplusWage" => $info['surplusWage'],
                "bonus" => $info['bonus'],
                "months" => $info['months'],
                "create_date" => $info['create_date'],
            ];
            $wageResult = model('Wage')->saveInfo($wageInfo);
            if ($wageResult == 1) {
                $this->success('操作成功','index/index/wageManger');
            } else {
                $this->error($wageResult);
            }
        } else {
            $this->error($result);
        }
    }
//    删除
    public function deleteWage()
    {
        $id = input('post.id');
        $approve = input('post.approve');
        $result = model('Wages')->find($id)->delete();
        if ($approve == 1) {
            model('Wage')->find($id)->delete();
        }
        if ($result) {
            $this->success('操作成功','index/index/wageManger');
        } else {
            $this->error('操作失败');
        }
    }
//    盈利管理
    public function profitManger()
    {
        if (isset($_GET["page"])) {
            $pageinit = $_GET["page"];
        } else {
            $pageinit = 1;
        }
        $data = model("Profit")->order('months', 'desc')->paginate(2);
        $page = $data->render();
        $this->assign('page', $page);
        $this->assign('pageinit', $pageinit);
        $this->assign('data', $data);
        return view();
    }
//    形成营业额
    public function saveProfit()
    {
        $date = date('m') - 1;
        $mangerWage = model('Wage')->where("months",'=',$date)->sum('allWage');
        $productWage = model('Product')->where("months",'=',$date)->sum('allcost');
        $orderWage = model('Orders')->where("months",'=',$date)->sum('price');
        if ($mangerWage == 0) {
            $this->error('未维护上月员工工资');
        }
        $data = [
            "months" => $date,
            "manger_wage" => $mangerWage,
            "product_wage" => $productWage,
            "order_wage" => $orderWage,
            "rent" => input('post.rent'),
            "electricity" => input('post.electricity'),
            "charge_for_water" => input('post.water'),
            "create_date" => date('Y-m-d')
        ];
        $result = model('Profit')->saveProfit($data);
        if ($result == 1) {
            $this->success('操作成功','index/index/profitManger');
        } else {
            $this->error($result);
        }
    }
    // 删除营业额
    public function deleteProfit()
    {
        $id = input('post.id');
        $result = model("Profit")->find($id)->delete();
        if ($result) {
            $this->success('操作成功','index/index/profitManger');
        } else {
            $this->error('操作失败');
        }
    }
//    销售分析
    public function saleAnalysis()
    {
        return view();
    }
    //每月订单走势
    public function orderTrend()
    {
        $date = date('m');
        $order = [];
        for ($i = 1; $i < $date; $i++) {
            $num = model('Order')->where('months','=',$i)->count('id');
            array_push($order,['month'=>$i,"num"=>$num]);
        }
        return json($order);
    }
//    每月进货数
    public function productTrend()
    {
        $date = date('m');
        $product = [];
        for ($i = 1; $i < $date; $i++) {
            $num = model('Product')->where('months','=',$i)->count('id');
            array_push($product,['month'=>$i,"num"=>$num]);
        }
        return json($product);
    }
    public function costTrend()
    {
        $date = date('m');
        $cost = [];
        $sale = [];
        for ($i = 1; $i < $date; $i++) {
            $num1 = model('Product')->where('months','=',$i)->sum('costprice');
            array_push($cost,['month'=>$i,"num"=>$num1]);
        }
        for ($i = 1; $i < $date; $i++) {
            $num2 = model('Orders')->where('months','=',$i)->sum('price');
            array_push($sale,['month'=>$i,"num"=>$num2]);
        }
        $data = [
            "cost" => $cost,
            "sale" => $sale
        ];
        return json($data);
    }
//    杂费
    public function incidental()
    {
        $date = date('m');
        $water = [];
        $rent = [];
        $electricity = [];
        for ($i = 1; $i < $date; $i++) {
            $num1 = model('Profit')->where('months','=',$i)->sum('charge_for_water');
            array_push($water,['month'=>$i,"num"=>$num1]);
            $num2 = model('Profit')->where('months','=',$i)->sum('rent');
            array_push($rent,['month'=>$i,"num"=>$num2]);
            $num3 = model('Profit')->where('months','=',$i)->sum('electricity');
            array_push($electricity,['month'=>$i,"num"=>$num3]);
        }
        $data = [
            "water" => $water,
            "rent" => $rent,
            "electricity" => $electricity
        ];
        return json($data);
    }
}

