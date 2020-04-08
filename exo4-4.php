 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>exo4-4</title>
</head>
<body>



<?php 
function CherchePhrase($chaine){
	if (preg_match_all("#[\W][^.?!]+[.?!]$#" ,$chaine)){
		echo $chaine."    ";
		echo "est une phrase";
		echo "<br>";
	}
	else{
		echo $chaine."   ";
		echo "n'est pas une phrase";
		echo "<br>";

	}
 }
 
 function LimiteTexte($text){
 	if (strlen($text)>200){
 		return 0;
 	}
 	else{
 		return 1;
 		 	}
 }

 function EnleveEspace($phrase){

		$phrase=trim($phrase);

		$phrase=preg_replace('/\s\s+/',' ',$phrase);

		$phrase=preg_replace('/\s\.+/','.',$phrase);
		$phrase=preg_replace('/\s\:+/', ':', $phrase);
		$phrase=preg_replace('/\s\;+/', ';', $phrase);
		$phrase=preg_replace('/\s\,+/', ',', $phrase);



		$phrase=preg_replace('/\s\,+/',',',$phrase);

		$phrase=preg_replace('/\s\'+/','\'' ,$phrase);

		$phrase=preg_replace('/\'\s+/','\'' ,$phrase);

		$phrase=ucfirst($phrase);

return $phrase;
}
if (isset($_POST['valider'])){
	$phrase=$_POST['texte'];
	$teste=0;
	$correction = EnleveEspace($phrase);
	$tabmot = explode('.', 	$correction);
	foreach ($tabmot as $value) {
		if(LimiteTexte($value)==0){
			$teste=1;
			break;
		}
	}
	if($teste==1){
		echo 'phrase invalide';
		$correction="";
	}
	else {
		for ($i=0; $i < strlen($correction) ; $i++) { 
			if ($correction[$i]=='.' && isset($correction[$i+2])) {
			$correction[$i+2]=strtoupper($correction[$i+2]);// fonction majuscule
			}
		}
	}
}

?>
 <form method="POST" action="exo4-4.php">
    <textarea  name="texte" placeholder="Ecrire un texte"  rows="4" cols="45"> <?=@$_POST['texte'] ?>  </textarea> <br><br>
 	 
    <input type="submit" value="valider" name="valider">
    <textarea  id="area"  readonly="" rows="4" cols="45"> <?=$correction ?>  </textarea>
   
      	
 </form>

