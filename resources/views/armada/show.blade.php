@extends('armada.armada')

@section('title', 'Armada | Lihat Data')

@section('content')
    @method('GET')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Armada</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="plat">Plat</label>
                <input type="text" name="plat" id="" placeholder="Masukkan Plat Mobil . . ."
                    value="{{ $armada->plat }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="jenis_mobil">Jenis Mobil</label>
                <select name="jenis_mobil" id="" class="form-control">
                    <option value="" disabled>-- Pilih Jenis Mobil --</option>
                    <?php $array_mobil = ['L300', 'GRAN MAX', 'ENGKEL', 'PS', 'FUSO']; ?>
                    @foreach ($array_mobil as $mobil)
                        <?= $selected = $mobil == $armada->jenis_mobil ? 'selected' : '' ?>
                        <option {{ $selected }} value="{{ $mobil }}">{{ $mobil }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="kateg_mobil">Kategori</label>
                <input type="text" name="kateg_mobil" id="" value="{{ $armada->kateg_mobil }}"
                    class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="kecepatan_kosong">Kecepatan Kosong</label>
                <input type="text" name="kecepatan_kosong" id="" value="{{ $armada->kecepatan_kosong }}"
                    class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="kecepatan_muatan">Kecepatan Muatan</label>
                <input type="text" name="kecepatan_muatan" id="" value="{{ $armada->kecepatan_muatan }}"
                    class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="status_keaktifan">Status</label>
                <select name="status_keaktifan" id="" class="form-control">
                    <option value="" disabled>-- Pilih Status Keaktifan --</option>
                    <?php $array_status_keaktifan = ['AKTIF', 'NON AKTIF']; ?>
                    @foreach ($array_status_keaktifan as $status_aktif)
                        <?= $selected = $status_aktif == $armada->status_keaktifan ? 'selected' : '' ?>
                        <option {{ $selected }} value="{{ $status_aktif }}">{{ $status_aktif }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
@endsection
