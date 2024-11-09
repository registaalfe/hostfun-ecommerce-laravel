const search = document.getElementById("search");
const items = document.querySelectorAll("tbody tr");

filter.addEventListener("input", (e) => searchData(e.target.value));

function searchData(search) {
    items.forEach((item) => {
        if (item.innerText.toLowerCase().includes(search.toLowerCase())) {
            item.classList.remove("d-none");
        } else {
            item.classList.add("d-none");
        }
    });
}
