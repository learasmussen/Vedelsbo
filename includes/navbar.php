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
<!-- navbar til lille og mellem skærm -->
<nav class="navbar navbar-custom px-2 bg-off-white d-lg-none">
    <div class="container-fluid">
        <!-- Venstre kolonne -->
        <div class="col d-flex justify-content-start align-items-center"><img src="/logo/logo.png" alt="Logo"
                                                                              class="logo"
                                                                              style="width: 25px; height: auto;">
        </div>

        <!-- Midter kolonne -->
        <div class="col text-center">
            <div class="center-text">
                <img src="/logo/logo_text.png" alt="Vedelsbo logo" style="width: 130px; height: auto;">
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
                        <a href="#" class="inter fw-bold text-off-black font-fourteen">Borger</a>

                        <ul class="list-unstyled ms-3">
                            <li><a href="#" class="inter text-off-black font-fourteen">Aktiviteter</a></li>
                            <li><a href="#" class="inter text-off-black font-fourteen">Fritid</a></li>
                            <li><a href="#" class="inter text-off-black font-fourteen">Årets gang</a></li>
                            <li><a href="#" class="inter text-off-black font-fourteen">Måltider</a></li>
                            <li><a href="#" class="inter text-off-black font-fourteen">En beboers tanker</a></li>
                        </ul>
                    </li>

                    <!-- Sagsbehandler nav links -->
                    <li class="mb-3">
                        <a href="#" class="inter fw-bold text-off-black font-fourteen">Sagsbehandler</a>

                        <ul class="list-unstyled ms-3">
                            <li><a href="#" class="inter text-off-black font-fourteen">Værdier</a></li>
                            <li><a href="#" class="inter text-off-black font-fourteen">Målgruppe</a></li>
                            <li><a href="#" class="inter text-off-black font-fourteen">Visitering</a></li>
                            <li><a href="#" class="inter text-off-black font-fourteen">Praktiske oplysninger</a></li>
                            <li><a href="#" class="inter text-off-black font-fourteen">Tilsynsrapporter</a></li>
                        </ul>
                    </li>

                    <!-- Arbejdsmetoder nav links -->
                    <li class="mb-3">
                        <a href="#" class="inter fw-bold text-off-black font-fourteen">Arbejdsmetoder</a>

                        <ul class="list-unstyled ms-3">
                            <li><a href="#" class="inter text-off-black font-fourteen">Terapi</a></li>
                            <li><a href="#" class="inter text-off-black font-fourteen">Kontaktperson</a></li>
                            <li><a href="#" class="inter text-off-black font-fourteen">Målsætning</a></li>
                            <li><a href="#" class="inter text-off-black font-fourteen">Miljøterapi</a></li>
                            <li><a href="#" class="inter text-off-black font-fourteen">Coaching</a></li>
                        </ul>
                    </li>

                    <!-- Om Veldesbo nav links -->
                    <li>
                        <a href="#" class="inter fw-bold text-off-black font-fourteen">Om Vedelsbo</a>

                        <ul class="list-unstyled ms-3">
                            <li><a href="#" class="inter text-off-black font-fourteen">Beskrivelse</a></li>
                            <li><a href="#" class="inter text-off-black font-fourteen">Personale</a></li>
                            <li><a href="#" class="inter text-off-black font-fourteen">Hensyn og regler</a></li>
                            <li><a href="#" class="inter text-off-black font-fourteen">Kontakt</a></li>
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

            <div class="col-auto">
                <img src="/logo/logo_stort.png"
                     alt="Vedelsbos logo"
                     style="width: 180px">
            </div>

            <div class="col-auto">
                <a href="#" class="inter text-off-black font-fourteen">Borger</a>
            </div>

            <div class="col-auto">
                <a href="#" class="inter text-off-black font-fourteen">Sagsbehandler</a>
            </div>

            <div class="col-auto">
                <a href="#" class="inter text-off-black font-fourteen">Arbejdsmetoder</a>
            </div>

            <div class="col-auto">
                <a href="#" class="inter text-off-black font-fourteen">Om Vedelsbo</a>
            </div>

            <div class="col-auto">
                <button type="button"
                        class="btn rounded-pill bg-dark-green inter px-4 text-off-white font-fourteen">
                    Kontakt os
                </button>
            </div>

        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>