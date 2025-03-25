<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vault - Registration</title>
    <link rel="stylesheet" href="admin_register.css">
    <link rel="shortcut icon" href="book.png" type="image/x-icon">
</head>
<body>

    <div class="role-selection">
        <h1>Register</h1>
        
        <button class="role-btn" type="button" onclick="selectRole('Admin')">Admin</button>
        <button class="role-btn" type="button" onclick="selectRole('User')">User</button>
    </div>

    
    <div class="registration-container" id="registrationContainer" style="display: none;">
        <h1>Vault Registration</h1>
        <p id="selectedRoleText"></p>

        <form id="registrationForm" action="" method="post">
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" placeholder="Enter First Name" required>
            </div>
            <div class="form-group">
                <label for="mname">Middle Name:</label>
                <input type="text" id="mname" name="mname" placeholder="Enter Middle Name" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" placeholder="Enter Last Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="abc@gmail.com" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Re-enter Password" required>
            </div>
            <button type="submit" name="registerBtn">Register</button>
        </form>

        <p id="error-message" class="error-message"></p>
        <p>Already registered? <a href="admin_login.php">Login</a></p>
    </div>

    <script src="admin_register.js"></script>

    <script>
        function selectRole(role) {
            document.getElementById('selectedRoleText').textContent = 'Selected Role: ' + role;
            document.getElementById('registrationContainer').style.display = 'block';
        }
    </script>

<?php 
if (isset($_POST['registerBtn'])) {
   
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];  
    $confirmPassword = $_POST['confirmPassword'];

    
    $sql = "SELECT username FROM `admin_register` WHERE username='$username'";
    $res = mysqli_query($db, $sql);

    if (!$res) {
        
        echo "Error: " . mysqli_error($db);
        exit(); 
    }

    $count = mysqli_num_rows($res);

    if ($count == 0) {
        if ($password === $confirmPassword) {
            // Insert user into the database without hashing the password
            $insertQuery = "INSERT INTO `admin_register` (fname, mname, lname, email, username, password)
                            VALUES ('$fname', '$mname', '$lname', '$email', '$username', '$password')";
            
            if (mysqli_query($db, $insertQuery)) {
                // Redirect to admin_login.php after successful registration
                header("Location: admin_login.php");
                exit(); // Ensure script stops after redirection
            } else {
                echo "Error: " . mysqli_error($db); // Debugging if the query fails
            }
            
        } else {
            echo "<script type='text/javascript'>alert('Passwords do not match.');</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('The username already exists.');</script>";
    }
}
?>

</body>
</html>
