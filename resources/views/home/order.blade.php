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

        <link rel="stylesheet" href="home/css/flaticon.css">
        <link rel="stylesheet" href="home/css/style.css">
 
 
    </head>
    <body>
		{{-- header --}}
        @include('home.header')
        <!-- END nav -->
<br><br><br><br>
        {{-- tabel --}}
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
                    <div class="py-2 text-uppercase">Jenis Pembayaran</div>
                  </th>
                  <th scope="col" class="border-0 bg-dark">
                    <div class="py-2 text-uppercase">Status Pengiriman</div>
                  </th>
                  <th scope="col" class="border-0 bg-dark">
                    <div class="py-2 text-uppercase">Gambar</div>
                  </th>
                  <th scope="col" class="border-0 bg-dark">
                    <div class="py-2 text-uppercase">Aksi</div>
                  </th>
                </tr>
              </thead>
              <tbody>
              @foreach ($order as $order)
                    <tr>
                        <td class="border-0 align-middle"><strong>{{ $order->product_title }}</strong></td>
                        <td class="border-0 align-middle"><strong>{{ $order->price }}</strong></td>
                        <td class="border-0 align-middle"><strong>{{ $order->quantity }}</strong></td>
                        <td class="border-0 align-middle"><strong>{{ $order->payment_status }}</strong></td>
                        <td class="border-0 align-middle"><strong>{{ $order->delivery_status }}</strong></td>
                        <td>
                        <div class="p-2">
                            <img src="product/{{ $order->image }}" alt="" width="70" class="img-fluid rounded shadow-sm">
                        </div>
                        </td>
                        <td>
                        @if ($order->delivery_status == 'Proses')
                            <a onclick="return confirm('Apakah Anda Yakin Ingin Membatalkan Pesanan')" 
                            class="btn btn-danger" href="{{ url('batal_order', $order->id) }}">Batal</a>

                        @elseif ($order->delivery_status == 'Dikirimkan')
                            <p class="text-danger">Dalam Proses</p>
                        @endif
                        </td>
                    </tr>
                @endforeach

              </tbody>
            </table>
            
          </div>
          {{-- cl tabel --}}
      

        {{-- sider --}}
	
		{{-- close --}}

		{{-- product --}}
	

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