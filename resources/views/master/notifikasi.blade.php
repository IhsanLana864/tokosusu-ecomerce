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
                <h3 class="fw-bold mb-4" style="color: #003366;">Notifikasi</h3>

                @php
                    $notifikasi = [
                        ['gambar' => 'assets/images/furniture.png', 'pesan' => '⚠️ Peringatan! Barang Hampir Kedaluwarsa <br> Pampers M (68 pcs) akan kedaluwarsa pada 22/02/27. Mohon segera lakukan tindakan yang diperlukan untuk menghindari potensi kerugian.', 'belum_dibaca' => true],
                        ['gambar' => 'assets/images/furniture.png', 'pesan' => '⚠️ Peringatan! Barang Hampir Kedaluwarsa <br> Pampers M (68 pcs) akan kedaluwarsa pada 22/02/27. Mohon segera lakukan tindakan yang diperlukan untuk menghindari potensi kerugian.', 'belum_dibaca' => true],
                        ['gambar' => 'assets/images/furniture.png', 'pesan' => '⚠️ Peringatan! Barang Hampir Kedaluwarsa <br> Pampers M (68 pcs) akan kedaluwarsa pada 22/02/27. Mohon segera lakukan tindakan yang diperlukan untuk menghindari potensi kerugian.', 'belum_dibaca' => true],
                        ['gambar' => 'assets/images/furniture.png', 'pesan' => '⚠️ Peringatan! Barang Hampir Kedaluwarsa <br> Pampers M (68 pcs) akan kedaluwarsa pada 22/02/27. Mohon segera lakukan tindakan yang diperlukan untuk menghindari potensi kerugian.', 'belum_dibaca' => false],
                        ['gambar' => 'assets/images/furniture.png', 'pesan' => '⚠️ Peringatan! Barang Hampir Kedaluwarsa <br> Pampers M (68 pcs) akan kedaluwarsa pada 22/02/27. Mohon segera lakukan tindakan yang diperlukan untuk menghindari potensi kerugian.', 'belum_dibaca' => false],
                        ['gambar' => 'assets/images/furniture.png', 'pesan' => '⚠️ Peringatan! Barang Hampir Kedaluwarsa <br> Pampers M (68 pcs) akan kedaluwarsa pada 22/02/27. Mohon segera lakukan tindakan yang diperlukan untuk menghindari potensi kerugian.', 'belum_dibaca' => false],
                    ];
                @endphp

                @foreach ($notifikasi as $item)
                    <div class="d-flex align-items-center p-3 mb-3 border rounded shadow-sm" style="background-color: #FFF9F9;">
                        <div class="position-relative me-3">
                            <img src="{{ asset($item['gambar']) }}" width="60" class="rounded">
                            @if ($item['belum_dibaca'])
                                <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle"></span>
                            @endif
                        </div>
                        <div style="color: #003366; font-weight: 500; font-size: 14px;">
                            {!! $item['pesan'] !!}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
