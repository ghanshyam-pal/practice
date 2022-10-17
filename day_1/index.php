
<!DOCTYPE html>
<html>
    <head>

        <title>PHP FORM</title>
        
    <body>
    <center><form action="abc.php" method ="post">
        <h1>REGISTRATION</h1>

            <label for="Uname"> Name :</label>
            <input type = "text" id="Uname" name="Uname"><br>

            <br>

            <label for="phone"> Phone :</label>
            <input type = "text" id="phone" name="phone"><br>

            <br>

            <label for="email"> Email :</label>
            <input type = "text" id="Email" name="Email"><br>

            <br>

            <label for="password"> Password :</label>
            <input type = "password" id="password" name="password"><br>

            <p>Gender
            <input type="radio" id="male" name="gender" value="male">
            <label for="male"> Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female"> Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other"> Other</label></p>

            <label for="nationality"> Nationality :</label>
            <select name="nationality" id="nationality">
                <option value=""> </option>
                <option value="india">India</option>
                <option value="unitedstate">United State</option>
                <option value="russia">Russia</option>
                <option value="japan">Japan</option>
            </select>
            <br>
            <br>
            File : <input type="file" name = "file">
            <br>
            <input type="submit" name="submit" value="Submit">

        </form></center>
    </body>
</html>
