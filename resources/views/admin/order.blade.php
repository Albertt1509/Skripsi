<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.link')
        <link rel="stylesheet" href="css/order.css">
    </head>
    <body>
        <div class="container-scroller">
            <div class="row p-0 m-0 proBanner" id="proBanner">
                <div class="col-md-12 p-0 m-0">
                    <div
                        class="card-body card-body-padding d-flex align-items-center justify-content-between"></div>
                </div>
            </div>
            <!-- partial:partials/_sidebar.html -->
            @include('admin.sidebar')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_navbar.html -->
                @include('admin.header')
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="container rounded mt-5 bg-white md-5">
                            <div class="h2 font-weight-bold">Daftar Pesanan</div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">No Telepon</th>
                                                <th scope="col">Nama Produk</th>
                                                <th scope="col">Jumlah</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Jenis Pembayaran</th>
                                                <th scope="col">COD</th>
                                                <th scope="col">Gambar</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order as $order)
                                            <tr class="bg-blue">
                                                <td class="pt-3">{{ $order->name }}</td>
                                                <td class="pt-3">{{ $order->email }}</td>
                                                <td class="pt-3">{{ $order->address }}</td>
                                                <td class="pt-3">{{ $order->phone }}</td>
                                                <td class="pt-3">{{ $order->product_title }}</td>
                                                <td class="pt-3">{{ $order->quantity }}</td>
                                                <td class="pt-3">{{ $order->price }}</td>
                                                <td class="pt-3">{{ $order->payment_status }}</td>
                                                <td class="pt-3">{{ $order->delivery_status }}</td>
                                                <td><img src="/product/{{ $order->image }}" alt=""></td>
                                                <td>        
                                                    {{-- @if ($order->delivery_status == 'Sedang Diproses') --}}
                                                        <a href="{{ url('kirim', $order->id) }}" onclick="return confirm('Apakah Anda Yakin Ingin Mengirimkan Barang?')" class="btn btn-primary">
                                                            Proses
                                                        </a>
                                                    
                                                </td>

                                            </tr>
                                              <tr id="spacing-row">
                                                <td></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                        </div>
                    </div>
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
    </body>
</html>