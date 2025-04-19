@extends('admin.layout.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 p-0">
            @include('admin.sidebar')
        </div>

        <!-- Main Content -->
        <div class="col-md-9 col-lg-10 p-4">
            <div class="card p-4" style="background-color: #EAF6FF; border-radius: 20px;">
                <h3 class="fw-bold mb-4" style="color: #003366;">Laporan Penjualan</h3>

                <p class="mb-3" style="font-weight: 500;">Silakan pilih rentang waktu untuk melihat laporan.</p>

                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label for="tanggal_awal" class="form-label fw-semibold">Dari Tanggal</label>
                        <input type="date" id="tanggal_awal" class="form-control" style="border-radius: 10px;">
                    </div>
                    <div class="col-md-6">
                        <label for="tanggal_akhir" class="form-label fw-semibold">Sampai Tanggal</label>
                        <input type="date" id="tanggal_akhir" class="form-control" style="border-radius: 10px;">
                    </div>
                </div>

                <button class="btn text-white px-4" style="background-color: #003366; border-radius: 10px;">
                    Tampilkan
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
