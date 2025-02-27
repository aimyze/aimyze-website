<?php
include("sweetalert_links.php");
?>
<html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize inputs
    $recipient = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if(isset($_POST['phone']) && $_POST['phone'] != "")
    {
        $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');
    }
    else
    {
        $phone = "";
    }
    if(isset($_POST['name']) && $_POST['name'] != "")
    {
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    }
    else
    {
        $name = "";
    }
    
    $subject = "New Waitlist Submission - ".$recipient;

    // Validate inputs
    if (!$recipient) {
        die("Invalid email address.");
    }
    
    // Step 1: Validate email syntax
    if (!filter_var($recipient, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }
    
    // Step 2: Check DNS records
    $domain = substr(strrchr($recipient, "@"), 1);
    if (!checkdnsrr($domain, "MX") && !checkdnsrr($domain, "A")) {
        echo "Invalid email domain.";
        exit;
    }

    // Prepare the message content
    $message = "Hello,\n\nNew Waitlist submission:\n" .
               "Name: $name\n" .
               "Email: $recipient\n" .
               "Phone: $phone\n\n" .
               "Regards,\nTeam Aimyze";

    // Set email headers
    $headers = "From: info@aimyze.com\r\n" .
               "Reply-To: info@aimyze.com\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail("info@aimyze.com", $subject, $message, $headers)) {
?>

    <body>
        <script>
            sw_alert('Thanks!','Will Contact you soon!');
            
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
