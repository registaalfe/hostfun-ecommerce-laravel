document.addEventListener("DOMContentLoaded", function () {
    // Ambil id setiap parent yg akan dikasih function
    const sidebar = document.getElementById("sidebar");
    const mainContent = document.getElementById("main-content");
    const toggleSidebarButton = document.getElementById("toggle-sidebar");

    // Pastikan elemen-elemen yang dibutuhkan ada
    if (sidebar && mainContent && toggleSidebarButton) {
        // Function yg berfungsi untuk mengubah sidebar dari false ke true
        toggleSidebarButton.addEventListener("click", function () {
            // Toggle sidebar state
            sidebar.classList.toggle("sidebar-collapsed");
            sidebar.classList.toggle("sidebar-expanded");

            // Toggle header margin based on sidebar state
            mainContent.classList.toggle("header-collapsed");
            mainContent.classList.toggle("header-expanded");
        });
    } else {
        console.error(
            "Element not found: Check your HTML for IDs 'sidebar', 'main-content', or 'toggle-sidebar'."
        );
    }
});
