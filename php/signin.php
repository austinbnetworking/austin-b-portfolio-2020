<?php
// IF the login form is submitted...
if (isset($_POST['username'])) {
    // Start the session...
    session_cache_limiter('none');
    session_start();
    // Assign variables for inputted parameters...
    $inUsername = $_POST['username'];
    $inPassword = $_POST['password'];
    // Connect to DB...
    require 'dbConnect.php';
    // Set up SQL statement
    $sql =
        "SELECT event_user_name, event_user_password 
    FROM event_user 
    WHERE event_user_name = :username 
    AND event_user_password = :userpassword";
    // Bind parameters, prepare statement, and execute...
    $query = $conn->prepare($sql) or die("<p>SQL String: $sql</p>"); //prepare the query
    $query->bindParam(':username', $inUsername);
    $query->bindParam(':userpassword', $inPassword);
    $query->execute() or die("<p>Execution </p>");
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetch(PDO::FETCH_ASSOC);
    // IF row count = 1, a user was found...
    $rowCount = $query->rowCount();
    if ($rowCount == 1) {
        $_SESSION['verified'] = true;
    } else {
        $_SESSION['verified'] = false;
        $signin_error = "Incorrect Username or Password";
    }
    // Close the connection...
    $query = null;
    $conn = null;
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// IF session variable is set AND verified to be true...
if (isset($_SESSION['verified']) && $_SESSION['verified'] == true) {
?>
    <!-- ADMIN CONTENT -->
    <div class="projects_list">

        <h2>WDV 341 (Intro PHP) Projects</h2>

        <ul>

            <li><a href="projects/WDV341/testGit.php" target="_blank">Git Test Page</a></li>
            <li><a href="projects/WDV341/phpBasics.php" target="_blank">PHP Basics</a></li>
            <li><a href="projects/WDV341/phpFunctions.php" target="_blank">PHP Functions</a></li>
            <li><a href="projects/WDV341/fileUploader.php" target="_blank">File Uploader</a></li>
            <li><a href="projects/WDV341/formattedProducts/retailProducts.php" target="_blank">Dynamic Products</a></li>
            <li><a href="projects/WDV341/formHandling/exampleForm.html" target="_blank">Form Handling</a></li>
            <li><a href="projects/WDV341/eventForm.html" target="_blank">Event Form Input</a></li>
            <li><a href="projects/WDV341/eventForm.php" target="_blank">Self Posting Event Form</a></li>
            <li><a href="projects/WDV341/eventFormWCaptcha.php" target="_blank">Posting form W/ Google Recaptcha</a></li>

        </ul>

    </div>
<?php
} else {
?>
    <!-- FORM FOR LOGIN -->
    <div class="sign_in">
        <h2>Please login to the Administrator System</h2>
        <?php
        if (isset($signin_error)) {
            echo "<p class='signin_error'>$signin_error</p>";
        } 
        ?>
        <form action="" method="post" id="login_form" name="loginForm" onsubmit="submit_login();return false">
            <p>Username: <input id="username" name="username" type="text" /></p>
            <p>Password: <input id="password" name="password" type="password" /></p>
            <p><input type="submit" id="login_submit" name="login_submit" value="submit" /></p>
        </form>
    </div>
<?php
}
// Close the connection...
$query = null;
$conn = null;
?>