<?php

namespace App\Http\Controllers;

use App\Models\Giaovien;
use Illuminate\Http\Request;

class GiaovienController extends Controller
{
    public function __construct(Giaovien $giaovien)
    {
        $this->giaovien = $giaovien;
    }
    function index()
    {
        $giaoviens  = $this->giaovien->latest()->paginate(5);

        return view("Admin.Giaovien.Index", compact('giaoviens'));
    }
    public function create()
    {
        return (view('Admin.Giaovien.create', [
            'title' => 'Thêm  Giáo Viên'
        ]));
    }
    public function store(Request $request)
    {

        $request->validate([
            'Ten_giaovien' => 'required',

        ]);
        $dataupdates = [
            'ten_giaovien' => $request->Ten_giaovien,
        ];
        $this->giaovien->create($dataupdates);
        return redirect()->route('Giaovien.index');
    }
    public function edit($id)
    {
        $giaovien = $this->giaovien->find($id);
        return (view('Admin.Giaovien.edit', compact('giaovien'), [
            'title' => 'add user'
        ]));
    }

    public function update($id, Request $request)
    {

        $request->validate([
            'Ten_giaovien' => 'required',
        ]);
        $dataupdates = [
            'ten_giaovien' => $request->Ten_giaovien,
        ];
        $this->giaovien->find($id)->update($dataupdates);
        return redirect()->route('Giaovien.index');
    }
    public function delete($id)
    {
        $this->user->find($id)->delete();
        return redirect(route('user.index'));
    }
}