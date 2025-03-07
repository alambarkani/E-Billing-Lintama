// File: public/js/admin.js

document.addEventListener("DOMContentLoaded", function () {
    // Sidebar toggle functionality
    const sidebarToggle = document.getElementById("sidebarToggle");
    const sidebar = document.getElementById("sidebar");
    const mainContent = document.querySelector(".main-content");

    if (sidebarToggle) {
        sidebarToggle.addEventListener("click", function () {
            sidebar.classList.toggle("active");
            mainContent.classList.toggle("active");
        });
    }

    // Close sidebar on small screens when clicking outside
    document.addEventListener("click", function (event) {
        const windowWidth = window.innerWidth;

        if (
            windowWidth <= 768 &&
            !sidebar.contains(event.target) &&
            !sidebarToggle.contains(event.target) &&
            sidebar.classList.contains("active")
        ) {
            sidebar.classList.remove("active");
            mainContent.classList.remove("active");
        }
    });

    // Handle dropdown menus in the sidebar
    const dropdownToggles = document.querySelectorAll(".dropdown-toggle");

    dropdownToggles.forEach((toggle) => {
        toggle.addEventListener("click", function (e) {
            e.preventDefault();
            const parent = this.parentElement;
            const submenu = parent.querySelector(".submenu");

            if (submenu) {
                submenu.classList.toggle("show");
                this.classList.toggle("active");
            }
        });
    });

    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Initialize popovers
    const popoverTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="popover"]')
    );
    popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });

    // Handle active menu items based on current route
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll(".sidebar .nav-link");

    navLinks.forEach((link) => {
        const href = link.getAttribute("href");

        if (href && currentPath.includes(href) && href !== "/") {
            link.classList.add("active");

            // If link is in a submenu, open that submenu
            const parentSubmenu = link.closest(".submenu");
            if (parentSubmenu) {
                parentSubmenu.classList.add("show");
                const parentToggle = parentSubmenu.previousElementSibling;
                if (
                    parentToggle &&
                    parentToggle.classList.contains("dropdown-toggle")
                ) {
                    parentToggle.classList.add("active");
                }
            }
        }
    });
});
