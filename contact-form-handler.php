<!-- I just copied this part from Stack Overflow. Idk php lol -->

<?php
    $errors =  "";
    $myemail = 'mitchelelusanmi1@gmail.com';
    if(empty($_POST['name'])||
    empty($_POST["email"])||
    empty($_POST["message"]))
    {
        $errors .= "\n Error: all fields are required";    
    }
    $name = $_POST['name'];

    $email_address = $_POST['email'];

    $message = $_POST['message'];

    if (!preg_match(

    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address))

    {

    $errors .= "\n Error: Invalid email address";

    }

    if( empty($errors))

    {

    $to = $myemail;

    $email_subject = "Contact form submission: $name";

    $email_body = "You have received a new message. ".

    " Here are the details:\n Name: $name \n ".

    "Email: $email_address\n Message \n $message";

    $headers = "From: $myemail\n";

    $headers .= "Reply-To: $email_address";

    mail($to,$email_subject,$email_body,$headers);
}
//     $name = $_POST['name'];
//     $visitor_email = $_POST['email'];
//     $message = $_POST['message'];


//     $email_from = 'mitchelelusanmi1@gmail.com';

//     $email_subject = "New Form Submission";

//     $email_body = "User Name: $name.\n".
//                     "User Email: $visitor_email.\n".
//                         "User Message: $message.\n";

//     $to = "mitchelelusanmi1@gmail.com";

//     $headers = "From $email_from \r\n";
//     $headers = "Reply-To: $visitor_email \r\n";

//     mail($to, $email_subject, $email_body, $headers);

//     header("Location: contact.html");
// ?>