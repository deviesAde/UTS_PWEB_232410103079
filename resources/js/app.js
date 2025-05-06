import './bootstrap';
document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const sidebarToggle = document.getElementById("sidebarToggle");
    const sidebarOverlay = document.getElementById("sidebarOverlay");

    sidebarToggle.addEventListener("click", function () {
        sidebar.classList.toggle("-translate-x-full");
        sidebarOverlay.classList.toggle("hidden");
    });

    sidebarOverlay.addEventListener("click", function () {
        sidebar.classList.add("-translate-x-full");
        sidebarOverlay.classList.add("hidden");
    });

    const observer = new MutationObserver(function (mutations) {
        mutations.forEach(function (mutation) {
            if (!sidebar.classList.contains("-translate-x-full")) {
                sidebarToggle.classList.add("hidden");
            } else {
                sidebarToggle.classList.remove("hidden");
            }
        });
    });

    observer.observe(sidebar, {
        attributes: true,
        attributeFilter: ["class"],
    });
}); 
