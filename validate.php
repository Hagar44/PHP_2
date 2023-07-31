<?php
    $fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$address = $_POST["address"];
	$country = $_POST["country"];
	$gender = $_POST["gender"];
	$skills = implode(", ", $_POST["skills"]);
	$username = $_POST["username"];
	$password = $_POST["password"];
	$department = $_POST["department"];
    $imagePath = $imgNewName;

$data = file('users.txt');

foreach ($data as $key => $value) {
    $line = explode(':', $value);
    if(!strcasecmp($email, $line[1]) and !strcasecmp($name, $line[0])){
        session_start();

        $_SESSION['fname']= $name;
        $_SESSION['lname']= $name;
        $_SESSION['address']= $address;
        $_SESSION['country']= $country;
        $_SESSION['gender']= $gender;
        $_SESSION['skills']= $skills;
        $_SESSION['username']= $username;
        $_SESSION['password']= $password;
        $_SESSION['department']= $department;
        $_SESSION['imagePath']= $imagePath;
        $_SESSION['loggedIn']= true;

        header('location:home.php');
        exit();
    }
}
header('location:home.php');

