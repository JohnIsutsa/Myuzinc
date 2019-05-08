<?php
    if(isset($_POST['submit']))
    {
       $name = $_POST['name'];
       
       $mailFrom = $_POST['email'];
       $message = $_POST['message'];

       $mailTo = "johnisutsa@thechanger.net";

       $headers = "From: ".$mailFrom;
       $txt = "You have received an email from ".$name.".\n\n".$message;

       mail($mailTo, $txt, $headers);

       header("Location: contact.html?mailsend");
    }

?>