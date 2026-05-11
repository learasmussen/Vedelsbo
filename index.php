<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    
    <title>Vedelsbo</title>
    
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="robots" content="noindex, nofollow">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/4e7ccd0dde.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-background">

<?php include 'includes/navbar.php'; ?>

<div aria-hidden="true" >
    <img src="waves-phone/navwave.png" class="waves position-relative w-100" alt="">
</div>

<div class="container-fluid p-0 ">
    <img src="images/header-image.jpg" alt="header-image" class="img-fluid header-image-frontpage d-md-none">
    <img src="images/header-image-tablet.jpg" alt="header-image" class="img-fluid header-image-frontpage d-none d-md-block">
</div>



<div aria-hidden="true" class="">
    <img src="waves-phone/green-wave.png" class="green-wave-front-page position-relative w-100" alt="">
</div>


<div class="container-fluid bg-sage-green ps-4 ps-md-5 pb-md-2 velkomst-frontpage" >

    <div class="row">
        <div class="col-12 mt-3">
            <div class="allura  header-text-allura">Velkommen til Vedelsbo</div>
        </div>
        <div class="col-12">
            <h1 class="cormorant pe-5 fw-bold header-text-cormorant">Hjælp til et godt og trygt liv</h1>
        </div>
        <div class="col-12">
            <div class="inter header-text-inter-italic pe-4 pe-md-5 me-md-5">Et socialpsykiatrisk botilbud med en hjemlig atmosfære for voksne med en sindslidelse. </div>
        </div>

        <div class="mt-3">
            <a href="#"
               class="btn bg-dark-brown rounded-pill border-0 header-button-text py-2 px-3">
                Læs mere om Vedelsbo <i class="fa-solid fa-angle-right"></i>
            </a>
    </div>
    </div>
</div>

<div aria-hidden="true" class=" green-wavywave-frontpage">
    <img src="waves-phone/green-wavywave.png" class="waves img-fluid  p-0 m-0" alt="" >
</div>



<div aria-hidden="true" class="text-end d-md-none decoration-frontpage" style="margin-top: -40px">
    <img src="images/Dekoration.png" class="decoration-frontpage-image  pe-4 m-0" alt="" style="width: 90px">
</div>

<div aria-hidden="true" class="text-end d-none d-md-block" style="margin-top: -120px">
    <img src="images/Dekoration.png" class="  pe-4 m-0" alt="" style="width: 150px">
</div>


<div class="container mt-3 mt-md-5 d-flex justify-content-center align-items-center">
    <div class="row justify-content-center">

        <div class="col-12 col-md-6 col-lg-6 text-center mt-3">

            <img src="shapes/light-green-shape-heart.png" alt="light-green-shape" class="mb-3" style="width: 100px">

            <strong class="cormorant d-block mb-2 front-page-shape-header">
                HVAD VI STÅR FOR
            </strong>

            <p class="inter font-fourteen px-4">
                en masse tekst om alt muligt spændene tihi. en masse tekst om alt muligt spændene tihi.
            </p>

        </div>

        <div class="col-12 col-md-6 col-lg-6 text-center mt-3">

            <img src="shapes/dark-brown-shape-people.png" alt="light-green-shape" class="mb-3" style="width: 100px">

            <strong class="cormorant d-block mb-2 front-page-shape-header">
                HVAD VI STÅR FOR
            </strong>

            <p class="inter font-fourteen px-4">
                en masse tekst om alt muligt spændene tihi. en masse tekst om alt muligt spændene tihi.
            </p>

        </div>

        <div class="col-12 col-md-6 col-lg-6 text-center mt-3">

            <img src="shapes/sage-green-shape-hand.png" alt="light-green-shape" class="mb-3" style="width: 100px">

            <strong class="cormorant d-block mb-2 front-page-shape-header">
                HVAD VI STÅR FOR
            </strong>

            <p class="inter font-fourteen px-4">
                en masse tekst om alt muligt spændene tihi. en masse tekst om alt muligt spændene tihi.
            </p>

        </div>

        <div class="col-12 col-md-6 col-lg-6 text-center mt-3">

            <img src="shapes/light-brown-shape-house.png" alt="light-green-shape" class="mb-3" style="width: 100px">

            <strong class="cormorant d-block mb-2 front-page-shape-header">
                HVAD VI STÅR FOR
            </strong>

            <p class="inter font-fourteen px-4">
                en masse tekst om alt muligt spændene tihi. en masse tekst om alt muligt spændene tihi.
            </p>

        </div>

    </div>
</div>

<div aria-hidden="true">
    <img src="waves-phone/beige-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="" >
</div>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
