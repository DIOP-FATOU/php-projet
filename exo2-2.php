<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2-2</title>

</head>
<body>
<form method="POST" action="exo2-2.php">
<marquee  direction="left">
Exercice 2
Ecrire un programme qui permet de Créer un tableau Contenant les noms et les numéros des 12 mois de l en Français et en Anglais. Ensuite demander à l’utilisateur de choisir une langue puis vous affichez les mois sous forme de tableau HTML.
Voir l’image si dessous si l’utilisateur choisit français
</marquee>

<select name="choix">
    <option value="francais">francais</option>
    <option value="anglais">anglais</option>
    </select>
    <input type="submit" name="valider" value="valider">
</form>
</body>
</html>
<?php
$tab=array(
   'francais'=>['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
    'anglais'=>['January','Febrary','March','April','May','June','July','August','September','october','November','December'],
);
if(isset ($_POST['valider'])){
$langue=$_POST['choix'];

?>  
<table border="1">
    <?php

    $k=0;
    for($i=1;$i<=4;$i++)
    {?>
    <tr>
    <?php
        for($j=1;$j<=3;$j++)
        {
        ?>
            <td><?php echo ++$k;?></td>
            <td><?php echo $tab[$langue][$k-1]; ?></td> 
        
        <?php
        }
    }?>
   
</table>
        
    
<?php
}

?>