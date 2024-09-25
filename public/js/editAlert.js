// start:EditAlert
document.getElementById("editButton").addEventListener("click", function (e) {
    e.preventDefault(); // Prevent default button behavior

    Swal.fire({
        title: "Are you sure you want to edit?",
        text: "You are about to edit this category!",
        icon: "info", // You can use 'warning', 'success', 'error', etc.
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, proceed!",
        cancelButtonText: "Cancel",
    }).then((result) => {
        if (result.isConfirmed) {
            // If confirmed, submit the form
            document.getElementById("editCategoryForm").submit();
        }
    });
});
// end:EditAlert
