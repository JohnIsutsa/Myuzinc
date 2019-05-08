<?php
 
 if (isset($_POST['submit'])) {


 	$name = $_POST['name'];
       
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $sevice = $_POST['service'];

    $mailTo = "johnisutsa@thechanger.net";

    $headers = "From: ".$mailFrom;

    /*$txt = "You have received an email from ".$name.".\n\n".$message;*/

    $txt = "You have received an email from ".$name.".\n\n"."Requiring the following service ".$service. ".\n\n".$message;

    mail($mailTo, $txt, $headers);

    header("Location: hire-event.html?mailsend");

    /*
    *alert("Email sent.  Close and exit.");*/
 }
?>