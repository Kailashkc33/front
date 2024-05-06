<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Game</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('backgroundimg1.jpg');
            background-repeat: no-repeat;
           
   
    
           
        }
        .options{
            margin: 40px 0 0 0;
            padding: 20px;
        }
        .container{
            background-color:#fff2ec;
            border-radius: 20px;
        }
        button{
            padding: 5px 20px 5px 20px; 
            background-color: #37C26D;
        }
        #timer {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
            color: #ffffff;
        }
    </style>
</head>
<body>

<div class="container text-center" style =" height: 60%; width: 50%;">
    <div class="row align-items-center">
        <div class="col">
            <h1>this place for the questions</h1>
            <div class="options"> 
            <input type="radio" name="options">Option 1</input><br><br>
            <input type="radio" name="options">Option 2</input><br><br>
            <input type="radio" name="options">Option 3</input><br><br>
            <input type="radio" name="options">Option 4</input><br><br>
    </div>
    <button type="submit">Submit</button>
        </div>
    </div>
</div>
<div id="timer">Timer: <span id="timerValue"></span></div>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Timer variables
    let timerValue = 60; // Initial timer value in seconds
    const timerElement = document.getElementById('timerValue');

    // Function to update and display the timer
    function updateTimer() {
        timerElement.textContent = timerValue;
        if (timerValue > 0) {
            timerValue--; // Decrease timer value by 1 second
            setTimeout(updateTimer, 1000); // Schedule the next update after 1 second
        } else {
            // Time's up - Add logic for what to do when the timer reaches 0
            alert('Time is up!');
        }
    }

    // Call the function to start the timer when the page loads
    updateTimer();

    // Function to handle submission of answer
    function submitAnswer() {
        // Add your logic to process the selected option and move to the next question
        alert('Answer submitted!');
        // Example: Reset the timer for the next question
        timerValue = 60; // Reset timer to 60 seconds for the next question
        updateTimer(); // Restart the timer
    }
</script>
</body>
</html>
