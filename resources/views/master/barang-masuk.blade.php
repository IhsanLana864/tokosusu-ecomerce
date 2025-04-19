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
            <div class="card p-4" style="background-color: #fed3d3; border-radius: 20px;">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold mb-0" style="color: #003366;">Barang Masuk</h3>
                    <a href="{{ url('/barang-masuk/tambah') }}" class="btn text-white px-4"
                        style="background-color: #003366; border-radius: 8px;">Tambah</a>
                </div>

                <div class="table-responsive">
                    <table class="table align-middle text-center" style="border-collapse: separate; border-spacing: 0 10px;">
                        <thead style="background-color: #FFD6D6; color: #003366;" class="fw-bold">
                            <tr>
                                <th>Barang</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Jumlah</th>
                                <th>Kedaluwarsa</th>
                                <th>Harga</th>
                                <th>Sumber</th>
                                <th>Penerima</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 6; $i++)
                                <tr style="background-color: #FFE5E5; border-radius: 12px;">
                                    <td class="d-flex align-items-center gap-3 ps-3 py-3">
                                        <img src="{{ asset('assets/images/furniture.png') }}" alt="Produk"
                                            width="50" height="50" style="border-radius: 10px;">
                                        <div class="text-start fw-semibold">
                                            Pampers M (68 Pcs)
                                        </div>
                                    </td>
                                    <td>22/02/2025</td>
                                    <td>10.35</td>
                                    <td>12</td>
                                    <td>10/08/2027</td>
                                    <td>80.000</td>
                                    <td>Kharisma</td>
                                    <td>Ariyanto</td>
                                    <td>
                                        <a href="{{ url('/barang-masuk/edit/'.$i) }}" class="btn btn-sm text-white"
                                            style="background-color: #003366; border-radius: 6px;">Edit</a>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
