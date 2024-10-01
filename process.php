<?php
$difficulty = $_POST['difficulty'];
$choice = $_POST['choice'];
$unlocked = $_POST['unlocked'];
var_dump($difficulty);
var_dump($choice);
var_dump($unlocked);

echo "<h1>Результат гри</h1>";
if ($difficulty == 'easy') {// 75% 
    $password = rand(0, 3);
    $result = ($choice == 'Решка' && $password >= 2) || ($choice == 'Орел' && $password <= 2) ? 'win' : 'lose';    
} elseif ($difficulty == 'normal') {// 50%
    $password = rand(0, 1); 
    $result = ($choice == 'Решка' && $password == 1) || ($choice == 'Орел' && $password == 0) ? 'win' : 'lose';     
} elseif ($difficulty == 'hard') {// 25%
    $password = rand(0, 3); 
    $result = ($choice == 'Орел' && $password == 0) || ($choice == 'Решка' && $password == 3)? 'win' : 'lose';     
}


$coin_flip = rand(0, 1) == 0 ? 'Орел' : 'Решка';

if ($result == 'win' && $coin_flip == $choice) {
    #echo "<p>Ви виграли! Випав $coin_flip, ви обрали правильно!</p>";
    echo "<p>Ви виграли.</p>";
    if ($difficulty == 'easy') {
        $unlocked = 'normal'; 
    } elseif ($difficulty == 'normal') {
        $unlocked = 'hard'; 
    }
} else {
    #echo "<p>Ви програли. Випав $coin_flip, ви обрали неправильно.</p>";
    echo "<p>Ви програли.</p>";
    if ($difficulty == 'hard') {
        $unlocked = 'easy'; 
    }
}



?>

<form action="index.php" method="POST">
    <input type="hidden" name="unlocked" value="<?php echo $unlocked; ?>">
    <button type="submit">Спробувати ще раз</button>
</form>
