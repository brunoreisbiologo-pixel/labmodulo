<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Painel do Analista</title>
</head>
<body>
    <h1>Novo Laudo</h1>

    <form action="salvar.php" method="post">
        Nome do paciente:<br>
        <input type="text" name="paciente" required><br><br>

        Exame:<br>
        <select name="exame">
            <option value="Urina">Urina</option>
            <option value="ABO">Tipagem ABO</option>
            <option value="Beta HCG">Beta HCG</option>
            <option value="Fezes">Fezes</option>
        </select><br><br>

        Laudo:<br>
        <textarea name="laudo" rows="10" cols="50" required></textarea><br><br>

        <button type="submit">Salvar Laudo</button>
    </form>
</body>
</html>
 