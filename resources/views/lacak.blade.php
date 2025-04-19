<!DOCTYPE html>
<html lang="en">

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8" />
    <!-- set the compatibility of your site -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- page title -->
    <title>Toko Susu Bahagia - Ecommerce</title>
    <!-- include styles -->
    @include('include.style')
    <meta charset="UTF-8">
    <title>Checkout Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('content.form')
    {{-- @include('checkout.stylecheckout') --}}
</head>

<body>
    {{-- <div id="pageWrapper"> --}}
        @include('include.navbar')
        <body>
        <div class="keranjang-header">
            <img src="{{ asset('assets/images/keranjang-icon.png') }}" alt="Keranjang">
            <h1>Lacak pesanan</h1>
            <div class="clouds"></div>
        </div>
            <div class="container">
                @include('checkout.lacakpesanan')

                <div class="row justify-content-center">
                                <!-- Include about content -->
                    <!-- Form Kiri -->
                    <div class="col-md-6 form-container">
                        <form>
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
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="fw-bold">Detail Pesanan</label>
                                <div class="order-item d-flex align-items-center">
                                    <img src="assets/images/furniture.png" class="me-3" alt="Item">
                                    <div class="flex-grow-1">Pampers M (68 Pcs)</div>
                                    <div>85.000</div>
                                </div>
                                <div class="order-item d-flex align-items-center">
                                    {{-- <img src="assets/images/furniture.png" class="img-fluid" alt="..."> --}}
                                    <img src="assets/images/furniture.png" class="me-3" alt="Item">
                                    <div class="flex-grow-1">Pampers M (68 Pcs)</div>
                                    <div>85.000</div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Form Kanan -->
                    <div class="col-md-4 form-container">
                        <form>
                            <div class="mb-3">
                                <label class="fw-bold">Pengiriman :</label><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pengiriman" id="internal" checked>
                                    <label class="form-check-label" for="internal">Internal (Cikarang)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pengiriman" id="external">
                                    <label class="form-check-label" for="external">External (Luar Cikarang)</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="fw-bold">Status Pembayaran :</label><br>
                                <span class="badge bg-success status-badge">Dibayar</span>
                            </div>

                            <div class="mb-3">
                                <label class="fw-bold">Status Pesanan :</label><br>
                                <span class="badge bg-primary status-badge">Dikemas</span>
                            </div>

                            <div class="mb-3">
                                <label for="resi" class="form-label">No Resi :</label>
                                <input type="text" class="form-control" id="resi" value="IDR947563942543" readonly>
                            </div>

                            <div class="order-summary">
                                <p class="mb-1">Sub Total: <span class="float-end">170.000</span></p>
                                <p class="mb-1">Pengiriman: <span class="float-end">5.000</span></p>
                                <hr>
                                <p class="fw-bold">TOTAL: <span class="float-end">175.000</span></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </body>
        </html>
        @include("include.script")


        <!-- Back to top button -->
        <div id="toTop"></div>
    </div>

    <!-- Scripts -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
    @include('include.script')
</body>
 @include('include.blank')
</html>
