const hamburger = document.getElementById("navHamburger");
const drawer = document.getElementById("navDrawer");
const backdrop = document.getElementById("navBackdrop");
const closeBtn = document.getElementById("navClose");

function openMenu() {
    drawer.classList.add("open");
    backdrop.classList.add("open");
    document.body.style.overflow = "hidden";
}

function closeMenu() {
    drawer.classList.remove("open");
    backdrop.classList.remove("open");
    document.body.style.overflow = "";
}

hamburger.addEventListener("click", openMenu);
closeBtn.addEventListener("click", closeMenu);
backdrop.addEventListener("click", closeMenu); // click outside to close

document
    .querySelectorAll(".nav-drawer-links a, .nav-drawer-btn")
    .forEach((link) => {
        link.addEventListener("click", closeMenu);
    });
