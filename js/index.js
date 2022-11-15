// Slide in animation for 3 section
(function () {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('show')
            }
            else {
                entry.target.classList.remove('show')
            }
        })
    })

    const hiddenElements = document.querySelectorAll('.hidden')
    hiddenElements.forEach((element) => observer.observe(element))
})();

// Accordion
(function () {
    const questions = document.querySelectorAll(".question")
    const btns = document.querySelectorAll(".question-btn")

    btns.forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            const question = e.currentTarget.closest(".question")

            questions.forEach(function (item) {
                if (item !== question) {
                    item.classList.remove("show-text")
                }
            })

            question.classList.toggle("show-text")
        })
    })
})();

//  Initialize Swiper
(function () {
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    const swiper2 = new Swiper(".mySwiper2", {
        slidesPerView: "auto",
        spaceBetween: 20,
        scrollbar: {
            el: ".swiper-scrollbar"
        },
    });
})()