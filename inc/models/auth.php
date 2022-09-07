<?php
include "../conexion.php";

//Verificar datos de usuario por metodo post
if (isset($_POST['usuario'])) {
	$usuario = $_POST['usuario'];
	$password = $_POST['contrasena'];
	// echo $usuario;
} else {
	$username = '';
	echo 'Error' . $username;
}

//consulta base de datos
$stmt = $cone->prepare('SELECT user, pass, hospital FROM users WHERE user = ?');
if ($stmt) {
	$stmt->bind_param('s', $_POST['usuario']);
	$stmt->execute();
	$stmt->store_result();

	if ($stmt->num_rows > 0) {
		$stmt->bind_result($user, $pass, $hospital);
		$stmt->fetch();
		if ($_POST['contrasena'] == $pass) {
			echo 'Contrasena';
			session_start();
			$_SESSION['session'] = true;
			$_SESSION['user'] = $user;
			switch ($hospital) {
				case '1':
					header('Location: ../../hosEsc.php');
					break;
				case '2':
					header('Location: ../../hosSP.php');
					break;
				default:
					header('Location: ../../FN-tbl.php');
					break;
			}
		} else {
			echo 'Contraseña Incorrecta';
		}
	} else {
		echo 'No entró ni verga';
	}
	$stmt->close();
}
