<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <title>Document</title>
    
</head>
    <style>
        .gradient-custom {
        /* fallback for old browsers */
        background: #6a11cb;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>
<body>
    <form method="POST" action="{{ url('login') }}" class="px-50 gradient-custom">
        @csrf
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                    <p class="text-white-50 mb-5">Please enter your login and password!</p>
      
                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="typeEmailX"></label>
                        <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Masukan Email" />
                    </div>
      
                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="typePasswordX"></label>
                        <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Masukan Password"/>
                    </div>
      
                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
      
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>      
                  </div>      
                </div>
              </div>
            </div>
          </div>
        </div>
    </form>
</body>
</html>
