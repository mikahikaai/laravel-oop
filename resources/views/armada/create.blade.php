@extends('armada.armada')

@section('title', 'Armada | Tambah Data')

@section('content')
    <form action="/armada/docreate" method="POST">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Armada</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="plat">Plat</label>
                    <input type="text" name="plat" id="" placeholder="Masukkan Plat Mobil . . ."
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="jenis_mobil">Jenis Mobil</label>
                    <select name="jenis_mobil" id="" class="form-control">
                        <option value="" disabled>-- Pilih Jenis Mobil --</option>
                        <option value="GRAN MAX">GRAN MAX</option>
                        <option value="L300">L300</option>
                        <option value="ENGKEL">ENGKEL</option>
                        <option value="PS">PS</option>
                        <option value="FUSO">FUSO</option>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </form>
@endsection
