<html>
<body>
<h1>Digite dois valores</h1>
<form method="post" action="ex1.php">
    <label for="fnumber">Digite um número: </label>
    <input type="number" id="fnumber" name="fnumber"><br><br>
    <label for="snumber">Digite outro número: </label>
    <input type="number" id="snumber" name="snumber"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
 $fnum = $_POST['fnumber'];
 $snum = $_POST['snumber'];
 $calc = $fnum + $snum;

 if ($calc > 20) {
     $calc = $calc + 8;
 } elseif ($calc <= 20) {
     $calc = $calc - 5;
 }

 echo "<div class='resultado'>O resultado é $calc</div>";
?>

</body>
</html>