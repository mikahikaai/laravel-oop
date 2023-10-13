<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Armada;


class ArmadaController extends Controller
{
    public function index()
    {

        $armada = Armada::orderBy('id', 'DESC')->paginate(10);

        return view('armada.index', ['armadas' => $armada]);
    }

    public function create()
    {
        return view('armada.create');
    }

    public function docreate(Request $request)
    {
        $data_mobil = rules($request->jenis_mobil);
        Armada::create([
            'plat' => $request->plat,
            'jenis_mobil' => $request->jenis_mobil,
            'kateg_mobil' => $data_mobil->get('kateg_mobil'),
            'kecepatan_kosong' => $data_mobil->get('kecepatan_kosong'),
            'kecepatan_muatan' => $data_mobil->get('kecepatan_muatan')
        ]);

        return redirect('/armada');
    }

    public function update($id)
    {
        $armada = Armada::find($id);

        return view('armada.update', ['armada' => $armada]);
    }

    public function doupdate($id, Request $request)
    {
        $data_mobil = rules($request->jenis_mobil);
        $armada = Armada::find($id);
        $armada->plat = $request->plat;
        $armada->jenis_mobil = $request->jenis_mobil;
        $armada->kateg_mobil = $data_mobil->get('kateg_mobil');
        $armada->kecepatan_kosong = $data_mobil->get('kecepatan_kosong');
        $armada->kecepatan_muatan = $data_mobil->get('kecepatan_muatan');
        $armada->status_keaktifan = $request->status_keaktifan;
        $armada->save();

        return redirect('/armada');
    }

    public function delete($id)
    {
        Armada::find($id)->delete();

        return redirect('/armada');
    }
}
