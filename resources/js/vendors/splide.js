import Splide from "@splidejs/splide";

document.addEventListener("DOMContentLoaded", function () {
    var wrappers = document.querySelectorAll(".wrapper");

    for (var i = 0; i < wrappers.length; i++) {
        var wrapper = wrappers[i];
        var mainElm = wrapper.querySelector(".splide-main");
        var thumbsElm = wrapper.querySelector(".splide-thumbs");

        if (mainElm && thumbsElm) {
            var main = new Splide(mainElm, {
                type: "fade",
                speed: 800,
                rewind: true,
                keyboard: true,
                pagination: false,
                classes: {
                    arrow: "splide__arrow bg-white hover:bg-gray-200",
                },
            });
            var thumbs = new Splide(thumbsElm, {
                fixedWidth: 100,
                gap: 10,
                rewind: true,
                keyboard: true,
                pagination: false,
                arrows: false,
                isNavigation: true,
            });
            main.sync(thumbs).mount();
            thumbs.mount();
        }
    }

    if (document.querySelector(".blog-posts")) {
        // New Slider
        var splide = new Splide(".blog-posts", {
            type: "loop",
            perMove: 1,
            perPage: 3,
            focus: "center",
            pagination: true,
            gap: 24,
            // padding: { left: "0", right: "0" },
            padding: "5rem",
            arrowPath:
                "M12.3 37.4c-.5 0-1-.2-1.4-.6-.8-.8-.8-2.1 0-2.9L24.8 20 10.9 6.1c-.8-.8-.8-2.1 0-2.9.8-.8 2.1-.8 2.9 0l15.4 15.4c.8.8.8 2.1 0 2.9L13.8 36.8c-.4.4-1 .6-1.5.6z",
            classes: {
                arrows: "splide__arrows  absolute top-14 right-2 lg:right-10 w-[110px] bg-red-300",
                arrow: "splide__arrow bg-green-300",
                prev: "splide__arrow--prev fill-white! bg-black! rounded-none! absolute left-0",
                next: "splide__arrow--next bg-black! rounded-none! absolute right-0",
                pagination: "splide__pagination bottom-2",
                page: "splide__pagination__page ",
            },
            mediaQuery: "min",
            perPage: 2,
            breakpoints: {
                320: {
                    perPage: 1,
                },
                640: {
                    perPage: 2,
                },
            },
        });

        splide.mount();
    }
});
