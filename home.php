<?php
// session_start();

// if(!$_SESSION['loggedIn']){
//   header('location:login.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

</body>
</html>

<?php

$data = file('users.txt');

echo "<table class='table'>
<thead class='thead-dark'>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Password</th>
    <th>Address</th>
    <th>Country</th>
    <th>gender</th>
    <th>Skills</th>
    <th>UserName</th>
    <th>Department</th>
    <th>Image</th>
    <th> Edit </th>
    <th> Delete </th>
    <th> <a href='logout.php' class='btn btn-primary'> Logout </a> </th>


  </tr>
</thead>";

foreach ($data as $key => $value) {

    $line = explode(':', $value);

    echo "<tr>

        <td> $line[0] </td>
        <td> $line[1] </td>
        <td> $line[2] </td>  
        <td> $line[3] </td>        
        <td> $line[4] </td>        
        <td> $line[5] </td>        
        <td> $line[6] </td>        
        <td> $line[7] </td>        
        <td> $line[8] </td>     
        <td> <img src='$line[8]' width='80px' hieght='80px'> </td>
        <td><a href='edit.php?password=$line[2]' class='btn btn-warning'> Edit </a></td>
        <td> <a href='delete.php?password=$line[2]' class='btn btn-danger'> Delete </a> </td>

    </tr>";

}

echo "</table>";


var_dump($_COOKIE['ID']);
exit();
