<?php
    ob_start();
    include_once 'router.php';
    session_start();
    require "controllers/category_controller.php";

    $data = get_cate();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="lib/css/style.css"> -->
    <link rel="stylesheet" href="lib/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="lib/css/home.css">
    <link rel="stylesheet" href="lib/css/details.css">
    <link rel="stylesheet" href="lib/css/Login_Register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>NekoSports</title>
    <style>
        .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
        }

    
    </style>

</head>

<body>
    <div class="containe">
        <?php require "view/layout/header.php"; ?>

        <?php

            $controller = $_GET['controller'] ?? 'home';
            $action = $_GET['action'] ?? 'index';
            $id = $_GET['id'] ?? '';

            if (empty($id)) {
                router($controller, $action);
            } else {
                router_2($controller, $action, $id);
            }

        ?>

        <?php require "view/layout/footer.php"; ?>
    </div>
    <a href="#" class="back-to-top" id="scrollToTopBtn" hidden>
        <i class="fa-solid fa-angles-up"></i>
    </a>
</body>

<script src="lib/js/main.js"></script>
<script src="lib/js/Login-Register.js"></script>

</html>
<?php  ob_end_flush(); ?>