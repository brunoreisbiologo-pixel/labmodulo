<?php
include "conexao.php";
date_default_timezone_set('America/Sao_Paulo');

$paciente = $_POST['paciente'];
$exame = $_POST['exame'];
$laudo = $_POST['laudo'];
$protocolo = uniqid();
$data = date("Y-m-d H:i:s");

$sql = "INSERT INTO laudos (protocolo, paciente, exame, laudo, data)
        VALUES ('$protocolo', '$paciente', '$exame', '$laudo', '$data')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Laudo salvo com sucesso!</h1>";
    echo "<p><strong>Protocolo:</strong> $protocolo</p>";
    echo "<p>Guarde este número para consultar o laudo.</p>";
    echo "<a href='painel.php'>Voltar</a>";
} else {
    echo "Erro ao salvar: " . $conn->error;
}
?>
