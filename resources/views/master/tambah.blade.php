@extends('admin.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 p-0">
                @include('admin.sidebar')
            </div>

            <!-- Main content -->
            <div class="col-md-9 col-lg-10 py-4">
                <div class="card shadow-sm px-4 py-4" style="background-color: #FFECEC; border-radius: 10px;">
                    <h5 class="fw-bold mb-4" style="color: #14213D;">Tambah Barang</h5>
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">Nama :</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama barang"
                                style="border-radius: 6px;">
                        </div>

                        <div class="mb-3">
                            <label for="kategori" class="form-label fw-semibold">Kategori :</label>
                            <select class="form-select" id="kategori" style="border-radius: 6px;">
                                <option selected disabled>Pilih Kategori</option>
                                <option value="1">Furniture</option>
                                <option value="2">Elektronik</option>
                                <option value="3">Alat Tulis</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label fw-semibold">Harga :</label>
                            <input type="number" class="form-control" id="harga" placeholder="Masukkan harga"
                                style="border-radius: 6px;">
                        </div>

                        <div class="mb-3">
                            <label for="satuan" class="form-label fw-semibold">Satuan :</label>
                            <input type="text" class="form-control" id="satuan" placeholder="Masukkan satuan"
                                style="border-radius: 6px;">
                        </div>

                        <div class="mb-3">
                            <label for="gambar" class="form-label fw-semibold">Gambar</label>
                            <div class="input-group">
                                <label class="btn text-white" style="background-color: #14213D; border-radius: 6px;">
                                    Pilih File
                                    <input type="file" id="gambar" hidden>
                                </label>
                                <input type="text" class="form-control" placeholder="Belum ada file dipilih" disabled
                                    style="border-radius: 6px;">
                            </div>
                        </div>

                        <div class="text-end mt-4">
                            <button type="submit" class="btn text-white px-4"
                                style="background-color: #14213D; border-radius: 6px;">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
