<!DOCTYPE html>
<html>

	<head>
		<title>Bienvenue dans PostIt</title>
		<link rel="stylesheet" type="text/css" href="css/signup.css">
	</head>

<body>

	<div id="container">
		<div class="sign-in-form">
		<center>	
			<h1>Bienvenue dans PostIt</h1>
		</center>

			<h2>Inscription</h2>
			<b>Tout les champs sont obligatoires</b>
		<br />
		
		<fieldset class="sign-up-form-1">
		<form method="post" action="signup_form.php" enctype="multipart/form-data">
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>Prenom</label></td>
					<td><label>Nom</label></td>
				</tr>
				<tr>
					<td><input type="text" name="firstname" placeholder="Entrer votre Prenom" class="form-1" title="Enter your firstname" required /></td>
					<td><input type="text" name="lastname" placeholder="Entrer votre nom" class="form-1" title="Enter your lastname" required /></td>
				</tr>
				<tr>
					<td><label>Nom d'utilisateur</label></td>
					<td><label>Confirmer Nom d'utilisateur</label></td>
				</tr>
				<tr>
					<td><input type="text" name="username" placeholder="Enterer votre Nom d'utilisateur" class="form-1" title="Enter your username" required /></td>
					<td><input type="text" name="username2" class="form-1" title="Enter your username" required /></td>
				</tr>
				<!--<tr>
					<td colspan="2">Note: No one can follow your username.</td>
				</tr> -->
			</table>
		</fieldset>
		
		<br />		
		
		<fieldset class="sign-up-form-1">
			<legend>Information du profil</legend>
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>Date de naissance</label></td>
					<td>
					<select name="day" style="font-size:18px;" required>
					 <option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
						<option>13</option>
						<option>14</option>
						<option>15</option>
						<option>16</option>
						<option>17</option>
						<option>18</option>
						<option>19</option>
						<option>20</option>
						<option>21</option>
						<option>22</option>
						<option>23</option>
						<option>24</option>
						<option>25</option>
						<option>26</option>
						<option>27</option>
						<option>28</option>
						<option>29</option>
						<option>30</option>
						<option>31</option>
						
						
					</select>
					<select name="month" style="font-size:18px;" required>
						<option>January</option>
						<option>Febuary</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>August</option>
						<option>September</option>
						<option>October</option>
						<option>November</option>
						<option>December</option>
					</select>
					<select name="year" style="font-size:18px;" required>
<option>1970</option><option>1971</option><option>1972</option>
<option>1973</option><option>1974</option><option>1975</option>
<option>1976</option><option>1977</option><option>1978</option>
<option>1979</option><option>1980</option><option>1981</option>
<option>1982</option><option>1983</option><option>1984</option>
<option>1985</option><option>1986</option><option>1987</option>
<option>1988</option><option>1989</option><option>1990</option>
<option>1991</option><option>1992</option><option>1993</option>
<option>1994</option><option>1995</option><option>1996</option>
<option>1997</option><option>1998</option><option>1999</option>
<option>2000</option><option>2001</option><option>2002</option>
<option>2003</option><option>2004</option><option>2005</option>
<option>2006</option><option>2007</option><option>2008</option>
<option>2009</option><option>2010</option><option>2011</option>
<option>2012</option><option>2013</option><option>2014</option>
<option>2015</option><option>2016</option><option>2017</option>
<option>2018</option><option>2019</option><option>2020</option>
<option>2021</option>
					</select>
					</td>
				</tr>
				<tr>
					<td><label>Genre</label></td>
					<td>
					<label>Male</label><input type="radio" name="gender" value="male" required />
					<label>Female</label><input type="radio" name="gender" value="female" required />
					</td>
				</tr>
				<tr>
					<td><label>Numéro de telephone</label></td>
					<td><input type="text" name="number" placeholder="05...." maxlength="13" class="form-1" title="Enter your mobile number" required /></td>
				</tr>
			</table>
		</fieldset>
		
		<br />
		
		<fieldset class="sign-up-form-1">
			<legend>Information d'authentification</legend>
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>Addresse email </label></td>
					<td><label> Confirmer Addresse email</label></td>
				</tr>
				<tr>
					<td><input type="text" name="email" placeholder="Entrer votre Addresse email" class="form-1" title="Enter your firstname" required /></td>
					<td><input type="text" name="email2" class="form-1" title="Enter your lastname" required /></td>
				</tr>
			<!--	<tr>
					<td colspan="2">Note: no-one can see your email address.</td>
				</tr> -->
				<tr>
					<td><label>Mot de passe</label></td>
					<td><label>Confirmer mot de passe</label></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Enterer votre mot de passe" class="form-1" title="Enter your username" required /></td>
					<td><input type="password" name="password2" class="form-1" title="Enter your username" required /></td>
				</tr>
			<!--	<tr>
					<td colspan="2">Note: no-one else can see your password.</td>
				</tr> -->
			</table>
		</fieldset>
		
		<br />
		<!--
			<strong>Yes, I have read and I accept the <a href="#">Biobook Terms of Use</a> and the <a href="#">Biobook Privacy Statement</a></strong> -->
			
		<br />
		<br />
					<input type="submit" name="submit" value="Inscription" class="btn-sign-in" title="Log in" />
		</form>
		
		</div>
	</div>

</body>

</html>