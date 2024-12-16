 

document.addEventListener("DOMContentLoaded", function () {
    const swiperContainer = document.getElementsByClassName("multi__purpose__swiper")[0];
    let libraryLoaded = false;

    // Hàm để tải thư viện Swiper và CSS
    function loadSwiperLibrary() {
        if (libraryLoaded) return; // Ngăn tải lại thư viện nếu đã được tải
        libraryLoaded = true;

        // Tải  CSS của Swiper
        const cssLink = document.createElement("link");
        cssLink.rel = "stylesheet";
        cssLink.href = "https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.css";
        document.head.appendChild(cssLink);

        // Tải thư viện JavaScript của Swiper
        const script = document.createElement("script");
        script.src = "https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js";
        script.onload = () => {
            initializeSwiper();
        };
        document.head.appendChild(script);
    }

    // Hàm để khởi tạo Swiper
    function initializeSwiper() {
        const swiper_multi__purpose = new Swiper(".multi__purpose__swiper", {
			slidesPerView: "auto",
			spaceBetween: 18,
			pagination: {
			  el: ".swiper-pagination",
			},
			breakpoints: {
			640: {
				slidesPerView: 3,
				spaceBetween: 18
			},
		}
		  });
    }

    // Xử lý sự kiện cuộn
    function onScroll() {
        if (swiperContainer) {
            loadSwiperLibrary();
            window.removeEventListener("scroll", onScroll); // Ngừng kiểm tra sau khi đã tải
        }
    }

    // Xử lý sự kiện hover
    function onMouseOver() {
        loadSwiperLibrary();
        swiperContainer.removeEventListener("mouseover", onMouseOver); // Ngừng kiểm tra sau khi đã tải
    }

    function handleEvents() {
        if (swiperContainer) {
            window.addEventListener("scroll", onScroll);
            window.addEventListener("mouseover", onMouseOver);
//             swiperContainer.addEventListener("mouseenter", onMouseEnter);
        }
    }
	handleEvents()
});