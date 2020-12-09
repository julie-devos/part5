<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 8 - Partie 5</title>
</head>
<body>

<?php
$hautsDeFrance=array('59' =>"Nord", '62' =>"Pas-de-Calais", '80'=>"Somme", '02' =>"Aisne", '60' => "Oise");
foreach ($hautsDeFrance as $key => $value) {
$departmentName=$key;
$departmentNumber=$value;
    ?>

<p><?= '- Le département '. $departmentName.' a le numéro '. $departmentNumber.' '; }?></p>

</body>
</html>