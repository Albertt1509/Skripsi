<html lang="en">
  <head>
    @include('admin.link')
    
       <link rel="stylesheet" href="css/produk.css">
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              
            </div>
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
                                        @endif

                                        @if(session('error'))
                                            <div id="notification" class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                      @endif
                            <h1 class="judul_produk text-white">Tambah Produk</h1>
                            <br><br>
                            <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">

                                 @csrf
                                 <div class="mb-3 label">
                                    <label>Nama Produk</label>
                                    <input type="text" class="kolom" id="name" required="" name="name" style="border-radius: 10px; width: 50%;">
                                </div>
                                 <div class="mb-3 label">
                                    <label >Harga</label>
                                    <input type="text" class="kolom" id="price"  required="" name="price" style="border-radius: 10px; width: 50%;">
                                </div>
                                 <div class="mb-3 label">
                                    <label >Deskripsi</label>
                                    <input type="text" class="kolom" id="description"  required="" name="description" style="border-radius: 10px; width: 50%;">
                                </div>

                               <div class="mb-3 label">
                                    <label >Gambar</label>
                                    <input type="file" class=" " id="image"  required="" name="image" style="width: 50%;">
                                </div>

                              <div class="mb-3 label">
                               <label>Kategori</label>
                                <select class="kolom text-black" id="category" name="category" required="" style="border-radius: 10px; width: 50%;">
                                   <option>Isi Disini</option> 
                                  @foreach ($category as $category)
                                        <option value="{{ $category->category_nama }}"> {{ $category->category_nama }}</option>
                                    @endforeach
                                </select>

                              </div>
                                <br>
                                                                
                                 <div class="mb-3 label">
                                    <label >Jumlah</label>
                                    <input type="text" class="kolom" id="quantity" name="quantity" required="" style="border-radius: 10px; width: 50%;">
                                </div>
                                 <div class="mb-3">
                                    <label>Diskon</label>
                                    <input type="number" class="kolom" id="discount" name="discount"min="0" style="border-radius: 10px; width: 50%;">
                                </div>
                                <button type="submit" class="btn btn-warning">Submit</button>
                            </form>
                            
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
        <script>
    setTimeout(function() {
        var notification = document.getElementById('notification');
        if (notification) {
            notification.style.display = 'none';
        }
    }, 2000);
</script>
    <!-- End custom js for this page -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>