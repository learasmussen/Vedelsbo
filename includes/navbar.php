<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Vedelsbo</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="robots" content="noindex, nofollow">
    <link href="/css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/4e7ccd0dde.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<!-- navbar til lille -->
<nav class="navbar navbar-custom px-2 bg-off-white d-md-none d-lg-none">
    <div class="container-fluid">
        <!-- Venstre kolonne -->
        <div class="col d-flex justify-content-start align-items-center">

            <a href="/index.php" class="d-inline-block mt-md-2">
                <img src="logo/logo.png"
                     alt="Logo"
                     class="logo"
                     style="width: 40px; height: auto;">
            </a>

        </div>

        <!-- Midter kolonne -->
        <div class="col text-center mt-md-2">
            <div class="center-text">
                <img src="logo/logo_text.png" alt="Vedelsbo logo" style="width: 170px; height: auto;">
            </div>
        </div>

        <!-- Højre kolonne -->
        <div class="col d-flex justify-content-end">
            <!-- Burger knap -->
            <button
                    class="navbar-toggler border-0 shadow-none"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#tabletMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- Offcanvas menu -->
        <div
                class="offcanvas offcanvas-end"
                tabindex="-1"
                id="tabletMenu">

            <!--background logo-->
            <div aria-hidden="true" class="d-flex justify-content-end">
                <img src="/logo/404-logo.png" class="waves position-absolute end-0 bottom-0 mt-5 pt-3" style="width: 250px" alt="">
            </div>

            <div class="offcanvas-header bg-off-white">
                <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="offcanvas">
                </button>
            </div>

            <div class="offcanvas-body bg-off-white">
                <ul class="list-unstyled mx-4">

                    <!--Borger nav links-->
                    <li class="mb-3">
                        <a href="/borger-forside.php" class="inter fw-bold text-off-black font-fourteen">Borger</a>

                        <ul class="list-unstyled ms-3">
                            <li><a href="/borger-aktiviteter.php" class="inter text-off-black font-fourteen">Aktiviteter</a></li>
                            <li><a href="/borger-fritid.php" class="inter text-off-black font-fourteen">Fritid</a></li>
                            <li><a href="/a-year.php" class="inter text-off-black font-fourteen">Årets gang</a></li>
                            <li><a href="/meals.php" class="inter text-off-black font-fourteen">Måltider</a></li>
                            <li><a href="/en-beboers-tanker.php" class="inter text-off-black font-fourteen">En beboers tanker</a></li>
                        </ul>
                    </li>

                    <!-- Sagsbehandler nav links -->
                    <li class="mb-3">
                        <a href="/sagsbehandler-forside.php" class="inter fw-bold text-off-black font-fourteen">Sagsbehandler</a>

                        <ul class="list-unstyled ms-3">
                            <li><a href="/sagsbehandler-values.php" class="inter text-off-black font-fourteen">Værdier</a></li>
                            <li><a href="/sagsbehandler-maalgruppe.php" class="inter text-off-black font-fourteen">Målgruppe</a></li>
                            <li><a href="/sagsbehandler-visitering.php" class="inter text-off-black font-fourteen">Visitering</a></li>
                            <li><a href="/sagsbehandler-praktiske-oplysninger.php" class="inter text-off-black font-fourteen">Praktiske oplysninger</a></li>
                            <li><a href="/sagsbehandler-tilsynsrapporter.php" class="inter text-off-black font-fourteen">Tilsynsrapporter</a></li>
                        </ul>
                    </li>

                    <!-- Arbejdsmetoder nav links -->
                    <li class="mb-3">
                        <a href="/arbejdsmetoder-forside.php" class="inter fw-bold text-off-black font-fourteen">Arbejdsmetoder</a>

                        <ul class="list-unstyled ms-3">
                            <li><a href="/arbejdsmetoder-forside.php#terapi-sm" class="inter text-off-black font-fourteen">Terapi</a></li>
                            <li><a href="/arbejdsmetoder-forside.php#kontaktperson-sm" class="inter text-off-black font-fourteen">Kontaktperson</a></li>
                            <li><a href="/arbejdsmetoder-forside.php#maalsaetning-sm" class="inter text-off-black font-fourteen">Målsætning</a></li>
                            <li><a href="/arbejdsmetoder-forside.php#miljoterapi-sm" class="inter text-off-black font-fourteen">Miljøterapi</a></li>
                            <li><a href="/arbejdsmetoder-forside.php#coaching-sm" class="inter text-off-black font-fourteen">Coaching</a></li>
                        </ul>
                    </li>

                    <!-- Om Veldesbo nav links -->
                    <li>
                        <a href="/om-vedelsbo.php" class="inter fw-bold text-off-black font-fourteen">Om Vedelsbo</a>

                        <ul class="list-unstyled ms-3">
                            <li><a href="/om-vedelsbo.php#nav-beskrivelse-sm" class="inter text-off-black font-fourteen">Beskrivelse</a></li>
                            <li><a href="/om-vedelsbo.php#nav-hensynogregler-sm" class="inter text-off-black font-fourteen">Hensyn og regler</a></li>
                            <li><a href="/om-vedelsbo.php#nav-kontakt-sm" class="inter text-off-black font-fourteen">Kontakt</a></li>
                            <li><a href="/vedelsbo-personale.php" class="inter text-off-black font-fourteen">Personale</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<!-- navbar mellem skærm -->
<nav class="navbar navbar-custom px-2 bg-off-white d-none d-md-block d-lg-none">
    <div class="container-fluid">
        <!-- Venstre kolonne -->
        <div class="col d-flex justify-content-start align-items-center">

            <a href="/index.php" class="d-inline-block mt-md-2">
                <img src="logo/logo.png"
                     alt="Logo"
                     class="logo"
                     style="width: 40px; height: auto;">
            </a>

        </div>

        <!-- Midter kolonne -->
        <div class="col text-center mt-md-2">
            <div class="center-text">
                <img src="logo/logo_text.png" alt="Vedelsbo logo" style="width: 170px; height: auto;">
            </div>
        </div>

        <!-- Højre kolonne -->
        <div class="col d-flex justify-content-end">
            <!-- Burger knap -->
            <button
                    class="navbar-toggler border-0 shadow-none"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#mobileMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- Offcanvas menu -->
        <div
                class="offcanvas offcanvas-end"
                tabindex="-1"
                id="mobileMenu">

            <!--background logo-->
            <div aria-hidden="true" class="d-flex justify-content-end">
                <img src="/logo/404-logo.png" class="waves position-absolute end-0 bottom-0 mt-5 pt-3" style="width: 250px" alt="">
            </div>

            <div class="offcanvas-header bg-off-white">
                <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="offcanvas">
                </button>
            </div>

            <div class="offcanvas-body bg-off-white">
                <ul class="list-unstyled mx-4">

                    <!--Borger nav links-->
                    <li class="mb-3">
                        <a href="/borger-forside.php" class="inter fw-bold text-off-black font-fourteen">Borger</a>

                        <ul class="list-unstyled ms-3">
                            <li><a href="/borger-aktiviteter.php" class="inter text-off-black font-fourteen">Aktiviteter</a></li>
                            <li><a href="/borger-fritid.php" class="inter text-off-black font-fourteen">Fritid</a></li>
                            <li><a href="/a-year.php" class="inter text-off-black font-fourteen">Årets gang</a></li>
                            <li><a href="/meals.php" class="inter text-off-black font-fourteen">Måltider</a></li>
                            <li><a href="/en-beboers-tanker.php" class="inter text-off-black font-fourteen">En beboers tanker</a></li>
                        </ul>
                    </li>

                    <!-- Sagsbehandler nav links -->
                    <li class="mb-3">
                        <a href="/sagsbehandler-forside.php" class="inter fw-bold text-off-black font-fourteen">Sagsbehandler</a>

                        <ul class="list-unstyled ms-3">
                            <li><a href="/sagsbehandler-values.php" class="inter text-off-black font-fourteen">Værdier</a></li>
                            <li><a href="/sagsbehandler-maalgruppe.php" class="inter text-off-black font-fourteen">Målgruppe</a></li>
                            <li><a href="/sagsbehandler-visitering.php" class="inter text-off-black font-fourteen">Visitering</a></li>
                            <li><a href="/sagsbehandler-praktiske-oplysninger.php" class="inter text-off-black font-fourteen">Praktiske oplysninger</a></li>
                            <li><a href="/sagsbehandler-tilsynsrapporter.php" class="inter text-off-black font-fourteen">Tilsynsrapporter</a></li>
                        </ul>
                    </li>

                    <!-- Arbejdsmetoder nav links -->
                    <li class="mb-3">
                        <a href="/arbejdsmetoder-forside.php" class="inter fw-bold text-off-black font-fourteen">Arbejdsmetoder</a>

                        <ul class="list-unstyled ms-3">
                            <li><a href="/arbejdsmetoder-forside.php#terapi-md" class="inter text-off-black font-fourteen">Terapi</a></li>
                            <li><a href="/arbejdsmetoder-forside.php#kontaktperson-md" class="inter text-off-black font-fourteen">Kontaktperson</a></li>
                            <li><a href="/arbejdsmetoder-forside.php#maalsaetning-md" class="inter text-off-black font-fourteen">Målsætning</a></li>
                            <li><a href="/arbejdsmetoder-forside.php#miljoterapi-md" class="inter text-off-black font-fourteen">Miljøterapi</a></li>
                            <li><a href="/arbejdsmetoder-forside.php#coaching-md" class="inter text-off-black font-fourteen">Coaching</a></li>
                        </ul>
                    </li>

                    <!-- Om Veldesbo nav links -->
                    <li>
                        <a href="/om-vedelsbo.php" class="inter fw-bold text-off-black font-fourteen">Om Vedelsbo</a>

                        <ul class="list-unstyled ms-3">
                            <li><a href="/om-vedelsbo.php#nav-beskrivelse-md" class="inter text-off-black font-fourteen">Beskrivelse</a></li>
                            <li><a href="/om-vedelsbo.php#nav-hensynogregler-md" class="inter text-off-black font-fourteen">Hensyn og regler</a></li>
                            <li><a href="/om-vedelsbo.php#nav-kontakt-md" class="inter text-off-black font-fourteen">Kontakt</a></li>
                            <li><a href="/vedelsbo-personale.php" class="inter text-off-black font-fourteen">Personale</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>



<!-- navbar til stor skærm -->
<nav class="py-3 bg-off-white d-none d-lg-block">
    <div class="container">
        <div class="row justify-content-between align-items-center text-center">

            <a class="col-2 px-0" href="index.php">
                <img src="/logo/logo_stort.png"
                     alt="Vedelsbos logo"
                     style="width: 150px">
            </a>

            <!-- borger -->
            <div class="col-2 px-0">

                <div class="btn-group">

                    <a href="borger-forside.php"
                       class="btn bg-transparent border-0 text-off-black font-fourteen inter text-decoration-none">

                        Borger

                    </a>

                    <button type="button"
                            class="btn bg-transparent border-0 text-off-black dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            data-bs-reference="parent">

                        <span class="visually-hidden">Toggle Dropdown</span>

                    </button>

                    <ul class="dropdown-menu bg-light-green inter font-fourteen text-off-black">
                        <li><a href="borger-aktiviteter.php" class="dropdown-item">Aktiviteter</a></li>
                        <li><a href="borger-fritid.php" class="dropdown-item">Fritid</a></li>
                        <li><a href="a-year.php" class="dropdown-item">Årets gang</a></li>
                        <li><a href="meals.php" class="dropdown-item">Måltider</a></li>
                        <li><a href="en-beboers-tanker.php" class="dropdown-item">En beoboers tanker</a></li>
                    </ul>

                </div>

            </div>

            <!-- sagsbehandler -->
            <div class="col-2 px-0">

                <div class="btn-group">

                    <a href="sagsbehandler-forside.php"
                       class="btn bg-transparent border-0 text-off-black font-fourteen inter text-decoration-none">

                        Sagsbehandler

                    </a>

                    <button type="button"
                            class="btn bg-transparent border-0 text-off-black dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            data-bs-reference="parent">

                        <span class="visually-hidden">Toggle Dropdown</span>

                    </button>

                    <ul class="dropdown-menu bg-light-green inter font-fourteen text-off-black">
                        <li><a href="sagsbehandler-values.php" class="dropdown-item">Værdier</a></li>
                        <li><a href="sagsbehandler-maalgruppe.php" class="dropdown-item">Målgruppe</a></li>
                        <li><a href="sagsbehandler-visitering.php" class="dropdown-item">Visitering</a></li>
                        <li><a href="sagsbehandler-praktiske-oplysninger.php" class="dropdown-item">Praktiske oplysninger</a></li>
                        <li><a href="sagsbehandler-tilsynsrapporter.php" class="dropdown-item">Tilsynsrapporter</a></li>
                    </ul>

                </div>

            </div>

            <!-- arbejdsmetoder -->
            <div class="col-2 px-0">

                <div class="btn-group">

                    <a href="arbejdsmetoder-forside.php"
                       class="btn bg-transparent border-0 text-off-black font-fourteen inter text-decoration-none">

                        Arbejdsmetoder

                    </a>

                    <button type="button"
                            class="btn bg-transparent border-0 text-off-black dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            data-bs-reference="parent">

                        <span class="visually-hidden">Toggle Dropdown</span>

                    </button>

                    <ul class="dropdown-menu bg-light-green inter font-fourteen text-off-black">
                        <li><a href="arbejdsmetoder-forside.php#terapi-lg" class="dropdown-item">Terapi</a></li>
                        <li><a href="arbejdsmetoder-forside.php#kontaktperson-lg" class="dropdown-item">Kontaktperson</a></li>
                        <li><a href="arbejdsmetoder-forside.php#maalsaetning-lg" class="dropdown-item">Målsætning</a></li>
                        <li><a href="arbejdsmetoder-forside.php#miljoterapi-lg" class="dropdown-item">Miljøterapi</a></li>
                        <li><a href="arbejdsmetoder-forside.php#coaching-lg" class="dropdown-item">Coaching</a></li>
                    </ul>

                </div>

            </div>

            <!-- om vedelsbo -->
            <div class="col-2 px-0">

                <div class="btn-group">

                    <a href="om-vedelsbo.php"
                       class="btn bg-transparent border-0 text-off-black font-fourteen inter text-decoration-none">

                        Om Vedelsbo

                    </a>

                    <button type="button"
                            class="btn bg-transparent border-0 text-off-black dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            data-bs-reference="parent">

                        <span class="visually-hidden">Toggle Dropdown</span>

                    </button>

                    <ul class="dropdown-menu bg-light-green inter font-fourteen text-off-black">
                        <li><a href="om-vedelsbo.php#nav-beskrivelse-lg" class="dropdown-item">Beskrivelse</a></li>
                        <li><a href="om-vedelsbo.php#nav-hensyn-og-regler-lg" class="dropdown-item">Hensyn & regler</a></li>
                        <li><a href="om-vedelsbo.php#nav-kontakt-lg" class="dropdown-item">Kontakt</a></li>
                        <li><a href="vedelsbo-personale.php" class="dropdown-item">Personale</a></li>
                    </ul>

                </div>

            </div>

            <!-- kontakt os -->
            <div class="col-2 px-0">

                <a href="om-vedelsbo.php#nav-kontakt-lg"
                   type="button"
                   class="btn rounded-pill bg-dark-green inter px-4 text-off-white font-fourteen">

                    Kontakt os

                </a>

            </div>

        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>