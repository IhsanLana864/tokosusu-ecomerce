<!DOCTYPE html>
<html lang="id">
<head>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
        }

        .cart-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #003087;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        thead {
            background-color: #ffdede;
        }

        thead th {
            padding: 12px;
            text-align: left;
            color: #333;
            font-weight: bold;
        }

        tbody tr {
            background-color: #e6f1ff;
            border-bottom: 1px solid #ccc;
        }

        tbody td {
            padding: 15px;
            vertical-align: middle;
        }

        .product-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .product-info img {
            width: 50px;
            height: auto;
        }

        .qty-control {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .qty-control button {
            width: 25px;
            height: 25px;
            background-color: #003087;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
        }

        .qty-control input {
            width: 30px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .hapus-btn {
            background-color: #d9edff;
            color: #003087;
            padding: 6px 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
        }

        .total {
            text-align: right;
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .total strong {
            font-size: 1.3rem;
        }

        .checkout-btn {
            background-color: #003087;
            color: #fff;
            padding: 10px 25px;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="checkbox"] {
            width: 18px;
            height: 18px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="cart-title">Keranjang</h1>

        <table>
            <thead>
                <tr>
                    <th>Barang</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="product-info">
                            <input type="checkbox" checked>
                            <img src="{{ asset('assets/images/furniture.png') }}" alt="Produk">
                            <span>Pampers M (68 Pcs)</span>
                        </div>
                    </td>
                    <td>85.000</td>
                    <td>
                        <div class="qty-control">
                            <button>-</button>
                            <input type="text" value="1">
                            <button>+</button>
                        </div>
                    </td>
                    <td><button class="hapus-btn">Hapus</button></td>
                </tr>
                <tr>
                    <td>
                        <div class="product-info">
                            <input type="checkbox">
                            <img src="{{ asset('assets/images/furniture.png') }}" alt="Produk">
                            <span>Pampers M (68 Pcs)</span>
                        </div>
                    </td>
                    <td>85.000</td>
                    <td>
                        <div class="qty-control">
                            <button>-</button>
                            <input type="text" value="1">
                            <button>+</button>
                        </div>
                    </td>
                    <td><button class="hapus-btn">Hapus</button></td>
                </tr>
            </tbody>
        </table>

        <div class="total">
            TOTAL (2 Barang) : <strong>85.000</strong>
        </div>

        <div class="text-right">
            <button class="checkout-btn">Checkout</button>
        </div>
    </div>

</body>

</html>
