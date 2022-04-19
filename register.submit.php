<?php /** @noinspection SqlNoDataSourceInspection */
require "database/connect.php";
$nom = $_POST['nom'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
$mail = $_POST['mail'];

$data = [
    "formName" => $nom,
    "formPass" => $pass,
    "formMail" => $mail
];

$jeEnvoie = $database->prepare("INSERT INTO users (users_name, users_password, users_mail) VALUES (:formName, :formPass, :formMail)");
$jeEnvoie->execute($data);
header("Location: index.php");
?>

<h1><?php echo $nom; ?></h1>
<p>Mot de passe: <?php echo $pass; ?></p>
<p>Mail: <?php echo $mail; ?> </p>
<a href="register.php">back to register.</a>
