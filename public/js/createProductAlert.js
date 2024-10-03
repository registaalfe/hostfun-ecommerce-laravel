// start:CreateAlert
document.getElementById("createButton").addEventListener("click", function (e) {
    e.preventDefault(); // Prevent form submission

    // Get input values
    const nameInput = document.querySelector('input[name="name"]');
    const categoryInput = document.querySelector('select[name="category_id"]');
    const priceInput = document.querySelector('input[name="price"]');

    const nameValue = nameInput.value.trim();
    const categoryValue = categoryInput.value;
    const priceValue = priceInput.value.trim();

    // Clear previous error styling and messages
    [nameInput, categoryInput, priceInput].forEach((input) => {
        input.classList.remove("border-red-500");
        const errorMessage = input.nextElementSibling;
        if (errorMessage && errorMessage.tagName === "SPAN") {
            errorMessage.remove();
        }
    });

    // Validation flags
    let hasErrors = false;

    // Validate Name
    if (!nameValue) {
        nameInput.classList.add("border-red-500");
        const errorSpan = document.createElement("span");
        errorSpan.classList.add("text-red-500", "text-sm");
        errorSpan.textContent = "Product name is required.";
        nameInput.parentNode.appendChild(errorSpan);
        hasErrors = true;
    }

    // Validate Category
    if (!categoryValue) {
        categoryInput.classList.add("border-red-500");
        const errorSpan = document.createElement("span");
        errorSpan.classList.add("text-red-500", "text-sm");
        errorSpan.textContent = "Category is required.";
        categoryInput.parentNode.appendChild(errorSpan);
        hasErrors = true;
    }

    // Validate Price
    if (!priceValue || isNaN(priceValue) || parseFloat(priceValue) <= 0) {
        priceInput.classList.add("border-red-500");
        const errorSpan = document.createElement("span");
        errorSpan.classList.add("text-red-500", "text-sm");
        errorSpan.textContent = "Valid price is required.";
        priceInput.parentNode.appendChild(errorSpan);
        hasErrors = true;
    }

    // If there are no validation errors, show the SweetAlert success message
    if (!hasErrors) {
        Swal.fire({
            title: "Success!",
            text: "Product has been created successfully.",
            icon: "success",
            confirmButtonText: "OK",
            confirmButtonColor: "#0165FF",
        }).then((result) => {
            if (result.isConfirmed) {
                // If confirmed, submit the form
                document.getElementById("createProductForm").submit();
            }
        });
    }
});
// end:CreateAlert
