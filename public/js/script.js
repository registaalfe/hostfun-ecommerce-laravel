const btnOpen = document.querySelector("#btnOpen");
const btnClose = document.querySelector("#btnClose");
const topNavMenu = document.querySelector(".topnav__menu");
const mediaLarge = window.matchMedia("(width < 64em)");
const mediaMedium = window.matchMedia("(width < 48em)");
const mediaSmall = window.matchMedia("(width < 40em)");
const mediaExtraSmall = window.matchMedia("(width < 20em)");
const main = document.querySelector("main");
const body = document.querySelector("body");

function openMobileMenu() {
    // Function ARIA to changes value from aria-expanded false to true
    btnOpen.setAttribute("aria-expanded", "true");
    topNavMenu.removeAttribute("innert"); //While open, value of the innert will be removed
    topNavMenu.removeAttribute("style");
    main.setAttribute("inert", "");
    bodyScrollLockUpgrade.disableBodyScroll(body);
    btnClose.focus();
}

function closeMobileMenu() {
    // Function ARIA to changes value from aria-expanded false to true
    btnOpen.setAttribute("aria-expanded", "false");
    topNavMenu.setAttribute("innert", ""); //While close, value will be set innert
    main.removeAttribute("inert");
    bodyScrollLockUpgrade.enableBodyScroll(body);
    btnOpen.focus();

    setTimeout(() => {
        topNavMenu.style.transition = "none";
    }, 500);
}

// Function to handle changes for 640px screen width
function setupTopNav() {
    if (mediaLarge.matches) {
        // is desktop
        console.log("is large screen");
        closeMobileMenu();
        topNavMenu.removeAttribute("inert");
    } else if (mediaMedium.matches) {
        // is medium screen
        console.log("is medium screen");
        closeMobileMenu();
        topNavMenu.removeAttribute("inert");
    } else if (mediaSmall.matches) {
        // is small screen
        console.log("is small screen");
        closeMobileMenu();
        topNavMenu.removeAttribute("inert");
    } else if (mediaExtraSmall.matches) {
        // is extra small screen
        console.log("is extra small screen");
        topNavMenu.setAttribute("inert", "");
        topNavMenu.style.transition = "none";
    }
}

// Lets run the function
setupTopNav();

btnOpen.addEventListener("click", openMobileMenu);
btnClose.addEventListener("click", closeMobileMenu);

mediaLarge.addEventListener("change", setupTopNav);
mediaMedium.addEventListener("change", setupTopNav);
mediaSmall.addEventListener("change", setupTopNav);
mediaExtraSmall.addEventListener("change", setupTopNav);

// document.getElementById("next").onclick = function () {
//     let lists = document.querySelectorAll(".item");
//     document.getElementById("slide").appendChild(lists[0]);
// };

// document.getElementById("prev").onclick = function () {
//     let lists = document.querySelectorAll(".item");
//     document.getElementById("slide").prepend(lists[lists.length - 1]);
// };

// // Get the current width of the window
// var screenWidth = window.innerWidth;
// var itms = 3; // itemsPerPage

// // Define a function to handle responsive behavior
// function handleResponsive() {
//     // Check the screen width and perform actions accordingly
//     if (screenWidth > 1280) {
//         // Execute code for screens 1280 pixels wide or larger
//         {
//             itms = 3;
//         }
//         console.log("Screen is smaller than 1280 pixels wide.");
//     } else if (screenWidth > 1024) {
//         // Execute code for screens 1024 pixels wide or larger
//         {
//             itms = 2;
//         }
//         console.log("Screen is 1024 pixels wide or larger.");
//     } else if (screenWidth > 768) {
//         // Execute code for screens 768 pixels wide or larger
//         {
//             itms = 2;
//         }
//     } else {
//         // Execute code for screens 640 pixels wide or larger
//         {
//             itms = 1;
//         }
//     }
// }

// function reportWindowSize() {
//     handleResponsive();
//     //purePajination Script - START
//     if (document.readyState === "complete") {
//         var gallery = new purePajinate({
//             containerSelector: ".slide",
//             itemSelector: ".slide > div",
//             navigationSelector: ".pagination",
//             /*wrapAround: true,*/
//             showFirstLast: true,
//             navLabelPrev: "   ",
//             navLabelNext: "   ",
//             navLabelFirst: "   ",
//             navLabelLast: "   ",
//             itemsPerPage: itms,
//         });
//     } //purePajination Script - END
// }

// document.onreadystatechange = reportWindowSize;
// window.onresize = reportWindowSize;
