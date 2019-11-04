<?php
$name = $_POST['name'];
$email = $_POST['email'];
/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
    exit();
}
$message = check_input($_POST['message'], "Write your message");
$formcontent=" From: $name \n  Message: $message";
$recipient = "martinobag@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! Message sent sucessfully " . " -" . "<a href='../' style='text-decoration:none;color:#ff0099;'> Return Home </a>";

function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) <= 2)
    {
        show_error($problem);
        exit();
    }
    return $data;
}

function show_error($myError)
{

    echo " Please correct the following error " . $myError;
}
?>