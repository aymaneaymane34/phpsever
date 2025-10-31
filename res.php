<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="taille1 centrer capitale">Resultat de votre choix</h1>
    <table class="table">
<thead>
    <tr>
<th>Val</th>
<th>Coef</th>
<th>Produit</th>
</tr>
</thead>
<tbody>

</tbody>
<?php
$a= $_GET["v"];
#echo $a;
for ($i=1; $i <11 ; $i++) 
{

    echo "<tr> 
    <th>$a </th>
    <th>$i </th>
    <th>".($a*$i)."</th>
    
    </tr>";

}
    
?>
<tfoot>

</tfoot>
    </table>
    <a href=index.php> 
    <img src="ret.png" class ="icone" ></a>
</body>
</html>