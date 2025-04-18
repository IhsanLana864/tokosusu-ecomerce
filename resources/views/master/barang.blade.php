@extends('admin.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 p-0">
                @include('admin.sidebar')
            </div>

            <!-- Main content -->
            <div class="col-md-9 col-lg-10 mt-4">
                <div class="bg-white rounded-4 p-4 shadow-sm" style="background-color: #FFECEC;">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-bold mb-0">Barang</h3>
                        <a href="{{ url('/master/tambah') }}" class="btn text-white"
                            style="background-color: #003366;">Tambah</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-borderless" style="background-color: #FFDFDF; border-radius: 10px;">
                            <thead class="text-center fw-bold" style="color: #003366;">
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
                                    <tr class="align-middle" style="background-color: #FFECEC; border-radius: 10px;">
                                        <td class="d-flex align-items-center gap-3 ps-4">
                                            <img src="{{ asset('assets/images/furniture.png') }}" alt="Produk"
                                                width="50" height="50" style="border-radius: 10px;">
                                            Pampers M (68 Pcs)
                                        </td>
                                        <td>Pampers</td>
                                        <td>85.000</td>
                                        <td>Bal</td>
                                        <td>
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="#" class="btn btn-sm text-white"
                                                    style="background-color: #003366; min-width: 60px;">Edit</a>
                                                <a href="#" class="btn btn-sm text-white"
                                                    style="background-color: #FF5C8D; min-width: 60px;">Hapus</a>
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
