<!-- Q6.Scenario: You are building a login system for a web 
application. 
After users submit their username and password, you need 
to 
verify if the credentials are correct before granting 
access. Write a PHP script that checks if the provided 
username and password match the stored credentials. If 
they match, echo "Login successful"; otherwise, echo 
"Invalid 
credentials". -->
<?php
$storedUsername = "user123";
$storedPassword = "password123";

$userInputUsername ="user123";
$userInputUserPassword = "password123";
if ($userInputUsername === $storedUsername && $userInputUserPassword === $storedPassword) {
    echo "Login Sucessful";
} else {
    echo "Invalid credentials";
} 
?>