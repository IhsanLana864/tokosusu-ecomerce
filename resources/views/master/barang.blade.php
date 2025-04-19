@extends('admin.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 p-0">
                @include('admin.sidebar')
            </div>

            <!-- Main content -->
            <div class="col-md-9 col-lg-10 mt-4 ps-md-4">
                <div class="card-pink">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-bold mb-0" style="color: #003366;">Barang</h3>
                        <a href="{{ url('/master/tambah') }}" class="btn text-white"
                            style="background-color: #003366; border-radius: 8px;">Tambah</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-borderless table-barang">
                            <thead class="text-center fw-bold">
                                <tr>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Satuan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle text-center">
                                @for ($i = 0; $i < 7; $i++)
                                    <tr>
                                        <td class="d-flex align-items-center gap-3 ps-4 py-3">
                                            <img src="{{ asset('assets/images/furniture.png') }}" alt="Produk"
                                                width="50" height="50" style="border-radius: 10px;">
                                            Pampers M (68 Pcs)
                                        </td>
                                        <td>Pampers</td>
                                        <td>85.000</td>
                                        <td>Bal</td>
                                        <td>
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="{{ url('/master/edit') }}" class="btn btn-sm btn-edit">Edit</a>
                                                <a href="#" class="btn btn-sm btn-hapus">Hapus</a>
                                            </div>
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
