<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" Från: $name \n  Meddelande: $message " ;
$recipient = "boka@uppsalaekebymassage.se";
$subject = "Meddelande från hemsidan";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Tack för ditt meddelande!" . " -" . "<a href='NotIndex.html' style='text-decoration:none;color:#ff0099;'> Klicka här för att komma tillbaka till hemsidan!</a>";
?>
