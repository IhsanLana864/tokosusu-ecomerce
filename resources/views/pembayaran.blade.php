<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toko Susu Bahagia - Checkout</title>

    {{-- Include CSS & Font --}}
    @include('include.style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">

    {{-- Optional form style --}}
    @include('content.form')
</head>

<body>
    {{-- Navbar --}}
    @include('include.navbar')

    {{-- Header Section --}}
    <div class="keranjang-header">
        <h1>Checkout</h1>
        <img src="{{ asset('assets/images/keranjang-icon.png') }}" alt="Keranjang">
        <div class="clouds"></div>
    </div>

    {{-- Main Content --}}
    <main class="container">
        {{-- Pembayaran Section --}}
        @include('content.pembayaran')

        {{-- Form Section --}}
        <div class="container py-5">
            <div class="row g-4">
                <!-- LEFT FORM -->
                <div class="col-md-6">
                    <div class="form-container">
                        <div class="mb-3">
                            <label class="form-label">Nama :</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Whatsapp :</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat :</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>

                        <h6 class="fw-bold">Detail Pesanan</h6>
                        <div class="order-item d-flex align-items-center">
                            <img src="{{ asset('assets/images/furniture.png') }}" alt="image description" class="me-3">
                            <div class="flex-grow-1">Pampers M (68 Pcs)</div>
                            <div>85.000</div>
                        </div>
                        <div class="order-item d-flex align-items-center">
                            <img src="{{ asset('assets/images/furniture.png') }}" alt="image description" class="me-3">
                            <div class="flex-grow-1">Pampers M (68 Pcs)</div>
                            <div>85.000</div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT FORM -->
                <div class="col-md-6">
                    <div class="form-container">
                        <h6 class="fw-bold">Pengiriman :</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pengiriman" id="internal" checked>
                            <label class="form-check-label" for="internal">Internal (Cikarang)</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="pengiriman" id="external">
                            <label class="form-check-label" for="external">External (Luar Cikarang)</label>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Ekspedisi :</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Rekening Pembayaran</label>
                            <select class="form-select">
                                <option selected>Pilih Rekening</option>
                                <option value="1">BCA - 123456</option>
                                <option value="2">BRI - 654321</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bukti Pembayaran</label>
                            <input type="file" class="form-control">
                        </div>

                        <h6 class="fw-bold">Ringkasan Pesanan</h6>
                        <div class="summary-box mb-3">
                            <div class="d-flex justify-content-between">
                                <div>Sub Total</div>
                                <div>170.000</div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>Pengiriman</div>
                                <div>5.000</div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between fw-bold">
                                <div>TOTAL</div>
                                <div>175.000</div>
                            </div>
                        </div>

                        <button class="btn btn-primary w-100">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- Back to top --}}
    <div id="toTop"></div>

    {{-- Scripts --}}
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
    @include('include.script')
    @include('include.blank')
</body>
</html>
