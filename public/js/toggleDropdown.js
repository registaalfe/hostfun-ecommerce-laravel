function toggleDropdown() {
    this.isOpen = !this.isOpen;
    if (!this.isOpen) {
        document.getElementById("menu-button").blur(); // Remove focus
    }
}
