<!DOCTYPE html>
<html lang="en">
    <head>
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
        <link rel="stylesheet" href="css/showkeranjang.css">
        <link rel="stylesheet" href="home/css/flaticon.css">
        <link rel="stylesheet" href="home/css/style.css">
 
 
    </head>
    <body>
		{{-- header --}}
        @include('home.header')
        <!-- END nav -->

        {{-- sider --}}
		{{-- close --}}
       @if(session('success'))
      <div id="notification" class="alert alert-success">
          {{ session('success') }}
      </div>
          @endif

          @if(session('error'))
              <div id="notification" class="alert alert-danger">
                  {{ session('error') }}
              </div>
        @endif
		{{-- product --}}
        <div class="px-4 px-lg-0">
  <!-- For demo purpose -->
  <div class="container text-white py-5 text-center">
  
  </div>
  <!-- End -->

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-dark">
                    <div class="p-2 px-3 text-uppercase">Produk</div>
                  </th>
                  <th scope="col" class="border-0 bg-dark">
                    <div class="py-2 text-uppercase">Harga</div>
                  </th>
                  <th scope="col" class="border-0 bg-dark">
                    <div class="py-2 text-uppercase">Jumlah</div>
                  </th>
                  <th scope="col" class="border-0 bg-dark">
                    <div class="py-2 text-uppercase">Aksi</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php $totalprice=0; ?>
                @foreach ($cart as $cart )
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="/product/{{ $cart->image }}" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="" class="text-dark d-inline-block align-middle">{{ $cart->product_title }}</a></h5>
                      </div>
                    </div>
                  </th>
                 <td class="border-0 align-middle"><strong>{{ number_format($cart->price, 0, ',', '.') }}</strong></td>
                  <td class="border-0 align-middle"><strong>{{ $cart->quantity}}</strong></td>
                  <td class="border-0 align-middle"><a href="{{ url('/removeKeranjang',$cart->id) }}" class="text-dark"  onclick="return confirm('Anda Yakin Ingin Menghapus Produk?')"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php $totalprice=$totalprice + $cart->price ?>
            @endforeach 

              </tbody>
            </table>
            <h1>Harga Total : Rp {{ number_format($totalprice, 0, ',', '.') }}</h1>

            <div class="tombol">
              <a href="{{ url('cod') }}" class="btn btn-danger">Bayar Ditempat</a>
              <a href="#" class="btn btn-primary">Pilih Metode lainnya</a>
            </div>

          </div>
          <!-- End -->
        </div>
      </div>

      

    </div>
  </div>
</div>
        {{-- end product --}}

		{{-- footer --}}
		@include('home.footer')
        


                            <!-- loader -->
                            <div id="ftco-loader" class="show fullscreen">
                                <svg class="circular" width="48px" height="48px">
                                    <circle class="path-bg" cx="24"cy="24" r="22" fill="none" stroke-width="4"  stroke="#eeeeee"/>
                                    <circle class="path" cx="24" cy="24" r="22" fill="none"  stroke-width="4"
                                    stroke-miterlimit="10"
                                    stroke="#F96D00"/></svg>
                            </div>
                            <script>
                              setTimeout(function () {
                                  var notification = document.getElementById('notification');
                                  if (notification) {
                                      notification.style.display = 'none';
                                  }
                              }, 5000);
                          </script>
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