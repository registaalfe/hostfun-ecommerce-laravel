document.getElementById("deleteButton").addEventListener("click", function (e) {
    e.preventDefault(); // Prevent default button behavior

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            // If confirmed, submit the form
            document.getElementById("deleteCategoryForm").submit();
        }
    });
});
