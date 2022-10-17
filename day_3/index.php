<!DOCTYPE html>
<html>
<head>
	<title>practice</title>
</head>
<body>
	<center>
	<h1>FORM</h1>
	
		<form action="validate.php" method="post" enctype="multipart/form-data">
			Name: <input type="text" name="name"/><br>
			Phone no.: <input type="text" name="phone"/><br>
			Gender: <input type="radio" name="gender" value="male" />Male
					<input type="radio" name="gender" value="female"/>Female<br>
			Country: <select name="country">
				<option value="in">india</option>
				<option value="us">us</option>
				<option vale="eu">eu</option>
			</select><br>
			<input type="file" value="file" accept="document"/><br>
			<input type="submit" name="submit"/><br>

		</form>
	</center>
</body>
</html>