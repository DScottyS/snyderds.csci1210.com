<?php
    $firstName = $_GET['firstName']
    $lastName = $_GET['lastName']
    $class = $_GET['class']
    $major = $_GET['major']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <header>
        <h1>Forms</h1>
    </header>

    <table>
        <tr>
            <td>First Name</td>
            <td><?php echo $firstName ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $lastName ?></td>
        </tr>
        <tr>
            <td>Class</td>
            <td><?php echo $class ?></td>
        </tr>
        <tr>
            <td>Major</td>
            <td><?php echo $major ?></td>
        </tr>
    </table>
</body>
</html>