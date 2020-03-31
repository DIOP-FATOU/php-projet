
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>exo3-3</title>
</head>
<body>

<?php
function testchaine($mot){
	$test=0;
	$compteur=0;
	while ( isset($mot[$compteur])) {
		if ($mot[$compteur]=='m' || ($mot[$compteur]=='M')) {
			$test=0;
			break;
		}
		else{
			$test=1;
			$compteur++;
		}
		
	}
	if ($test==1) {
		return 0;
	}
	else{
		return 1;
	}
}

$tab=[];
$compteur="";

if (!empty($_POST['valider'])){
	if (isset($_POST['mot'])){
		$mot=$_POST['mot'];
		for ($i=1; $i <=$mot ; $i++){ 
			if (isset($_POST['input'.$i.'']) && testchaine($_POST['input'.$i.''])){
				$compteur++;
$tab[]=$_POST['input'.$i.''];

			}
		}
					echo ' les mots qui contient m ou M: <br>';
					for ($i=0; $i <count($tab) ; $i++){ 
						echo '<h2>'.$tab[$i].'</h2> ';
					}
					echo' <br>il  y a '. $compteur.'mots qui contient la lettre m ou M';
	}
		else{
			echo "donner un mot valide";
		}
}

?>

		<form method="POST" action="exo3-3.php">
        <label class="labelput">donner le nombre de champ:</label>
        <input type="number" name="mot" id="caractere" value=<?=@$_POST['mot'] ?> >
        <?php 
        	if (isset($mot)) {
        		for ($i=1; $i<=$mot ; $i++) { 
        		echo "<br>";
        		echo '<input type="text" name="input'.$i.'" placeholder="input'.$i.'">';	
        		}
        	}
         ?>
       	<input type="submit" value="valider" name="valider">
    	</form>