<?php 

require_once'config.php';
$result = false;

if(!empty($_POST)){
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$telefono = $_POST["telefono"];
	$ciudad = $_POST["ciudad"];
	$empresa = $_POST["empresa"];
	$ip = getIp();
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


function getIP(){
    if (isset($_SERVER["HTTP_CLIENT_IP"])){
        return $_SERVER["HTTP_CLIENT_IP"];
    }else if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
        return $_SERVER["HTTP_X_FORWARDED_FOR"];
    }else if (isset($_SERVER["HTTP_X_FORWARDED"])){
        return $_SERVER["HTTP_X_FORWARDED"];
    }else if (isset($_SERVER["HTTP_FORWARDED_FOR"])){
        return $_SERVER["HTTP_FORWARDED_FOR"];
    }else if (isset($_SERVER["HTTP_FORWARDED"])){
        return $_SERVER["HTTP_FORWARDED"];
    }else{
        return $_SERVER["REMOTE_ADDR"];
    }
}

header("Location: index.html")

?>