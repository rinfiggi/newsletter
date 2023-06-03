<?php
if ($_SERVER["REQUEST_METHOD"] == "post") {
  $email = $_post["email"];
  if (!empty($email)) {
    $to = "d@rinfiggi.eu";
    $subject = "nuova iscrizione alla newsletter";
    $message = "nuova iscrizione alla newsletter:\n\nemail: " . $email;
    $headers = "from: d@rinfiggi.eu";
    if (mail($to, $subject, $message, $headers)) {
      echo "grazie per esserti iscritt* alla mia newsletter! <3";
    } else {
      echo "si è verificato un errore durante l'invio dell'email.";
    }
  } else {
    echo "per favore, inserisci un indirizzo email valido.";
  }
}
?>
