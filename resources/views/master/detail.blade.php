@extends('admin.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 p-0">
                @include('admin.sidebar')
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 py-4 ps-md-4 ps-lg-5">
                <h5 class="fw-bold mb-4" style="color: #14213D;">TSB-2202250001</h5>

                <div class="row">
                    <!-- Kolom Kiri -->
                    <div class="col-md-8">
                        <!-- Data Pembeli -->
                        <div class="mb-3" style="background-color: #FFECEC; border-radius: 10px; padding: 20px;">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama :</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama"
                                    style="border-radius: 6px;">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">No Whatsapp :</label>
                                <input type="text" class="form-control" placeholder="Masukkan no Whatsapp"
                                    style="border-radius: 6px;">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Alamat :</label>
                                <textarea class="form-control" placeholder="Masukkan alamat" style="border-radius: 6px;" rows="2"></textarea>
                            </div>

                            <!-- Detail Pesanan -->
                            <div class="mt-4">
                                <h6 class="fw-bold mb-3">Detail Pesanan</h6>
                                <div class="d-flex align-items-center justify-content-between mb-2 p-2"
                                    style="background-color: #D9EDFF; border-radius: 8px;">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/furniture.png') }}" alt="Produk" width="50"
                                            class="me-3 rounded">
                                        <span class="fw-semibold">Pampers M (68 Pcs)</span>
                                    </div>
                                    <span class="fw-semibold">85.000</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2 p-2"
                                    style="background-color: #D9EDFF; border-radius: 8px;">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/furniture.png') }}" alt="Produk" width="50"
                                            class="me-3 rounded">
                                        <span class="fw-semibold">Pampers M (68 Pcs)</span>
                                    </div>
                                    <span class="fw-semibold">85.000</span>
                                </div>
                            </div>
                        </div>

                        <!-- Status Pesanan -->
                        <div class="mt-4 mb-3" style="background-color: #FFECEC; border-radius: 10px; padding: 20px;">
                            <h6 class="fw-bold mb-3">Status Pesanan</h6>
                            <div class="d-flex flex-wrap gap-2">
                                @foreach (['Pending', 'Diterima', 'Ditolak', 'Dikemas', 'Dikirim', 'Selesai'] as $status)
                                    <button class="btn btn-outline-primary btn-sm"
                                        style="border-radius: 10px;">{{ $status }}</button>
                                @endforeach
                            </div>
                        </div>

                        <!-- Tombol Simpan -->
                        <div class="text-start mt-3">
                            <button class="btn text-white px-4"
                                style="background-color: #14213D; border-radius: 6px;">Simpan</button>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-md-4">
                        <div class="mb-3" style="background-color: #FFECEC; border-radius: 10px; padding: 20px;">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Pengiriman :</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pengiriman" id="internal"
                                        value="internal">
                                    <label class="form-check-label" for="internal">Internal (Cikarang)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pengiriman" id="eksternal"
                                        value="eksternal">
                                    <label class="form-check-label" for="eksternal">External (Luar Cikarang)</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Ekspedisi :</label>
                                <input type="text" class="form-control" placeholder="Masukkan ekspedisi"
                                    style="border-radius: 6px;">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">No Rekening Pembayaran :</label>
                                <input type="text" class="form-control" placeholder="Masukkan no rekening"
                                    style="border-radius: 6px;">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Bukti Pembayaran :</label>
                                <div class="bg-white p-2 rounded">
                                    <img src="{{ asset('assets/images/furniture.png') }}" alt="Bukti Pembayaran" class="img-fluid"
                                        style="max-width: 100%; border-radius: 8px;">
                                </div>
                            </div>

                            <!-- Ringkasan -->
                            <div class="mt-4">
                                <h6 class="fw-bold mb-2">Ringkasan Pesanan</h6>
                                <div class="d-flex justify-content-between">
                                    <span>Sub Total</span>
                                    <span>170.000</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Pengiriman</span>
                                    <span>5.000</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between fw-bold">
                                    <span>Total</span>
                                    <span>175.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End row -->
            </div>
        </div>
    </div>
@endsection
