<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class=" centrer rouge capitale taille1 ">Calcul arithmetique</h1>
    <dl class="taille2 bordure">
<?php 
for ($i = 2; $i < 11; $i++) {

Echo"<dt>Val $i</dt>";

Echo"<dd> <a href='res.php?v=$i'> cliquer ici</a></dd>";
}
?>
</dl>
</body>
</html>