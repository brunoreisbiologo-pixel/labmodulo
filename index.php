<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sistema de Laudos</title>
</head>
<body>
    <h1>Sistema de Laudos</h1>

    <h2>Área do Analista</h2>
    <a href="login.php">Entrar para digitar laudo</a>

    <hr>

    <h2>Área do Paciente</h2>
    <a href="consultar.php">Consultar laudo</a>
</body>
</html>
🔐 6. Login do analista – login.php
(Senha fixa só pra começar: 1234)

<?php
if ($_POST) {
    if ($_POST['senha'] == "1234") {
        header("Location: painel.php");
        exit;
    } else {
        echo "Senha incorreta!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Analista</title>
</head>
<body>
    <h1>Login do Analista</h1>
    <form method="post">
        Senha: <input type="password" name="senha">
        <button type="submit">Entrar</button>
    </form>
</body>
</html>