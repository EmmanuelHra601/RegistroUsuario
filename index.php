
<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>¡Suscribete!</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="register">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla sunt nesciunt commodi aut, cupiditate harum qui consequuntur sapiente eaque fugiat, quam iusto nisi consequatur accusamus error amet expedita non. Ad?</p>
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>