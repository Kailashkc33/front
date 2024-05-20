<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Game</title>
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
        .options {
            margin: 40px 0 0 0;
            padding: 20px;
        }
        .container {
            background-color: #fff2ec;
            border-radius: 20px;
            padding: 20px;
            width: 70%;
            max-height: 90vh;
            overflow-y: auto;
        }
        button {
            padding: 5px 20px 5px 20px; 
            background-color: #37C26D;
        }
        #timer {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
            color: black;
        }
        .option {
            margin-left: 250px;
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
        <div id="timer">Timer: <span id="timerValue"></span></div>
    </div>
</nav>

<div class="container text-left" style="height: auto; width: 70%;">
    <div class="row align-items-left">
        <div class="col">
            <h1>this place for the question 1</h1>
            <div class="options"> 
                <label><input type="radio" name="options1" onclick="selectOption(this)">Option 1</label>
                <label><input type="radio" name="options1" onclick="selectOption(this)" class="option">Option 3</label><br><br>
                <label><input type="radio" name="options1" onclick="selectOption(this)">Option 2</label>
                <label><input type="radio" name="options1" onclick="selectOption(this)" class="option">Option 4</label><br><br>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col">
            <h1>this place for the question 2</h1>
            <div class="options"> 
                <label><input type="radio" name="options2" onclick="selectOption(this)">Option 1</label>
                <label><input type="radio" name="options2" onclick="selectOption(this)" class="option">Option 3</label><br><br>
                <label><input type="radio" name="options2" onclick="selectOption(this)">Option 2</label>
                <label><input type="radio" name="options2" onclick="selectOption(this)" class="option">Option 4</label><br><br>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col">
            <h1>this place for the question 3</h1>
            <div class="options"> 
                <label><input type="radio" name="options3" onclick="selectOption(this)">Option 1</label>
                <label><input type="radio" name="options3" onclick="selectOption(this)" class="option">Option 3</label><br><br>
                <label><input type="radio" name="options3" onclick="selectOption(this)">Option 2</label>
                <label><input type="radio" name="options3" onclick="selectOption(this)" class="option">Option 4</label><br><br>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col">
            <h1>this place for the question 4</h1>
            <div class="options"> 
                <label><input type="radio" name="options4" onclick="selectOption(this)">Option 1</label>
                <label><input type="radio" name="options4" onclick="selectOption(this)" class="option">Option 3</label><br><br>
                <label><input type="radio" name="options4" onclick="selectOption(this)">Option 2</label>
                <label><input type="radio" name="options4" onclick="selectOption(this)" class="option">Option 4</label><br><br>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col">
            <h1>this place for the question 5</h1>
            <div class="options"> 
                <label><input type="radio" name="options5" onclick="selectOption(this)">Option 1</label>
                <label><input type="radio" name="options5" onclick="selectOption(this)" class="option">Option 3</label><br><br>
                <label><input type="radio" name="options5" onclick="selectOption(this)">Option 2</label>
                <label><input type="radio" name="options5" onclick="selectOption(this)" class="option">Option 4</label><br><br>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col">
            <h1>this place for the question 6</h1>
            <div class="options"> 
                <label><input type="radio" name="options6" onclick="selectOption(this)">Option 1</label>
                <label><input type="radio" name="options6" onclick="selectOption(this)" class="option">Option 3</label><br><br>
                <label><input type="radio" name="options6" onclick="selectOption(this)">Option 2</label>
                <label><input type="radio" name="options6" onclick="selectOption(this)" class="option">Option 4</label><br><br>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col">
            <h1>this place for the question 7</h1>
            <div class="options"> 
                <label><input type="radio" name="options7" onclick="selectOption(this)">Option 1</label>
                <label><input type="radio" name="options7" onclick="selectOption(this)" class="option">Option 3</label><br><br>
                <label><input type="radio" name="options7" onclick="selectOption(this)">Option 2</label>
                <label><input type="radio" name="options7" onclick="selectOption(this)" class="option">Option 4</label><br><br>
            </div>
        </div>
    </div>
    <button type="submit">Submit</button>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    let timerValue = 900; 
    const timerElement = document.getElementById('timerValue');

    function updateTimer() {
        timerElement.textContent = formatTime(timerValue);
        if (timerValue > 0) {
            timerValue--; 
            setTimeout(updateTimer, 1000); 
        } else {
            alert('Time is up!');
        }
    }

    updateTimer();

    function submitAnswer() {
        alert('Answer submitted!');
        timerValue = 900; 
        updateTimer(); 
    }

    function formatTime(seconds) {
        let minutes = Math.floor(seconds / 60);
        let remainingSeconds = seconds % 60;
        return `${padZero(minutes)}:${padZero(remainingSeconds)}`;
    }

    function padZero(num) {
        return (num < 10 ? '0' : '') + num;
    }

    function selectOption(input) {
        const radioButtons = document.getElementsByName(input.name);
        radioButtons.forEach(button => button.checked = false);
        input.checked = true;
    }
</script>
</body>
</html>
