<?php
    if(isset($_POST['registrationBtn'])){
        require_once "admin/DatabaseConnect.php";
        
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phonenumber = $_POST['phonenumber'];

        $sql = "INSERT INTO user(user_fullname, user_email, user_password, user_address, user_phonenumber)
                VALUES('$fullname', '$email', md5('$password'), '$address', '$phonenumber')";
        $result = $conn -> query($sql);

        if($result){
            header("Location: index.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User registration</title>
    <script src="JavaScript/JSscript.js"></script>
    <style>
form{
	padding: 20px;
}
input{
    display: block;
	border: 2px solid #ccc;
	padding: 10px;
	margin: 10px auto;
    width: 200px;
	border-radius: 5px;
}
    </style>
</head>
<body>
    <form action="" method="POST" onsubmit="return checkUserRegistration()">
        <table id="userRegistration" width="80%">
            <tr>
                <th colspan="2" id="userTH">USER REGISTRATION</th>
            </tr>
            <tr>
                <td>Full name</td>
                <td><input type="fullname" name="fullname" id="fullname"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
            <tr>
                <td>Phone number</td>
                <td><input type="text" name="phonenumber" id="phonenumber"></td>
            </tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td>Retype password</td>
                <td><input type="password" name="password2" id="password2"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" id="address"></td>
            </tr>
            <tr id="userRegistration">
                <td colspan="2">
                    <input type="submit" value="Registration" id="registration" name="registrationBtn">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>