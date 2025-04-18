@extends('admin.layout.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 p-0">
            @include('admin.sidebar')
        </div>

        <div class="col-md-9 col-lg-10 p-4">
            <h3 class="fw-bold mb-4">Laporan Penjualan</h3>

            <div class="card p-4">
                <p>Silakan pilih rentang waktu untuk melihat laporan.</p>
                <input type="date" class="form-control mb-2">
                <input type="date" class="form-control mb-3">

                <button class="btn btn-primary">Tampilkan</button>
            </div>
        </div>
    </div>
</div>
@endsection
