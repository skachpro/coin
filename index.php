<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Орел чи Решка</title>
    <style>
        .buttons{
            display: flex;
            gap: 20px;
        }
    </style>
</head>
<body>

<h1>Орел чи Пешка</h1>

<?php
$normal_disabled = 'disabled';
$hard_disabled = 'disabled';

if (isset($_POST['unlocked'])) {
    if ($_POST['unlocked'] == 'normal') {
        $normal_disabled = ''; 
    } elseif ($_POST['unlocked'] == 'hard') {
        $normal_disabled = ''; 
        $hard_disabled = ''; 
    }
}
?>

<p>Виберіть рівень складності:</p>

<div class="buttons">
    <form action="coin_flip.php" method="POST">
        <input type="hidden" name="difficulty" value="easy">
        <input type="hidden" name="unlocked" value="<?php echo $_POST['unlocked'] ?? ''; ?>">
        <button type="submit">Easy</button>
    </form>
    <form action="coin_flip.php" method="POST">
        <input type="hidden" name="difficulty" value="normal">
        <input type="hidden" name="unlocked" value="<?php echo $_POST['unlocked'] ?? ''; ?>">
        <button type="submit" <?php echo $normal_disabled; ?>>Normal</button>
    </form>    
    <form action="coin_flip.php" method="POST">
        <input type="hidden" name="difficulty" value="hard">
        <input type="hidden" name="unlocked" value="<?php echo $_POST['unlocked'] ?? ''; ?>">
        <button type="submit" <?php echo $hard_disabled; ?>>Hard</button>
    </form>
</div>

</body>
</html>
