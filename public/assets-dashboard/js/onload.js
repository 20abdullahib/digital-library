// loading.js

window.addEventListener("load", function () {
    setTimeout(function () {
    var elementsToShow = document.querySelectorAll("#content");
    elementsToShow.forEach(function (element) {
        element.style.display = "block";
    });

    
        var loader = document.querySelector("#loading");
        loader.style.display = "none";
    }, 4000); 
});
