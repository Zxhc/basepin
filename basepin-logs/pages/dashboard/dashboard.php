<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css  ">
    <link rel="stylesheet" href="../../component/navbar/nav.css  ">
    <link rel="stylesheet" href="./dashboard.css  ">
    <link rel="stylesheet" href="../../component/dashboardHeader/dashboardHeader.css  ">
    <link rel="stylesheet" href="../../component/dashboardForm/dashboardForm.css  ">
    <link rel="stylesheet" href="../../component/formFooter/formFooter.css  ">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    <?php include '../../component/navbar/nav.php'?>
    <div class="dashboard-content">
        <?php include "../../component/dashboardHeader/dashboardHeader.php"?>
        <hr>
        <?php include "../../component/dashboardForm/dashboardForm.php"?>
        <hr id="footer-line">
        <?php include "../../component/formFooter/formFooter.php"?>
    </div>
<script src="../../component/dashboardHeader/dashboardHeader.js"></script>
</body>
</html>