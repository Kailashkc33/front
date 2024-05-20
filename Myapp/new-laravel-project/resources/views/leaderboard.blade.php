<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('backgroundimg1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            flex-direction: column;
            overflow: hidden;
        }
        .container {
            background-color: #fff2ec;
            border-radius: 20px;
            padding: 20px;
            width: 70%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
        }
        table {
            width: 100%;
            margin: 20px 0;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #37C26D;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        /* Confetti animation */
        .confetti {
            position: fixed;
            width: 10px;
            height: 10px;
            background-color: red;
            top: 0;
            animation: confetti-animation 3s linear infinite;
        }
        .confetti:nth-child(2) {
            background-color: yellow;
            left: 20%;
            animation-delay: 0.2s;
        }
        .confetti:nth-child(3) {
            background-color: green;
            left: 40%;
            animation-delay: 0.4s;
        }
        .confetti:nth-child(4) {
            background-color: blue;
            left: 60%;
            animation-delay: 0.6s;
        }
        .confetti:nth-child(5) {
            background-color: purple;
            left: 80%;
            animation-delay: 0.8s;
        }
        @keyframes confetti-animation {
            0% { transform: translateY(0) rotate(0deg); opacity: 1; }
            100% { transform: translateY(100vh) rotate(720deg); opacity: 0; }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Quit</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container text-left">
    <h1 class="text-center">Leaderboard</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Player 1</td>
                <td>1500</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Player 2</td>
                <td>1200</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Player 3</td>
                <td>1100</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
    <!-- Confetti elements -->
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
