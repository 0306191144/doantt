<?php

namespace App\Http\Controllers;

use App\Models\Phongmay;
use Illuminate\Http\Request;

class PhongmayController extends Controller
{
    public function __construct(Phongmay $phongmay)
    {
        $this->phongmay = $phongmay;
    }
    function index()
    {
        $phongmays  = $this->phongmay->latest()->paginate(5);
        return view("Admin.Phongmay.Index", compact('phongmays'));
    }
    public function create()
    {
        return (view('Admin.Phongmay.create', [
            'title' => 'Thêm  Giáo Viên'
        ]));
    }
    public function store(Request $request)
    {

        $request->validate([
            'tenphongmay' => 'required',
        ]);
        $datacreate = [
            'tenphongmay' => $request->tenphongmay
        ];
        $this->phongmay->create($datacreate);
        return redirect()->route('Phongmay.index');
    }

    public function edit($id)
    {
        $phongmay = $this->phongmay->find($id);
        return (view('Admin.Phongmay.edit', compact('phongmay'), [
            'title' => 'add user'
        ]));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'tenphongmay' => 'required|unique:phongmay',
        ]);
        $dataupdates = [
            'tenphongmay' => $request->tenphongmay
        ];
        $this->phongmay->find($id)->update($dataupdates);
        return redirect()->route('Phongmay.index');
    }
    public function delete($id)
    {
        $this->phongmay->find($id)->delete();
        return redirect(route('Phongmay.index'));
    }
}