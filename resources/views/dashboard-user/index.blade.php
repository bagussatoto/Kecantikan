@extends('dashboard-user.layouts.main')

@section('container')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" >
          <img src="img/kecantikan1.png" class="d-block w-100 " alt="..." height="400">
          <div class="carousel-caption d-none d-md-block">
            <h3>Satoto Cosmetic</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/kecantikan2.png" class="d-block w-100" alt="..." height="400">
          <div class="carousel-caption d-none d-md-block">
            <h3>Satoto Cosmetic</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/kecantikan3.png" class="d-block w-100" alt="..." height="400">
          <div class="carousel-caption d-none d-md-block">
            <h3>Satoto Cosmetic</h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-md-2">
          <img src="img/k1.jpg" class="d-block w-100 mt-3 img-thumbnail"  alt="..." height="200">
          <p class="fw-normal mt-1" style="font-size: 13px">Lip Product</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-2">
          <img src="img/k2.jpg" class="d-block w-100  mt-3 img-thumbnail" alt="..." height="200">
          <p class="fw-normal mt-1" style="font-size: 13px">Beauty Blender</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-2">
          <img src="img/k3.jpg" class="d-block w-100 mt-3 img-thumbnail" alt="..." height="200">
          <p class="fw-normal mt-1" style="font-size: 13px">Foundation</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-2">
          <img src="img/k4.jpg" class="d-block w-100 mt-3 img-thumbnail" alt="..." height="200">
          <p class="fw-normal mt-1" style="font-size: 13px">Eye shadow</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-2">
          <img src="img/k5.jpg" class="d-block w-100 mt-3 img-thumbnail" alt="..." height="200">
          <p class="fw-normal mt-1" style="font-size: 13px">Body Lotion</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-2">
          <img src="img/k6.jpg" class="d-block w-100 mt-3 img-thumbnail" alt="..." height="200">
          <p class="fw-normal mt-1" style="font-size: 13px">Brush</p>
        </div>
      </div><!-- /.row -->

      {{-- produk dan detail --}}
      <section>
        <div class="container py-5">
          <h2 class="text-center pb-4">Produk & Detail</h2>
          <div class="row justify-content-center">
            @foreach ($products as $product)
            <div class="col-md-8 col-lg-6 col-xl-4">
              <div class="card" style="border-radius: 15px;">
                <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                  data-mdb-ripple-color="light">
                  <img src="https://source.unsplash.com/random/300×300/?cosmetic"
                    style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                    alt="Laptop" />
                  <a href="#!">
                    <div class="mask"></div>
                  </a>
                </div>
                <div class="card-body pb-0">
                  <div class="d-flex justify-content-between">
                    <div>
                      <p><a href="#!" class="text-dark">{{ $product->nama }}</a></p>
                      <p class="small text-muted">{{ $product->category->nama }}</p>
                    </div>
                    <div>
                      <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <p class="small text-muted">Rp. {{ $product->harga }}</p>
                    </div>
                  </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#{{ $product->nama }}">Detail</button>
                    <button type="button" class="btn btn-primary">Beli Sekarang</button>

                    {{-- modal --}}
                    <div class="modal fade" id="{{ $product->nama }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail produk {{ $product->nama }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <h5 class="mb-3">Detail Produk</h5>
                            <img width="400px" height="500px" src="https://source.unsplash.com/random/300×300/?cosmetic" alt="" class="mb-3">
                            <div class="col-md-4">
                              <ul class="list-group list-group-light">
                                <li class="list-group-item">{{ $product->nama }}</li>
                                <li class="list-group-item">{{ $product->category->nama }}</li>
                                <li class="list-group-item">Rp. {{ $product->harga }}</li>
                              </ul>
                            </div>
                            <h5 class="mb-5 mt-3">Testimoni Produk</h5>
                            <section>
                              <div class="row text-center">
                                <div class="col-md-4 mb-5 mb-md-0">
                                  <div class="d-flex justify-content-center mb-4">
                                    <img src="https://source.unsplash.com/random/500×500/?{{ $product->nama }}"
                                      class="rounded-circle shadow-1-strong" width="150" height="150" />
                                  </div>
                                  <h5 class="mb-3">Maria Smantha</h5>
                                  <p class="px-xl-3">
                                    <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
                                    tenetur.
                                  </p>
                                  <ul class="list-unstyled d-flex justify-content-center mb-0">
                                    <li>
                                      <i class="fas fa-star fa-sm text-warning"></i>
                                    </li>
                                    <li>
                                      <i class="fas fa-star fa-sm text-warning"></i>
                                    </li>
                                    <li>
                                      <i class="fas fa-star fa-sm text-warning"></i>
                                    </li>
                                    <li>
                                      <i class="fas fa-star fa-sm text-warning"></i>
                                    </li>
                                    <li>
                                      <i class="fas fa-star-half-alt fa-sm text-warning"></i>
                                    </li>
                                  </ul>
                                </div>
                                <div class="col-md-4 mb-5 mb-md-0">
                                  <div class="d-flex justify-content-center mb-4">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                                      class="rounded-circle shadow-1-strong" width="150" height="150" />
                                  </div>
                                  <h5 class="mb-3">Lisa Cudrow</h5>
                                  <p class="px-xl-3">
                                    <i class="fas fa-quote-left pe-2"></i>Ut enim ad minima veniam, quis nostrum
                                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid commodi.
                                  </p>
                                  <ul class="list-unstyled d-flex justify-content-center mb-0">
                                    <li>
                                      <i class="fas fa-star fa-sm text-warning"></i>
                                    </li>
                                    <li>
                                      <i class="fas fa-star fa-sm text-warning"></i>
                                    </li>
                                    <li>
                                      <i class="fas fa-star fa-sm text-warning"></i>
                                    </li>
                                    <li>
                                      <i class="fas fa-star fa-sm text-warning"></i>
                                    </li>
                                    <li>
                                      <i class="fas fa-star fa-sm text-warning"></i>
                                    </li>
                                  </ul>
                                </div>
                                <div class="col-md-4 mb-0">
                                  <div class="d-flex justify-content-center mb-4">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                                      class="rounded-circle shadow-1-strong" width="150" height="150" />
                                  </div>
                                  <h5 class="mb-3">John Smith</h5>
                                  <p class="px-xl-3">
                                    <i class="fas fa-quote-left pe-2"></i>At vero eos et accusamus et iusto odio
                                    dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.
                                  </p>
                                  <ul class="list-unstyled d-flex justify-content-center mb-0">
                                    <li>
                                      <i class="fas fa-star fa-sm text-warning"></i>
                                    </li>
                                    <li>
                                      <i class="fas fa-star fa-sm text-warning"></i>
                                    </li>
                                    <li>
                                      <i class="fas fa-star fa-sm text-warning"></i>
                                    </li>
                                    <li>
                                      <i class="fas fa-star fa-sm text-warning"></i>
                                    </li>
                                    <li>
                                      <i class="far fa-star fa-sm text-warning"></i>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </section>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
      
      <!-- START THE FEATURETTES -->
  
      <!-- <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
          <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
        <div class="col-md-5">
          <img src="img/kategori3.png" class="d-block w-100" alt="..." height="100%">
  
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="img/kategori3.png" class="d-block w-100" alt="..." height="100%">
  
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
          <img src="img/kategori3.png" class="d-block w-100" alt="..." height="100%">
        </div>
      </div>
  
      <hr class="featurette-divider"> -->
      
  
      <!-- /END THE FEATURETTES -->
  
    </div>
    
@endsection