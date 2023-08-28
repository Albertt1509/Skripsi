<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.link')
    <link rel="stylesheet" href="css/show.css">
</head>
<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <!-- Banner Content -->
        </div>
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                 @if(session('success'))
                            <div id="notification" class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif @if(session('error'))
                            <div id="notification" class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif 
                <h1 class="judul_list text-white">List Produk</h1>
                <br><br>
                <div class="container rounded mt-5 bg-white p-md-5">
                    <div class="h2 font-weight-bold">Produk</div>
                    <div class="table-responsive">
                        <table class="table" id="productTable">
                            <thead>
                                <tr>
                                    <th colspan="2" scope="col">Gambar</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Diskon</th>
                                    <th class="ml-2" scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $product)
                                <tr class="bg-blue">
                                    <td class="pt-" colspan="2" "><img class="gambar" src="product/{{ $product->image }}"></td>
                                    <td class="pt-">{{ $product->title }}</td>
                                    <td class="pt-">{{ $product->description }}</td>
                                    <td class="pt-">{{ number_format($product->price, 0, ',', '.') }}</td>
                                    <td class="pt-">{{ $product->category }}</td>
                                    <td class="pt-">{{ $product->quantity }}</td>
                                    <td class="pt-">{{ $product->discount_price }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-success mr-2" href="{{ url('update_produk',$product->id) }}">Edit</a>
                                            <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" class="btn btn-danger " href="{{ url('delete_product',$product->id)}}">Hapus</a>
                                        </div>
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
    <script>
    setTimeout(function () {
        var notification = document.getElementById('notification');
        if (notification) {
            notification.style.display = 'none';
        }
    }, 2000);
</script>
<!-- Plugin js for this page -->
@include('admin.script')
<!-- End custom js for this page -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
</body>
</html>
