// Show button when scrolled down
window.addEventListener("scroll", function () {
    const backToTopButton = document.querySelector(".back-to-top");
    if (window.scrollY > 300) {
        backToTopButton.style.display = "block";
    } else {
        backToTopButton.style.display = "none";
    }
});


// Show whatsapp button when scrolled down


window.addEventListener("scroll", function () {
    const backToTopButton = document.querySelector(".float");
    if (window.scrollY > 300) {
        backToTopButton.style.display = "block";
    } else {
        backToTopButton.style.display = "none";
    }
});



// Page relod when the click on navbar logo OR name

function refreshPage() {
    window.location.reload();

}


