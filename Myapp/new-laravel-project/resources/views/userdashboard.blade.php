<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #F0F2F5; /* Light grey background */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar {
            background-color: #37C26D;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .nav-link-play {
            padding: 5px 15px;
            background-color: #28a745;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }
        .nav-link-play:hover {
            background-color: #218838;
        }
        .dashboard-container {
            background-color: #fff;
            border-radius: 20px;
            padding: 20px;
            margin: 20px auto;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        .dashboard-title {
            text-align: center;
            margin-bottom: 20px;
            color: #37C26D;
        }
        .footer {
            background-color: #37C26D;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: auto;
        }
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }
        .footer-item {
            flex: 1;
            max-width: 300px;
            padding: 20px;
            background-color: #2A9D8F;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
        }
        .footer-item:hover {
            transform: translateY(-5px);
        }
        .footer-item-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .footer-item-description {
            color: #fff;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Quiz Time</a>
        <a href="http://127.0.0.1:8000/category" class="nav-link-play">Play</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
               
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container dashboard-container">
    
    <div class="container dashboard-container">
    <h1 class="dashboard-title">Welcome to  Quiz Master PRO</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="feature-item text-center">
                <div class="feature-icon">
                    <i class="bi bi-graph-up"></i>
                </div>
                <div class="feature-title">Quiz Performance</div>
                <div class="feature-description">View your quiz performance and track your progress.</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-item text-center">
                <div class="feature-icon">
                    <i class="bi bi-calendar"></i>
                </div>
                <div class="feature-title">Upcoming Quizzes</div>
                <div class="feature-description">Stay updated on upcoming quizzes and events.</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-item text-center">
                <div class="feature-icon">
                    <i class="bi bi-award"></i>
                </div>
                <div class="feature-title">Achievements</div>
                <div class="feature-description">Earn achievements for your quiz performance.</div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <h2>Your Recent Activity</h2>
            <ul class="list-group">
                <li class="list-group-item">Completed "History Quiz" with 90% score</li>
                <li class="list-group-item">Joined "Science Quiz" scheduled for tomorrow</li>
                <li class="list-group-item">Earned "History Buff" achievement</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h2>Recommended Quizzes</h2>
            <ul class="list-group">
                <li class="list-group-item">Geography Quiz - Test your knowledge of world geography</li>
                <li class="list-group-item">Literature Quiz - Explore famous literary works</li>
                <li class="list-group-item">Mathematics Quiz - Challenge your math skills</li>
            </ul>
        </div>
    </div>
</div>

</div>

<footer class="footer">
    <div class="footer-content">
        <div class="footer-item">
            <div class="footer-item-title">Get Started</div>
            <div class="footer-item-description">Start playing quizzes now and challenge your knowledge!</div>
        </div>
        <div class="footer-item">
            <div class="footer-item-title">Earn Rewards</div>
            <div class="footer-item-description">Earn rewards and achievements as you progress.</div>
        </div>
        <div class="footer-item">
            <div class="footer-item-title">Stay Connected</div>
            <div class="footer-item-description">Follow us on social media for updates and announcements.</div>
        </div>
    </div>
    <div>&copy; QuizMasterPro 2024. All rights reserved.</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60
