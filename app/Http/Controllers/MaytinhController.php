<?php

namespace App\Http\Controllers;

use App\Models\Maytinh;
use App\Models\Phongmay;
use Illuminate\Http\Request;

class MaytinhController extends Controller
{
    // 'id',
    // 'ma_giaovien',
    // 'ma_lophoc',
    // 'ma_phongmay',
    // 'ma_Adminkiemtra'
    public function __construct(
        Maytinh $maytinh,
        Phongmay $phongmay
    ) {
        $this->maytinh = $maytinh;
        $this->phongmay = $phongmay;
    }
    function index()
    {
        $maytinhs  = $this->maytinh->latest()->paginate(5);
        return view("Admin.Maytinh.Index", compact('maytinhs'));
    }

    public function create()
    {

        $selectphongmay = $this->phongmay::all();
        return (view('Admin.Maytinh.create', compact('selectphongmay'), [
            'title' => 'Thêm thêm ca hoc'
        ]));
    }

    public function store(Request $request)
    {


        $datacreate = [
            'tenmaytinh' => $request->tenmaytinh,
            'mota' => $request->mota,
            'ram' => $request->ram,
            'cpu' => $request->cpu,
            'ocung' => $request->ocung,
            'ma_phongmay' => $request->ma_phongmay
        ];
        $this->maytinh->create($datacreate);
        return redirect()->route('Maytinh.index');
    }
    public function edit($id)
    {
        $maytinh = $this->maytinh->find($id);

        $selectphongmay = $this->phongmay::all();
        return (view('Admin.maytinh.edit', compact('selectphongmay', 'maytinh')));
    }

    public function update($id, Request $request)
    {


        $dataupdates = [
            'tenmaytinh' => $request->tenmaytinh,
            'mota' => $request->mota,
            'ram' => $request->ram,
            'cpu' => $request->cpu,
            'ocung' => $request->ocung,
            'ma_phongmay' => $request->ma_phongmay
        ];

        $this->maytinh->find($id)->update($dataupdates);
        return redirect()->route('maytinh.index');
    }
    public function delete($id)
    {
        $this->maytinh->find($id)->delete();
        return redirect(route('Maytinh.index'));
    }
}