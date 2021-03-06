<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="/view/css/register.css">
	<link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
	<div class="background">
		<div class="container">
		<h1> REGISTER </h1>
			<table class="data-registration">
				<form>
					<tr>
						<td class="align-right">Name</td>
						<td><input type="text" id="name"></td>
					</tr>
					<tr>
						<td class="align-right">Username</td>
						<td><input type="text" id="username" onkeyup="validateUsername()"> <img src="asset/success.png" id="validate-username"></td>
					</tr>
					<tr>
						<td class="align-right">Email</td>
						<td><input type="text" id="email" onkeyup="validateEmail()"> <img src="asset/failed.png" id="validate-email"></td>
					</tr>
					<tr>
						<td class="align-right">Password</td>
						<td><input type="password" id="password" onkeyup="validatePassword()"></td>
					</tr>
					<tr>
						<td class="align-right">Confirm Password</td>
						<td><input type="password" id="confirm_password" onkeyup="validatePassword()"></td>
					</tr>
					<tr>
						<td class="align-right">Address</td>
						<td><textarea id="address" rows="3"></textarea></td>
					</tr>
					<tr>
						<td class="align-right">Phone Number</td>
						<td><input type="text" id="phone_number" onkeyup="validatePhoneNumber()"></td>
					</tr>
				</form>
			</table>
			<span id="already"><a href="/view/login.php">Already have an account?</a></span>
			<div class="button-register">
				<button type="button" id="submit" onclick="register()">REGISTER</button>
			</div>
		</div>
	</div>
<script type="text/javascript" src="/view/js/register.js"></script>
</body>
</html>