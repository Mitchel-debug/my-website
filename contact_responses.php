<!-- I just copied this part from Stack Overflow. Idk php lol -->

<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['Email'];
    $message = $_POST['message'];


    $email_from = 'mitchelelusanmi1@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "mitchelelusanmi1@gmail.com";

    $headers = "From $email_from \r\n";
    $headers = "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact.html");
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 9f38f5cb84f5bb654d197f6d298b5e08c470f8ed
