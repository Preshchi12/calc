<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
   
    var_dump($_SESSION);
    ?>

    <h2>Welcome <?php echo isset($_SESSION['full_name']) ? $_SESSION['full_name'] : 'User'; ?> to your dashboard</h2>

</body>
</html>
