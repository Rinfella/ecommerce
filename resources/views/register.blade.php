<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
  <body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                  
                   <form method="POST" action="/users">
                    @csrf
                      <div class="mb-6">
                        <label for="name" class="inline-block text-lg mb-2">
                            Name
                        </label>
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 mb-2 w-full"
                            name="name"
                            value="{{old('name')}}"/>
                        @error('name')
                            <p class="text-danger text-xs mt-1">{{$message}}</p>
                        @enderror
                      </div>

                      <div class="mb-6">
                          <label for="email" class="inline-block text-lg mb-2"
                              >Email</label>
                          <input
                              type="email"
                              class="border border-gray-200 rounded p-2 mb-2 w-full"
                              name="email"
                              value="{{old('email')}}"/>

                          @error('email')
                              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror

                      </div>

                      <div class="mb-6">
                          <label
                              for="password"
                              class="inline-block text-lg mb-2">
                              Password
                          </label>
                          <input
                              type="password"
                              class="border border-gray-200 rounded p-2 mb-2 w-full"
                              name="password"
                              value="{{old('password')}}"/>

                          @error('password')
                              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                      </div>

                      <div class="mb-6">
                          <label
                              for="password_confirmation"
                              class="inline-block text-lg mb-2">
                              Confirm Password
                          </label>
                          <input
                              type="password"
                              class="border border-gray-200 rounded p-2 mb-2 w-full"
                              name="password_confirmation"
                              value="{{old('password_confirmation')}}"/>

                          @error('password_confirmation')
                              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                      </div>

                      <div class="mb-6">
                          <button
                              type="submit"
                              class="bg-laravel text-white rounded py-2 px-4 btn btn-primary hover:bg-black">
                              Sign Up
                          </button>
                      </div>

                      <div class="mt-8">
                          <p>
                              Already have an account?
                              <a href="/login" class="text-laravel ">Login</a>
                          </p>
                      </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>