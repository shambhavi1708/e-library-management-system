// function selectRole(role) {
//     document.querySelector('.role-selection').style.display = 'none';
//     document.querySelector('.registration-container').style.display = 'block';
//     document.getElementById('role-display').innerText = "Registering as: " + role.toUpperCase();
// }
// function validateForm() {
//     var pw1 = document.getElementById("pswd1").value;
//     var pw2 = document.getElementById("pswd2").value;
//     var name1 = document.getElementById("fname").value;
//     var name2 = document.getElementById("lname").value;
//     var email = document.getElementById("email").value;
//     var username = document.getElementById("username").value;
//     var ag = document.getElementById("age").value;

//     if (name1 == "") {
//         document.getElementById("blankMsg").innerHTML = "**Fill the first name";
//         return false;
//     }

//     if (!isNaN(name1)) {
//         document.getElementById("blankMsg").innerHTML = "**Only characters are allowed";
//         return false;
//     }
//     if (ag == "") {
//         document.getElementById("blankMsg").innerHTML = "**Enter your age please";
//         return false;
//     }
//     if (ag< 5 && ag >150) {
//         document.getElementById("blankMsg").innerHTML = "**Enter a valid age";
//         return false;
//     }
//     // if (!isNaN(name2)) {
//     //     document.getElementById("charMsg").innerHTML = "**Only characters are allowed";
//     //     return false;
//     // }

//     if (pw1 == "") {
//         document.getElementById("message1").innerHTML = "**Fill the password please!";
//         return false;
//     }

//     if (pw2 == "") {
//         document.getElementById("message2").innerHTML = "**Enter the password please!";
//         return false;
//     }

//     if (pw1.length < 8) {
//         document.getElementById("message1").innerHTML = "**Password length must be at least 8 characters";
//         return false;
//     }

//     if (pw1.length > 15) {
//         document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
//         return false;
//     }

//     if (pw1 != pw2) {
//         document.getElementById("message2").innerHTML = "**Passwords are not the same";
//         return false;
//     } else {
       
//         localStorage.setItem("username", username);
//         localStorage.setItem("password", pw1);
        
//         alert("Registration successful!");
//         window.location.href = "admin_login.php"; 
//     }
// }

function validateForm() {
    var pw1 = document.getElementById("pswd1").value;
    var pw2 = document.getElementById("pswd2").value;
    var name1 = document.getElementById("fname").value;
    var name2 = document.getElementById("lname").value;
    var mname = document.getElementById("mname").value; // Optional middle name
    var email = document.getElementById("email").value;
    var username = document.getElementById("username").value;
    var ag = document.getElementById("age").value;

    // Validate first name
    if (name1 == "") {
        document.getElementById("blankMsg").innerHTML = "**Fill the first name";
        return false;
    }

    if (!isNaN(name1)) {
        document.getElementById("blankMsg").innerHTML = "**Only characters are allowed";
        return false;
    }

    // Validate last name
    if (name2 == "") {
        document.getElementById("blankMsg").innerHTML = "**Fill the last name";
        return false;
    }

    // Middle name is optional, so no validation for empty field

    // Validate age
    if (ag == "") {
        document.getElementById("blankMsg").innerHTML = "**Enter your age please";
        return false;
    }
    if (ag < 5 || ag > 150) {
        document.getElementById("blankMsg").innerHTML = "**Enter a valid age";
        return false;
    }

    // Validate password
    if (pw1 == "") {
        document.getElementById("message1").innerHTML = "**Fill the password please!";
        return false;
    }

    if (pw2 == "") {
        document.getElementById("message2").innerHTML = "**Enter the password please!";
        return false;
    }

    if (pw1.length < 8) {
        document.getElementById("message1").innerHTML = "**Password length must be at least 8 characters";
        return false;
    }

    if (pw1.length > 15) {
        document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
        return false;
    }

    if (pw1 != pw2) {
        document.getElementById("message2").innerHTML = "**Passwords are not the same";
        return false;
    } else {
        localStorage.setItem("username", username);
        localStorage.setItem("password", pw1);
        alert("Registration successful!");
        window.location.href = "admin_login.php";
    }
}
