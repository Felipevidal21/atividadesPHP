<!DOCTYPE html>
<html>
<head>
	<title>formulario</title>
	<meta charset="utf-8">

	<style type="text/css">
		

   form{
     border: 1px solid black;
     width: 200px;
     text-align: center;
     margin-left: 500px;
     margin-top: 20px;
   }

	</style>
</head>
<body>
	<form action="php.php" method="post">
		<label for="nome">Nome :</label>
		   <input type="text" name="nome"><br>
        <label for="nome">Sobrenome :</label>
        <input type="text" name="sob"><br>
        <label for="nome">Email :</label>
        <input type="email" name="email"><br>
        <button type="submit">Enviar</button>
	</form>

	
</body>
</html>