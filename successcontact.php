<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you!</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="grid-container">
      <header class="grid-item header"><h1>English Wonderland</h1></header>
      <nav class="grid-item nav">
        <ul class="menu">
          <li><a href="index.html">Home</a></li>
           <li><a href="wordscramble.html">WordScramble</a></li>
            <li><a href="grammar.html">Practice Grammar</a></li>
           <li><a href="shortstories.html">Short Stories</a></li>
           <li><a href="feedback.php">Feedback</a></li>
           <li><a href="about.html">About</a></li>
        </ul>
      </nav>

    <?php
    function isValidEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    $emailFeedback = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"] ?? '';
        $email = $_POST["email"] ?? '';
        $comment = $_POST["comment"] ?? '';
        $isValid = true;

        // Validation for email
        if (empty($email)) {
            $emailFeedback = '<div class="error-message">Please fill out this field.</div>';
            $isValid = false;
        } elseif (!isValidEmail($email)) {
            $emailFeedback = '<div class="error-message">Invalid email format. Please use a valid email address.</div>';
            $isValid = false;
        }

        // Display feedback and save to file
        if (!$isValid) {
            echo $emailFeedback;
        } else {
            // Prepare the data to be written to the text file
            $feedbackData = "Name: $username\nEmail: $email\nComment: $comment\n\n";

            // Specify the path to your text file
            $filePath = "feedback.txt";

            // Open the file in append mode
            $file = fopen($filePath, "a");

            // Write the data to the file
            fwrite($file, $feedbackData);

            // Close the file
            fclose($file);

            echo '<div class="feedback-container">
                    <div class="success-message">Thank you for your feedback!</div>
                    <a href="https://project-ai-chezza8.it240-2023-fall.repl.co/" class="button-link">
                        <button class="Return">Go Back To Home</button>
                    </a>
                </div>';
        }
    }
?>


  <footer class="grid-item footer">
            <h3>Where Learning is Fun!</h3>
  </footer>

  </div>

</body>
</html>
