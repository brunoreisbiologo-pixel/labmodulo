<?php
include "conexao.php";

$protocolo = $_GET['protocolo'];

$sql = "SELECT * FROM laudos WHERE protocolo = '$protocolo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $laudo = $result->fetch_assoc();

    echo "<h1>Laudo Laboratorial</h1>";
    echo "<p><strong>Paciente:</strong> " . $laudo['paciente'] . "</p>";
    echo "<p><strong>Exame:</strong> " . $laudo['exame'] . "</p>";
    echo "<p><strong>Data:</strong> " . date("d/m/Y H:i", strtotime($laudo['data'])) . "</p>";
    echo "<hr>";
    echo "<pre>" . nl2br($laudo['laudo']) . "</pre>";
    echo "<br><button onclick='window.print()'>Imprimir</button>";
} else {
    echo "Laudo não encontrado!";
}
?>
