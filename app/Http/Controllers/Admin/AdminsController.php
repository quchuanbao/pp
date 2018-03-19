<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Role;
use App\Log;

class AdminsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function home()
    {
        return view('admin.admins.Home');
    }

    public function index()
    {
        $admins = Admin::orderBy('id', 'desc')->paginate(15);
        return view('admin.admins.List', ['admins' => $admins]);
    }

    public function showEditForm(Admin $admins, $id = '')
    {
        if ($id) {
            $admins = Admin::findOrFail($id);
        }
        $view['role'] = Role::all();
        $view['admins'] = $admins;
        return view('admin.admins.edit', $view);
    }

    protected function store(Request $request, Admin $admins)
    {
        $rules = [
            'name' => 'required|max:255',
            'tel' => 'required|max:255',
            'description' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|min:6|confirmed',
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
        if ($request['id']) {
            $rules['email'] = 'required|email|max:255';
            $rules['password'] = 'nullable|min:6|confirmed';
            $rules['pic'] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
            $admins = Admin::find($request['id']);
        }
        $this->validate($request, $rules);
        if ($request['password']) {
            $admins->password = bcrypt($request['password']);
        }

        if ($request->file('pic')) {
            $img = Image::make($request->file('pic'))->resize(480, 480)->encode();
            //return $img->response($request->file('pic')->getClientOriginalExtension());
            Storage::put('public/news/' . $request->file('pic')->hashName(), $img);
            $request->file('pic')->store('public/news');
            $admins->pic = '/storage/news/' . $request->file('pic')->hashName();
        }

        $this->validate($request, $rules);
        $admins->description = $request['description'];
        $admins->name = $request['name'];
        $admins->tel = $request['tel'];
        $admins->email = $request['email'];
        $admins->save();
        $admins->saveRoles($request['role']);
        if ($request['id']) {
            $option['unionId'] = $admins->id;
            $option['action'] = config('app.logAction')['edit'];
            $option['actionType'] = config('app.logActionType')['admins'];
            $option['description'] = "编辑管理员：" . $admins->name;
            $option['request'] = $request;
        } else {
            $option['unionId'] = $admins->id;
            $option['action'] = config('app.logAction')['create'];
            $option['actionType'] = config('app.logActionType')['admins'];
            $option['description'] = "创建管理员：" . $admins->name;
            $option['request'] = $request;
        }

        log::savelog($option);
        return redirect()->route('admins')->with('notify', '操作成功!');
    }

    public function del($id = '')
    {
        Admin::whereId($id)->delete();
        //$admins = Admin::findOrFail($id);
        //$admins->delete();
        return redirect()->route('admins')->with('notify', '操作成功!');
    }


}
