<?php

namespace App\Http\Controllers\Admin\User;

use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\StorageImage;;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use   StorageImage;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function index()
    {

        $usersv = $this->user->latest()->paginate(5);
        return (view('Admin.users.index', compact('usersv'), [
            'title' => 'add product'
        ]));
    }
    public function create()
    {
        return (view('Admin.users.create', [
            'title' => 'add user'
        ]));
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password'
        ]);
        $dataupdates = [
            'ten_user' => $request->name,
            'sodienthoai' => $request->phone,
            'diachi' => $request->adress,
            'password' => $request->password,
            'gioitinh' => $request->gioitinh,
            'email' => $request->email,
            'isadmin' => $request->true
        ];
        if ($request->isadmin) {
            $dataupdates['isadmin'] = true;
        } else
            $dataupdates['isadmin'] = false;
        $datauploadfile = $this->StroageImgupload($request, fileName: 'avatar', Path: 'user');
        if (!empty($datauploadfile)) {
            $dataupdates['avatar_path'] = $datauploadfile['path'];
            $dataupdates['avatar'] = $datauploadfile['name'];
        }
        $this->user->create($dataupdates);

        return redirect()->route('user.index');
    }
    public function edit($id)
    {
        $user = $this->user->find($id);
        return (view('Admin.users.edit', compact('user'), [
            'title' => 'add user'
        ]));
    }


    public function update($id, Request $request)
    {
        $dataupdate = [
            'ten_user' => $request->name,
            'sodienthoai' => $request->phone,
            'diachi' => $request->adress,
            'gioitinh' => $request->gioitinh,
            'email' => $request->email,
            'isadmin' => $request->isadmin
        ];
        if ($request->isadmin == 'true') {
            $dataupdate['isadmin'] = true;
        } else
            $dataupdate['isadmin'] = false;

        $datauploadfile = $this->StroageImgupload($request, fileName: 'avatar', Path: 'user');
        if (!empty($datauploadfile)) {
            $dataupdate['avatar_path'] = $datauploadfile['path'];
            $dataupdate['avatar'] = $datauploadfile['name'];
        }
        $this->user->find($id)->update($dataupdate);
        return redirect()->route('user.index');
    }
    public function delete($id)
    {
        $this->user->find($id)->delete();
        return redirect(route('user.index'));
    }
}