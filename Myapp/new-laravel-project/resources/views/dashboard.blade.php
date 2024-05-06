<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/layout.css">
</head>
<body>
    
<div class="container-fluid" style="background: #AFB3FF;">
  <div class="row">
    <div class="col" style="border: 1px solid; height: 100vh; position: relative;">
      <!-- Big Content -->
      <nav class="navbar navbar-expand-lg  navbar-light" style="background-color: dark;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><span class = "stdfont">Quiz Time</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><span class="stdfont">Home</span></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="box-shadow: 0px 6.15px 16.41px 2.05px #EDEDED;
 background-color: #EDEDED; ">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

      <div style="height: calc(100% - 20px); overflow: auto;">
      <ul class="nav flex-column" style="margin-top: 50px; padding-left: 30px;">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#"><img src="/logo1.png" alt="logo">Dashboard</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><img src ="/logo2.png" alt ="">Support</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><img src ="/logo3.png" alt ="">Notification</a>
  </li>
</ul>
        <!-- Add more content here if needed -->
      </div>
      <!-- Nested Content -->
      <div style="position: absolute; bottom: 20px; right: 20px; width: calc(80% - 0px); height: calc(80% - 10px);">
        <div style="padding: 10px; height: 100%; box-shadow: 0px 6.15px 16.41px 2.05px #EDEDED; border-radius: 13px;
">
<div class ="profileimage"><img src="/profile.png" alt="" width: 122.25px;
height: 105.84px;
top: 77.53px;
left: 148.51px;
gap: 0px;
border-radius: 12.31px 0px 0px 0px;
opacity: 0px;
><div class="profileinfo"><h3>Name</h3>  <br>
 </div> 
 
    <!-- Images Container (2x2 grid at bottom right) -->

        <div class="row">
            <div class="col-md-6 mb-4">
                <img src="/historical.png" alt="History" class="img-fluid">
            </div>
            <div class="col-md-6 mb-4">
                <img src="/maths.png" alt="Mathematics" class="img-fluid">
            </div>
            <div class="col-md-6 mb-4">
                <img src="/medicine.png" alt="Biology" class="img-fluid">
            </div>
            <div class="col-md-6 mb-4">
                <img src="/agri.png" alt="Agriculture" class="img-fluid">
            </div>
        </div>
    
</div>


</div>
    


</div>

      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>
