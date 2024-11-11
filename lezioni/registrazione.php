<!DOCTYPE html>
<html>
	<body>
	<h1> Utilizzo e invio dei form </h1>
<?php
	$prog=$_POST['prog'];
	echo "il programma scelto e' ";
	echo $prog;
	echo nl2br("\n");
	$fname=$_POST['fname'];
	if(isset($fname)){
		echo nl2br("il tuo nome e' ");
		echo $fname;
		echo nl2br("\n");
	}else{
		echo nl2br("NOME NON INSERITO!\n");	
	}
	
	$lname=$_POST['lname'];
	
	if(isset($lname)){
		echo nl2br("il tuo nome e' ");
		echo $lname;
		echo nl2br("\n");
	}else{
		echo nl2br("COGNOME NON INSERITO!\n");	
	}

?>

<h1> Generazione dinamica di una tabella </h1>

<?php
	echo '<table border="1">';
	for($i=0; $i<10; $i++){
		echo "<tr><td>$i<td><tr>";
	}
	echo '</table>'
?>

<h1> Utilizzo delle funzioni tempo </h1>

<?php
	$today = new DateTime("now", new DateTimeZone('Europe/Rome'));
	echo $today -> format('h:i:s');
	$ora = $today -> format('h');
	echo "\nSono le $ora. ";
?>

<h1> Upload files </h1>

	<label for="file">Carica file:</label>
	<input type="file" id="file" name="file">
	
	<progress id="progress" value="0" max="100"></progress>
	<input type="submit">

	<h1>Invia un array tramite form</h1>
    <form action="processa.php" method="POST">
        <label for="valori">Valori dell'array (separa con virgola):</label>
        <input type="text" name="valori[]" value="Valore 1"><br>
        <input type="text" name="valori[]" value="Valore 2"><br>
        <input type="text" name="valori[]" value="Valore 3"><br>

        <input type="submit" value="Invia">
    </form>
	</body>
</html>