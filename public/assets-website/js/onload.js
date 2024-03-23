window.addEventListener("load", function () {
    setTimeout(function () {
        document.querySelectorAll("#content").forEach(function (e) {
            e.style.display = "block";
        }),
            (document.querySelector("#loading").style.display = "none");
    }, 4e3);
});
