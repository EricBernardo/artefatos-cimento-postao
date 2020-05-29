function setIframeSrc() {
    const map = document.getElementById("map");
    if (map) {
        var ifrm = document.createElement("iframe");
        ifrm.setAttribute("src", map.attributes["data-src"].value);
        ifrm.setAttribute("frameborder", "0");
        ifrm.setAttribute("aria-hidden", "false");
        ifrm.setAttribute("tabindex", "0");
        map.appendChild(ifrm);
    }
}

window.onload = function() {
    setTimeout(setIframeSrc, 1000);
};
