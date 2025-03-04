"use strict";

$(".confirm-delete").click(function (event) {
    let form = $(this).closest("form");

    event.preventDefault();

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        timer: 3000,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((willDelete) => {
        if (willDelete) {
            form.submit();
        }
    });
});
