
$(document).ready(function () {
    // loading effect
    setTimeout(function () {
        $(".loader-container").addClass("d-none");
        $("#mainContainer").removeClass("d-none").addClass("fadeIn");

        setTimeout(function () {
            $("#mainContainer").removeClass("fadeIn");
        }, 1000);
    }, 3500);


});