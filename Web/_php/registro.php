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
function find_user_by_email($email,  $connection)
{


	$safe_email = mysqli_real_escape_string($connection, $email);

	$query  = "SELECT * ";
	$query .= "FROM data_users ";
	$query .= "WHERE email = '$email'";
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

function attempt_login($email, $connection)
{
	$email = find_user_by_email($email, $connection);
	if ($email) {

		return $email;
	} else {

		return false;
	}
}



?>
<?php
if (isset($_POST['firstname'])) {

	$firstname = $_POST["firstname"];
}
if (isset($_POST['lastname'])) {

	$lastname = $_POST["lastname"];
}
if (isset($_POST['city'])) {

	$city = $_POST["city"];
}
if (isset($_POST['date'])) {

	$date = $_POST["date"];
}
if (isset($_POST['email'])) {

	$email = $_POST["email"];
}
if (isset($_POST['password'])) {

	$password = $_POST["password"];
}
if (isset($_POST['adress'])) {

	$adress = $_POST["adress"];
}
if (isset($_POST['cp'])) {

	$cp = $_POST["cp"];
}
if (isset($_POST['level'])) {

	$level = $_POST["level"];
}

$found_user = attempt_login($email, $connection);
$tipo = 0;
$tablename = "data_users";
if ($found_user) {
	header("Location: " . "usuario_existe.php");
} else {
	$pass_s = password_hash($password, PASSWORD_DEFAULT);
	$query  = "INSERT INTO `$tablename` (";
	$query .= "  `nombre`, `apellidos`, `ciudad`, `direccion`, `cp`, `fecha`, `email`, `password`, `contrato`";
	$query .= ") VALUES (";
	$query .= " '$firstname', '$lastname', '$city', '$adress', '$cp', '$date', '$email', '$pass_s', '0' ";
	$query .= ")";

	$result = mysqli_query($connection, $query);

	if ($result) {
		echo "El usuario se ha agregado correctamente";
		sleep(2);
		header("Location: " . "../../index.html");
	} else {
		die("Database query failed. " . mysqli_error($connection));
	}
}
?>

<?php

mysqli_close($connection);
?>