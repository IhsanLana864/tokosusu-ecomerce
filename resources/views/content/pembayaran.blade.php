<style>
    body {
        margin: 0;
        padding: 0;
    }

    /* Header Checkout */
    .keranjang-header {
        background: linear-gradient(to bottom, #f9f9f9, white);
        background-image: url('{{ asset("assets/images/background-blank.png") }}');
        background-size: top;
        background-position: top;
        padding: 60px 20px 80px;
        position: relative;
        text-align: center;
        height: 470px; /* disesuaikan agar gambar tidak terpotong */
    }
    .keranjang-header {
    display: flex;
    justify-content: center; /* Center seluruh isi secara horizontal */
    align-items: center;     /* Vertikal rata tengah */
    margin-top: 40px;
}

.keranjang-header h1 {
    font-family: 'Protest Riot', sans-serif;
    font-size: 2.5rem;
    color: #0b3c9c;
    margin: 0;
    display: inline-block;

    /* Stroke putih (pakai text-shadow trik) */
    text-shadow:
        -2px -2px 0 #ffffff,
         2px -2px 0 #ffffff,
        -2px  2px 0 #ffffff,
         2px  2px 0 #ffffff,
         0px  0px 4px #ffffff;
}

.keranjang-header img {
    width: 40px;
    height: auto;
    margin-left: 10px;
}



    /* Awan bagian bawah */
    .clouds {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 60px;
    background: url('{{ asset("assets/images/clouds.png") }}') repeat-x center;
    background-size: contain;
}

    /* Form dan Order Styling */
    .form-container {
        background-color: #ffe0e0;
        padding: 30px;
        border-radius: 10px;
        margin-top: 60px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .order-item {
        background-color: #d2ebff;
        border-radius: 10px;
        padding: 10px;
        margin-bottom: 10px;
    }

    .order-item img {
        height: 70px;
    }

    .summary-box {
        background-color: white;
        padding: 15px;
        border-radius: 10px;
        border-top: 3px solid #000080;
    }

    .form-label {
        font-weight: 500;
    }
    </style>
