<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 5 - Partie 5</title>
</head>
<body>

<?php
$hautsDeFrance=array('59' =>"Nord", '62' =>"Pas-de-Calais", '80'=>"Somme", '02' =>"Aisne", '60' => "Oise");
foreach ($hautsDeFrance as $key => $value) { ?>

<p><?= "$key : $value"; }?></p>

</body>
</html>