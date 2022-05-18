<?php

namespace App\Http\Controllers;

use App\Models\Cahoc;
use Illuminate\Http\Request;

use App\component\Recute;
use App\Models\Giaovien;
use App\Models\Lophoc;
use App\Models\Phongmay;
use Illuminate\Support\Facades\Auth;

class CahocController extends Controller
{
    // 'id',
    // 'ma_giaovien',
    // 'ma_lophoc',
    // 'ma_phongmay',
    // 'ma_userkiemtra'
    public function __construct(
        Cahoc $cahoc,
        Giaovien $giaovien,
        Lophoc $lophoc,
        Phongmay $phongmay
    ) {
        $this->cahoc = $cahoc;
        $this->giaovien = $giaovien;
        $this->lophoc = $lophoc;
        $this->phongmay = $phongmay;
    }
    function index()
    {
        $cahocs  = $this->cahoc->latest()->paginate(5);
        return view("User.cahoc.Index", compact('cahocs'));
    }

    public function create()
    {
        $selectgiaovien = $this->giaovien::all();
        $selectlophoc = $this->lophoc::all();
        $selectphongmay = $this->phongmay::all();
        return (view('User.Cahoc.create', compact('selectgiaovien', 'selectphongmay', 'selectlophoc'), [
            'title' => 'Thêm thêm ca hoc'
        ]));
    }
    public function store(Request $request)
    {
        $datacreate = [
            'ma_phongmay' => $request->ma_phongmay,
            'ma_lophoc' => $request->ma_lophoc,
            'ma_giaovien' => $request->ma_giaovien,
            'ma_userkiemtra' => Auth::id(),
            'tencahoc' => $request->tencahoc
        ];
        $this->cahoc->create($datacreate);
        return redirect()->route('Cahoc.index');
    }
    public function edit($id)
    {
        $cahoc = $this->cahoc->find($id);
        $selectgiaovien = $this->giaovien::all();
        $selectlophoc = $this->lophoc::all();
        $selectphongmay = $this->phongmay::all();
        return (view('User.Cahoc.edit', compact('selectgiaovien', 'selectphongmay', 'selectlophoc', 'cahoc')));
    }

    public function update($id, Request $request)
    {

        $request->validate([
            'tencahoc' => 'required',
        ]);
        $dataupdates = [
            'ten_cahoc' => $request->Ten_cahoc,
        ];
        $this->cahoc->find($id)->update($dataupdates);
        return redirect()->route('cahoc.index');
    }
    public function delete($id)
    {
        $this->cahoc->find($id)->delete();
        return redirect(route('Cahoc.index'));
    }
}