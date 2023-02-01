document.addEventListener("DOMContentLoaded", () => {
let search_btn = document.querySelectorAll(".search_open")
let search_elem = document.querySelector(".search_wrapper")

let s_close_btn = document.querySelector(".search_wrapper .close")
if (s_close_btn)  {
    s_close_btn.addEventListener("click", function (e) {
        e.preventDefault()
        if (search_elem) search_elem.classList.toggle("active")
    })
}

for (let elem of search_btn)
    elem.addEventListener("click", function (e) {
        elem.classList.toggle("active")
        if (search_elem) search_elem.classList.toggle("active")
    });

});
