<?php
require_once 'credentials.php';

$email = $_POST['email'];

$query = "SELECT email FROM $table WHERE email = '$email'";
$result = $dbc->query($query);

if ($result->num_rows > 0) {
    header('Location: noregistrado.html');
} else {
$date = date('Y-m-d H:i:s');

$query = "INSERT INTO $table (email, date) VALUES ('$email', '$date')";

mysqli_query($dbc, $query) or die("Error al procesar el formulario." . mysqli_error($dbc));

header('Location: registrado.html');
}



mysqli_close($dbc);

?>