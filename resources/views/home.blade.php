<!DOCTYPE html>
<html lang="en">

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8" />
    <!-- set the Compatible of your site -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- set the page title -->
    <title>Toko Susu Bahagia - Ecommerce</title>
    <!-- include the site Google Fonts stylesheet -->
    @include('include.style')

</head>

<body>
    <div id="pageWrapper">
        <!-- pageHeader -->
        @include('include.navbar')
        <!-- main -->
        <main>
            <!-- introBlock -->
            <section class="introBlock position-relative">
                <div class="slick-fade">
                    <div>
                        <div class="align w-100 d-flex align-items-center bgCover"
                            style="background-image: url('{{ asset('assets/images/Background1.png') }}')">
                            <!-- holder -->
                            <div class="container position-relative holder pt-xl-10 pt-0">
                                <!-- py-12 pt-lg-30 pb-lg-25 -->
                                <div class="row">
                                    <div class="col-12 col-xl-7">
                                        <div class="txtwrap pr-lg-10">
                                            <span
                                                class="title d-block text-uppercase fwEbold position-relative pl-2 mb-lg-5 mb-sm-3 mb-1">Selamat
                                                Datang di
                                            </span>
                                            <h2 class="fwEbold position-relative mb-xl-7 mb-lg-5">
                                                Website Toko Susu Bahagia
                                                <span class="text-break d-block"></span>
                                            </h2>
                                            <p class="mb-xl-15 mb-lg-10">
                                                Tumbuh Sehat dengan Susu Terbaik!Dukung pertumbuhan si
                                                kecil dan kesehatan keluarga dengan susu segar penuh
                                                nutrisi.
                                            </p>
                                            <a href="shop.html"
                                                class="btn btnTheme btnShop fwEbold text-white md-round py-2 px-3 py-md-3 px-md-4">Shop
                                                Now <i class="fas fa-arrow-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="imgHolder">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="align w-100 d-flex align-items-center bgCover"
                            style="background-image: url('{{ asset('assets/images/bg-bby2.png') }}')">
                            <!-- holder -->
                            <div class="container position-relative holder pt-xl-10 pt-0">
                                <!-- py-12 pt-lg-30 pb-lg-25 -->
                                <div class="row">
                                    <div class="col-12 col-xl-7">
                                        <div class="txtwrap pr-lg-10">
                                            <h1 class="fwEbold position-relative pb-lg-8 pb-4 mb-xl-7 mb-lg-6">
                                                TOKO
                                                <span class="text-break d-block">Susu Bahagia</span>
                                            </h1>
                                            <p class="mb-xl-15 mb-lg-10">
                                                Tumbuh Sehat dengan Susu Terbaik!Dukung pertumbuhan si
                                                kecil dan kesehatan keluarga dengan susu segar penuh
                                                nutrisi.
                                            </p>
                                            <a href="shop.html"
                                                class="btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3">Shop
                                                Now <i class="fas fa-arrow-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="imgHolder">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="align w-100 d-flex align-items-center bgCover"
                            style="background-image: url('{{ asset('assets/images/bg-bby1.png') }}')">
                            <!-- holder -->
                            <div class="container position-relative holder pt-xl-10 pt-0">
                                <!-- py-12 pt-lg-30 pb-lg-25 -->
                                <div class="row">
                                    <div class="col-12 col-xl-7">
                                        <div class="txtwrap pr-lg-10">
                                            <span
                                                class="title d-block text-uppercase fwEbold position-relative pl-2 mb-lg-5 mb-sm-3 mb-1">Website
                                                E-commerce</span>
                                            <h2 class="fwEbold position-relative mb-xl-7 mb-lg-5">
                                                Toko Susu Bahagia
                                            </h2>
                                            <p class="mb-xl-15 mb-lg-10">
                                                Lorem ipsum is simply dummy text of the printing and
                                                typesetting industry.
                                            </p>
                                            <a href="shop.html"
                                                class="btn btnTheme btnShop fwEbold text-white md-round py-2 px-3 py-md-3 px-md-4">Shop
                                                Now <i class="fas fa-arrow-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="imgHolder">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slickNavigatorsWrap">
                    <a href="#" class="slick-prev"><i class="icon-leftarrow"></i></a>
                    <a href="#" class="slick-next"><i class="icon-rightarrow"></i></a>
                </div>
            </section>
            <!-- chooseUs-sec -->
            <section class="chooseUs-sec container pt-xl-22 pt-lg-20 pt-md-16 pt-10 pb-xl-12 pb-md-7 pb-2">
                <div class="row">
                    <div class="col-12 col-lg-6 mb-lg-0 mb-4">
                        <img src="{{ asset('assets/images/furniture.png') }}" alt="image description ya"
                            class="img-fluid" />
                    </div>
                    <div class="col-12 col-lg-6 pr-4">
                        <h2 class="headingII fwEbold playfair position-relative mb- pb-5">
                            Kenapa Belanja di Toko Susu Bahagia?
                        </h2>
                        <p class="mb-xl-14 mb-lg-10">
                            Toko Susu Bahagia menyediakan berbagai pilihan susu berkualitas
                            dan produk kebutuhan bayi terbaik. Dengan bahan baku terbaik dan
                            proses produksi higienis, kami memastikan setiap produk aman dan
                            sehat untuk keluarga Anda.
                        </p>
                        <!-- chooseList -->
                        <ul class="list-unstyled chooseList">
                            <li class="d-flex justify-content-start mb-xl-7 mb-lg-5 mb-3">
                                <span class="icon icon-plant"></span>
                                <div class="alignLeft d-flex justify-content-start flex-wrap">
                                    <h3 class="headingIII fwEbold mb-2">
                                        Susu Berkualitas Premium
                                    </h3>
                                    <p>
                                        Dibuat dari susu segar pilihan yang berasal dari
                                        peternakan terbaik, menjamin rasa dan manfaat optimal.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex justify-content-start mb-xl-6 mb-lg-5 mb-4">
                                <span class="icon icon-ic-plant"></span>
                                <div class="alignLeft d-flex justify-content-start flex-wrap">
                                    <h3 class="headingIII fwEbold mb-2">
                                        Produk Sehat & Bergizi
                                    </h3>
                                    <p>
                                        Setiap produk mengandung nutrisi tinggi yang mendukung
                                        tumbuh kembang bayi dan kesehatan keluarga Anda.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex justify-content-start">
                                <span class="icon icon-desert"></span>
                                <div class="alignLeft d-flex justify-content-start flex-wrap">
                                    <h3 class="headingIII fwEbold mb-2">
                                        Belanja Mudah & Cepat
                                    </h3>
                                    <p>
                                        Nikmati pengalaman belanja online yang praktis dengan
                                        berbagai metode pembayaran dan pengiriman cepat.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- featureSec -->
            <section
                class="featureSec container-fluid overflow-hidden pt-xl-12 pt-lg-10 pt-md-80 pt-5 pb-xl-10 pb-lg-4 pb-md-2 px-xl-14 px-lg-7">
                <!-- mainHeader -->
                <header class="col-12 mainHeader mb-7 text-center">
                    <h1 class="headingIV playfair fwEblod mb-4">
                        Yukkk Mom, lengkapi kebutuhan harian si Kecil!
                    </h1>
                    <span class="headerBorder d-block mb-md-5 mb-3">
                        <img src="{{ asset('assets/images/hbdr.png') }}" alt="Header Border"
                            class="img-fluid img-bdr" />
                    </span>
                    <p>
                        Toko Susu Bahagia menghadirkan susu segar berkualitas dan produk
                        bayi terbaik untuk mendukung kesehatan keluarga Anda.
                    </p>
                </header>
                <div class="col-12 p-0 overflow-hidden d-flex flex-wrap">
                    <!-- featureCol -->
                    <div class="featureCol px-3 mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/furniture.png') }}" alt="image description"
                                    class="img-fluid w-100" />

                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-heart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-cart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-eye d-block"></a>
                                    </li>
                                    <li class="overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-arrow d-block"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Sit voluptatem</a></span>
                                <span class="price d-block fwEbold">68.00 $</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol px-3 position-relative mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/furniture.png') }}" alt="image description"
                                    class="img-fluid w-100" />

                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-heart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-cart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-eye d-block"></a>
                                    </li>
                                    <li class="overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-arrow d-block"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Neque Porro
                                        Quisquamest</a></span>
                                <span class="price d-block fwEbold">60.50 $</span>
                                <span
                                    class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol px-3 mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/furniture.png') }}" alt="image description"
                                    class="img-fluid w-100" />

                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-heart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-cart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-eye d-block"></a>
                                    </li>
                                    <li class="overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-arrow d-block"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Pellentesque
                                        aliquet</a></span>
                                <span class="price d-block fwEbold">68.00 $</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol px-3 position-relative mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/furniture.png') }}" alt="image description"
                                    class="img-fluid w-100" />

                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-heart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-cart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-eye d-block"></a>
                                    </li>
                                    <li class="overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-arrow d-block"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Aspetur Autodit
                                        Autfugit</a></span>
                                <span class="price d-block fwEbold"><del>80.00 $</del>66.00 $</span>
                                <span
                                    class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol px-3 mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/furniture.png') }}" alt="image description"
                                    class="img-fluid w-100" />

                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-heart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-cart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-eye d-block"></a>
                                    </li>
                                    <li class="overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-arrow d-block"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Sit voluptatem</a></span>
                                <span class="price d-block fwEbold">70.50 $</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol position-relative px-3 mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/furniture.png') }}" alt="image description"
                                    class="img-fluid w-100" />

                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-heart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-cart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-eye d-block"></a>
                                    </li>
                                    <li class="overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-arrow d-block"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Sint Incidunt
                                        Utlabore</a></span>
                                <span class="price d-block fwEbold"><del>75.00 $</del>60.50 $</span>
                                <span
                                    class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
                                <span
                                    class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block ml-8">Sale</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol px-3 mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/furniture.png') }}" alt="image description"
                                    class="img-fluid w-100" />

                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-heart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-cart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-eye d-block"></a>
                                    </li>
                                    <li class="overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-arrow d-block"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Aliquam Quaerat
                                        Voluptem</a></span>
                                <span class="price d-block fwEbold">58.00 $</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol position-relative px-3 mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/furniture.png') }}" alt="image description"
                                    class="img-fluid w-100" />

                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-heart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-cart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-eye d-block"></a>
                                    </li>
                                    <li class="overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-arrow d-block"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Neque Porro
                                        Quisquam</a></span>
                                <span class="price d-block fwEbold"><del>60.00 $</del>48.00 $</span>
                                <span
                                    class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol px-3 mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/furniture.png') }}" alt="image description"
                                    class="img-fluid w-100" />

                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-heart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-cart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-eye d-block"></a>
                                    </li>
                                    <li class="overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-arrow d-block"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Sit voluptatem</a></span>
                                <span class="price d-block fwEbold">65.00 $</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol position-relative px-3 mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="{{ asset('assets/images/furniture.png') }}" alt="image description"
                                    class="img-fluid w-100" />

                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-heart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-cart d-block"></a>
                                    </li>
                                    <li class="mr-2 overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-eye d-block"></a>
                                    </li>
                                    <li class="overflow-hidden">
                                        <a href="javascript:void(0);" class="icon-arrow d-block"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Aliquam Quaerat
                                        Voluptatem</a></span>
                                <span class="price d-block fwEbold">80.00 $</span>
                                <span
                                    class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">Hot</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contactListBlock -->
            <div
                class="contactListBlock container overflow-hidden pt-xl-8 pt-lg-10 pt-md-8 pt-4 pb-xl-12 pb-lg-10 pb-md-4 pb-1">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <!-- contactListColumn -->
                        <div
                            class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
                            <span class="icon icon-van"></span>
                            <div class="alignLeft pl-2">
                                <strong class="headingV fwEbold d-block mb-1">Free shipping order</strong>
                                <p class="m-0">On orders over $100</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <!-- contactListColumn -->
                        <div
                            class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
                            <span class="icon icon-gift"></span>
                            <div class="alignLeft pl-2">
                                <strong class="headingV fwEbold d-block mb-1">Special gift card</strong>
                                <p class="m-0">The perfect gift idea</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <!-- contactListColumn -->
                        <div
                            class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-4 px-md-2 px-3 d-flex">
                            <span class="icon icon-recycle"></span>
                            <div class="alignLeft pl-2">
                                <strong class="headingV fwEbold d-block mb-1">Return &amp; exchange</strong>
                                <p class="m-0">Free return within 3 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <!-- contactListColumn -->
                        <div
                            class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
                            <span class="icon icon-call"></span>
                            <div class="alignLeft pl-2">
                                <strong class="headingV fwEbold d-block mb-1">Support 24 / 7</strong>
                                <p class="m-0">Customer support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- dealSecHolder -->
            <section class="dealSecHolder container-fluid overflow-hidden py-xl-12 py-lg-10 py-md-8 py-5">
                <!-- mainHeader -->
                <header class="col-12 mainHeader mb-7 text-center">
                    <h1 class="headingIV playfair fwEblod mb-5">Daily Deal</h1>
                    <span class="headerBorder d-block mb-md-5 mb-3">
                        <img src="{{ asset('assets/images/hbdr.png') }}" alt="Header Border"
                            class="img-fluid img-bdr" />
                    </span>
                    <p class="mb-6">
                        There are many variations of passages of lorem ipsum available.
                    </p>
                    <div id="defaultCountdown" class="comming-timer"></div>
                </header>
                <!-- dealSlider -->
                <div class="dealSlider w-100 px-lg-10 px-md-5">
                    <div>
                        <!-- featureCol -->
                        <div class="featureCol position-relative w-100 px-3 mb-sm-8 mb-6">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/furniture.png') }}" alt="image description"
                                        class="img-fluid w-100" />

                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-heart d-block"></a>
                                        </li>
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-cart d-block"></a>
                                        </li>
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-eye d-block"></a>
                                        </li>
                                        <li class="overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-arrow d-block"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-2">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Sint Incidunt
                                            Utlabore</a></span>
                                    <span class="price d-block fwEbold"><del>75.00 $</del>60.50 $</span>
                                    <span
                                        class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
                                    <span
                                        class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <!-- featureCol -->
                        <div class="featureCol px-3 w-100 mb-sm-8 mb-6">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/furniture.png') }}" alt="image description"
                                        class="img-fluid w-100" />

                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-heart d-block"></a>
                                        </li>
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-cart d-block"></a>
                                        </li>
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-eye d-block"></a>
                                        </li>
                                        <li class="overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-arrow d-block"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-2">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Aliquam Quaerat
                                            Voluptem</a></span>
                                    <span class="price d-block fwEbold">58.00 $</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <!-- featureCol -->
                        <div class="featureCol position-relative w-100 px-3 mb-sm-8 mb-6">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/furniture.png') }}" alt="image description"
                                        class="img-fluid w-100" />

                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-heart d-block"></a>
                                        </li>
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-cart d-block"></a>
                                        </li>
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-eye d-block"></a>
                                        </li>
                                        <li class="overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-arrow d-block"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-2">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Neque Porro
                                            Quisquam</a></span>
                                    <span class="price d-block fwEbold"><del>60.00 $</del>48.00 $</span>
                                    <span
                                        class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <!-- featureCol -->
                        <div class="featureCol px-3 w-100 mb-sm-8 mb-6">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/furniture.png') }}" alt="image description"
                                        class="img-fluid w-100" />

                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-heart d-block"></a>
                                        </li>
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-cart d-block"></a>
                                        </li>
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-eye d-block"></a>
                                        </li>
                                        <li class="overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-arrow d-block"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-2">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Sit
                                            voluptatem</a></span>
                                    <span class="price d-block fwEbold">65.00 $</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <!-- featureCol -->
                        <div class="featureCol position-relative w-100 px-3 mb-sm-8 mb-6">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/furniture.png') }}" alt="image description"
                                        class="img-fluid w-100" />

                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-heart d-block"></a>
                                        </li>
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-cart d-block"></a>
                                        </li>
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-eye d-block"></a>
                                        </li>
                                        <li class="overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-arrow d-block"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-2">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Aliquam Quaerat
                                            Voluptatem</a></span>
                                    <span class="price d-block fwEbold">80.00 $</span>
                                    <span
                                        class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <!-- featureCol -->
                        <div class="featureCol px-3 w-100 mb-sm-8 mb-6">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/furniture.png') }}" alt="image description"
                                        class="img-fluid w-100" />

                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-heart d-block"></a>
                                        </li>
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-cart d-block"></a>
                                        </li>
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-eye d-block"></a>
                                        </li>
                                        <li class="overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-arrow d-block"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-2">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Sit
                                            voluptatem</a></span>
                                    <span class="price d-block fwEbold">65.00 $</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <!-- featureCol -->
                        <div class="featureCol w-100 px-3 mb-sm-8 mb-6">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{ asset('assets/images/furniture.png') }}" alt="image description"
                                        class="img-fluid w-100" />

                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-heart d-block"></a>
                                        </li>
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-cart d-block"></a>
                                        </li>
                                        <li class="mr-2 overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-eye d-block"></a>
                                        </li>
                                        <li class="overflow-hidden">
                                            <a href="javascript:void(0);" class="icon-arrow d-block"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-2">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">Sit
                                            voluptatem</a></span>
                                    <span class="price d-block fwEbold">65.00 $</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- partnerSec -->
            <div
                class="partnerSec container overflow-hidden pt-xl-12 pb-xl-23 pt-lg-10 pt-md-8 pt-5 pb-lg-20 pb-md-16 pb-10">
                <div class="row">
                    <div class="col-12">
                        <!-- partnerSlider -->
                        <div class="partnerSlider d-flex flex-wrap">
                            <div>
                                <div class="logoColumn d-flex align-items-center justify-content-center">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('assets/images/logo new.png') }}" alt="Partner Logo"
                                            class="img-fluid" />
                                    </a>

                                </div>
                            </div>
                            <div>
                                <div class="logoColumn d-flex align-items-center justify-content-center">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('assets/images/logo new.png') }}" alt="Partner Logo"
                                            class="img-fluid" /></a>
                                </div>
                            </div>
                            <div>
                                <div class="logoColumn d-flex align-items-center justify-content-center">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('assets/images/logo new.png') }}" alt="Partner Logo"
                                            class="img-fluid" /></a>
                                </div>
                            </div>
                            <div>
                                <div class="logoColumn d-flex align-items-center justify-content-center">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('assets/images/logo new.png') }}" alt="Partner Logo"
                                            class="img-fluid" /></a>
                                </div>
                            </div>
                            <div>
                                <div class="logoColumn d-flex align-items-center justify-content-center">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('assets/images/logo new.png') }}" alt="Partner Logo"
                                            class="img-fluid" /></a>
                                </div>
                            </div>
                            <div>
                                <div class="logoColumn d-flex align-items-center justify-content-center">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('assets/images/logo new.png') }}" alt="Partner Logo"
                                            class="img-fluid" /></a>
                                </div>
                            </div>
                            <div>
                                <div class="logoColumn d-flex align-items-center justify-content-center">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('assets/images/logo new.png') }}" alt="Partner Logo"
                                            class="img-fluid" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('include.footer')
    </div>
    <!-- include jQuery library -->
    @include('include.script')
</body>

</html>
