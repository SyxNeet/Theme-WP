document.addEventListener("DOMContentLoaded", function () {
  // Tạo một observer để theo dõi phần tử chứa Swiper
  const swiperContainer = document.getElementsByClassName("review-container")[0];
  // Tạo một observer
  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          loadSwiperLibrary();
          // Ngừng theo dõi phần tử sau khi thư viện đã được tải
          observer.unobserve(entry.target);
        }
      });
    },
    {
      root: null, // Theo dõi viewport của trình duyệt
      rootMargin: "-10% 0px 0px 0px", // Kích hoạt khi phần tử cách viewport 10% chiều cao
      threshold: 0, // Kích hoạt ngay khi mép trên phần tử vượt quá điểm -10%
    }
  );

  // Bắt đầu theo dõi phần tử
  observer.observe(swiperContainer);

  function loadSwiperLibrary() {
    const cssLink = document.createElement("link");
    cssLink.rel = "stylesheet";
    cssLink.href = "https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.css";
    document.head.appendChild(cssLink);

    const script = document.createElement("script");
    script.src = "https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js";
    script.onload = () => {
      initializeSwiper();
    };
    document.head.appendChild(script);
  }

  function initializeSwiper() {
        let swiper_reviews = new Swiper(".reviews-swiper", {
		  pagination: {
			el: ".reviews-pagination",
			clickable: true,
		  },
		  loop: true,
		  slidesPerView: 1.3,
		  spaceBetween: 24,
		  breakpoints: {
			640: {
			  slidesPerView: 3,
			  spaceBetween: 22,
			},
		  },
		});
    }
});
// // document.addEventListener("DOMContentLoaded", function () {
//     const swiperContainer = document.getElementsByClassName("review-container")[0];
//     let libraryLoaded = false;

//     // Hàm để tải thư viện Swiper và CSS
//     function loadSwiperLibrary() {
//         if (libraryLoaded) return; // Ngăn tải lại thư viện nếu đã được tải
//         libraryLoaded = true;

//         // Tải tệp CSS của Swiper
//         const cssLink = document.createElement("link");
//         cssLink.rel = "stylesheet";
//         cssLink.href = "https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.css";
//         document.head.appendChild(cssLink);

//         // Tải thư viện JavaScript của Swiper
//         const script = document.createElement("script");
//         script.src = "https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js";
//         script.onload = () => {
//             initializeSwiper();
//         };
//         document.head.appendChild(script);
//     }

//     // Hàm để khởi tạo Swiper
//     function initializeSwiper() {
//         let swiper_reviews = new Swiper(".reviews-swiper", {
// 		  pagination: {
// 			el: ".reviews-pagination",
// 			clickable: true,
// 		  },
// 		  loop: true,
// 		  slidesPerView: 1.3,
// 		  spaceBetween: 24,
// 		  breakpoints: {
// 			640: {
// 			  slidesPerView: 3,
// 			  spaceBetween: 22,
// 			},
// 		  },
// 		});
//     }

//     // Xử lý sự kiện cuộn
//     function onScroll() {
//         if (swiperContainer) {
//             loadSwiperLibrary();
//             window.removeEventListener("scroll", onScroll); // Ngừng kiểm tra sau khi đã tải
//         }
//     }

//     // Xử lý sự kiện hover
//     function onMouseOver() {
//         loadSwiperLibrary();
//         swiperContainer.removeEventListener("mouseover", onMouseOver); // Ngừng kiểm tra sau khi đã tải
//     }

//     function handleEvents() {
//         if (swiperContainer) {
//             window.addEventListener("scroll", onScroll);
//             window.addEventListener("mouseover", onMouseOver);
// //             swiperContainer.addEventListener("mouseenter", onMouseEnter);
//         }
//     }
// 	handleEvents()
// });