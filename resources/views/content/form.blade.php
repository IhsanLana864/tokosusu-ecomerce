<style>
      body {
    margin: 0;
    padding: 0;
  }
    /* Header Checkout */
    .keranjang-header {
        background: linear-gradient(to bottom, #f9f9f9, white);
        background-image: url('{{ asset("assets/images/bg-lacak.png") }}');
        background-size: top;
        background-position: top;
        padding: 80px 20px 80px;
        position: relative;
        text-align: center;
        height: 500px; /* disesuaikan agar gambar tidak terpotong */
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
    .order-item img {
        height: 70px;
    }
    .form-container {
        margin-top: 60px;
        padding: 30px;
        background-color: #f4fdb4;
        border-radius: 10px;
    }
    .order-summary {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
    }
    .order-item {
        background-color: #cde8ff;
        padding: 10px;
        border-radius: 8px;
        margin-bottom: 10px;
    }
    .status-badge {
        font-weight: bold;
    }
</style>