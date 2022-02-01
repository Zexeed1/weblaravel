    @extends('layouts.main')

    @section('container')
    <!-- tabel1 -->
    <h3 class="text-center">Tabel Pembelian</h3>
    <a href="{{ url('tambahpem') }}" class="btn btn-success btn sm">Tambah ++</a>
    @if ($message = Session::get('success'))
    <div class="alert alert-secondary" role="alert">
        {{ $message }}
    </div>
    @endif
    <table class="table table-dark" width="1000px">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">nobukti</th>
            <th scope="col">idpemasok</th>
            <th scope="col">harga</th>
            <th scope="col">ket</th>
            <th scope="col">Tanggal Pembelian</th>
            <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ( $data as $power )
        <tr>
            <th scope="row">{{ $power->id }}</th>
            <td>{{ $power->nobukti }}</td>
            <td>{{ $power->idpemasok }}</td>
            <td>Rp.{{ $power->Harga }}</td>
            <td>{{ $power->ket }}</td>
            <td>{{ $power->created_at->format('D M Y') }}</td>


            <td>
                <a href="/edit/{{ $power->id }}" class="btn btn-primary ">Edit</a>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <hr />
    <!-- tabel2 -->
    <h3 class="text-center">Tabel Mutasi</h3>
    <table class="table table-success" style="float:right">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">nobukti</th>
            <th scope="col">idstok</th>
            <th scope="col">jumlah</th>
            <th scope="col">harga</th>
            <th scope="col">kode</th>
            <th scope="col">ket</th>
            <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>#</td>
            <td>#</td>
            <td>#</td>
            <td>#</td>
            <td>#</td>
            <td>#</td>
            <td>
            <a href="{{ url('editpem') }}" class="btn btn-primary btn-sm">Edit</a>
            <a href="#" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        </tbody>
    </table>
    @endsection
