
 <section class="ftco-section">
            <div class="container" id="product">
                <div class="row justify-content-center pb-5">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <span class="subheading">Gilaa!!!</span>
                        <h2>Best Penjualan</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($product as $products)
              
                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div
                                class="img d-flex align-items-center justify-content-center"
                                style="background-image: url(product/{{ $products->image }})">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                            {{-- <a href="" class="d-flex align-items-center justify-content-center">
                                            <span class="flaticon-shopping-bag"></span></a> --}}
                                            
                                              <a href="{{ url('kompleks',$products->id) }}" class="d-flex align-items-center justify-content-center">
                                            <span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <span class="sale"></span> 
                                <span class="category"></span>
                                <h2>{{ $products->title }}</h2>
                                <p class="mb-0">
                                    @if ($products->discount_price!=null)
                                    <span class="price ">Rp {{ number_format($products->discount_price, 0, ',', '.') }} </span>

                                    <span class="price price-sale ">  {{ number_format ($products->price, 0, ',', '.') }}</span>
                                    @else
                                    <span class="price ">Rp {{ number_format ($products->price, 0, ',', '.') }}</span>
                                    @endif
                                <form method="POST" action="{{ url('/keranjang',$products->id) }}">
                                    @csrf
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="quantity" value="1" min="1">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" >
                                            <i class="fa fa-shopping-cart"></i> Add
                                            </button>
                                        </div>
                                    </div>
                                 </form>
                            </div>
                        </div>
                    </div>
                              
                    @endforeach
                  
                </div>
                <span style="padding-top:20px;">
                    {{ $product->withQueryString()->links('pagination::bootstrap-5') }}
                </span>
            </div>
        </section>


