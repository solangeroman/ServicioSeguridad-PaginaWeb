<?php
session_start();
?>
<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "users");

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_errno()) {
	die("La conexión con la BBDD ha fallado: " .
		mysqli_connect_error() .
		" (" . mysqli_connect_errno() . ")");
}
?>
<?php
function find_user_by_email($email, $password, $connection)
{

	$safe_email = mysqli_real_escape_string($connection, $email);
	$query  = "SELECT * ";
	$query .= "FROM data_users ";
	$query .= "WHERE email = '$email' ";
	$query .= "LIMIT 1";
	echo "$query <br>";
	$user_set = mysqli_query($connection, $query);
	if (!$user_set) {
		die("Database query failed.");
	}

	if ($email = mysqli_fetch_assoc($user_set)) {
		return $email;
	} else {
		return null;
	}
}

function attempt_login($email, $password, $connection)
{
	$email = find_user_by_email($email, $password, $connection);
	if ($email) {

		return $email;
	} else {

		return false;
	}
}



?>
<?php
echo "Esto es login.php";
if (isset($_POST['email'])) {

	$email = $_POST["email"];
}
if (isset($_POST['password'])) {

	$password = $_POST["password"];
}


$found_email = attempt_login($email, $password, $connection);

if ($found_email) {
	if (password_verify($password, $found_email["password"])) {
		$_SESSION['nombre'] = $found_email["nombre"];
		$_SESSION['apellidos'] = $found_email["apellidos"];
		$_SESSION['contrato'] = $found_email["contrato"];
		$_SESSION['email'] = $found_email["email"];
		if ($_SESSION['contrato']==0){
			header("Location: " . "../../usuario.php");
		} else{
			header("Location: " . "../_recursos/images/proximamente.gif");
		}
		
	} else {
		header("Location: " . "error_login.php");
	}
} else {

	header("Location: " . "../../index.html");
}
?>

<?php

mysqli_close($connection);
?>