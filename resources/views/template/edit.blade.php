    @extends('Layouts.main')

    @section('container')
    <h1 class="container mb-4">Edit Data Pembelian</h1>
    <div class="container">

            <div class="card">
                <div class="card-body">
                    <form action="{{ url('/updatedata', $data->id) }}" method="PUT" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">nobukti</label>
                            <input type="number" class="form-control" value="{{ $data->nobukti }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">idpemasok</label>
                            <input type="number" class="form-control" value="{{ $data->idpemasok }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">harga</label>
                            <input type="number" class="form-control" value="{{ $data->Harga }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">ket</label>
                            <input type="text" class="form-control" value="{{ $data->ket }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

    </div>
    @endsection
