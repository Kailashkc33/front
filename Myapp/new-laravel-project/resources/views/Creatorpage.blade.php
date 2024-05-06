<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<style>
    .form-control{
        width: 350px;
    }
    
body, html {
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            padding:-10;
            margin: -10;
        }
        h4, p, .btn-btn-primary{
            display: flex;
            justify-content: center;
        }
        </style>
   
    <div class="container-fluid" >
    <nav class="navbar bg-body-tertiary">
  <form class="container-fluid justify-content-start">
    <a href="http://127.0.0.1:8000/adminpage" class="btn btn-outline-success me-2" type="button">Admin</a>
    <a href="http://127.0.0.1:8000/loginpage" class="btn btn-outline-success me-2" type="button">User</a>
  </form>
</nav>
        <div class="container">
            
            
            <div class="row">
                
                
                <div class="col-lg-8 d-flex align-items-center justify-content-center" style="background-color:#EBEFFF; height: 100vh;" >
                <form class="mt-5 mb-3" action="" method="post">

                <h4>Please enter to login</h4>


<div class="mb-4">
    <div class="d-flex align-items-left">
        <label class="form-check-label mb-1" for="email">Email <span
                class="text-danger">*</span></label>
    </div>
    <input type="email" class="form-control" name="email" id="email"
        placeholder="Creator" required />
</div>
<div class="mb-3">
    <div class="d-flex align-items-left">
        <label class="form-check-label mb-1" for="rememberMe">Password </label>
    </div>
    <div class="input-group">
        <input type="password" class="form-control" name="password" id="password"
            placeholder="Enter your password" required />
       
    </div><br>
   
</div>
   

<button type="submit" type="name" class="btn btn-primary">Login</button>
<br><br>
<a href="#">Forget Password?</a>
<br><br>
<p>Not a member? Join us<a href="http://127.0.0.1:8000/QuizMasterPro" style="text-decoration: none; padding-left: 5px;">Here</a> </p>

</form>
                </div>
                <div class="col-md-4 d-flex align-items-center" style="background-color:#AFB3FF; height: 100vh;">
                        <img src="Other 03.png" alt="image" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
    </nav>
</body>

</html>