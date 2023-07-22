<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab1</title>
</head>
<body>
    <form action="form.php" method="get">
        FirstName: <input type="text" id="fname" name="fname"> <br>
        LastName: <input type="text" id="lname" name="lname"> <br>
        <label >Address:</label> <br>
        <textarea name="address" id="address" cols="50" rows="4"></textarea><br>
       <label for="country"> Country: </label><br>
        <select name="country" id="country">
            <option value="" selected disabled>Select Country</option>
            <option value="Egypt">Egypt</option>
            <option value="USA" >USA</option>
        </select>
        <br>

        Gender:<br>
        <input type="radio" name="gender" value="male">Male <br>
        <input type="radio" name="gender" value="female">Female <br>
        Language:<br>
        <input type="checkbox" name="lang[]" value="PHP">PHP<br>
        <input type="checkbox" name="lang[]" value="C#">C#<br>
        <input type="checkbox" name="lang[]" value="Java">Java<br>
        Username: <input type="text" name="name"> <br>
        Password: <input type="password" name="password"> <br>
        Department: <input type="text" name="dept"> <br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>