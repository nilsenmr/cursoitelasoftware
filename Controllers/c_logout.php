<?php
	session_start();

	if (isset($_SESSION['id_usuario'])) {
		session_destroy();
		header('Location: http://'.$_SERVER['SERVER_NAME'].'/curso/index.php');
	}
?>