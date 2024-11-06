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

// Open WhatsApp link in a new tab on click
$('.float').click(function () {
    window.open("https://wa.me/94751887145", "_blank");
    return false;
});



