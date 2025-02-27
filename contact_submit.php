<?php
include("sweetalert_links.php");
?>
<html>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize inputs
    $recipient = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if(isset($_POST['fname']) && $_POST['fname'] != "")
    {
        $fname = htmlspecialchars($_POST['fname'], ENT_QUOTES, 'UTF-8');
    }
    else
    {
        $fname = "";
    }
    if(isset($_POST['email']) && $_POST['email'] != "")
    {
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    }
    else
    {
        $email = "";
    }
    
    if(isset($_POST['lname']) && $_POST['lname'] != "")
    {
        $lname = htmlspecialchars($_POST['lname'], ENT_QUOTES, 'UTF-8');
    }
    else
    {
        $lname = "";
    }
    if(isset($_POST['message']) && $_POST['message'] != "")
    {
        $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
    }
    else
    {
        $message = "";
    }
    
    $subject1 = "New Contact Submission - ".$email;

    // Validate inputs
    if (!$email) {
        die("Invalid email address.");
    }
    
    // Step 1: Validate email syntax
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }
    
    // Step 2: Check DNS records
    $domain = substr(strrchr($email, "@"), 1);
    if (!checkdnsrr($domain, "MX") && !checkdnsrr($domain, "A")) {
        echo "Invalid email domain.";
        exit;
    }

    // Prepare the message content
    $message = "Hello,\n\nNew Waitlist submission:\n" .
               "First Name: $fname\n" .
               "Last Name: $lname\n" .
               "Email: $email\n" .
               "Message: \n\n$message\n\n" .
               "Regards,\nTeam Aimyze";

    // Set email headers
    $headers = "From: info@aimyze.com\r\n" .
               "Reply-To: info@aimyze.com\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail("info@aimyze.com", $subject1, $message, $headers)) {
?>

    <body>
        <script>
            sw_alert('Thank You for Reaching Out!','Your request has been received, and our team will connect with you shortly to show you how Aimyze CRM can revolutionize your business.<br><br>✨ Get ready to experience the future of customer engagement!',"","Explore More Features");
            
        </script>
    </body>

<?php
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request method.";
}
?>
</html>
