
<?php
// Start session
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    header('Location: index.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>The Disappearing Snowman</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />  
</head>
<body>
    <h1>Welcome to the Disappearing Snowman Game!</h1>
    <h2>CLICK TO START</h2>
    <a href="play.php "><button>start</button></a><br>
    

</body>
</html>