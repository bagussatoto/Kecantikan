@extends('layouts.main')

@section('container')


    <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden ">
    <style>
      .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
          radial-gradient(1250px circle at 100% 100%,
            hsl(218, 41%, 45%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%);
      }
  
      #radius-shape-1 {
        height: 220px;
        width: 220px;
        top: -60px;
        left: -130px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }
  
      #radius-shape-2 {
        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
        bottom: -60px;
        right: -110px;
        width: 300px;
        height: 300px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }
  
      .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px);
      }
    </style>
  
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            The best offer <br />
            <span style="color: hsl(218, 81%, 75%)">for your business</span>
          </h1>
          <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Temporibus, expedita iusto veniam atque, magni tempora mollitia
            dolorum consequatur nulla, neque debitis eos reprehenderit quasi
            ab ipsum nisi dolorem modi. Quos?
          </p>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
  
          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <form action="/register" method="POST">
                @csrf
                
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="name" id="name" class="form-control  @error('name')is-invalid @enderror" placeholder="Name" required value="{{ old('name') }}"/>
                      <label class="form-label" for="name"></label>
                    </div>
                    @error('name')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="last_name" id="last_name" class="form-control @error('last_name')is-invalid @enderror" placeholder="Last name" required value="{{ old('last_name') }}" />
                      <label class="form-label" for="last_name"></label>
                    </div>
                  </div>
                    @error('last_name')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- username -->
                <div class="form-outline mb-4">
                  <input type="text" name="username" id="username" class="form-control @error('username')is-invalid @enderror"  placeholder="Username" required value="{{ old('username') }}"/>
                  <label class="form-label" for="username"></label>
                </div>
                @error('username')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="email" class="form-control @error('email')is-invalid @enderror" placeholder="email@example.com" required value="{{ old('email') }}"/>
                  <label class="form-label" for="email"></label>
                </div>
                @error('email')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="password" class="form-control @error('password')is-invalid @enderror" placeholder="Password"/>
                  <label class="form-label" for="password"></label>
                </div>
                @error('password')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
  
                <!-- Submit button -->
                <div class="d-grid gap-2 ">

                    <button type="submit" class="btn btn-primary btn-block mb-4">
                      Sign up
                    </button>
                </div>
  
                <!-- Register buttons -->
                <div class="text-center">
                  <p>or sign up with:</p>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="bi bi-facebook"></i>
                  </button>
  
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="bi bi-google"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

@endsection