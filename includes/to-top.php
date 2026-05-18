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

<body>

<!--Tilbage til toppen knap-->
<button
    type="button"
    class="btn bg-light-green text-off-black rounded-circle position-fixed bottom-0 end-0 m-4 d-flex justify-content-center align-items-center"
    onclick="window.scrollTo({ top: 0, behavior: 'smooth' });"
    style="width: 35px; height: 35px; z-index: 9999;">

    <i class="fa-solid fa-arrow-up"></i>

</button>

<script>
    // finder knappen
    const backToTopButton = document.getElementById("backToTop");

    // viser/skjuler knappen ved scroll
    window.addEventListener("scroll", function () {

        if (window.scrollY > 300) {
            backToTopButton.style.display = "block";
        } else {
            backToTopButton.style.display = "none";
        }

    });

    // scroll tilbage til toppen
    backToTopButton.addEventListener("click", function () {

        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });

    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
