<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        $list = Permission::orderBy('id','desc')->paginate(15);
        return view('admin.permission.List', ['list' => $list]);
    }

    public function showEditForm(Permission $list, $id = '')
    {
        if ($id) {
            $list = Permission::findOrFail($id);
        }
        return view('admin.permission.edit', ['list' => $list]);
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
        return redirect()->route('permission')->with('notify', '操作成功!');
    }

    public function del($id = ''){
        RolPermissione::whereId($id)->delete();
        return redirect()->route('permission')->with('notify', '操作成功!');
    }
}