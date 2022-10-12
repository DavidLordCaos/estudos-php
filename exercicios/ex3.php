<html>
<head>
    <title>Exercicio 3</title>
</head>
<body>
<form method="post" action="ex3.php">
    <label for="nome">Informe seu nome: </label>
    <input type="text" id="nome" name="nome"><br><br>
    <label for="idade">Informe sua idade: </label>
    <input type="number" id="idade" name="idade"><br><br>
    <label for="genero">Informe seu genero: </label>
    <select name="genero" id="genero">
        <option value="F">Feminino</option>
        <option value="M">Masculino</option>
    </select>
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
$sex = $_POST['genero'];
$age = $_POST['idade'];
$name = $_POST['nome'];
if ($sex == 'F' && $age < 25) {
    echo "<div class='res'>$name foi aceita</div>";
} else {
    echo "<div class='res'>Não foi aceito</div>";
}
?>

</body>
</html>
