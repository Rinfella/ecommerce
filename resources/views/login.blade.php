<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">
</head>
  <body>
      <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
             
              <div class="card bg-white shadow-lg">
                <div class="card-body p-5">
                  <form class="mb-3 mt-md-4">
                    @csrf 
                    <h2 class="fw-bold mb-2 text-uppercase " style="text-align: center; padding-bottom: 20px;">Kash Original</h2>
                    <p class=" mb-5">Please enter your email and password!</p>
                    <div class="mb-3">
                      <label for="email" class="form-label ">Email address</label>
                      <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label ">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="*******">
                    </div>
                    <p class="small"><a class="text-primary" href="#">Forgot password?</a></p>
                    <div class="d-grid">
                      <button class="btn btn-outline-dark" type="submit">Login</button>
                    </div>
                  </form>
                  <div>
                    <p class="mb-0  text-center">Don't have an account? <a href="/register"
                        class="text-primary fw-bold">Sign
                        Up</a></p>
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>   
      
        
    






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>