<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TEMP FILE</title>
</head>
<body>
	<h1>HTML FORM</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Name: <input type="text" name="name"/>
		<br>
		Email: <input type="text" name="email"/><br>
		Comment:<br> <textarea name="comment" rows="5" cols="10">Enter Comment Here</textarea><br>
		<input type="submit" name="submit"/>
		<?php
			if(isset($_POST['submit'])){
				
			}
		 ?>
</body>
</html>