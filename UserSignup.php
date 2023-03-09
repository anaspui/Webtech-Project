<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <div class="page">
        <div class="box reg" align="center">
            <img src="logo.png" alt="logo" style="height: 100px"><br><br>

            <fieldset style=" border: 6px solid #3B577D; border-bottom: none; border-left: none; border-right: none;">
                <legend style="text-align: center">
                    <h1 align="center">Sign Up</h1>
                </legend>
            </fieldset><br><br>
            <form method="POST" action="SignUpAction.php">
                <table align="center" style="text-align: left">
                    <tr>
                        <td><label for="fname">First Name</label></td>
                        <td>:</td>
                        <td><Input type="text" name="firstName" id="fname"></Input></td>
                    </tr>
                    <tr>
                        <td><label for="lname">Last Name</label></td>
                        <td>:</td>
                        <td><Input type="text" name="lastName" id="lname"></Input></td>
                    </tr>
                    <tr>
                        <td><label for="male">Gender </label> </td>
                        <td>:</td>
                        <td>
                            <input type="radio" id="male" name="gender" value="Male">
                            <label for="Male">Male</label>
                            <input type="radio" id="female" name="gender" value="Female">
                            <label for="Female">Female</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="dob">Date of Birth</label></td>
                        <td>:</td>
                        <td><input type="date" name="dob" id="dob"></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email </label></td>
                        <td>:</td>
                        <td><Input type="text" name="email" id="email"></Input></td>
                    </tr>
                    <tr>
                        <td><label for="phone">Phone/Mobile</label></td>
                        <td>:</td>
                        <td><input type="text" name="phone" id="phone"></td>
                    </tr>
                    <tr>
                        <td><label for="Username">Username </label></td>
                        <td>:</td>
                        <td><Input type="text" name="username" id="username"></Input></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password </label></td>
                        <td>:</td>
                        <td><input type="password" name="password" id="password"></td>
                    </tr>

                </table>
                <div>
                    <?php
                    if (isset($_SESSION['RegError'])) {
                        echo "<p style='color: red;'>" . $_SESSION['RegError'] . "</p>";
                        unset($_SESSION['RegError']);
                    }
                    ?>
                    <button class="button" name="submit" type="submit" value="Register">Register</button><br><br><br>

                </div>
                <a href=" UserLogin.php">Already have an account?
                    <?php $_SESSION['RegError'] = ""; ?>
                </a>
            </form>
        </div>
    </div>
</body>

</html>