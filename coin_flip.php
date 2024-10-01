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

<h1>Виберіть Орел чи Решка</h1>

<?php
$difficulty = $_POST['difficulty'] ?? 'easy'; 
$unlocked = $_POST['unlocked'] ?? 'easy'; 
var_dump($difficulty);
var_dump($unlocked);
?>
<div class='buttons'>
<form action="process.php" method="POST">
    <input type="hidden" name="difficulty" value="<?php echo $difficulty; ?>">
    <input type="hidden" name="choice" value="Орел">
    <input type="hidden" name="unlocked" value="<?php echo $unlocked; ?>">
    <button type="submit">Орел</button>
</form>
<form action="process.php" method="POST">
    <input type="hidden" name="difficulty" value="<?php echo $difficulty; ?>">
    <input type="hidden" name="choice" value="Решка">
    <input type="hidden" name="unlocked" value="<?php echo $unlocked; ?>">
    <button type="submit">Решка</button>
</form>
</div>
</body>
</html>
