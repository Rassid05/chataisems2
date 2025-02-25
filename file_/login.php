<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="././css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>
<body style="background-color: beige;" >
      <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-warning " style="border-bottom: 5px solid  #ff8838;">
    <div class="container-fluid">
      <a class="navbar-brand text-white fw-bold" href="#">
        <h1 class="mb-0"><i class="bi bi-robot text-white"></i><b>&nbsp; Robotors</b></h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
        <ul class="navbar-nav me-3 my-2 my-lg-0 navbar-nav-scroll">
          <li class="nav-item">
            <a class="nav-link text-white" href="#" style="font-size: 20px;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" style="font-size: 20px;">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" style="font-size: 20px;">AI Products offer</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false" style="font-size: 20px;">
              Documentation
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">API Integrations</a></li>
              <li><a class="dropdown-item" href="#">Embedded AI Chatbots</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Cloud Datasets</a></li>
            </ul>
          </li>
        </ul>

       
            </div>
    </div>
  </nav>

  <!--Login-->
    <div class="container-fluid vh-90 " style="margin-top: 5rem;">
        <div class="row h-100" >
            <!-- Kolom Kiri: Logo -->
            <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center bg-transparent">
                <img src="./img/chatbot.png" alt="Logo" class="img-fluid" style="max-width: 30%; margin-bottom: 20px;">
                <h1 class="text-center">Robotors</h1>
            </div>
    
            <!-- Kolom Kanan: Form Login/Register -->
            <div class="col-lg-4 d-flex align-items-center justify-content-center">
                <main class="form-signin w-75" >
                    <form >
                        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
    
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Username/Email</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
    
                        <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Login</button>
                        
                        <div class="text-center mt-3">
                            Belum memiliki akun? <a href="../Chat-Ai/register.html">Register</a>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>