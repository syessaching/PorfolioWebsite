<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
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


    <div class="suggestionbox">
    <h1> Let us know what you think! </h1>
      <br>
    <form id="registrationForm" action="successfeedback.php" method="post">
        <label for="username">Name:</label>
        <input type="text" id="username" name="username" required>
        <div class="feedback" id="usernameFeedback"></div>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <div class="feedback" id="emailFeedback"></div>

        <label for="comments">Comment:</label>
        <input type="text" id="comment" name="comment" required>
        <div class="feedback" id="commentFeedback"></div>

        <button type="submit" id="submit">Submit</button>
    </form>

    </div>
  <footer class="grid-item footer">
        <h3>Where Learning is Fun!</h3>
  </footer>

  </div>
</body>
</html>