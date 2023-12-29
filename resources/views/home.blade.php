@extends('layouts.main')

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

  <div class="banner">
    <div class="row">
      <div class="col-md-4">
        <div class="banner_item align-items-center" style="background-image:url(img/makeup.jpg)">
          <div class="banner_category">
            <a href="/make-up">Make Up</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="banner_item align-items-center" style="background-image:url(img/bodycare.jpg)">
          <div class="banner_category">
            <a href="/body-care">Body Care</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="banner_item align-items-center" style="background-image:url(img/nails.jpg)">
          <div class="banner_category">
            <a href="/nails">Nails</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section>
    <div class="container py-5">
      <h2 class="mb-5 text-center">Bestsellers</h2>

      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card">
            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
              data-mdb-ripple-color="light">
              <img src="img/home1.jpg" class="w-100" />
            </div>
            <div class="card-body" style="background: #D0D7FF">
              <a class="btn btn-dark btn-floating m-1"  href="#!" role="button">
                Eyeshadow Palette 
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
              data-mdb-ripple-color="light">
              <img src="img/home2.jpg" class="w-100" />
            </div>
            <div class="card-body" style="background: #D0D7FF">
              <a class="btn btn-dark btn-floating m-1"  href="#!" role="button">
                Lipstik
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
              <img src="img/home3.jpg" class="w-100" />
            </div>
            <div class="card-body" style="background: #D0D7FF">
              <a class="btn btn-dark btn-floating m-1"  href="#!" role="button">
                Mascara
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card">
            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
              data-mdb-ripple-color="light">
              <img src="img/home4.jpg" class="w-100" />
            </div>
            <div class="card-body" style="background: #D0D7FF">
              <a class="btn btn-dark btn-floating m-1"  href="#!" role="button">
                Nail Polish
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
              data-mdb-ripple-color="light">
              <img src="img/home5.jpg" class="w-100" />
            </div>
            <div class="card-body" style="background: #D0D7FF">
              <a class="btn btn-dark btn-floating m-1"  href="#!" role="button">
                Brush
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
              <img src="img/home6.jpg" class="w-100" />
            </div>
            <div class="card-body" style="background: #D0D7FF">
              <a class="btn btn-dark btn-floating m-1"  href="#!" role="button">
                Soap
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
</section>

<section id = "offers" class = "py-5">
  <div class="container">
    <div class = "row d-flex align-items-center justify-content-center text-center justify-content-lg-start text-lg-start">
        <div class = "offers-content">
          <span class = "text-dark">Discount Up To 40%</span>
            <h2 class = "mt-2 mb-4 text-dark">Grand Sale Offer!</h2>
            <a class="btn btn-dark btn-floating m-1"  href="#!" role="button">
              Buy Now 
            </a>
        </div>
    </div>
  </div>
</section>

<section id = "popular" class = "py-5">
  <div class = "container">
      <div class = "title text-center pt-3 pb-3">
          <h2 class = "position-relative d-inline-block ms-4">Popular Of This Year</h2>
      </div>

      <div class = "row">
          <div class = "col-md-6 col-lg-4 row g-3">
              <h3 class = "fs-5">Top Rated</h3>
              <div class = "d-flex align-items-start justify-content-start">
                  <img src = "img/rated1.jpg" alt = "" class = "img-fluid pe-3 w-50">
                  <div>
                      <p class = "mb-0">Beauty Blender</p>
                      <span>Rp. 70.000</span>
                  </div>
              </div>
              <div class = "d-flex align-items-start justify-content-start">
                <img src = "img/rated2.jpg" alt = "" class = "img-fluid pe-3 w-50">
                <div>
                      <p class = "mb-0">Eyeliner</p>
                      <span>Rp. 95.000</span>
                  </div>
              </div>
              <div class = "d-flex align-items-start justify-content-start">
                <img src = "img/rated3.jpg" alt = "" class = "img-fluid pe-3 w-50">
                <div>
                      <p class = "mb-0">Foundation</p>
                      <span>Rp. 105.000</span>
                  </div>
              </div>
          </div>

          <div class = "col-md-6 col-lg-4 row g-3">
              <h3 class = "fs-5">Best Selling</h3>
              <div class = "d-flex align-items-start justify-content-start">
                <img src = "img/best1.jpg" alt = "" class = "img-fluid pe-3 w-50">
                <div>
                    <p class = "mb-0">Brow Pencil</p>
                    <span>Rp. 99.000</span>
                </div>
            </div>
                <div class = "d-flex align-items-start justify-content-start">
                  <img src = "img/best2.jpg" alt = "" class = "img-fluid pe-3 w-50">
                  <div>
                        <p class = "mb-0">Powder</p>
                        <span>Rp. 112.000</span>
                    </div>
                </div>
                <div class = "d-flex align-items-start justify-content-start">
                  <img src = "img/best3.jpg" alt = "" class = "img-fluid pe-3 w-50">
                  <div>
                        <p class = "mb-0">Body Lotion</p>
                        <span>Rp. 89.000</span>
                    </div>
                </div>
          </div>

          <div class = "col-md-6 col-lg-4 row g-3">
              <h3 class = "fs-5">On Sale</h3>
              <div class = "d-flex align-items-start justify-content-start">
                <img src = "img/sale1.jpg" alt = "" class = "img-fluid pe-3 w-50">
                <div>
                    <p class = "mb-0">Lip Cream</p>
                    <span>Rp. 120.000</span>
                </div>
            </div>
            <div class = "d-flex align-items-start justify-content-start">
              <img src = "img/sale2.jpg" alt = "" class = "img-fluid pe-3 w-50">
              <div>
                    <p class = "mb-0">Nail Polish</p>
                    <span>Rp. 67.000</span>
                </div>
            </div>
            <div class = "d-flex align-items-start justify-content-start">
              <img src = "img/sale3.jpg" alt = "" class = "img-fluid pe-3 w-50">
              <div>
                    <p class = "mb-0">Eyeshadow Palette</p>
                    <span>Rp. 112.000</span>
                </div>
            </div>
          </div>
      </div>
  </div>
</section>
  @endsection