<?php
// Obtenir l'adresse IP
$ip = $_SERVER['REMOTE_ADDR'];

// Obtenir les informations sur l'heure de la visite
$date = date("Y-m-d H:i:s");

// Obtenir les informations sur le système
$agent = $_SERVER['HTTP_USER_AGENT'];

// Obtenir les données envoyées par JS (latitude, longitude)
$latitude = isset($_POST['latitude']) ? $_POST['latitude'] : 'Non disponible';
$longitude = isset($_POST['longitude']) ? $_POST['longitude'] : 'Non disponible';

// Construire la chaîne de données à enregistrer
$data = "IP: $ip, Date: $date, Système: $agent, Latitude: $latitude, Longitude: $longitude\n";

// Enregistrer dans le fichier texte
$file = fopen("visiteurs.txt", "a");
fwrite($file, $data);
fclose($file);
?>
