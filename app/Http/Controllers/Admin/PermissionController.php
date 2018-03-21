<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Permission;
use Illuminate\Http\Request;
use App\Log;

class PermissionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        $list = Permission::orderBy('id', 'desc')->paginate(15);
        return view('admin.permission.List', ['list' => $list]);
    }

    public function showEditForm(Permission $list, $id = '')
    {
        if ($id) {
            $list = Permission::findOrFail($id);
        }
        $option[] = ['union_id', $id];
        $option[] = ['action_type', config('app.logActionType')['permissions']];
        $view['log'] = Log::getList($option);
        $view['list'] = $list;
        return view('admin.permission.edit', $view);
    }

    protected function store(Request $request, Permission $row)
    {
        $rules = [
            'name' => 'required|max:255',
            'display_name' => 'required|max:255',
            'description' => 'required|max:255',
        ];
        if ($request['id']) {
            $row = Permission::find($request['id']);
        }
        $this->validate($request, $rules);

        $row->description = $request['description'];
        $row->name = $request['name'];
        $row->display_name = $request['display_name'];
        $row->save();

        if ($request['id']) {
            $option['unionId'] = $row->id;
            $option['action'] = config('app.logAction')['edit'];
            $option['actionType'] = config('app.logActionType')['permissions'];
            $option['description'] = "编辑权限：" . $row->display_name;
            $option['request'] = $request;
        } else {
            $option['unionId'] = $row->id;
            $option['action'] = config('app.logAction')['create'];
            $option['actionType'] = config('app.logActionType')['permissions'];
            $option['description'] = "创建权限：" . $row->display_name;
            $option['request'] = $request;
        }

        log::savelog($option);

        return redirect()->route('permission')->with('notify', '操作成功!');
    }


    public function del($id = '', Request $request)
    {
        $info = RolPermissione::find($id);
        RolPermissione::whereId($id)->delete();
        $option['unionId'] = $id;
        $option['action'] = config('app.logAction')['delete'];
        $option['actionType'] = config('app.logActionType')['permissions'];
        $option['description'] = "删除权限：" . $info->display_name;
        $option['request'] = $request;
        log::savelog($option);
        return redirect()->route('permission')->with('notify', '操作成功!');
    }
}