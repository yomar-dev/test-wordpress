<?php 

require_once'config.php';
$result = false;

if(!empty($_POST)){
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$telefono = $_POST["telefono"];
	$ciudad = $_POST["ciudad"];
	$empresa = $_POST["empresa"];
	$ip = $_POST["ip"];
	$url = $_POST["url"];

	$sql = "";
	$sql .= "INSERT INTO wp_data_storage (nombre, email, telefono, ciudad, empresa, ip, url)";
	$sql .= " VALUES ";
	$sql .= " (:name, :email, :telefono, :ciudad, :empresa, :ip, :url); ";
	$query = $pdo->prepare($sql);

	$result = $query->execute([
		'name' => $nombre,
		'email' => $email,
		'telefono' => $telefono,
		'ciudad' => $ciudad,
		'empresa' => $empresa,
		'ip' => $ip,
		'url' => $url
	]);
}

header("Location: index.html")

?>