<div class="" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        {{-- <p class="mb-0 phone pl-md-2">
                            <a href="#" class="mr-2">
                                <span class="fa fa-phone mr-1"></span>No Telp
                            </a>
                            <a href="#">
                                <span class="fa fa-paper-plane mr-1"></span>
                                Email</a>
                        </p> --}}
                    </div>
                    <div class="col-md-6 d-flex justify-content-md-end">
                        <div class="social-media mr-4">
                            {{-- <p class="mb-0 d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center">
                                    <span class="fa fa-facebook">
                                        <i class="sr-only">Facebook</i></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center">
                                    <span class="fa fa-twitter">
                                        <i class="sr-only">Twitter</i></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center">
                                    <span class="fa fa-instagram">
                                        <i class="sr-only">Instagram</i></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center">
                                    <span class="fa fa-dribbble">
                                        <i class="sr-only">Dribbble</i></span></a>
                            </p> --}}
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <nav
            class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
            id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="">Kuru Kuru
                    <span>store</span></a>
                <div class="order-lg-last btn-group">
                    <div class="reg mr-3">
                            <p class="mb-0">
                                @if (Route::has('login'))

                                @auth
                                     <li class="nav-item">
                                        <x-app-layout>
                                    
                                          </x-app-layout>
                                     </li>
                                
                                @else

                                <a href="{{ route('register') }}" class="mr-2">Sign Up</a>
                             
                                <a href="{{ route('login') }}">Log In</a>

 

                                     @endauth
                                @endif
                            </p>
                        </div>
                    <a  class="flaticon-shopping-bag ml-3 pt-1"   href="{{ url('show_keranjang') }}">
                        {{-- <span class=""><a href="{{ url('show_keranjang') }}"></a></span> --}}
                    </a>
                    
               
                </div>
                

                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#ftco-nav"
                    aria-controls="ftco-nav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span>
                    Menu
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="#home"  class="nav-link text-light">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link text-light">About</a>
                        </li>
                        <li class="nav-item ">
                            <a             class="nav-link text-light"
                                href="#product"
                                aria-expanded="false">Products</a>
                           
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('show_order') }}" class="nav-link text-light">Order</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>