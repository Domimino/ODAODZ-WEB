let currentSlide = 0;
const slides = document.querySelectorAll('.aktuality .slide');
const totalSlides = slides.length;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.transform = `translateX(-${index * 100}%)`;
    });
}

setInterval(() => {
    currentSlide = (currentSlide + 1) % totalSlides;
    showSlide(currentSlide);
}, 5000);


document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".toggle-button");

    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            const hiddenContent = button.nextElementSibling;
            if (hiddenContent.classList.contains("hidden")) {
                hiddenContent.classList.remove("hidden"); // Zobraz text
                button.textContent = "Čtěte méně"; // Změň text tlačítka
            } else {
                hiddenContent.classList.add("hidden"); // Skryj text
                button.textContent = "Čtěte více"; // Změň text tlačítka zpět
            }
        });
    });
});


document.addEventListener("DOMContentLoaded", () => {
    const contactLinks = document.querySelectorAll('a[href="#contact"]');

    contactLinks.forEach((link) => {
        link.addEventListener("click", (e) => {
            e.preventDefault(); // Zabrání standardní akci odkazu
            const currentPath = window.location.pathname;
            const isOnIndex = currentPath.includes("index.html") || currentPath === "/";

            if (isOnIndex) {
                // Plynulý scroll na sekci Kontakt
                document.getElementById("contact").scrollIntoView({ behavior: "smooth" });
            } else {
                // Přesměrování na index.html s kotvou #contact
                window.location.href = "index.html#contact";
            }
        });
    });
});
