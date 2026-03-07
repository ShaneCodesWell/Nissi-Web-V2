import "./bootstrap";

// ── CURSOR ──
const cur = document.getElementById("cur");
const cur2 = document.getElementById("cur2");
let mx = 0,
    my = 0,
    rx = 0,
    ry = 0;
document.addEventListener("mousemove", (e) => {
    mx = e.clientX;
    my = e.clientY;
});
(function tick() {
    cur.style.left = mx + "px";
    cur.style.top = my + "px";
    rx += (mx - rx) * 0.1;
    ry += (my - ry) * 0.1;
    cur2.style.left = rx + "px";
    cur2.style.top = ry + "px";
    requestAnimationFrame(tick);
})();
document
    .querySelectorAll(
        "a,button,.service-card,.case-row,.step-row,.metric,.testi-box",
    )
    .forEach((el) => {
        el.addEventListener("mouseenter", () => {
            cur.style.width = "18px";
            cur.style.height = "18px";
            cur2.style.width = "52px";
            cur2.style.height = "52px";
        });
        el.addEventListener("mouseleave", () => {
            cur.style.width = "8px";
            cur.style.height = "8px";
            cur2.style.width = "32px";
            cur2.style.height = "32px";
        });
    });

// ── NAV SCROLL ──
const nav = document.getElementById("nav");
window.addEventListener("scroll", () => {
    nav.classList.toggle("scrolled", window.scrollY > 60);
});

// ── REVEAL ──
const io = new IntersectionObserver(
    (entries) => {
        entries.forEach((e) => {
            if (e.isIntersecting) e.target.classList.add("visible");
        });
    },
    { threshold: 0.1, rootMargin: "0px 0px -40px 0px" },
);
document.querySelectorAll(".reveal").forEach((el) => io.observe(el));

// ── FILTER TABS ──
const filterBtns = document.querySelectorAll(".filter-btn");
const products = document.querySelectorAll("[data-category]");

filterBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        filterBtns.forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");
        const filter = btn.dataset.filter;
        products.forEach((p) => {
            if (filter === "all" || p.dataset.category === filter) {
                p.style.display = "";
                p.style.opacity = "1";
            } else {
                p.style.display = "none";
            }
        });
    });
});
