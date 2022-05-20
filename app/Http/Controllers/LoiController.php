<?php

namespace App\Http\Controllers;

use App\Models\Cahoc;
use App\Models\Loi;
use App\Models\Maytinh;
use Illuminate\Http\Request;

class LoiController extends Controller
{

    public function __construct(Loi $loi, Cahoc $cahoc, Maytinh $maytinh)
    {
        $this->loi = $loi;
        $this->cahoc = $cahoc;
        $this->maytinh = $maytinh;
    }
    function index()
    {
        $lois  = $this->loi->latest()->paginate(5);

        return view("User.Loi.Index", compact('lois'));
    }
    public function create()
    {
        $selectcahoc = $this->cahoc::all();
        $selectmaytinh = $this->maytinh::all();
        return (view('User.loi.create', compact('selectmaytinh', 'selectcahoc'), [
            'title' => 'Thêm  Lỗi'
        ]));
    }
    public function store(Request $request)
    {
        // 'id',
        // 'macatruockhiloi',
        // 'ma_maytinh',
        // 'dientaloi',
        // 'trang_thai',
        // 'ngayphathienloi'

        $request->validate([
            'dientaloi' => 'required',
            'ngayphathienloi' => 'before:tomorrow'
        ]);
        $datacreate = [
            'dientaloi' => $request->dientaloi,
            'macatruockhiloi' => $request->ma_cahoc,
            'trang_thai' => true,
            'ma_maytinh' => $request->ma_maytinh,
            'ngayphathienloi' => $request->ngayphathienloi
        ];
        $this->loi->create($datacreate);
        return redirect()->route('Loi.index');
    }

    public function edit($id)
    {
        $selectcahoc = $this->cahoc::all();
        $selectmaytinh = $this->maytinh::all();
        $loi = $this->loi->find($id);
        return (view('User.loi.edit', compact('loi', 'selectcahoc', 'selectmaytinh'), [
            'title' => 'add user',
        ]));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'dientaloi' => 'required',
            'ngayphathienloi' => 'before:tomorrow'
        ]);
        $dataupdate = [
            'dientaloi' => $request->dientaloi,
            'macatruockhiloi' => $request->ma_cahoc,
            'trang_thai' => $request->trang_thai,
            'ma_maytinh' => $request->ma_maytinh,
            'ngayphathienloi' => $request->ngayphathienloi
        ];
        $this->loi->find($id)->update($dataupdate);
        return redirect()->route('Loi.index');
    }
    public function delete($id)
    {
        $this->loi->find($id)->delete();
        return redirect(route('Loi.index'));
    }
}