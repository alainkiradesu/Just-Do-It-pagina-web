<?php
require_once 'credentials.php';

$email = $_POST['email'];

$query = "SELECT email FROM $table WHERE email = '$email'";
$result = $dbc->query($query);

if ($result->num_rows > 0) {
    echo 'Este email ya se ha subscrito.';
} else {
$date = date('Y-m-d H:i:s');

$query = "INSERT INTO $table (email, date) VALUES ('$email', '$date')";

mysqli_query($dbc, $query) or die("Error al procesar el formulario." . mysqli_error($dbc));

echo "Gracias por subscribirse a nuestro proyecto.";
}

mysqli_close($dbc);

?>
<body>
    <h1>test</h1>
</body>