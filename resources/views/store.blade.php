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
    {{-- @include('checkout.stylecheckout') --}}

</head>

<body>
    <div id="pageWrapper">
        <!-- pageHeader -->
        @include('include.navbar')
        <main>
            <section class="introBlock position-relative">
                <div class="slick-fade">
                    <div>
                        <div class="align w-100 d-flex align-items-center bgCover"
                            style="background-image: url('{{ asset('assets/images/Backgroundkeranjang.png') }}')">
                            <!-- holder -->
                            <div class="container position-relative holder pt-xl-10 pt-0">
                                <!-- py-12 pt-lg-30 pb-lg-25 -->
                                <div class="row">
                                    <div class="col-12 col-xl-7">
                                        <div class="txtwrap pr-lg-10">
                                            <h2 class="fwEbold position-relative mb-xl-7 mb-lg-5 d-flex align-items-center gap-2">
                                                <i class="bi bi-cart4 text-primary display-6"></i>
                                                Keranjang
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="imgHolder">
                                        <!-- Add any content or image for the imgHolder here if needed -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

@include('checkout.keranjang')




<!--/main-->



<div id="toTop"></div><!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>
@include('include.script')
