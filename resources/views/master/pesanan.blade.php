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
            <h3 class="fw-bold mb-4" style="color: #003366;">Pesanan</h3>

            <div class="table-responsive">
                <table class="table align-middle text-center" style="border-collapse: separate; border-spacing: 0 10px;">
                    <thead>
                        <tr style="background-color: #FFE5E5; border-radius: 10px;">
                            <th class="text-start ps-4">ID Pesanan</th>
                            <th>Waktu</th>
                            <th>Total Pembayaran</th>
                            <th>Status Pesanan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $statuses = [
                                'Pending' => 'bg-warning text-dark',
                                'Diterima' => 'bg-success text-white',
                                'Ditolak' => 'bg-danger text-white',
                                'Dikemas' => 'bg-primary text-white',
                                'Dikirim' => 'bg-info text-white',
                                'Selesai' => 'bg-primary text-white'
                            ];
                        @endphp

                        @foreach($statuses as $status => $badgeClass)
                        <tr style="background-color: #FFE5E5; border-radius: 10px;">
                            <td class="text-start ps-4">
                                <a href="{{ url('/master/detail') }}" class="text-decoration-none text-dark">
                                    <i class="bi bi-file-earmark-text-fill me-2 text-primary"></i>
                                    <strong>TSB-2202250001</strong>
                                </a>
                            </td>
                            <td>22/02/2025<br>10.35</td>
                            <td>175.000</td>
                            <td>
                                <span class="badge {{ $badgeClass }}" style="font-size: 0.9rem; padding: 0.5em 1em; border-radius: 10px;">
                                    {{ $status }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
