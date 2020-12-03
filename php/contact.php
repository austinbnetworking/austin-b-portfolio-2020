<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $input_message = $_POST['message'];
    $from_email = $email_address . "\r\n";
    $mail_to = "contact@austinb.net";
    $headers = "From: " . $name;
    $txt = "You have received an e-mail from " . $name . ".\n\n" . $input_message;
    if (empty($name)) {
        $name_error = 'Please input your name';
    } else if (strpos($name, "Henryvog") !== false) {
        $name_error = 'You are a bot';
        $message_failure = 'Please check feilds...';
    } else if (strpos($name, "AV") !== false) {
        $name_error = 'You are a bot';
        $message_failure = 'Please check feilds...';
    }
    if (empty($email_address)) {
        $email_error = 'Please input your Email Address';
    }
    if (empty($input_message)) {
        $comment_error = 'Please input your Message';
    }
    if (empty($name_error) && empty($email_error) && empty($comment_error)) {
        if (mail($mail_to, $headers, $txt, $from_email)) {
            $name = '';
            $email_address = '';
            $input_message = '';
            $message_success = 'Message successfullly sent!';
        } else {
            $message_failure = 'Message delivery failed...';
        }
    }
}
?>

<?php
if (!isset($name)) {
    $name = '';
}
if (!isset($email_address)) {
    $email_address = '';
}
if (!isset($input_message)) {
    $input_message = '';
} ?>

<!-- PHP Success/Failure Notification -->
<?php if (isset($message_success)) { ?>

    <div class="message success">
        <p><?php echo $message_success ?></p>
    </div>

<?php } ?>

<?php if (isset($message_failure)) { ?>

    <div class="message fail">
        <p><?php echo $message_failure ?></p>
    </div>

<?php } ?>

<div class="contact">

    <form method="post" id="contact_form" name="contact_form" onsubmit="submit_contact();return false;">

        <h2>Say Hi</h2>
        <p>Interested in my work? Contacting me is easy. Use this form or email me at <span>austinbnetworking@gmail.com</span></p>

        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name) ?>" placeholder="Your Name" required>
        <span id="name_error"></span>

        <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email_address) ?>" placeholder="Your Email" required>
        <span id="email_error"></span>

        <textarea form="contact_form" name="message" id="message" cols="15" rows="10" placeholder="How can I help you?" required><?php echo htmlspecialchars($input_message) ?></textarea>
        <span id="messageError"></span>

        <p>*Messages are responded to within 24hrs.</p>

        <input type="submit" id="contact_submit" name="contact_submit" value="submit" />

    </form>

    <div class="location">
        <img src="images/logo.png" alt="Austin Brown Logo">
    </div>

</div>