<?php
require_once 'credentials.php';

$subject = "Gracias por suscribirte a Just Do It";
$body = "Este mensaje es solo una confirmación de que te has suscrito a nuestro proyecto.\n\n
        Gracias por tu interés en nuestro proyecto.\n\n
        Esperamos que disfrutes de nuestro proyecto.\n\n
        Si tienes alguna duda o sugerencia, no dudes en contactarnos.\n\n
        Atentamente,\n\n
        El equipo de Just Do It";

$headers = "From: alainkiradesu@gmail.com" . "\n";
$headers .= "Reply-To: alainkiradesu@gmail.com" . "\n";
$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\n";
$headers .= 'Content-Transfer-Encoding: 8bit';

$query = "SELECT * FROM $table";
$result = mysqli_query($dbc, $query) or die("Error al procesar el formulario." . mysqli_error($dbc));

while ($row = mysqli_fetch_array($result)) {
    $email = $row['email'];
    
    $msg = "Querido sub,\n\n$body\n\nCon cariño,\nLatitude Development Team";
    if (mail($email, $subject, $msg, $headers)) {
        echo "Email sent to $email";
    } else {
        echo 'Error while sending an email to: ' . $email . '.';
    }

}

?>