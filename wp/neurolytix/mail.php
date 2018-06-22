<meta http-equiv='refresh' content='5; url=/'>
<meta charset="UTF-8" />
<?php 

    $to = "polivianov@yahoo.com"; // this is your Email address
    $from = $_POST['mail']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $message = $name . " " . $from . "\n\n" . $_POST['message'];

    $headers = "From:" . $name;
    mail($to,$subject,$message);
    // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    
?>
