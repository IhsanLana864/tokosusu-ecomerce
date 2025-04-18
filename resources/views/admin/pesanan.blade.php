@extends('admin.layout.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 p-0">
            @include('admin.sidebar')
        </div>

        <div class="col-md-9 col-lg-10 p-4">
            <h3 class="fw-bold mb-4">Data Pesanan</h3>

            <table class="table table-bordered table-striped">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Pembeli</th>
                        <th>Barang</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bu Ani</td>
                        <td>Susu Bebelac</td>
                        <td>2</td>
                        <td>Selesai</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
