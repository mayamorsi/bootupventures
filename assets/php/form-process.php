<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_phone"])) {
    $errorMSG .= "Phone is required ";
} else {
    $phone = $_POST["msg_phone"];
}

// MSG LINKDIN
if (empty($_POST["msg_linkdin"])) {
    $errorMSG .= "Linkdin URL is required ";
} else {
    $linkdin = $_POST["msg_linkdin"];
}

// MSG LINKDIN
if (empty($_POST["msg_referred"])) {
    $errorMSG .= "Referred by is required ";
} else {
    $referredby = $_POST["msg_referred"];
}

// MSG LINKDIN
if (empty($_POST["msg_relation"])) {
    $errorMSG .= "Relationship is required ";
} else {
    $relationship = $_POST["msg_relation"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "sanjukanwasi@gmail.com";
$Subject = "Cuckoos Nest Club: New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Linkdin URL: ";
$Body .= $linkdin;
$Body .= "\n";
$Body .= "Referred by: ";
$Body .= $referred;
$Body .= "\n";
$Body .= "Relationship: ";
$Body .= $relationship;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>