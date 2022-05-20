<?php

namespace App\Http\Controllers\Admin\User;

use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\StorageImage;;

use App\component\Recute;
use App\Models\Nhomkiemke;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use   StorageImage;
    public function __construct(User $user, Nhomkiemke $nhomkiemke)
    {
        $this->user = $user;
        $this->nhomkiemke = $nhomkiemke;
    }
    public function index()
    {

        $usersv = $this->user->latest()->paginate(5);
        return (view('Admin.users.index', compact('usersv'), [
            'title' => 'add product'
        ]));
    }
    public function getnhom($parent_id)
    {
        $data = $this->nhomkiemke->all();
        $recusive = new Recute($data);
        $htmlOption = $recusive->returnselecte($parent_id);
        return $htmlOption;
    }

    public function create($parent_id = '')
    {
        $htmlOption = $this->getnhom($parent_id);

        return (view('Admin.users.create', compact('htmlOption'), [
            'title' => 'add user',
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
            'password' => bcrypt($request->password),
            'gioitinh' => $request->gioitinh,
            'email' => $request->email,
            'isadmin' => $request->true,
            'manhom' => $request->manhom
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
    public function edit($id, $parent_id = '')
    {
        $htmlOption = $this->getnhom($parent_id);

        $user = $this->user->find($id);
        return (view('Admin.users.edit', compact('user', 'htmlOption'), [
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
            'isadmin' => $request->isadmin,
            'manhom' => $request->manhom

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