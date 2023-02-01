document.addEventListener("DOMContentLoaded", () => {
let menu_btn = document.querySelectorAll(".toggle_menu")

for (let elem of menu_btn)
    elem.addEventListener("click", function (e) {
        elem.classList.toggle("active")

        let menu_elem = document.querySelector(".menu_wrapper")

        if (menu_elem) menu_elem.classList.toggle("active")
    });

});
