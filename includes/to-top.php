

<!--Tilbage til toppen knap-->
<button
    type="button"
    class="btn bg-light-green text-off-black rounded-circle position-fixed bottom-0 end-0 m-4 d-flex justify-content-center align-items-center"
    onclick="window.scrollTo({ top: 0, behavior: 'smooth' });"
    style="width: 35px; height: 35px; z-index: 9999;">

    <i class="fa-solid fa-angle-up"></i>

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


