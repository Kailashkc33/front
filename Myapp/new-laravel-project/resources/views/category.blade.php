<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for body */
        body {
            padding-top: 20px; /* Add padding to the top of the body */
            background-color: #AFB3FF; /* Set body background color */
        }
        /* Custom CSS for navbar */
        .navbar {
            background-color: #AFB3FF; /* Set navbar background color */
            margin-bottom: 20px; /* Add margin at the bottom of the navbar */
        }
        .nav-link-logout {
            padding: 10px 15px; /* Add padding to the "Log Out" link */
            background-color:  #FF6347; /* Set light red background color */
            color: #fff; /* Set text color to white */
            border-radius: 5px; /* Add border radius */
            transition: background-color 0.3s ease; /* Smooth transition for background color */
        }
        /* Hover effect for "Log Out" link */
        .nav-link-logout:hover {
            background-color: #FF0000; /* Brighten up the background color on hover */
        }
        h1, h2{
            text-align: center;
            color: #696F79;
        }
      .img-fluid{
        height: 70%;
        width: 80%;
        display: block;
        transition: transform 0.3s ease;
    cursor: pointer; 
      }

      .img-fluid:hover{
        transform: scale(1.2);
       

     
      }
      figcaption {
       margin-left: 20%;
       margin-bottom: 5px;
       transition: transform 0.3s ease;
       cursor: pointer; 
       color: #fff;
       border-radius: 5px;
    padding: 8px 12px; /* Padding for internal spacing */
    font-weight: bold; /* Use 'bold' for font weight */
   
  
    
   
}
a{
    text-decoration: none;
}
      

      figcaption:hover{
        transform: scale(1.05);
     
   
}

        
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#"><h1>QuizMasterPro</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-logout active" aria-current="page" href="#">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Images Container -->
<h2>Choose your Category</h2>
<div class="container d-flex justify-content-center" style = "padding:30px; margin-left:100px;">

    
    <div class="row">
        <div class="col-md-4 mb-4">
            <figure>
                <a href="http://127.0.0.1:8000/mode">
            <img src="/historical.png" alt="History" class="img-fluid">
            <figcaption>HISTORY</figcaption>
    </a>
            </figure>
        </div>
        <div class="col-md-4 mb-4">
            <figure>
            <a href="http://127.0.0.1:8000/loginpage">
            <img src="/historical.png" alt="science" class="img-fluid">
            <figcaption>SCIENCE</figcaption>
            </a>
            </figure>
        </div>
        <div class="col-md-4 mb-4">
            <figure>
            <a href="http://127.0.0.1:8000/mode">
            <img src="/historical.png" alt="maths" class="img-fluid">
            <figcaption>MATHS</figcaption>
            </a>
            </figure>
        </div>
        <div class="col-md-4 mb-4">
            <figure>
            <a href="http://127.0.0.1:8000/mode">
            <img src="/historical.png" alt="computer science" class="img-fluid">
            <figcaption>COMPUTER SCIENCE</figcaption>
            </a>
            </figure>
        </div>
        <div class="col-md-4 mb-4">
            <figure>
            <a href="http://127.0.0.1:8000/mode">
            <img src="/historical.png" alt="biology" class="img-fluid">
            <figcaption>BIOLOGY</figcaption>
            </a>
            </figure>
        </div>
        <div class="col-md-4 mb-4">
            <figure>
            <a href="http://127.0.0.1:8000/mode">
            <img src="/historical.png" alt="GK" class="img-fluid">
            <figcaption>GENERAL KNOWLEDGE</figcaption>
    </a>
            </figure>
        </div>
       

    </div>
</div>

<!-- Include Bootstrap JS for navbar toggling -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
