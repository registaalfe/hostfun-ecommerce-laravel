const btnOpen = document.querySelector("#btnOpen");
const btnClose = document.querySelector("#btnClose");
const topNavMenu = document.querySelector(".topnav__menu");
const media640 = window.matchMedia("(width < 640px)");
const media768 = window.matchMedia("(width < 768px)");

// Function to handle changes for 640px screen width
function setupTopNav640(e) {
    if (e.matches) {
        // is mobile
        console.log("Screen width is 640px or more");
        topNavMenu.setAttribute("innert", ""); //innert to disables attribute for some reason
    } else {
        // is tablet dekstop
        console.log("Screen width is less than 640pxp");
        topNavMenu.removeAttribute("innert");
    }
}

// Function to handle changes for 768px screen width
function setupTopNav768(e) {
    if (e.matches) {
        // is mobile
        console.log("Screen width is 768px or more");
        topNavMenu.setAttribute("innert", ""); //innert to disables attribute for some reason
    } else {
        // is tablet dekstop
        console.log("Screen width is less than 768px");
        topNavMenu.removeAttribute("innert");
    }
}

function openMobileMenu() {
    // Function ARIA to changes value from aria-expanded false to true
    btnOpen.setAttribute("aria-expanded", "true");
    topNavMenu.removeAttribute("innert"); //While open, value of the innert will be removed
}

function closeMobileMenu() {
    // Function ARIA to changes value from aria-expanded false to true
    btnOpen.setAttribute("aria-expanded", "false");
    topNavMenu.setAttribute("innert", ""); //While close, value will be set innert
}

// Lets run the function
setupTopNav640(media640);
setupTopNav768(media768);
btnOpen.addEventListener("click", openMobileMenu);
btnClose.addEventListener("click", closeMobileMenu);

document.getElementById("next").onclick = function () {
    let lists = document.querySelectorAll(".item");
    document.getElementById("slide").appendChild(lists[0]);
};

document.getElementById("prev").onclick = function () {
    let lists = document.querySelectorAll(".item");
    document.getElementById("slide").prepend(lists[lists.length - 1]);
};

// Get the current width of the window
var screenWidth = window.innerWidth;
var itms = 3; // itemsPerPage

// Define a function to handle responsive behavior
function handleResponsive() {
    // Check the screen width and perform actions accordingly
    if (screenWidth > 1280) {
        // Execute code for screens 1280 pixels wide or larger
        {
            itms = 3;
        }
        console.log("Screen is smaller than 1280 pixels wide.");
    } else if (screenWidth > 1024) {
        // Execute code for screens 1024 pixels wide or larger
        {
            itms = 2;
        }
        console.log("Screen is 1024 pixels wide or larger.");
    } else if (screenWidth > 768) {
        // Execute code for screens 768 pixels wide or larger
        {
            itms = 2;
        }
    } else {
        // Execute code for screens 640 pixels wide or larger
        {
            itms = 1;
        }
    }
}

function reportWindowSize() {
    handleResponsive();
    //purePajination Script - START
    if (document.readyState === "complete") {
        var gallery = new purePajinate({
            containerSelector: ".slide",
            itemSelector: ".slide > div",
            navigationSelector: ".pagination",
            /*wrapAround: true,*/
            showFirstLast: true,
            navLabelPrev: "   ",
            navLabelNext: "   ",
            navLabelFirst: "   ",
            navLabelLast: "   ",
            itemsPerPage: itms,
        });
    } //purePajination Script - END
}

document.onreadystatechange = reportWindowSize;
window.onresize = reportWindowSize;
