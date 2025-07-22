<!DOCTYPE html>
<html>
<head>
    <title>AIUB Registration Form</title>
</head>
<body>
    <h2 style="text-align: center; color: navy;">AIUB</h2>
    <h3 style="text-align: center;">Registration Form</h3>

    <form action="submit.php" method="post" enctype="multipart/form-data" style="width: 500px; margin: auto;">
        <table cellpadding="5">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="fullname"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="other"> Other
                </td>
            </tr>
            <tr>
                <td>Languages Known:</td>
                <td>
                    <input type="checkbox" name="language[]" value="english"> English
                    <input type="checkbox" name="language[]" value="bangla"> Bangla
                    <input type="checkbox" name="language[]" value="hindi"> Hindi
                </td>
            </tr>
            <tr>
                <td>Country:</td>
                <td>
                    <select name="country">
                        <option value="">--Select--</option>
                        <option value="bangladesh">Bangladesh</option>
                        <option value="india">India</option>
                        <option value="usa">USA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="dob"></td>
            </tr>
            <tr>
                <td>Upload Photo:</td>
                <td><input type="file" name="photo"></td>
            </tr>
            <tr>
                <td>Comments:</td>
                <td><textarea name="comments" rows="4" cols="30"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Register">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>