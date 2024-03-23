function makeEditable(e) {
    let l = e.querySelector("span"),
        n = e.querySelector("input");
    "none" === l.style.display
        ? ((l.style.display = "inline"), (n.style.display = "none"))
        : ((l.style.display = "none"), (n.style.display = "inline"), n.focus());
}
