<?php

$user = $_POST["user"];
$password = $_POST["password"];

if ($user != "sus" || $password != "no") {
?>
<h4 style="color: red">Accesso negato. Username o password sbagliata.</h4>
<?php

}else{
    echo "Sei stato riconosciuto come " . $user . ". Fai quello che vuoi ora.";
}

?>