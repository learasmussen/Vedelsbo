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

<!--top-wave-->
<div aria-hidden="true">
    <img src="waves-phone/navwave.png" class="waves position-relative w-100" alt="">
</div>

<!--top-image-->
<div class="container-fluid p-0 ">
    <img src="images/header-image.jpg" alt="header-image" class="img-fluid header-image-frontpage d-md-none">
    <img src="images/header-image-tablet.jpg" alt="header-image"
         class="img-fluid header-image-frontpage d-none d-md-block">
</div>

<!--green-wave-->
<div aria-hidden="true" class="">
    <img src="waves-phone/green-wave.png" class="green-wave-front-page position-relative w-100" alt="">
</div>

<!--top-info-->
<div class="container-fluid bg-sage-green ps-4 ps-md-5 pb-md-2 velkomst-frontpage">

    <div class="row">
        <div class="col-12 mt-3">
            <div class="allura  header-text-allura">Velkommen til Vedelsbo</div>
        </div>
        <div class="col-12">
            <h1 class="cormorant pe-5 fw-bold header-text-cormorant">Hjælp til et godt og trygt liv</h1>
        </div>
        <div class="col-12">
            <div class="inter header-text-inter-italic pe-4 pe-md-5 me-md-5">Et socialpsykiatrisk botilbud med en
                hjemlig atmosfære for voksne med en sindslidelse.
            </div>
        </div>

        <div class="mt-3">
            <a href="om-vedelsbo.php"
               class="font-twelve btn bg-dark-brown rounded-pill border-0 py-2 px-3">
                Læs mere om Vedelsbo <i class="fa-solid fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>

<!--green wavy wave-->
<div aria-hidden="true" class=" green-wavywave-frontpage">
    <img src="waves-phone/green-wavywave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--dekorations bobler-->
<div aria-hidden="true" class="text-end d-md-none decoration-frontpage" style="margin-top: -40px">
    <img src="images/Dekoration.png" class="decoration-frontpage-image  pe-4 m-0" alt="" style="width: 90px">
</div>

<!--dekorations bobler tablet-->
<div aria-hidden="true" class="text-end d-none d-md-block" style="margin-top: -120px">
    <img src="images/Dekoration.png" class="  pe-4 m-0" alt="" style="width: 150px">
</div>

<!--hvad står vi for sektion-->
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

<!--beige normal wave-->
<div class="bg-sage-green" aria-hidden="true">
    <img src="waves-phone/beige-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--shapes: aktviteter, om vedelsbo, arbejdsmetoder-->
<div class="bg-sage-green">

    <!--aktviteter-->
    <div class="shape-box-5">

        <div class="shape-content">
            <a href="borger-aktiviteter.php"
               class="font-twelve btn bg-off-white text-off-black rounded-pill border-0 py-2 px-3">
                Aktiviteter <i class="fa-solid fa-angle-right"></i>
            </a>
        </div>
    </div>

    <!--om vedelsbo-->
    <div class="shape-box-6">

        <div class="shape-content">
            <a href="om-vedelsbo.php"
               class="font-twelve btn bg-off-white text-off-black rounded-pill border-0 py-2 px-3">
                Om Vedelsbo <i class="fa-solid fa-angle-right"></i>
            </a>
        </div>
    </div>

    <!--arbejdsmetoder-->
    <div class="shape-box-7">

        <div class="shape-content">
            <a href="arbejdsmetoder-forside.php"
               class="font-twelve btn bg-off-white text-off-black rounded-pill border-0 py-2 px-3">
                Arbejdsmetoder <i class="fa-solid fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>

<!--green normal wave-->
<div class="bg-background" aria-hidden="true">
    <img src="waves-phone/green-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--citat + knap til "en boboers tanker"-->
<div class="container d-flex justify-content-center align-items-center pt-5 en-beboers-tanker-borger-forside">

    <div class="row justify-content-center text-center w-100 mt-3">

        <div class="col-12 col-md-10 col-lg-8">

            <strong class="cormorant d-block mb-3 en-beboers-tanker-borger-forside-text-italic">
                “Den omsorg vi får gør hverdagen lys, den nærhed vi mærker gør hjertet varmt, livet blir levende og det
                gør forskellen.”
            </strong>

            <p class="inter mb-4 en-beboers-tanker-borger-forside-text">
                - Jette Bernt Rasmussen
            </p>

            <div>
                <a href="en-beboers-tanker.php"
                   class="font-twelve inter bg-dark-brown text-off-black rounded-pill border-0 py-2 px-3 d-inline-block text-decoration-none">
                    En beboers tanker
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!--beige normal wave-->
<div class="bg-light-brown" aria-hidden="true">
    <img src="waves-phone/beige-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--indsend spørgsmål sektion-->
<div class="bg-light-brown">
    <div class="container d-flex justify-content-center align-items-center">

        <div class="row justify-content-center px-1">

            <div class="col-12 col-lg-8">

                <div class="text-center">
                    <strong class="allura d-block header-text-allura-underpage fw-normal pb-2 pt-4">
                        Har du spørgsmål?
                    </strong>
                </div>

                <p class="font-twelve inter px-3 mb-0">
                    Du er altid meget velkommen til at skrive os en mail eller ringe til os.
                </p>

            </div>
        </div>
    </div>

    <div class="px-4">
        <div class="row">
            <div class="col pb-2 pt-2">
                <input type="text" class="form-control inter font-twelve bg-off-white" placeholder="Fornavn"
                       aria-label="Fornavn">
            </div>
            <div class="col pb-2 pt-2">
                <input type="text" class="form-control inter font-twelve bg-off-white" placeholder="Efternavn"
                       aria-label="Efternavn">
            </div>
        </div>
        <div class="row">
            <div class="col pb-2">
                <input type="text" class="form-control inter font-twelve bg-off-white" placeholder="E-mail"
                       aria-label="E-mail">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control inter font-twelve bg-off-white" placeholder="Skriv din besked..."
                       aria-label="Skriv din besked her">
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center align-items-center pt-2 pb-2">
        <a href="tak-for-bidrag.php" type="button"
                class="font-twelve inter bg-dark-brown text-off-black rounded-pill border-0 py-2 px-3 d-inline-block text-decoration-none">
            Send
            <i class="fa-solid fa-angle-right"></i></a>
    </div>
</div>

<!--bottom-wave-->
<div class="bg-dark-green" aria-hidden="true">
    <img src="waves-phone/light-brown-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
