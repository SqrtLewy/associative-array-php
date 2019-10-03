<h2>Insert grade for test:</h2>
<form action="index.php" method="POST">
Name:<input type="text" name="name"> <br />
Grade (1-6): <input type="number" name="grade"> <br />
<input type="submit" value="Insert">
</form>

<h2>Grades:</h2>


<?php

$name = $_POST['name'];
$grade = $_POST['grade'];

$grades = ['John' => '4', 'Jack' => '5', 'Daniel' => '6', 'Paul'  => '2', "$name" => "$grade"];

ksort($grades);

foreach ($grades as $key => $value)
    echo sprintf('%s received a grade %s <br>', $key, $value);
?>
