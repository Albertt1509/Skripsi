<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.link')

    {{-- stylebaru --}}
    <link rel="stylesheet" href="css/Style.css">

    <!-- bs -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png"/>
</head>
<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1"></div>
                </div>
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
                    <div class="div_center">
                        @if(session('success'))
                        <div id="notification" class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif @if(session('error'))
                        <div id="notification" class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif @if(!$data)
                        <div id="notification" class="alert alert-warning">
                            Data tidak ditemukan
                        </div>
                        @endif
                        <h1 class="judul text-white">Tambah Kategori</h1>
                        <form action="{{ url('/add_category') }}" method="POST">
                            @csrf
                            <br><br>
                            <div class="mb-3 label">
                                <label>Kategori</label>
                                <input type="text" class="kolom text-black" id="category" name="category" style="border-radius: 10px; width: 50%;">
                            </div>
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </form>
                    </div>
                    {{-- table --}}
                    <div class="container rounded mt-5 bg-white p-md-5">
                        <div class="h2 font-weight-bold">Daftar Kategori</div>
                         <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                         <th scope="col">Kategori</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $data )
                                    <td class="pt-2 text-black"></td>
                                    <tr class="bg-blue">
                                        <td class="pt-2 text-black">{{ $data->category_nama }}</td>
                                       
                                        <td>
                                            <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" class="btn btn-danger" href="{{ url('delete_category',$data->id) }}">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- cl table --}}
            </div>
        </div>
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->

<!-- detik notfi berhasi -->
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
