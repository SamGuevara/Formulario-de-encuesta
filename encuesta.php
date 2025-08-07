<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

// Conexión con la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro_usuarios";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn -> connect_error){
    die("Conexión fallida: " . $conn -> connect_error);
}

// Obtener datos del formulario, uso isset() para evitar errores si el usuario no completo algun campo
$rating = isset($_POST['rating']) ? (int)$_POST['rating'] : null; //para transformar las estrellas en un nuemro del 1-5
$gustos = isset($_POST['gustos']) ? implode(",", $_POST['gustos']) : ""; // para los checkbox ya que puede seleccionar varios, que los separe con coma
$comentarios = isset($_POST['comments']) ? $_POST['comments'] : ""; //para los comentarios 

// Validación para las estrellas, que al menos marque una
if ($rating === null){
    die("Por favor selecciona una estrella para calificar.");
}

// Guardar los datos en la base de datos

$sql = "INSERT INTO respuesta_encuesta (rating, gustos, comentarios) VALUES (?, ?, ?)";
$stmt = $conn -> prepare($sql);
$stmt ->bind_param("iss", $rating, $gustos, $comentarios);

if ($stmt -> execute()){
    echo"¡Gracias por responder la encuesta!<br><a href='index.html'>Volver</a>";
}
else{
    echo"Error al guardar la encuesta" . $stmt -> error;
}

$stmt->close();
$conn->close();

?>