<?php

namespace App\Http\Controllers;

use App\Models\Cahoc;
use Illuminate\Http\Request;

use App\component\Recute;


class CahocController extends Controller
{
    // 'id',
    // 'ma_giaovien',
    // 'ma_lophoc',
    // 'ma_phongmay',
    // 'ma_userkiemtra'
    public function __construct(Cahoc $cahoc)
    {
        $this->cahoc = $cahoc;
    }
    function index()
    {
        $cahocs  = $this->cahoc->latest()->paginate(5);
        return view("User.cahoc.Index", compact('cahocs'));
    }
    public function getnhom($parent_id)
    {
        $data = $this->nhomkiemke->all();
        $recusive = new Recute($data);
        $htmlOption = $recusive->returnselecte($parent_id);
        return $htmlOption;
    }
    public function create()
    {
        return (view('User.Cahoc.create', [
            'title' => 'Thêm thêm ca hoc'
        ]));
    }
    public function store(Request $request)
    {

        $request->validate([
            'Ten_cahoc' => 'required',
        ]);
        $dataupdates = [
            'ten_cahoc' => $request->Ten_cahoc,
        ];
        $this->cahoc->create($dataupdates);
        return redirect()->route('cahoc.index');
    }
    public function edit($id)
    {
        $cahoc = $this->cahoc->find($id);
        return (view('Admin.cahoc.edit', compact('cahoc'), [
            'title' => 'add user'
        ]));
    }

    public function update($id, Request $request)
    {

        $request->validate([
            'Ten_cahoc' => 'required',
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
        return redirect(route('cahoc.index'));
    }
}