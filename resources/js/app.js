import "./bootstrap";

// Scroll Reveal Animation
function reveal() {
    var reveals = document.querySelectorAll(".reveal");
    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 100;
        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        }
    }
}
window.addEventListener("scroll", reveal);
reveal(); // Initial check

// Stats Counter Animation
const counters = document.querySelectorAll(".counter");
let hasAnimated = false;

const animateCounters = () => {
    if (hasAnimated) return;

    const firstCounter = counters[0];
    if (!firstCounter) return;

    const rect = firstCounter.getBoundingClientRect();
    const isVisible = rect.top < window.innerHeight && rect.bottom >= 0;

    if (isVisible) {
        hasAnimated = true;
        counters.forEach((counter) => {
            const target = +counter.getAttribute("data-target");
            const increment = target / 100;

            const updateCounter = () => {
                const c = +counter.innerText;
                if (c < target) {
                    counter.innerText = Math.ceil(c + increment);
                    setTimeout(updateCounter, 20);
                } else {
                    counter.innerText = target;
                }
            };
            updateCounter();
        });
    }
};

window.addEventListener("scroll", animateCounters);
animateCounters(); // Initial check
