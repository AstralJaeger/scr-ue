<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>SCM4 Book Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="assets/main.css" rel="stylesheet">

</head>
<body>


<?php require_once('partials/header.php') ?>


<div class="container">




    <div class="page-header">
        <h2>Welcome</h2>
    </div>

    <p>Welcome to the SCM4 book shop!</p>


    <!--display error messages-->


    <!--/display error messages-->

    <div class="footer">

        <!--display cart info-->
        <hr />
        <div class="row">
            <div class="col-md-4">
                <a href="index.php?view=checkout" class="footer-link"  data-bs-toggle="tooltip" data-bs-placement="top" title="Zum Checkout">
                    <span class="badge bg-secondary">0</span> <span class="bi bi-cart4" aria-hidden="true"></span>
                </a>
            </div>
            <div class="col-md-4 ms-auto text-end">
                <p>01.03.2024 12:00</p>
            </div>
        </div>

        <!--/display cart info-->

    </div>



</div> <!-- container -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="assets/main.js"></script>

</body>

</html>