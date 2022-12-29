<?php

include 'config.php';
session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link
        href="https://api.fontshare.com/v2/css?f[]=satoshi@900,700,500,301,701,300,501,401,901,400&f[]=clash-display@200,400,700,500,600,1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/admin_style.css">
    <title>Orders</title>
</head>

<body>
    <?php include 'admin_header.php' ?>



    <script src="js/admin_script.js"></script>
</body>

</html>