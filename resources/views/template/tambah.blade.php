    @extends('Layouts.main')

    @section('container')
    <h1 class="container mb-4">Tambah Data Pembelian</h1>
    <div class="container">

            <div class="card">
                <div class="card-body">
                    <form action="/insertdata" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">nobukti</label>
                            <input type="number"name="nobukti" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">idpemasok</label>
                            <input type="number" name="idpemasok" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">harga</label>
                            <input type="number" name="harga" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">ket</label>
                            <input type="text" name="ket" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

    </div>
    @endsection
