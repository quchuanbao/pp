<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use App\Log;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        $list = Role::orderBy('id', 'desc')->paginate(15);
        return view('admin.roles.List', ['list' => $list]);
    }

    public function showEditForm(Role $list, $id = '')
    {
        if ($id) {
            $list = Role::findOrFail($id);
        }
        $option[] = ['union_id', $id];
        $option[] = ['action_type', config('app.logActionType')['roles']];
        $view['log'] = Log::getList($option);
        $view['permission'] = Permission::all();
        $view['list'] = $list;
        return view('admin.roles.edit', $view);
    }

    protected function store(Request $request, Role $row)
    {
        $rules = [
            'name' => 'required|max:255',
            'display_name' => 'required|max:255',
            'description' => 'required|max:255',
            'permission' => 'nullable'
        ];
        if ($request['id']) {
            $row = Role::find($request['id']);
        }
        $this->validate($request, $rules);

        $row->description = $request['description'];
        $row->name = $request['name'];
        $row->display_name = $request['display_name'];
        $row->save();
        $row->savePermissions($request['permission']);

        if ($request['id']) {
            $option['unionId'] = $row->id;
            $option['action'] = config('app.logAction')['edit'];
            $option['actionType'] = config('app.logActionType')['roles'];
            $option['description'] = "编辑角色：" . $row->display_name;
            $option['request'] = $request;
        } else {
            $option['unionId'] = $row->id;
            $option['action'] = config('app.logAction')['create'];
            $option['actionType'] = config('app.logActionType')['roles'];
            $option['description'] = "创建角色：" . $row->display_name;
            $option['request'] = $request;
        }

        log::savelog($option);


        return redirect()->route('role')->with('notify', '操作成功!');
    }

    public function del($id = '', Request $request)
    {
        $info = Role::find($id);
        Role::whereId($id)->delete();
        $option['unionId'] = $id;
        $option['action'] = config('app.logAction')['delete'];
        $option['actionType'] = config('app.logActionType')['roles'];
        $option['description'] = "删除角色：" . $info->display_name;
        $option['request'] = $request;
        log::savelog($option);
        return redirect()->route('role')->with('notify', '操作成功!');
    }
}