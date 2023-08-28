<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/public">
        <link rel="stylesheet" href="css/kompleks.css">
        <title>Kuru Kuru Shope</title>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link
            href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap"
            rel="stylesheet">

        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="home/css/animate.css">

        <link rel="stylesheet" href="home/css/owl.carousel.min.css">
        <link rel="stylesheet" href="home/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="home/css/magnific-popup.css">

        <link rel="stylesheet" href="home/css/flaticon.css">
        <link rel="stylesheet" href="home/css/style.css">

    </head>
    <body>
        {{-- header --}}
        {{-- @include('home.header') --}}
        
        <!-- END nav -->

        <br><br>
<div class="barang text-center">
    <div class="col-md-4 d-flex">
        <div class="product ftco-animate">
            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(/product/{{ $product->image }})">
                <div class="desc">
         
                </div>
            </div>
            <div class="text ">
                <span class="sale"></span>
                <span class="category">{{ $product->category }}</span>
                <h2>{{ $product->title }}</h2>
            
                    <p class="mb-0">
                        @if ($product->discount_price != null)
                            <span class="price price-sale">{{ $product->discount_price }}</span>
                        @endif
                        <span class="price">Rp.{{ $product->price }}</span>
                    </p>
                    <span class="price">{{ $product->description }}</span>
                    <div class="container">
                        <a href="{{ url('keranjang') }}" class="btn btn-primary">
                            <span class="fa fa-shopping-cart">">{{ $product->quantity }}</span>
                            Add
                        </a>
                    </div>   
            </div>
        </div>
    </div>
</div>


        {{-- sider --}}

        {{-- close --}}

        {{-- product --}}

        {{-- testimoni --}}

        {{-- footer --}}
        @include('home.footer')

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px"><circle
                class="path-bg"
                cx="24"
                cy="24"
                r="22"
                fill="none"
                stroke-width="4"
                stroke="#eeeeee"/><circle
                class="path"
                cx="24"
                cy="24"
                r="22"
                fill="none"
                stroke-width="4"
                stroke-miterlimit="10"
                stroke="#F96D00"/></svg>
        </div>
        <script>
    

        <script src="home/js/jquery.min.js"></script>
        <script src="home/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="home/js/popper.min.js"></script>
        <script src="home/js/bootstrap.min.js"></script>
        <script src="home/js/jquery.easing.1.3.js"></script>
        <script src="home/js/jquery.waypoints.min.js"></script>
        <script src="home/js/jquery.stellar.min.js"></script>
        <script src="home/js/owl.carousel.min.js"></script>
        <script src="home/js/jquery.magnific-popup.min.js"></script>
        <script src="home/js/jquery.animateNumber.min.js"></script>
        <script src="home/js/scrollax.min.js"></script>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="home/js/google-map.js"></script>
        <script src="home/js/main.js"></script>

    </body>
</html>