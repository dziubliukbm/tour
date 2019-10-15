<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['body'];

    $mailTo= "tourtest@mail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recived an email from ".$name.".\n\n".$message;

    mail($mailTo,$subject,$txt,$headerss);
    header("Location: contact.html?mailsend")

}