<?php
session_start();
if((isset($_SESSION['loggedIn'])) && ($_SESSION['loggedIn']==true))
{
  header('Location: calendar.php');
  exit();
}
?>

<!DOCTYPE HTML>
<html>
     <head>
          <meta charset="UTF-8" />
          <title>Logowanie</title>
		  <link rel="stylesheet" href="style.css" type="text/css"/>
		  <script src="script.js" type="text/javascript"></script>
     </head>
	 <body>
	 <div id="container">
	 <div id="panel">
		<div id="top">
		Nie masz konta? <a href="index2.html" >Zarejerstruj się</a>.
		</div>
		<div id="mid">
			<form action="login.php" method="post">
			Nazwa użytkownika: <br>
			<input type="username" name="login"><br>
			Hasło: <br>
			<input type="password" name="password"><br>

			<input type="submit" value="Zaloguj się" ><br>

			</form>
		</div>
	 </div>
	 </div>

<?php
  if(isset($_SESSION['error']))
    echo $_SESSION['error'];
?>

	 </body>
</html>
