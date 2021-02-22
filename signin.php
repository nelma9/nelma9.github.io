<!DOCTYPE html>
<html>

	<head>
		<title>Bienvenue dans PostIt</title>
		<link rel="stylesheet" type="text/css" href="css/signin.css">
	</head>

<body>

	<div id="container">
		<div class="sign-in-form">
			<table>
			<h1>Bienvenue dans PostIt</h1>
			<h2>Conncter</h2>
	<form method="post" action="signin_form.php" enctype="multipart/form-data">
				<tr>
					<td><label>Email</label></td>
					<td><input type="email" name="email" placeholder="example@gmail.com" class="form-1" title="Enter your email" required /></td>
				</tr>
				<tr>
					<td><label>Mot de passe</label></td>
					<td><input type="password" name="password"   class="form-1" title="Enter your password" required /></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="2">
					<input type="submit" name="submit" value="Connecter" class="btn-sign-in" title="Log in" />
					<input type="reset" name="cancel" value="Annuler" class="btn-sign-up" title="Cancel" />
					</td>
				</tr>
	</form>
			</table>
		
		</div>
	</div>

</body>

</html>