    @extends('header')
    @section('content')

    <div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
            <div class="breadcrumb-text">
            <p></p>
            <h1>Pengaduan</h1>
            </div>
        </div>
        </div>
    </div>
    </div>

    	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<div class="price-box">
                        </div>
                    	<img src="assets/img/a.jpg" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Nama Produk</span></h3>
                    <h4>Nama User</h4>
                    <div class="text">deskripsi barang kehilangan</div>
                    <!--Countdown Timer-->
                    
                	<a href="API" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i>Hubungi</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->
    @endsection