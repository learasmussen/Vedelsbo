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

<!--top-info-->
<div class="container-fluid d-md-none d-flex justify-content-center align-items-center bg-sage-green ps-4 ps-md-5 pb-md-2 borger-forside-header">

    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 mt-5">
            <h1 class="cormorant  pt-3 fw-bold header-text-cormorant text-center">Aktiviteter</h1>
        </div>
        <div class="col-12">
            <div class="font-twelve inter  pe-md-5 me-md-5 text-center">Som beboer på Vedelsbo forventes der
                at du deltager i hverdagens fælles opgaver i det omfang, du kan. Vi tilpasser sammen omfanget af din
                deltagelse, til dit funktionsniveau og ud fra dine individuelle behov.
            </div>
        </div>

    </div>
</div>

<!--green normal wave-->
<div aria-hidden="true" class="d-md-none green-wavywave-frontpage">
    <img src="waves-phone/green-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--top image-->
<div class="container-fluid p-0 position-relative d-md-none" style="z-index: -1000">
    <img src="images/borger-aktiviteter-header-image-phone.png" alt="header-image"
         class="img-fluid header-image-borger d-md-none">
</div>

<!--beige big wave-->
<div aria-hidden="true" class="beige-big-wave-borger-forside d-md-none">
    <img src="waves-phone/beige-big-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--wave shape-->
<div aria-hidden="true" class="text-end d-md-none decoration-frontpage" style="margin-top: -120px">
    <img src="header-shapes/green-heart.png" class="decoration-frontpage-image  pe-4 m-0" alt="" style="width: 140px">
</div>

<!--accordion: naturholdet, dyreholdet...-->
<div class="accordion mt-5 d-md-none mx-4" id="accordionExample">

    <!--naturholdet-->
    <div class="accordion-item mb-3 border-0 overflow-hidden bg-light-green rounded-5">

        <h2 class="accordion-header">

            <button class="accordion-button collapsed bg-light-green inter fw-bold font-twelve"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#naturholdet"
                    aria-expanded="false"
                    aria-controls="naturholdet">

                Naturholdet

            </button>

        </h2>

        <div id="naturholdet" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body bg-light-green inter accordion-body-text">

                <p class="mb-3">Tre dage ugentligt i sommerhalvåret og to dage ugentligt i vinterhalvåret deltager
                    beboerne i praktiske opgaver på Vedelsbos udearealer som led i et relations- og aktivitetsbaseret
                    tilbud.</p>
                <p class="mb-3">Opgaverne kan omfatte oprydning, græsslåning, såning, fejning og øvrig vedligeholdelse
                    af udearealer.</p>
                <p class="mb-3">Indsatsen tilrettelægges med fokus på struktur, fællesskab og mestring i hverdagen.</p>

            </div>
        </div>

    </div>

    <!--dyreholdet-->
    <div class="accordion-item mb-3 border-0 overflow-hidden bg-light-green rounded-5">

        <h2 class="accordion-header">

            <button class="accordion-button collapsed bg-light-green inter fw-bold font-twelve"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#dyreholdet"
                    aria-expanded="false"
                    aria-controls="dyreholdet">

                Dyreholdet

            </button>

        </h2>

        <div id="dyreholdet" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body bg-light-green inter accordion-body-text">

                <p class="mb-3">Vedelsbo har et dyrehold bestående af alpacaer, kat, undulater samt et akvarium.</p>
                <p class="mb-3">Dyreholdet indgår som en del af de pædagogiske og rehabiliterende aktiviteter.</p>
                <p class="mb-3">Opgaverne omfatter blandt andet fodring og rengøring, men der lægges samtidig vægt på
                    samvær, nærvær og kontakt med dyrene som en del af den sociale og sansemæssige støtte.</p>

            </div>
        </div>

    </div>

    <!--kreativt værksted-->
    <div class="accordion-item mb-3 border-0 overflow-hidden bg-light-green rounded-5">

        <h2 class="accordion-header">

            <button class="accordion-button collapsed bg-light-green inter fw-bold font-twelve"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#creativeSpace"
                    aria-expanded="false"
                    aria-controls="creativeSpace">

                Kreativt værksted

            </button>

        </h2>

        <div id="creativeSpace" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body bg-light-green inter accordion-body-text">

                <p class="mb-3">Der afholdes kreativt værksted hver tirsdag i sommerhalvåret samt tirsdag og onsdag i
                    vinterhalvåret.</p>
                <p class="mb-3">Her arbejdes der med kreative og praktiske aktiviteter ud fra beboernes interesser og
                    ønsker.</p>
                <p class="mb-3">Der er fokus på medindflydelse, motivation og mulighed for at afprøve forskellige
                    kreative udtryk i et understøttende miljø.</p>

            </div>
        </div>

    </div>

    <!--væresteder-->
    <div class="accordion-item mb-3 border-0 overflow-hidden bg-light-green rounded-5">

        <h2 class="accordion-header">

            <button class="accordion-button collapsed bg-light-green inter fw-bold font-twelve"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#places"
                    aria-expanded="false"
                    aria-controls="places">

                Væresteder

            </button>

        </h2>

        <div id="places" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body bg-light-green inter accordion-body-text">

                <p class="mb-3">Der er mulighed for, at blive tilknyttet forskellige væresteder, hvor man kan møde
                    ligestillede og på den måde udbygge sit sociale netværk.</p>
                <p class="mb-3">På værestederne kan man deltage i mange forskellige aktiviteter såsom læderværksted,
                    køkkenaktiviteter, smykkeværksted og kreativt værksted.</p>

            </div>
        </div>

    </div>

    <!--udflugter-->
    <div class="accordion-item mb-3 border-0 overflow-hidden bg-light-green rounded-5">

        <h2 class="accordion-header">

            <button class="accordion-button collapsed bg-light-green inter fw-bold font-twelve"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#udflugter"
                    aria-expanded="false"
                    aria-controls="udflugter">

                Udflugter

            </button>

        </h2>

        <div id="udflugter" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body bg-light-green inter accordion-body-text">

                <p class="mb-3">I sommerhalvåret arrangeres løbende aktiviteter og ture “i det grønne”. Der planlægges
                    desuden aktiviteter i nærområdet, særligt i sommerhalvåret.</p>
                <p class="mb-3">Beboerne har medindflydelse på planlægningen af aktiviteter og udflugter.</p>
                <p class="mb-3">Der arrangeres både længere dagsture, eksempelvis til Tivoli eller Odense Zoo, samt
                    kortere ture som f.eks. til Karrebæksminde med Sejlads Friheden.</p>
                <p class="mb-3">Det kan være teltture med overnatning, vandreture med madpakker, kajakture, motionsdag
                    m.v.</p>

            </div>
        </div>

    </div>

    <!--træning-->
    <div class="accordion-item mb-3 border-0 overflow-hidden bg-light-green rounded-5">

        <h2 class="accordion-header">

            <button class="accordion-button collapsed bg-light-green inter fw-bold font-twelve"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#training"
                    aria-expanded="false"
                    aria-controls="training">

                Træning

            </button>

        </h2>

        <div id="training" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body bg-light-green inter accordion-body-text">

                <p class="mb-3">Vedelsbo har fokus på fysisk aktivitet i hverdagen og arbejder ud fra en
                    motionspolitik.</p>
                <p class="mb-3">Beboerne støttes i at opretholde en aktiv livsstil gennem individuelle og fælles
                    træningsaktiviteter, herunder gåture og planlagt motion. Der kan tilbydes individuel genoptræning
                    ved fysioterapeut i eget hjem eller i klinik.</p>
                <p class="mb-3">Der er desuden ugentligt tilbud om yoga i huset samt mulighed for yoga med alpacaer i
                    sommerperioden. Yderligere aktiviteter kan omfatte gåture, løb, cykling og roning efter ønske og
                    behov.</p>

            </div>
        </div>

    </div>

</div>

<!--beige normal wave-->
<div aria-hidden="true" class="d-md-none green-wavywave-frontpage">
    <img src="waves-phone/beige-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--read too section-->
<div class="container d-md-none d-flex justify-content-center align-items-center bg-light-brown pt-5 read-to-section">

    <div class="row justify-content-center text-center">

        <div class="col-12 mb-4 mt-3">
            <strong class="cormorant d-block read-to-header">
                Læs også
            </strong>
        </div>

        <div class="col-6 d-flex justify-content-center mb-3 ps-4">
            <a href="borger-fritid.php"
               class="font-twelve bg-light-green text-off-black rounded-pill fw-bold border-0 py-2 px-2 inter d-inline-block text-decoration-none"
               style="width: 125px">
                Fritid
            </a>
        </div>

        <div class="col-6 d-flex justify-content-center mb-3 pe-4">
            <a href="a-year.php"
               class="font-twelve bg-light-green text-off-black rounded-pill fw-bold border-0 py-2 px-2 inter d-inline-block text-decoration-none"
               style="width: 125px">
                Årets gang
            </a>
        </div>

        <div class="col-6 d-flex justify-content-center mb-3 ps-4">
            <a href="meals.php"
               class="font-twelve bg-light-green text-off-black rounded-pill fw-bold border-0 py-2 px-2 inter d-inline-block text-decoration-none"
               style="width: 125px">
                Måltider
            </a>
        </div>

        <div class="col-6 d-flex justify-content-center mb-3 pe-4">
            <a href="om-vedelsbo.php"
               class="font-twelve bg-light-green text-off-black rounded-pill fw-bold border-0 py-2 px-2 inter d-inline-block text-decoration-none"
               style="width: 125px">
                Om Vedelsbo
            </a>
        </div>

    </div>

</div>

<!--bottom-wave-->
<div aria-hidden="true" class="d-md-none green-wavywave-frontpage bg-dark-green">
    <img src="waves-phone/light-brown-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>


<!--MELLEM SKÆRM (TABLET)-->

<!--top-wave - TABLET-->
<div aria-hidden="true" class="d-none d-md-block d-lg-none" style="margin-top: -2px">
    <img src="waves-tablet/nav-wave.png" class="waves position-relative w-100" alt="">
</div>

<!--image header - TABLET-->
<div class="container-fluid d-none d-md-block d-lg-none p-0 position-relative" style="z-index: -1000">
    <img src="images/borger-aktiviteter-header-image-tablet.png" alt="header-image"
         class="img-fluid header-image-borger">
</div>

<!--green big wave - TABLET-->
<div aria-hidden="true" class="d-none d-md-block d-lg-none green-wavywave-frontpage" style="margin-top: -275px">
    <img src="waves-tablet/green-big-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--wave shape - TABLET-->
<div aria-hidden="true" class="text-end d-none d-md-block d-lg-none decoration-frontpage" style="margin-top: -210px">
    <img src="header-shapes/green-heart.png" class="decoration-frontpage-image  pe-4 m-0" alt="" style="width: 180px">
</div>

<!--top-info - TABLET-->
<div class="container-fluid d-none d-md-flex d-lg-none justify-content-center align-items-center bg-sage-green ps-4 pt-md-0 ps-md-0 pb-md-2 borger-forside-header"
     style="margin-top: 110px">

    <div class="row d-md-flex justify-content-center align-items-center">
        <div class="col-10 mt-0">
            <h1 class="cormorant  fw-bold header-text-cormorant text-center">Aktiviteter</h1>
        </div>
        <div class="col-10 mb-3">
            <div class="font-twelve font-sixteen px-5 inter  text-center">Som beboer på Vedelsbo forventes der
                at du deltager i hverdagens fælles opgaver i det omfang, du kan. Vi tilpasser sammen omfanget af din
                deltagelse, til dit funktionsniveau og ud fra dine individuelle behov.
            </div>
        </div>

    </div>
</div>

<!--green normal wave - TABLET-->
<div aria-hidden="true" class="d-none d-md-block d-lg-none green-wavywave-frontpage">
    <img src="waves-tablet/green-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--accordion TABLET: naturholdet, dyreholdet...-->
<div class="container d-none d-md-block d-lg-none mt-5 mb-0">

    <div class="row justify-content-center align-items-center px-3">

        <!--billede-->
        <div class="col-6 d-flex justify-content-center text-end pe-5 ps-0">

            <img src="images/alpacha.png"
                 alt=""
                 class="img-fluid"
                 style="width: 500px; height: auto">

        </div>

        <!--accordion-->
        <div class="col-6 d-flex justify-content-center pe-0">

            <div class="accordion w-100" id="accordionExample">

                <!--naturholdet-->
                <div class="accordion-item mb-3 border-0 overflow-hidden bg-light-green rounded-5">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed bg-light-green inter fw-bold font-twelve py-3"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#naturholdet"
                                aria-expanded="false"
                                aria-controls="naturholdet">

                            Naturholdet

                        </button>

                    </h2>

                    <div id="naturholdet" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light-green inter accordion-body-text">

                            <p class="mb-3">Tre dage ugentligt i sommerhalvåret og to dage ugentligt i vinterhalvåret
                                deltager
                                beboerne i praktiske opgaver på Vedelsbos udearealer som led i et relations- og
                                aktivitetsbaseret
                                tilbud.</p>

                            <p class="mb-3">Opgaverne kan omfatte oprydning, græsslåning, såning, fejning og øvrig
                                vedligeholdelse
                                af udearealer.</p>

                            <p class="mb-3">Indsatsen tilrettelægges med fokus på struktur, fællesskab og mestring i
                                hverdagen.</p>

                        </div>
                    </div>

                </div>

                <!--dyreholdet-->
                <div class="accordion-item mb-3 border-0 overflow-hidden bg-light-green rounded-5">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed bg-light-green inter fw-bold font-twelve"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#dyreholdet"
                                aria-expanded="false"
                                aria-controls="dyreholdet">

                            Dyreholdet

                        </button>

                    </h2>

                    <div id="dyreholdet" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light-green inter accordion-body-text">

                            <p class="mb-3">Vedelsbo har et dyrehold bestående af alpacaer, kat, undulater samt et
                                akvarium.</p>

                            <p class="mb-3">Dyreholdet indgår som en del af de pædagogiske og rehabiliterende
                                aktiviteter.</p>

                            <p class="mb-3">Opgaverne omfatter blandt andet fodring og rengøring, men der lægges
                                samtidig vægt på
                                samvær, nærvær og kontakt med dyrene som en del af den sociale og sansemæssige
                                støtte.</p>

                        </div>
                    </div>

                </div>

                <!--kreativt værksted-->
                <div class="accordion-item mb-3 border-0 overflow-hidden bg-light-green rounded-5">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed bg-light-green inter fw-bold font-twelve"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#creativeSpace"
                                aria-expanded="false"
                                aria-controls="creativeSpace">

                            Kreativt værksted

                        </button>

                    </h2>

                    <div id="creativeSpace" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light-green inter accordion-body-text">

                            <p class="mb-3">Der afholdes kreativt værksted hver tirsdag i sommerhalvåret samt tirsdag og
                                onsdag i
                                vinterhalvåret.</p>

                            <p class="mb-3">Her arbejdes der med kreative og praktiske aktiviteter ud fra beboernes
                                interesser og
                                ønsker.</p>

                            <p class="mb-3">Der er fokus på medindflydelse, motivation og mulighed for at afprøve
                                forskellige
                                kreative udtryk i et understøttende miljø.</p>

                        </div>
                    </div>

                </div>

                <!--væresteder-->
                <div class="accordion-item mb-3 border-0 overflow-hidden bg-light-green rounded-5">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed bg-light-green inter fw-bold font-twelve"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#places"
                                aria-expanded="false"
                                aria-controls="places">

                            Væresteder

                        </button>

                    </h2>

                    <div id="places" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light-green inter accordion-body-text">

                            <p class="mb-3">Der er mulighed for, at blive tilknyttet forskellige væresteder, hvor man
                                kan møde
                                ligestillede og på den måde udbygge sit sociale netværk.</p>

                            <p class="mb-3">På værestederne kan man deltage i mange forskellige aktiviteter såsom
                                læderværksted,
                                kaktiviteter, smykkeværksted og kreativt værksted.</p>

                        </div>
                    </div>

                </div>

                <!--udflugter-->
                <div class="accordion-item mb-3 border-0 overflow-hidden bg-light-green rounded-5">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed bg-light-green inter fw-bold font-twelve"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#udflugter"
                                aria-expanded="false"
                                aria-controls="udflugter">

                            Udflugter

                        </button>

                    </h2>

                    <div id="udflugter" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light-green inter accordion-body-text">

                            <p class="mb-3">I sommerhalvåret arrangeres løbende aktiviteter og ture “i det grønne”. Der
                                planlægges
                                desuden aktiviteter i nærområdet, særligt i sommerhalvåret.</p>

                            <p class="mb-3">Beboerne har medindflydelse på planlægningen af aktiviteter og
                                udflugter.</p>

                            <p class="mb-3">Der arrangeres både længere dagsture, eksempelvis til Tivoli eller Odense
                                Zoo, samt
                                kortere ture som f.eks. til Karrebæksminde med Sejlads Friheden.</p>

                            <p class="mb-3">Det kan være teltture med overnatning, vandreture med madpakker, kajakture,
                                motionsdag
                                m.v.</p>

                        </div>
                    </div>

                </div>

                <!--træning-->
                <div class="accordion-item mb-0 border-0 overflow-hidden bg-light-green rounded-5">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed bg-light-green inter fw-bold font-twelve"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#training"
                                aria-expanded="false"
                                aria-controls="training">

                            Træning

                        </button>

                    </h2>

                    <div id="training" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light-green inter accordion-body-text">

                            <p class="mb-3">Vedelsbo har fokus på fysisk aktivitet i hverdagen og arbejder ud fra en
                                motionspolitik.</p>

                            <p class="mb-3">Beboerne støttes i at opretholde en aktiv livsstil gennem individuelle og
                                fælles
                                træningsaktiviteter, herunder gåture og planlagt motion. Der kan tilbydes individuel
                                genoptræning
                                ved fysioterapeut i eget hjem eller i klinik.</p>

                            <p class="mb-3">Der er desuden ugentligt tilbud om yoga i huset samt mulighed for yoga med
                                alpacaer i
                                sommerperioden. Yderligere aktiviteter kan omfatte gåture, løb, cykling og roning efter
                                ønske og
                                behov.</p>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!--beige normal wave - TABLET-->
<div aria-hidden="true" class="d-none d-md-block d-lg-none bg-light-brown">
    <img src="waves-tablet/beige-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--read too section - TABLET-->
<div class="container-fluid mt-0 d-none d-md-flex d-lg-none justify-content-center align-items-center bg-light-brown">

    <div class="row justify-content-center text-center">

        <div class="col-12 mb-4 mt-3">
            <strong class="cormorant d-block read-to-header">
                Læs også
            </strong>
        </div>

        <div class="col-6 d-flex justify-content-end mb-3 ps-4 pe-2">
            <a href="borger-fritid.php"
               class="font-twelve font-sixteen bg-light-green text-off-black rounded-pill fw-bold border-0 py-2 px-2 inter d-inline-block text-decoration-none"
               style="width: 275px">
                Fritid
            </a>
        </div>

        <div class="col-6 d-flex justify-content-start mb-3 pe-4 ps-2">
            <a href="a-year.php"
               class="font-twelve font-sixteen bg-light-green text-off-black rounded-pill fw-bold border-0 py-2 px-2 inter d-inline-block text-decoration-none"
               style="width: 275px">
                Årets gang
            </a>
        </div>

        <div class="col-6 d-flex justify-content-end mb-3 ps-4 pe-2">
            <a href="meals.php"
               class="font-twelve font-sixteen bg-light-green text-off-black rounded-pill fw-bold border-0 py-2 px-2 inter d-inline-block text-decoration-none"
               style="width: 275px">
                Måltider
            </a>
        </div>

        <div class="col-6 d-flex justify-content-start mb-3 pe-4 ps-2">
            <a href="om-vedelsbo.php"
               class="font-twelve font-sixteen bg-light-green text-off-black rounded-pill fw-bold border-0 py-2 px-2 inter d-inline-block text-decoration-none"
               style="width: 275px">
                Om Vedelsbo
            </a>
        </div>

    </div>

</div>

<!--bottom-wave - TABLET-->
<div aria-hidden="true" class="d-none d-md-block d-lg-none green-wavywave-frontpage bg-dark-green">
    <img src="waves-tablet/light-brown-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>


<!--STOR SKÆRM (DESKTOP)-->

<!--top-wave - DESKTOP-->
<div aria-hidden="true" class="d-none d-lg-block" style="margin-top: -2px">
    <img src="waves-desktop/nav-wave.png" class="waves position-relative w-100" alt="">
</div>

<!--image header - DESKTOP-->
<div class="container-fluid d-none d-lg-block p-0 position-relative" style="z-index: -1000">
    <img src="images/borger-aktiviteter-header-image-desktop.png"
         alt="billede af fire personer der hver især laver noget kreativt" class="img-fluid header-image-borger">
</div>

<!--beige wave upside down - DESKTOP-->
<div aria-hidden="true" class="d-none d-lg-block green-wavywave-frontpage" style="margin-top: -80px">
    <img src="waves-desktop/beige-normal-wave-upside-down.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--wave shape - DESKTOP-->
<div aria-hidden="true" class="text-end d-none d-lg-block decoration-frontpage" style="margin-top: -100px">
    <img src="header-shapes/green-heart.png" class="decoration-frontpage-image  pe-4 m-0" alt="" style="width: 200px">
</div>

<!--top-info - DESKTOP-->
<div class="container-fluid d-none d-lg-block justify-content-center align-items-center ps-4 pt-md-0 ps-md-0 pb-md-2 borger-forside-header mt-3">

    <div class="row d-md-flex justify-content-center align-items-center">
        <div class="col-10 mt-0">
            <h1 class="cormorant mb-4  fw-bold header-text-cormorant text-center">Aktiviteter</h1>
        </div>
        <div class="col-10 mb-3">
            <div class="font-twelve font-sixteen px-5 inter  text-center mb-4">
                Som beboer på Vedelsbo deltager du i hverdagens fælles opgaver i det omfang, du kan, tilpasset dit
                funktionsniveau og dine behov. Praktiske opgaver som madlavning, opvask og oprydning er organiseret som
                ugentlige ”tjanser” i samarbejde med personalet.
            </div>
            <div class="font-twelve font-sixteen px-5 inter  text-center">
                Der tilbydes også aktiviteter som bål, gåture og ophold i naturen og ved dyrene med fokus på ro, nærvær
                og trivsel. Ved behov planlægges transport og personaledeltagelse, så alle kan deltage på lige vilkår.
            </div>
        </div>

    </div>
</div>

<!--beige normal wave - DESKTOP-->
<div aria-hidden="true" class="d-none d-lg-block bg-off-white green-wavywave-frontpage">
    <img src="waves-desktop/beige-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--dyrehold - DESKTOP-->
<div class="container-fluid d-none d-lg-flex justify-content-center align-items-center bg-off-white">
    <div class="row d-flex justify-content-center align-items-center pb-3">

        <div class="col-6 ps-5 pb-3">
            <img src="image-shapes/image-5.png" alt="billede af lysebrun alpacha" class="img-fluid"
                 style="width: 400px;">
        </div>

        <div class="col-6">
            <strong class="allura fw-normal d-block mb-3 mt-0 front-page-shape-header">
                Dyrehold
            </strong>

            <p class="inter px-0 mx-0 mb-3 font-sixteen">
                Vedelsbo har et dyrehold bestående af alpacaer, kat, undulater samt et akvarium. Dyreholdet indgår som
                en del af de pædagogiske og rehabiliterende aktiviteter.
            </p>
            <p class="inter px-0 mx-0 mb-0 font-sixteen">
                Opgaverne omfatter blandt andet fodring og rengøring, men der lægges samtidig vægt på samvær, nærvær og
                kontakt med dyrene som en del af den sociale og sansemæssige støtte.
            </p>


        </div>

    </div>
</div>

<!--off-white wave - DESKTOP-->
<div aria-hidden="true" class="d-none d-lg-block bg-sage-green green-wavywave-frontpage">
    <img src="waves-desktop/off-white-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--naturhold - DESKTOP-->
<div class="container-fluid d-none d-lg-flex justify-content-center align-items-center bg-sage-green">
    <div class="row d-flex justify-content-center align-items-center my-3">

        <div class="col-6 ps-5">
            <strong class="allura fw-normal d-block mb-3 mt-0 front-page-shape-header">
                Naturhold
            </strong>

            <p class="inter px-0 mx-0 mb-3 font-sixteen">
                Tre dage ugentligt i sommerhalvåret og to dage ugentligt i vinterhalvåret deltager beboerne i praktiske
                opgaver på Vedelsbos udearealer som led i et relations- og aktivitetsbaseret tilbud.
            </p>
            <p class="inter px-0 mx-0 mb-0 font-sixteen">
                Opgaverne kan omfatte oprydning, græsslåning, såning, fejning og øvrig vedligeholdelse af udearealer.
                Indsatsen tilrettelægges med fokus på struktur, fællesskab og mestring i hverdagen.
            </p>

        </div>

        <div class="col-6 ps-5 pb-0">
            <img src="image-shapes/image-4.png" alt="billede af blomster og et lille træ i en krukke" class="img-fluid"
                 style="width: 400px;">
        </div>


    </div>
</div>

<!--normal green wave - DESKTOP-->
<div aria-hidden="true" class="d-none d-lg-block bg-light-brown green-wavywave-frontpage">
    <img src="waves-desktop/normal-green-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--kreativt værksted - DESKTOP-->
<div class="container-fluid d-none d-lg-flex justify-content-center align-items-center bg-light-brown">
    <div class="row d-flex justify-content-center align-items-center pb-3">

        <div class="col-6 ps-5 pb-3">
            <img src="image-shapes/image-1.png" alt="billede af en person der er kreativ" class="img-fluid"
                 style="width: 400px;">
        </div>

        <div class="col-6">
            <strong class="allura fw-normal d-block mb-3 mt-0 front-page-shape-header">
                Kreativt værksted
            </strong>

            <p class="inter px-0 mx-0 mb-3 font-sixteen">
                Der afholdes kreativt værksted hver tirsdag i sommerhalvåret samt tirsdag og onsdag i vinterhalvåret.
            </p>
            <p class="inter px-0 mx-0 mb-0 font-sixteen">
                Her arbejdes der med kreative og praktiske aktiviteter ud fra beboernes interesser og ønsker. Der er
                fokus på medindflydelse, motivation og mulighed for at afprøve forskellige kreative udtryk i et
                understøttende miljø.
            </p>


        </div>

    </div>
</div>

<!--normal light brown wave - DESKTOP-->
<div aria-hidden="true" class="d-none d-lg-block green-wavywave-frontpage">
    <img src="waves-desktop/normal-light-brown-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--three images - DESKTOP-->
<div class=" container d-none d-md-none d-lg-block my-4 pb-5">
    <div class="row">
        <img src="decoration-image-shapes/image-17.png" class="col-4"
             alt="billede af personer der hver især laver noget kreativt">
        <img src="decoration-image-shapes/image-14.png" class="col-4" alt="billede af en der får en medalje om halsen">
        <img src="decoration-image-shapes/image-13.png" class="col-4" alt="billede af en mørkebrun alpaca">
    </div>
</div>

<!--forventninger til deltagelse - DESKTOP-->
<div class="container-fluid d-none d-lg-block justify-content-center align-items-center ps-4 pt-md-0 ps-md-0 pb-md-2 borger-forside-header mt-3">

    <div class="row d-md-flex justify-content-center align-items-center">
        <div class="col-10 mt-0">
            <h1 class="cormorant mb-4  fw-bold header-text-cormorant text-center">Forventninger til deltagelse i
                hverdagen </h1>
        </div>
        <div class="col-10 mb-0">
            <div class="font-twelve font-sixteen px-5 inter  text-center mb-0">
                Det er en forudsætning for at bo på Vedelsbo, at man har lyst til og mulighed for at indgå i fælles
                daglige gøremål i det omfang du kan. Der tages altid højde for dit funktionsniveau, og alle former for
                deltagelse tilpasses individuelt og respekteres.
            </div>
        </div>

    </div>
</div>

<!--beige normal wave - DESKTOP-->
<div aria-hidden="true" class="d-none d-lg-block bg-off-white green-wavywave-frontpage">
    <img src="waves-desktop/beige-normal-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--udflugter - DESKTOP-->
<div class="container-fluid d-none d-lg-flex justify-content-center align-items-center bg-off-white">
    <div class="row d-flex justify-content-center align-items-center pb-3">

        <div class="col-6 ps-5 pb-3">
            <img src="image-shapes/image-8.png" alt="to personer der sejler i kano" class="img-fluid"
                 style="width: 400px;">
        </div>

        <div class="col-6">
            <strong class="allura fw-normal d-block mb-3 mt-0 front-page-shape-header">
                Udflugter
            </strong>

            <p class="inter px-0 mx-0 mb-3 font-sixteen">
                I sommerhalvåret arrangeres løbende aktiviteter og ture “i det grønne”. Beboerne har medindflydelse på
                planlægningen af aktiviteter og udflugter. Der arrangeres både længere dagsture, eksempelvis til Tivoli
                eller Odense Zoo, samt kortere ture som f.eks. til Karrebæksminde med Sejlads Friheden.
            </p>
            <p class="inter px-0 mx-0 mb-0 font-sixteen">
                Der planlægges desuden aktiviteter i nærområdet, særligt i sommerhalvåret. Det kan være teltture med
                overnatning, vandreture med madpakker, kajakture, motionsdag m.v.
            </p>


        </div>

    </div>
</div>

<!--off-white wave - DESKTOP-->
<div aria-hidden="true" class="d-none d-lg-block bg-sage-green green-wavywave-frontpage">
    <img src="waves-desktop/off-white-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--træning og sundhed - DESKTOP-->
<div class="container-fluid d-none d-lg-flex justify-content-center align-items-center bg-sage-green">
    <div class="row d-flex justify-content-center align-items-center my-3">

        <div class="col-6 ps-5">
            <strong class="allura fw-normal d-block mb-3 mt-0 front-page-shape-header">
                Træning og sundhed
            </strong>

            <p class="inter px-0 mx-0 mb-3 font-sixteen">
                Vedelsbo har fokus på fysisk aktivitet i hverdagen og arbejder ud fra en motionspolitik. Beboerne
                støttes i at opretholde en aktiv livsstil gennem individuelle og fælles træningsaktiviteter, herunder
                gåture og planlagt motion. Der kan tilbydes individuel genoptræning ved fysioterapeut i eget hjem eller
                i klinik.
            </p>
            <p class="inter px-0 mx-0 mb-0 font-sixteen">
                Der er desuden ugentligt tilbud om yoga i huset samt mulighed for yoga med alpacaer i sommerperioden.
                Yderligere aktiviteter kan omfatte gåture, løb, cykling og roning efter ønske og behov.
            </p>

        </div>

        <div class="col-6 ps-5 pb-0">
            <img src="image-shapes/image-11.png" alt="billede af træningsmaskiner" class="img-fluid"
                 style="width: 400px;">
        </div>


    </div>
</div>

<!--normal green wave - DESKTOP-->
<div aria-hidden="true" class="d-none d-lg-block bg-light-green green-wavywave-frontpage">
    <img src="waves-desktop/normal-green-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--væresteder - DESKTOP-->
<div class="container-fluid d-none d-lg-flex justify-content-center align-items-center bg-light-green">
    <div class="row d-flex justify-content-center align-items-center pb-3">

        <div class="col-6 ps-5 pb-3">
            <img src="image-shapes/image-6.png" alt="billede indendørs af orangeriet" class="img-fluid"
                 style="width: 400px;">
        </div>

        <div class="col-6">
            <strong class="allura fw-normal d-block mb-3 mt-0 front-page-shape-header">
                Væresteder
            </strong>

            <p class="inter px-0 mx-0 mb-3 font-sixteen">
                Næstved kommunes tilbud udnyttes i forhold til hvad den enkelte beboer har af ønsker og behov.
                Eksempelvis arbejde i beskyttet værksteder (Center for sociale indsatser), frivilligt arbejde, fleksjob,
                undervisning mm.
            </p>
            <p class="inter px-0 mx-0 mb-0 font-sixteen">
                Ved arbejde i beskyttet værksteder kan man møde ligestillede og på den måde udbygge sit sociale netværk.
                På værestederne kan man deltage i mange forskellige aktiviteter såsom læderværksted, køkkenaktiviteter,
                smykkeværksted og kreativt værksted.
            </p>


        </div>

    </div>
</div>

<!--dark green normal wave - DESKTOP-->
<div aria-hidden="true" class="d-none d-lg-block bg-light-brown green-wavywave-frontpage">
    <img src="waves-desktop/normal-dark-green-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>

<!--read too section - DESKTOP-->
<div class="container-fluid mt-0 d-none d-md-none d-lg-block d-flex justify-content-center align-items-center bg-light-brown ">

    <div class="row justify-content-center text-center">
        <!--text-->
        <div class="col-12 mt-3">
            <strong class="cormorant d-block read-to-header">
                Læs også
            </strong>
        </div>
        <div class="col-12 mb-4 mt-4 ">
            <p class="px-5">
                Herunder kan du læse mere om hverdagen på Vedelsbo og få et indblik i de rammer,
                der danner grundlag for beboernes dagligdag. Du kan se, hvordan vi arbejder med omsorg,
                tryghed og fællesskab i praksis. Samtidig kan du få indblik i aktiviteter,
                værdier og livet blandt beboere og medarbejdere.</p>
        </div>
        <!--CTA-->
        <div class="col-6 d-flex justify-content-center">
            <div class="col-6 d-flex justify-content-center mb-3 pe-4 ps-2 g-3">
                <a href="borger-fritid.php"
                   class="font-sixteen bg-light-green text-off-black rounded-pill fw-bold border-0 py-2 px-2 inter d-inline-block text-decoration-none"
                   style="width: 275px">
                    Fritid
                </a>
            </div>

            <div class="col-6 d-flex justify-content-center mb-3 pe-4 ps-2 g-3">
                <a href="a-year.php"
                   class="font-sixteen bg-light-green text-off-black rounded-pill fw-bold border-0 py-2 px-2 inter d-inline-block text-decoration-none"
                   style="width: 275px">
                    Årets gang
                </a>
            </div>

            <div class="col-6 d-flex justify-content-center mb-3 pe-4 ps-2 g-3">
                <a href="meals.php"
                   class="font-sixteen bg-light-green text-off-black rounded-pill fw-bold border-0 py-2 px-2 inter d-inline-block text-decoration-none"
                   style="width: 275px">
                    Måltider
                </a>
            </div>

            <div class="col-6 d-flex justify-content-center mb-3 pe-4 ps-2 g-3">
                <a href="om-vedelsbo.php"
                   class="font-sixteen bg-light-green text-off-black rounded-pill fw-bold border-0 py-2 px-2 inter d-inline-block text-decoration-none"
                   style="width: 275px">
                    Om Vedelsbo
                </a>
            </div>
        </div>
    </div>

</div>

<!--bottom wave - DESKTOP-->
<div aria-hidden="true" class="d-none d-lg-block bg-dark-green green-wavywave-frontpage">
    <img src="waves-desktop/normal-light-brown-wave.png" class="waves img-fluid  p-0 m-0" alt="">
</div>


<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>