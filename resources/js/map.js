function setIframeSrc() {

    const s = "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13866.287006390055!2d-51.280084!3d-29.674199!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9b6c8edd0250cee3!2sArtefatos%20de%20Cimento%20Port%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1588943389007!5m2!1spt-BR!2sbr";

    const iframe_google_map = document.getElementById('iframe-google-map');
    iframe_google_map.src = s;

  }

  setTimeout(setIframeSrc, 1000);