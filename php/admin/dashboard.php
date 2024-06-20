<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    /* header('location:admin_login.php'); */
    $admin_id = 1;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- link css customizado -->
    <link rel="stylesheet" href="../../css/admin_style.css">

</head>

<body>

    <!-- inicio header -->
    <?php include "../admin/admin_header.php" ?>


    <!-- fim header /-->

    <!-- script js customizado -->
    <script src="../../js/admin_script.js"></script>
</body>

</html>