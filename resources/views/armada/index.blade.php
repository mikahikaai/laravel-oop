@extends('armada.armada')

@section('title', 'Armada | Home')

@section('content')
    <a href="/armada/create" class="btn btn-success my-2">Tambah Armada</a>

    <table class="table table-bordered table-collapsed table-striped table-hover">
        <thead class="table-info">
            <th>No.</th>
            <th>Plat</th>
            <th>Jenis Mobil</th>
            <th>Kategori</th>
            <th>Kecepatan Kosong</th>
            <th>Kecepatan Muatan</th>
            <th>Status Aktif</th>
            <th>Opsi</th>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($armadas as $armada)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $armada->plat }}</td>
                    <td>{{ $armada->jenis_mobil }}</td>
                    <td>{{ $armada->kateg_mobil }}</td>
                    <td>{{ $armada->kecepatan_kosong }}</td>
                    <td>{{ $armada->kecepatan_muatan }}</td>
                    <td>{{ $armada->status_keaktifan }}</td>
                    <td>
                        <form action="/armada/{{ $armada->id }}" method="POST">
                            <a href="armada/{{ $armada->id }}" class="btn btn-sm btn-warning">Lihat</a>
                            <a href="armada/{{ $armada->id }}/edit" class="btn btn-sm btn-primary">Ubah</a>
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    Halaman : {{ $armadas->currentPage() }} <br />
    Jumlah Data : {{ $armadas->total() }} <br />
    Data Per Halaman : {{ $armadas->perPage() }} <br />
    <div class="mt-3">
        {{ $armadas->links() }}
    </div>
@endsection
