// document.addEventListener("DOMContentLoaded", function () {
//     // Tạo một observer để theo dõi phần tử chứa Swiper
//     const swiperContainer =
//         document.getElementsByClassName("most__entrusted")[0];
//     // Tạo một observer
//     const observer = new IntersectionObserver(
//         (entries, observer) => {
//             entries.forEach((entry) => {
//                 if (entry.isIntersecting) {
//                     loadSwiperLibrary();
//                     // Ngừng theo dõi phần tử sau khi thư viện đã được tải
//                     observer.unobserve(entry.target);
//                 }
//             });
//         },
//         {
//             root: null, // Theo dõi viewport của trình duyệt
//             rootMargin: "-10% 0px 0px 0px", //phần tử cách viewport 10% chiều cao
//             threshold: 0,
//         }
//     );

//     // Bắt đầu theo dõi phần tử
//     observer.observe(swiperContainer);

//     function loadSwiperLibrary() {
//         const cssLink = document.createElement("link");
//         cssLink.rel = "stylesheet";
//         cssLink.href =
//             "https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.css";
//         document.head.appendChild(cssLink);

//         const script = document.createElement("script");
//         script.src =
//             "https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js";
//         script.onload = () => {
//             initializeSwiper();
//         };
//         document.head.appendChild(script);
//     }

//     function initializeSwiper() {
//         var swiperMostEntrusted = new Swiper(".most__entrusted__swiper", {
//             slidesPerView: 1.2,
//             spaceBetween: 18,
// 			slideClass: 'testimonial-slide',
// 			slideNextClass: 'testimonial-slide-next',
//             loop: true,
//             speed: 400,
//             pagination: {
//                 el: "#most__entrusted .swiper-pagination",
//                 clickable: true,
//             },
//             breakpoints: {
//                 640: {
//                     slidesPerView: 3,
//                     spaceBetween: 20,
//                 },
//             },
//         });
//     }
// });


document.addEventListener("DOMContentLoaded", function () {
    const swiperContainer =
        document.getElementsByClassName("most__entrusted")[0];

    function loadSwiperLibrary() {
        const cssLink = document.createElement("link");
        cssLink.rel = "stylesheet";
        cssLink.href =
            "https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.css";
        document.head.appendChild(cssLink);

        const script = document.createElement("script");
        script.src =
            "https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js";
        script.onload = () => {
            initializeSwiper();
        };
        document.head.appendChild(script);
    }

    function initializeSwiper() {
        var swiperMostEntrusted = new Swiper(".most__entrusted__swiper", {
            slidesPerView: 1.2,
            spaceBetween: 18,
            slideClass: "testimonial-slide",
            slideNextClass: "testimonial-slide-next",
            loop: true,
            speed: 400,
            pagination: {
                el: "#most__entrusted .swiper-pagination",
                clickable: true,
            },
			autoplay: {
				delay: 5000,
				disableOnInteraction: false, 
			},
            breakpoints: {
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
        });
    }

    // Nếu phần tử đã trong viewport, gọi luôn hàm tải thư viện
    if (swiperContainer.getBoundingClientRect().top < window.innerHeight) {
        loadSwiperLibrary();
    } else {
        const observer = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        loadSwiperLibrary();
                        observer.unobserve(entry.target);
                    }
                });
            },
            {
                root: null,
                rootMargin: "-10% 0px 0px 0px",
                threshold: 0,
            }
        );
        observer.observe(swiperContainer);
    }
});
