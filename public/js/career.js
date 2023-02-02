document.addEventListener("DOMContentLoaded", () => {
    let career_blk = document.querySelectorAll(".carieer_blk")

    for (let elem of career_blk)
        elem.addEventListener("click", function (e) {
            e.preventDefault()
            elem.classList.toggle("active")
            let body_elem = elem.querySelector(".career_body");
            if (body_elem) body_elem.classList.toggle("active")
        });
});
