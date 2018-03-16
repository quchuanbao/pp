<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;

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
        return redirect()->route('role')->with('notify', '操作成功!');
    }

    public function del($id = '')
    {
        Role::whereId($id)->delete();
        return redirect()->route('role')->with('notify', '操作成功!');
    }
}