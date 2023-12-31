<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Armada;

class ArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $armada = Armada::orderBy('id', 'DESC')->paginate(10);

        return view('armada.index', ['armadas' => $armada]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('armada.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $armada = Armada::find($id);

        return view('armada.show', ['armada' => $armada]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $armada = Armada::find($id);

        return view('armada.update', ['armada' => $armada]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Armada::find($id)->delete();

        return redirect('/armada');
    }
}
