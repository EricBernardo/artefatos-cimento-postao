document.querySelectorAll(".faq button[aria-expanded]").forEach((el) => {
    el.addEventListener("click", () => {
        const expanded = el.getAttribute("aria-expanded");
        el.setAttribute(
            "aria-expanded",
            expanded === "false" ? "true" : "false"
        );
    });
});
