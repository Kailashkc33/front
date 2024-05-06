<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles can be placed here */
        .fform {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            /* box-sizing: border-box; */
            border-radius: 20px;
            border-color: #656ED3;
        }
        .sbutton {
            padding: 10px 20px;
            background-color: #656ED3;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .pmiddle {
            font-size: 30px;
            font-weight: bold;
        }
        .contact {
            font-weight: bold;
        }
        .logo {
            width: 40px;
            height: 40px;
            margin-top: 10px;
        }
        form{
            margin: 50px 0 0 0;
        }
        .nav-link{
            font-weight: bold;
            font-size: 16px;
        }
       
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Column for Image -->
            <div class="col-md-6">
                <img src="Other 07reg.png" alt="Image Logo" class="img-fluid">
            </div>
            <!-- Column for Form -->
            <div class="col-md-6">
                <span class="pmiddle">Fill out form to begin the fun:</span>
                <form>
                    <label for="fname">Full name:</label><br>
                    <input type="text" id="fname" name="fname" class="fform"><br>
                    <label for="Uname">User name:</label><br>
                    <input type="email" id="Uname" name="Uname" required class="fform"><br>
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password" required class="fform"><br>
                    <label for="cpw">Confirm Password:</label><br>
                    <input type="password" id="cpw" name="cpw" class="fform"><br>
                    <button type="submit" class="sbutton">Register</button>
                </form>
                <p>
                    <span style="font-weight: normal;">
                        <p style="margin-top: 20px;">Already have an account?</p><a href="http://127.0.0.1:8000/loginpage" class="nav-link">Login</a><br><br>
                        <u><span class="contact">Contact us on:</span></u>
                    </span>
                </p>
                <a href="https://wa.me/1234567890" target="_blank">
                    <img src="whatsapp.png" alt="Whatsapp Icon" class="logo">
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
