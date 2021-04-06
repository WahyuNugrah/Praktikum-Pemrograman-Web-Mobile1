<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$user = $_request["user"];
		$pass = $_request["pass"];
		$_user = strlen($user);
		$_pass = strlen($pass);
		$x = false;

		if ($_user > 7) {
			echo "Username harus kurang dari 7 karakter<br>";
			$x = true;
		}

		if (!preg_match("/[A-Z]/", $pass)) {
			echo "Password harus terdapat huruf kapital<br>";
			$x = true;
		}

		if (!preg_match("/[a-z]/", $pass)) {
			echo "Password harus terdapat huruf kecil<br>";
			$x = true;
		}

		if (!preg_match("/[0-9]/", $pass)) {
			echo "Password harus terdapat karakter khusu (angka)<br>";
			$x = true;
		}

		if ($_pass < 10) {
			echo "Password harus lebih dari 10 karakter<br>";
			$x = true;
		}

		if ($x == false) {
			echo "Username dan Password memenuhi syarat";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Modul 2</title>
</head>
<body>
	<form
		action="<?php echo htmlspecialchars($_server["php_self"]); ?>" method="post">
		<ul>
			<li>
				<label for="user">Username<br></label>
				<input type="text" name="user" id="user">
			</li>
			<li>
				<label for="pass">Password<br></label>
				<input type="text" name="pass" id="pass">
			</li>
			<li>
				<button type="submit"> submit </button>
			</li>
		</ul>
	</form>

</body>
</html>