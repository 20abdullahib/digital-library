function filterBy(t) {
    document.querySelectorAll(".filter-items").forEach(function (o) {
        var e,
            n = o.getAttribute("data-department"),
            r = o.getAttribute("data-category");
        [
            n,
            r,
            o.getAttribute("data-professor"),
            "Allcategory",
            "Alldepartment",
            "Allprofessor",
        ].includes(t)
            ? (o.style.display = "block")
            : (o.style.display = "none");
    });
}
$(document).ready(function () {
    $(".category-dropdown").on("click", function () {
        $(".dropdown-content", $(this).parent()).toggle(),
            $(".dropdown-content")
                .not($(this).siblings(".dropdown-content"))
                .hide();
    }),
        $(".dropdown-content a").on("click", function () {});
});
