<?php
$num = $_POST['num'];

if ($num % 2 == 0 && $num % 5 == 0 && $num % 10 == 0) {
    echo "<div class='res'>O número $num é divisivel por 10, 5 e 2</div>";
} else if ($num % 5 == 0 && $num % 10 == 0) {
    echo "<div class='res'>O número $num é divisivel por 10 e 5</div>";
} else if ($num % 2 == 0 && $num % 10 == 0) {
    echo "<div class='res'>O número $num é divisivel por 10 e 2</div>";
} else if ($num % 2 == 0 && $num % 5 == 0) {
    echo "<div class='res'>O número $num é divisivel por 5 e 2</div>";
} else if ($num % 2 == 0) {
    echo "<div class='res'>O número $num é divisivel por 2</div>";
} else if ($num % 5 == 0) {
    echo "<div class='res'>O número $num é divisivel por 5</div>";
} else {
    echo "<div class='res'>O número $num não é divisivel por 2, 5 e 10</div>";
}

?>
</body>
</html>
