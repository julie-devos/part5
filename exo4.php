<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 4-Partie 5</title>
</head>
<body>
<?php
$months=array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
for ($i=0;$i<12;$i++) {
?>
<p><?=$months[$i];}?></p>

<?php
$months[7]='aout';
for ($i=0;$i<12;$i++){?>

<p><?=$months[$i];}?></p>


</body>
</html>