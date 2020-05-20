function setIframeSrc() {
    const iframe_google_map = document.getElementById('iframe-google-map');
    iframe_google_map.src = iframe_google_map.attributes['data-src'].value;
}

setTimeout(setIframeSrc, 1000);
