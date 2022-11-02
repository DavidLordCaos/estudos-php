<html>
<body>
<form action="ex7.php" method="post">
    <label for="book">Informe o nome do livro: </label>
    <input type="text" name="book" id="book"><br><br>
    <input type="checkbox" id="prof" name="prof">
    <label for="prof">Professor</label><br>
    <input type="checkbox" id="aluno" name="aluno">
    <label for="aluno">Aluno</label><br><br>
    <input type="submit" value="Submit">
</form>

<?php
$book = $_POST['book'];
$prof = $_POST['prof'];
$aluno = $_POST['aluno'];

if ($prof) {
    echo "Você tem 10 dias pra devolver o livro $book";
} else {
    echo "Você tem 3 dias pra devolver o livro $book";
}
?>

</body>
</html>