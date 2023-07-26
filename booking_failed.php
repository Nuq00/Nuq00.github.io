<html lang="en">

<head>
    <?php include_once 'head.php'; ?>
</head>

<body>
    <div class="container">
        <div class="mt-5 d-flex flex-column justify-content-center align-items-center">
            <div class="alert alert-danger d-flex flex-column justify-content-center align-items-center" role="alert">
                You did not successfully booked the slot!
                <div class="mt-2">
                    <p>You will be redirected to another page in <span id="timer">3</span> seconds.</p>
                </div>
            </div>


            <script>
                // Set the timer to 10 seconds
                let timeLeft = 3;

                // Get the timer element
                let timer = document.getElementById('timer');

                // Start the countdown timer
                let countdown = setInterval(function() {
                    // Decrement the time left
                    timeLeft--;

                    // Update the timer display
                    timer.innerText = timeLeft;

                    // Check if the timer has run out
                    if (timeLeft == 0) {
                        // Clear the countdown timer


                        <?php
                        $lastPage = $_SERVER['HTTP_REFERER']; ?>
                        

                        // Redirect the user to the last visited page
                        clearInterval(countdown);

                        // Redirect to the new page
                        window.location.href = 'history.php';
                    }
                }, 1000);
            </script>
        </div>
    </div>
    <?php include_once 'script.php'; ?>

</body>

</html>