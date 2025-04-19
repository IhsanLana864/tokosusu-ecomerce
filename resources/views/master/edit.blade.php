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
                <div class="card p-4" style="background-color: #eaf6ff; border-radius: 20px;">
                    <h3 class="fw-bold mb-4" style="color: #003366;">Edit Barang</h3>

                    <div class="p-4" style="background-color: #fcdcdc; border-radius: 12px;">
                        <form action="{{ url('/master/update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Nama -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama :</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="Pampers M (68 Pcs)">
                            </div>

                            <!-- Kategori -->
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori :</label>
                                <select class="form-select" id="kategori" name="kategori">
                                    <option selected disabled>Pilih Kategori</option>
                                    <option value="Pampers" selected>Pampers</option>
                                    <option value="Makanan">Makanan</option>
                                    <option value="Minuman">Minuman</option>
                                </select>
                            </div>

                            <!-- Harga -->
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga :</label>
                                <input type="number" class="form-control" id="harga" name="harga" value="85000">
                            </div>

                            <!-- Satuan -->
                            <div class="mb-3">
                                <label for="satuan" class="form-label">Satuan :</label>
                                <input type="text" class="form-control" id="satuan" name="satuan" value="Bal">
                            </div>

                            <!-- Gambar -->
                            <div class="mb-4">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="gambar" name="gambar">
                            </div>

                            <!-- Tombol Simpan -->
                            <div class="text-end">
                                <button type="submit" class="btn text-white px-4" style="background-color: #003366; border-radius: 8px;">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
