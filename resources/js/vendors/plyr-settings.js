import Plyr from 'plyr'; // Gets plyr from node_modules
// Make sure Plyr is available globally
if (typeof Plyr !== 'undefined') {
    const players = Plyr.setup(".js-player", {
        iconUrl: '/assets/global/plyr.svg',
        settings: [
            "captions",
            "speed",
            "loop",
        ],
        ratio: "16:9",
        controls: [
            "play-large",
            "restart",
            "play",
            "progress",
            "duration",
            "mute",
            "volume",
            "captions",
            "settings",
            "fullscreen",
        ],
    });

    var jsplayerCheck = document.getElementsByClassName("js-player").length;

    if (jsplayerCheck) {
        players.forEach(function (p) {
            p.on("play", (event) => {
                const instance = event.detail.plyr;
                players.forEach(function (p) {
                    if (p != instance) p.pause();
                });
            });
        });
    }
} else {
    console.error("Plyr is not loaded properly");
}