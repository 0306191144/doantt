<?php

namespace App\Http\Controllers;

use App\Models\Nhomkiemke;
use Illuminate\Http\Request;

class NhomkiemkeController extends Controller
{
    public function __construct(Nhomkiemke $nhomkiemke)
    {
        $this->nhomkiemke = $nhomkiemke;
    }
    function index()
    {
        $nhomkiemkes  = $this->nhomkiemke->latest()->paginate(5);

        return view("Admin.nhomkiemke.Index", compact('nhomkiemkes'));
    }
    public function create()
    {
        return (view('Admin.nhomkiemke.create', [
            'title' => 'Thêm  Giáo Viên'
        ]));
    }
    public function store(Request $request)
    {

        $request->validate([
            'tennhomkiemke' => 'required |unique:nhomkiemke',
        ]);
        $datacreate = [
            'tennhomkiemke' => $request->tennhomkiemke,
        ];
        $this->nhomkiemke->create($datacreate);
        return redirect()->route('Nhomkiemke.index');
    }

    public function edit($id)
    {
        $nhomkiemke = $this->nhomkiemke->find($id);
        return (view('Admin.nhomkiemke.edit', compact('nhomkiemke'), [
            'title' => 'add nhóm kiểm kê'
        ]));
    }

    public function update($id, Request $request)
    {

        $request->validate([
            'tennhomkiemke' => 'required',
        ]);
        $dataupdates = [
            'tennhomkiemke' => $request->tennhomkiemke,
        ];
        $this->nhomkiemke->find($id)->update($dataupdates);
        return redirect()->route('Nhomkiemke.index');
    }
    public function delete($id)
    {
        $this->nhomkiemke->find($id)->delete();
        return redirect(route('Nhomkiemke.index'));
    }
}