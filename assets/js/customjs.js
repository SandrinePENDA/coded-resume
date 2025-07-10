//Surcharger le style de l'accordéon Bootstrap
document.addEventListener("DOMContentLoaded", function () {
    const accordionNotOpen = document.querySelectorAll("h2 button.accordion-button:not(.collapsed)");

    accordionNotOpen.forEach(each_header => {
        each_header.style.backgroundColor = "transparent";
    });
})

