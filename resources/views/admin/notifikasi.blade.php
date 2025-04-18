@extends('admin.layout.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 p-0">
            @include('admin.sidebar')
        </div>

        <div class="col-md-9 col-lg-10 p-4">
            <h3 class="fw-bold mb-4">Notifikasi</h3>

            <ul class="list-group">
                <li class="list-group-item">Stok Susu SGM tinggal 5!</li>
                <li class="list-group-item">Barang masuk hari ini: 20 pcs Susu Bendera</li>
                <li class="list-group-item">Transaksi baru dari Bu Ani</li>
            </ul>
        </div>
    </div>
</div>
@endsection
