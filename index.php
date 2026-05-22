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
    <link rel="icon" href="logo/fav-icon.png" type="image/png">
    <!-- Light mode favicon -->
    <link rel="icon" href="logo/fav-icon.png" type="image/x-icon" media="(prefers-color-scheme: light)">
    <!-- Dark mode favicon -->
    <link rel="icon" href="logo/fav-icon-dark-mode.png" type="image/x-icon" media="(prefers-color-scheme: dark)">
    <script src="https://kit.fontawesome.com/4e7ccd0dde.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-background">

<?php include 'includes/navbar.php'; ?>
<?php include 'includes/to-top.php'; ?>

<!--LILLE SKÆRM (TELEFON)-->

<!--top-wave-->
<div aria-hidden="true" class="d-md-none">
    <img src="waves-phone/navwave.png" class="waves position-relative w-100" alt="">
</div>

<!--top-image-->
<div class="container-fluid p-0 d-md-none ">
    <img src="images/header-image.jpg" alt="header-image" class="img-fluid header-image-frontpage">
</div>

<!--green-wave-->
<div aria-hidden="true" class="d-md-none">
    <img src="waves-phone/green-wave.png" class="green-wave-front-page position-relative w-100" alt="">
</div>

<!--top-info-->
<div class="container-fluid d-md-none bg-sage-green ps-4 ps-md-5 pb-md-2 velkomst-frontpage">

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
               class="font-twelve font-sixteen btn bg-dark-brown rounded-pill border-0 py-2 px-3">
                Læs mere om Vedelsbo <i class="fa-solid fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>

<!--green wavy wave-->
<div aria-hidden="true" class="d-md-none green-wavywave-frontpage">
    <img src="waves-phone/green-wavywave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--dekorations bobler-->
<div aria-hidden="true" class="text-end d-md-none decoration-frontpage" style="margin-top: -40px">
    <img src="images/Dekoration.png" class="decoration-frontpage-image  pe-4 m-0" alt="" style="width: 90px">
</div>

<!--hvad står vi for sektion-->
<div class="container d-md-none mt-3 mt-md-5 d-flex justify-content-center align-items-center">
    <div class="row justify-content-center">

        <div class="col-12 col-md-6 col-lg-6 text-center mt-3">

            <img src="shapes/light-green-shape-heart.png" alt="light-green-shape" class="mb-3" style="height: 100px">

            <strong class="cormorant d-block mb-2 front-page-shape-header">
                HVAD VI STÅR FOR
            </strong>

            <p class="inter font-twelve px-4 mb-md-0 px-md-3">
                På Vedelsbo skaber vi trygge og hjemlige rammer for mennesker med psykiske udfordringer. Vi bygger vores hverdag på omsorg, respekt, rummelighed og nærvær. Her er fællesskab, trivsel og livskvalitet i centrum.
            </p>

        </div>

        <div class="col-12 col-md-6 col-lg-6 text-center mt-3">

            <img src="shapes/dark-brown-shape-people.png" alt="light-green-shape" class="mb-3" style="height: 100px">

            <strong class="cormorant d-block mb-2 front-page-shape-header">
                HVEM HJÆLPER VI
            </strong>

            <p class="inter font-twelve px-4 mb-md-0 px-md-3">
                Vi hjælper voksne med psykiske udfordringer og tilknytning til psykiatrien. Hos os mødes hver beboer med forståelse, støtte og individuelle løsninger. Målet er at skabe tryghed, struktur og udvikling i hverdagen.
            </p>

        </div>

        <div class="col-12 col-md-6 col-lg-6 text-center mt-3">

            <img src="shapes/sage-green-shape-hand.png" alt="light-green-shape" class="mb-3" style="height: 100px">

            <strong class="cormorant d-block mb-2 front-page-shape-header">
                HVORDAN ARBEJDER VI
            </strong>

            <p class="inter font-twelve px-4 mb-md-0 px-md-3">
                Vi arbejder med en recovery-orienteret og individuel tilgang, hvor beboeren er i centrum. Gennem stabile relationer, struktur og faglig støtte hjælper vi den enkelte med at skabe trivsel, selvstændighed og udvikling.
            </p>

        </div>

        <div class="col-12 col-md-6 col-lg-6 text-center mt-3">

            <img src="shapes/light-brown-shape-house.png" alt="light-green-shape" class="mb-3" style="height: 100px">

            <strong class="cormorant d-block mb-2 front-page-shape-header">
                VORES ORGANISATION
            </strong>

            <p class="inter font-twelve px-4 mb-md-0 px-md-3">
                Vedelsbo er et socialpsykiatrisk botilbud med et tværfagligt team af sundheds- og socialfaglige medarbejdere. Vi prioriterer faglighed, samarbejde og et trygt miljø for både beboere og personale. Med fokus på struktur og fælles trivsel i hverdagen.
            </p>

        </div>

    </div>
</div>

<!--beige normal wave-->
<div class="bg-sage-green d-md-none" aria-hidden="true">
    <img src="waves-phone/beige-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--shapes-->
<div class="bg-sage-green d-md-none shape-wrapper">

    <!--aktiviteter-->
    <div class="shape-box-5">

        <div class="shape-content">
            <a href="borger-aktiviteter.php"
               class="font-twelve font-sixteen btn bg-off-white text-off-black rounded-pill border-0 py-2 px-3">
                Aktiviteter <i class="fa-solid fa-angle-right"></i>
            </a>
        </div>
    </div>

    <!--om vedelsbo-->
    <div class="shape-box-6">

        <div class="shape-content">
            <a href="om-vedelsbo.php"
               class="font-twelve font-sixteen btn bg-off-white text-off-black rounded-pill border-0 py-2 px-3">
                Om Vedelsbo <i class="fa-solid fa-angle-right"></i>
            </a>
        </div>
    </div>

    <!--arbejdsmetoder-->
    <div class="shape-box-7 mb-0 ">

        <div class="shape-content">
            <a href="arbejdsmetoder-forside.php"
               class="font-twelve font-sixteen btn bg-off-white text-off-black rounded-pill border-0 py-2 px-3">
                Arbejdsmetoder <i class="fa-solid fa-angle-right"></i>
            </a>
        </div>
    </div>

</div>

<!--green normal wave-->
<div class="bg-background d-md-none wave-minus-two-px" aria-hidden="true">
    <img src="waves-phone/green-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--citat + knap til "en boboers tanker"-->
<div class="container d-md-none d-flex justify-content-center align-items-center pt-5 en-beboers-tanker-borger-forside mt-md-2">

    <div class="row justify-content-center text-center w-100 mt-3">

        <div class="col-12 col-md-10 col-lg-8">

            <strong class="cormorant d-block mb-3 pt-3 en-beboers-tanker-borger-forside-text-italic">
                “Den omsorg vi får gør hverdagen lys, den nærhed vi mærker gør hjertet varmt, livet blir levende og det
                gør forskellen.”
            </strong>

            <p class="inter mb-4 en-beboers-tanker-borger-forside-text">
                - Jette Bernt Rasmussen
            </p>

            <div>
                <a href="en-beboers-tanker.php"
                   class="font-twelve font-sixteen inter bg-dark-brown text-off-black rounded-pill border-0 py-2 px-3 d-inline-block text-decoration-none">
                    En beboers tanker
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!--beige normal wave-->
<div class="bg-light-brown d-md-none" aria-hidden="true">
    <img src="waves-phone/beige-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--indsend spørgsmål sektion-->
<div class="bg-light-brown d-md-none">
    <div class="container d-flex justify-content-center align-items-center">

        <div class="row justify-content-center px-1 px-md-5 pb-md-3">

            <div class="col-12 col-lg-8">

                <div class="text-center">
                    <strong class="allura d-block header-text-allura-underpage fw-normal pb-2 pt-4">
                        Har du spørgsmål?
                    </strong>
                </div>

                <p class="font-twelve font-sixteen inter px-3 mb-0">
                    Du er altid meget velkommen til at skrive os en mail eller ringe til os.
                </p>

            </div>
        </div>
    </div>

    <div class="px-4 px-md-5 mx-md-5 pb-md-3">
        <div class="row ">
            <div class="col pb-2 pt-2">
                <input type="text" class="form-control inter font-twelve bg-off-white" placeholder="Fornavn*"
                       aria-label="Fornavn">
            </div>
            <div class="col pb-2 pt-2">
                <input type="text" class="form-control inter font-twelve bg-off-white" placeholder="Efternavn*"
                       aria-label="Efternavn">
            </div>
        </div>
        <div class="row">
            <div class="col pb-2">
                <input type="text" class="form-control inter font-twelve bg-off-white" placeholder="E-mail*"
                       aria-label="E-mail">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control inter font-twelve bg-off-white" placeholder="Skriv din besked...*"
                       aria-label="Skriv din besked her">
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center align-items-center pt-2 pb-2">
        <a href="tak-for-bidrag.php" type="button"
                class="font-twelve font-sixteen inter bg-dark-brown text-off-black rounded-pill border-0 py-2 px-3 d-inline-block text-decoration-none">
            Send
            <i class="fa-solid fa-angle-right"></i></a>
    </div>
</div>

<!--bottom-wave-->
<div class="bg-dark-green d-md-none wave-minus-two-px" aria-hidden="true" style="margin-top: -2px">
    <img src="waves-phone/light-brown-normal-wave.png" class="waves img-fluid wave-minus-two-px p-0 m-0" style="z-index: 100;" alt="" >
</div>




<!--MELLEM SKÆRM (TABLET)-->

<!--top-wave - TABLET-->
<div aria-hidden="true" class="d-none d-md-block d-lg-none">
    <img src="waves-tablet/nav-wave.png" class="waves position-relative w-100" alt="">
</div>

<!--top-image - TABLET-->
<div class="container-fluid p-0 d-none d-md-block d-lg-none">
    <img src="images/header-image-tablet.jpg" alt="header-image" class="img-fluid header-image-frontpage">
</div>

<!--green-wave - TABLET-->
<div aria-hidden="true" class="d-none d-md-block d-lg-none">
    <img src="waves-phone/green-wave.png" class="green-wave-front-page position-relative w-100" alt="">
</div>

<!--top-info - TABLET-->
<div class="container-fluid d-none d-md-block d-lg-none bg-sage-green ps-4 ps-md-5 pb-md-2 velkomst-frontpage">

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
               class="font-twelve font-sixteen btn bg-dark-brown rounded-pill border-0 py-2 px-3">
                Læs mere om Vedelsbo <i class="fa-solid fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>

<!--green wavy wave - TABLET-->
<div aria-hidden="true" class="d-none d-md-block d-lg-none green-wavywave-frontpage">
    <img src="waves-phone/green-wavywave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--dekorations bobler - TABLET-->
<div aria-hidden="true" class="text-end d-none d-md-block d-lg-none" style="margin-top: -120px">
    <img src="images/Dekoration.png" class="  pe-4 m-0" alt="" style="width: 150px">
</div>

<!--hvad står vi for sektion - TABLET-->
<div class="container  mt-3 mt-md-5 d-none d-md-flex d-lg-none justify-content-center align-items-center">
    <div class="row justify-content-center">

        <div class="col-12 col-md-6 col-lg-6 text-center mt-3">

            <img src="shapes/light-green-shape-heart.png" alt="light-green-shape" class="mb-3" style="height: 100px">

            <strong class="cormorant d-block mb-2 front-page-shape-header">
                HVAD VI STÅR FOR
            </strong>

            <p class="inter font-twelve px-4 mb-md-0 px-md-3">
                På Vedelsbo skaber vi trygge og hjemlige rammer for mennesker med psykiske udfordringer. Vi bygger vores hverdag på omsorg, respekt, rummelighed og nærvær. Her er fællesskab, trivsel og livskvalitet i centrum.
            </p>

        </div>

        <div class="col-12 col-md-6 col-lg-6 text-center mt-3">

            <img src="shapes/dark-brown-shape-people.png" alt="light-green-shape" class="mb-3" style="height: 100px">

            <strong class="cormorant d-block mb-2 front-page-shape-header">
                HVEM HJÆLPER VI
            </strong>

            <p class="inter font-twelve px-4 mb-md-0 px-md-3">
                Vi hjælper voksne med psykiske udfordringer og tilknytning til psykiatrien. Hos os mødes hver beboer med forståelse, støtte og individuelle løsninger. Målet er at skabe tryghed, struktur og udvikling i hverdagen.
            </p>

        </div>

        <div class="col-12 col-md-6 col-lg-6 text-center mt-3">

            <img src="shapes/sage-green-shape-hand.png" alt="light-green-shape" class="mb-3" style="height: 100px">

            <strong class="cormorant d-block mb-2 front-page-shape-header">
                HVORDAN ARBEJDER VI
            </strong>

            <p class="inter font-twelve px-4 mb-md-0 px-md-3">
                Vi arbejder med en recovery-orienteret og individuel tilgang, hvor beboeren er i centrum. Gennem stabile relationer, struktur og faglig støtte hjælper vi den enkelte med at skabe trivsel, selvstændighed og udvikling.
            </p>

        </div>

        <div class="col-12 col-md-6 col-lg-6 text-center mt-3">

            <img src="shapes/light-brown-shape-house.png" alt="light-green-shape" class="mb-3" style="height: 100px">

            <strong class="cormorant d-block mb-2 front-page-shape-header">
                VORES ORGANISATION
            </strong>

            <p class="inter font-twelve px-4 mb-md-0 px-md-3">
                Vedelsbo er et socialpsykiatrisk botilbud med et tværfagligt team af sundheds- og socialfaglige medarbejdere. Vi prioriterer faglighed, samarbejde og et trygt miljø for både beboere og personale. Med fokus på struktur og fælles trivsel i hverdagen.
            </p>

        </div>

    </div>
</div>

<!--beige normal wave - TABLET-->
<div class="bg-sage-green d-none d-md-block d-lg-none" aria-hidden="true">
    <img src="waves-tablet/beige-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--shapes - TABLET-->
<div class="bg-sage-green d-none d-md-block d-lg-none shape-wrapper">

    <!--aktiviteter-->
    <div class="shape-box-5">

        <div class="shape-content">
            <a href="borger-aktiviteter.php"
               class="font-twelve font-sixteen btn bg-off-white text-off-black rounded-pill border-0 py-2 px-3">
                Aktiviteter <i class="fa-solid fa-angle-right"></i>
            </a>
        </div>
    </div>

    <!--om vedelsbo-->
    <div class="shape-box-6">

        <div class="shape-content">
            <a href="om-vedelsbo.php"
               class="font-twelve font-sixteen btn bg-off-white text-off-black rounded-pill border-0 py-2 px-3">
                Om Vedelsbo <i class="fa-solid fa-angle-right"></i>
            </a>
        </div>
    </div>

    <!--arbejdsmetoder-->
    <div class="shape-box-7 mb-0 ">

        <div class="shape-content">
            <a href="arbejdsmetoder-forside.php"
               class="font-twelve font-sixteen btn bg-off-white text-off-black rounded-pill border-0 py-2 px-3">
                Arbejdsmetoder <i class="fa-solid fa-angle-right"></i>
            </a>
        </div>
    </div>

</div>

<!--green normal wave - TABLET-->
<div class="bg-background d-none d-md-block d-lg-none" aria-hidden="true">
    <img src="waves-tablet/green-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--citat + knap til "en boboers tanker" - TABLET-->
<div class="container d-none d-md-flex d-lg-none justify-content-center align-items-center pt-5 en-beboers-tanker-borger-forside mt-md-2">

    <div class="row justify-content-center text-center w-100 mt-3">

        <div class="col-12 col-md-10 col-lg-8">

            <strong class="cormorant d-block mb-3 pt-3 en-beboers-tanker-borger-forside-text-italic">
                “Den omsorg vi får gør hverdagen lys, den nærhed vi mærker gør hjertet varmt, livet blir levende og det
                gør forskellen.”
            </strong>

            <p class="inter mb-4 en-beboers-tanker-borger-forside-text">
                - Jette Bernt Rasmussen
            </p>

            <div>
                <a href="en-beboers-tanker.php"
                   class="font-twelve font-sixteen inter bg-dark-brown text-off-black rounded-pill border-0 py-2 px-3 d-inline-block text-decoration-none">
                    En beboers tanker
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!--beige normal wave - TABLET-->
<div class="bg-light-brown d-none d-md-block d-lg-none" aria-hidden="true">
    <img src="waves-tablet/beige-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--indsend spørgsmål sektion - TABLET-->
<div class="bg-light-brown d-none d-md-block d-lg-none">
    <div class="container d-flex justify-content-center align-items-center">

        <div class="row justify-content-center px-1 px-md-5 pb-md-3">

            <div class="col-12 col-lg-8">

                <div class="text-center">
                    <strong class="allura d-block header-text-allura-underpage fw-normal pb-2 pt-4">
                        Har du spørgsmål?
                    </strong>
                </div>

                <p class="font-twelve font-sixteen inter px-3 mb-0">
                    Du er altid meget velkommen til at skrive os en mail eller ringe til os.
                </p>

            </div>
        </div>
    </div>

    <div class="px-4 px-md-5 mx-md-5 pb-md-3">
        <div class="row ">
            <div class="col pb-2 pt-2">
                <input type="text" class="form-control inter font-twelve bg-off-white" placeholder="Fornavn*"
                       aria-label="Fornavn">
            </div>
            <div class="col pb-2 pt-2">
                <input type="text" class="form-control inter font-twelve bg-off-white" placeholder="Efternavn*"
                       aria-label="Efternavn">
            </div>
        </div>
        <div class="row">
            <div class="col pb-2">
                <input type="text" class="form-control inter font-twelve bg-off-white" placeholder="E-mail*"
                       aria-label="E-mail">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control inter font-twelve bg-off-white" placeholder="Skriv din besked...*"
                       aria-label="Skriv din besked her">
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center align-items-center pt-2 pb-2">
        <a href="tak-for-bidrag.php" type="button"
           class="font-twelve font-sixteen inter bg-dark-brown text-off-black rounded-pill border-0 py-2 px-3 d-inline-block text-decoration-none">
            Send
            <i class="fa-solid fa-angle-right"></i></a>
    </div>
</div>

<!--bottom-wave - TABLET-->
<div class="bg-dark-green d-none d-md-block d-lg-none" aria-hidden="true" style="margin-top: -2px">
    <img src="waves-tablet/light-brown-normal-wave.png" class="waves img-fluid wave-minus-two-px p-0 m-0" style="z-index: 100;" alt="" >
</div>


<!--STOR SKÆRM (DESKTOP)-->

<!--top-wave - DESKTOP-->
<div aria-hidden="true" class="d-none d-lg-block" style="margin-top: -2px">
    <img src="waves-desktop/nav-wave.png" class="waves position-relative w-100" alt="">
</div>

<!--image header - DESKTOP-->
<div class="container-fluid d-none d-lg-block header-section-borger position-relative p-0"
     style="z-index: -1000; ">

    <!--overlay-->
    <div class="container position-absolute">

        <div class="row align-items-center">

            <!--tekst boks-->
            <div class="col-6 bg-sage-green px-5 py-5">

                <div class="allura header-text-allura mb-3 pt-5">
                    Velkommen til Vedelsbo
                </div>

                <h1 class="cormorant fw-bold header-text-cormorant mb-4">
                    Hjælp til et godt og trygt liv
                </h1>

                <div class="inter header-text-inter-italic mb-4">
                    Et socialpsykiatrisk botilbud med en hjemlig atmosfære for voksne med en sindslidelse.
                </div>

                <div class="pb-5">
                <a href="om-vedelsbo.php"
                   class="font-sixteen btn bg-dark-brown rounded-pill border-0 py-2 px-4">
                    Læs mere om Vedelsbo
                    <i class="fa-solid fa-angle-right ms-2"></i>
                </a>
            </div>
            </div>

            <!--wave-->
            <div class="col-2 p-0 d-flex align-items-stretch">

                <img src="waves-desktop/verticla-greeen-wave.png"
                     alt=""
                     style="margin-left: -2px; height: 520px; width: auto; display: block;">

            </div>

        </div>

    </div>

</div>

<!--green wavy wave - DESKTOP-->
<div aria-hidden="true" class="d-none d-lg-block green-wavywave-frontpage" style="margin-top: -60px">
    <img src="waves-desktop/beige-normal-wave-upside-down.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--hvad står vi for sektion - TABLET-->
<div class="container  mt-3 mt-md-5 d-none d-lg-flex justify-content-center align-items-center">
    <div class="row justify-content-center">

        <div class="col-3 text-center mt-3 px-2">

            <img src="shapes/light-green-shape-heart.png" alt="light-green-shape" class="mb-3" style="height: 100px">

            <strong class="cormorant font-eightteen d-block mb-2">
                HVAD VI STÅR FOR
            </strong>

            <p class="inter font-fourteen text-start px-1">
                På Vedelsbo skaber vi trygge og hjemlige rammer for mennesker med psykiske udfordringer. Vi bygger vores hverdag på omsorg, respekt, rummelighed og nærvær. Her er fællesskab, trivsel og livskvalitet i centrum.
            </p>

        </div>

        <div class="col-3 text-center mt-3 px-2">

            <img src="shapes/dark-brown-shape-people.png" alt="light-green-shape" class="mb-3" style="height: 100px">

            <strong class="cormorant font-eightteen d-block mb-2">
                HVEM HJÆLPER VI
            </strong>

            <p class="inter font-fourteen text-start px-1">
                Vi hjælper voksne med psykiske udfordringer og tilknytning til psykiatrien. Hos os mødes hver beboer med forståelse, støtte og individuelle løsninger. Målet er at skabe tryghed, struktur og udvikling i hverdagen.
            </p>

        </div>

        <div class="col-3 text-center mt-3 px-2">

            <img src="shapes/sage-green-shape-hand.png" alt="light-green-shape" class="mb-3" style="height: 100px">

            <strong class="cormorant font-eightteen d-block mb-2">
                HVORDAN ARBEJDER VI
            </strong>

            <p class="inter font-fourteen text-start px-1">
                Vi arbejder med en recovery-orienteret og individuel tilgang, hvor beboeren er i centrum. Gennem stabile relationer, struktur og faglig støtte hjælper vi den enkelte med at skabe trivsel, selvstændighed og udvikling.
            </p>

        </div>

        <div class="col-3 text-center mt-3 px-2">

            <img src="shapes/light-brown-shape-house.png" alt="light-green-shape" class="mb-3" style="height: 100px">

            <strong class="cormorant font-eightteen d-block mb-2">
                VORES ORGANISATION
            </strong>

            <p class="inter font-fourteen text-start px-1">
                Vedelsbo er et socialpsykiatrisk botilbud med et tværfagligt team af sundheds- og socialfaglige medarbejdere. Vi prioriterer faglighed, samarbejde og et trygt miljø for både beboere og personale. Med fokus på struktur og fælles trivsel i hverdagen.
            </p>

        </div>

    </div>
</div>

<!--beige wave - DESKTOP-->
<div aria-hidden="true" class="d-none d-lg-block bg-sage-green">
    <img src="waves-desktop/beige-normal-wave.png" class="waves position-relative w-100" alt="">
</div>

<!--shapes - DESKTOP-->
<div class="container-fluid bg-sage-green d-none d-lg-block py-5" style="margin-top: -2px">

    <div class="row justify-content-center text-center">

        <!--aktiviteter-->
        <div class="col-4 d-flex justify-content-center">

            <div class="shape shape-5 d-flex justify-content-center align-items-center">

                <a href="borger-aktiviteter.php"
                   class="font-twelve font-sixteen btn bg-off-white text-off-black rounded-pill border-0 py-2 px-3">
                    Aktiviteter <i class="fa-solid fa-angle-right"></i>
                </a>

            </div>

        </div>

        <!--om vedelsbo-->
        <div class="col-4 d-flex justify-content-center">

            <div class="shape shape-6 d-flex justify-content-center align-items-center">

                <a href="om-vedelsbo.php"
                   class="font-twelve font-sixteen btn bg-off-white text-off-black rounded-pill border-0 py-2 px-3">
                    Om Vedelsbo <i class="fa-solid fa-angle-right"></i>
                </a>

            </div>

        </div>

        <!--arbejdsmetoder-->
        <div class="col-4 d-flex justify-content-center">

            <div class="shape shape-7 d-flex justify-content-center align-items-center">

                <a href="arbejdsmetoder-forside.php"
                   class="font-twelve font-sixteen btn bg-off-white text-off-black rounded-pill border-0 py-2 px-3">
                    Arbejdsmetoder <i class="fa-solid fa-angle-right"></i>
                </a>

            </div>

        </div>

    </div>

</div>

<!--beige wave - DESKTOP-->
<div aria-hidden="true" class="d-none d-lg-block bg-background" style="margin-top: -2px">
    <img src="waves-desktop/normal-green-wave.png" class="waves position-relative w-100" alt="">
</div>

<!--citat + knap til "en boboers tanker" - DESKTOP-->
<div class="container d-none d-lg-flex justify-content-center align-items-center pt-4 en-beboers-tanker-borger-forside mt-0">

    <div class="row justify-content-center text-center w-100 mt-3">

        <div class="col-12 col-md-10 col-lg-8">

            <strong class="cormorant d-block mb-3 pt-3 en-beboers-tanker-borger-forside-text-italic">
                “Den omsorg vi får gør hverdagen lys, den nærhed vi mærker gør hjertet varmt, livet blir levende og det
                gør forskellen.”
            </strong>

            <p class="inter mb-4 en-beboers-tanker-borger-forside-text">
                - Jette Bernt Rasmussen
            </p>

            <div class="pb-2">
                <a href="en-beboers-tanker.php"
                   class="font-twelve font-sixteen inter bg-dark-brown text-off-black rounded-pill border-0 py-2 px-3 d-inline-block text-decoration-none">
                    En beboers tanker
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!--beige wave - DESKTOP-->
<div aria-hidden="true" class="d-none d-lg-block bg-light-brown" style="margin-top: -2px">
    <img src="waves-desktop/beige-normal-wave.png" class="waves position-relative w-100" alt="">
</div>

<!--indsend spørgsmål sektion - DESKTOP-->
<div class="bg-light-brown d-none d-lg-block" style="margin-top: -2px">

    <div class="container py-5">

        <div class="row align-items-center">

            <!--tekst-->
            <div class="col-6">

                <strong class="allura d-block header-text-allura-underpage fw-normal pb-2">
                    Har du spørgsmål?
                </strong>

                <p class="font-sixteen inter pe-5 mb-0">
                    Du er altid meget velkommen til at skrive os en mail eller ringe til os.
                </p>

            </div>

            <!--formular-->
            <div class="col-6">

                <div class="row">
                    <div class="col pb-3">
                        <input type="text"
                               class="form-control inter font-twelve bg-off-white"
                               placeholder="Fornavn*"
                               aria-label="Fornavn">
                    </div>

                    <div class="col pb-3">
                        <input type="text"
                               class="form-control inter font-twelve bg-off-white"
                               placeholder="Efternavn*"
                               aria-label="Efternavn">
                    </div>
                </div>

                <div class="row">
                    <div class="col pb-3">
                        <input type="text"
                               class="form-control inter font-twelve bg-off-white"
                               placeholder="E-mail*"
                               aria-label="E-mail">
                    </div>
                </div>

                <div class="row">
                    <div class="col pb-3">
                        <textarea class="form-control inter font-twelve bg-off-white"
                                  rows="4"
                                  placeholder="Skriv din besked...*"
                                  aria-label="Skriv din besked her"></textarea>
                    </div>
                </div>

                <!--knap-->
                <div class="pt-2 d-lg-flex justify-content-center align-items-center">

                    <a href="tak-for-bidrag.php"
                       class="font-sixteen inter bg-dark-brown text-off-black rounded-pill border-0 py-2 px-4 d-inline-block text-decoration-none">
                        Send
                        <i class="fa-solid fa-angle-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

<!--bottom-wave - DESKTOP-->
<div class="bg-dark-green d-none d-lg-block" aria-hidden="true">
    <img src="waves-desktop/normal-light-brown-wave.png" class="waves img-fluid wave-minus-two-px p-0 m-0" style="z-index: 100;" alt="" >
</div>


<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
