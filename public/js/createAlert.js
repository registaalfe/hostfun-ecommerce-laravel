// start:CreateAlert
document.getElementById("createButton").addEventListener("click", function (e) {
    e.preventDefault(); // Prevent form submission

    const nameInput = document.querySelector('input[name="name"]');
    const nameValue = nameInput.value.trim();

    // Clear previous error styling and message
    nameInput.classList.remove("border-red-500");
    const errorMessage = nameInput.nextElementSibling;
    if (errorMessage && errorMessage.tagName === "SPAN") {
        errorMessage.remove();
    }

    if (!nameValue) {
        // If the input is empty, display error message and red border
        nameInput.classList.add("border-red-500");
        const errorSpan = document.createElement("span");
        errorSpan.classList.add("text-red-500", "text-sm");
        errorSpan.textContent = "Category name is required.";
        nameInput.parentNode.appendChild(errorSpan); // Append the error message after input
    } else {
        // If input is not empty, show the SweetAlert2 success message
        Swal.fire({
            title: "Success!",
            icon: "success",
            confirmButtonText: "OK",
            confirmButtonColor: "#0165FF",
        }).then((result) => {
            if (result.isConfirmed) {
                // If confirmed, submit the form
                document.getElementById("createCategoryForm").submit();
            }
        });
    }
});

// end:CreateAlert
