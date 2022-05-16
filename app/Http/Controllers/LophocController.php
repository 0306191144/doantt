<?php

namespace App\Http\Controllers;

use App\Models\Lophoc;
use Illuminate\Http\Request;

class LophocController extends Controller
{
    public function __construct(Lophoc $lophoc)
    {
        $this->lophoc = $lophoc;
    }
    function index()
    {
        $lophocs  = $this->lophoc->latest()->paginate(5);

        return view("Admin.Lophoc.Index", compact('lophocs'));
    }
    public function create()
    {
        return (view('Admin.lophoc.create', [
            'title' => 'Thêm  Giáo Viên'
        ]));
    }
    public function store(Request $request)
    {

        $request->validate([
            'tenlophoc' => 'required |unique:lophoc',
        ]);
        $datacreate = [
            'tenlophoc' => $request->tenlophoc,
        ];
        $this->lophoc->create($datacreate);
        return redirect()->route('Lophoc.index');
    }

    public function edit($id)
    {
        $lophoc = $this->lophoc->find($id);
        return (view('Admin.Lophoc.edit', compact('lophoc'), [
            'title' => 'add user'
        ]));
    }

    public function update($id, Request $request)
    {

        $request->validate([
            'tenlophoc' => 'required|unique:lophoc',
        ]);
        $dataupdates = [
            'tenlophoc' => $request->tenlophoc,
        ];
        $this->lophoc->find($id)->update($dataupdates);
        return redirect()->route('Lophoc.index');
    }
    public function delete($id)
    {
        $this->lophoc->find($id)->delete();
        return redirect(route('Lophoc.index'));
    }
}