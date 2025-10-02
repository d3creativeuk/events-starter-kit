import Alpine from "alpinejs";
import Precognition from 'laravel-precognition-alpine';
import intersect from "@alpinejs/intersect";
import morph from "@alpinejs/morph";
import focus from "@alpinejs/focus";
import collapse from "@alpinejs/collapse";

window.Alpine = Alpine;

// Register plugins before starting Alpine
Alpine.plugin(morph);
Alpine.plugin(intersect);
Alpine.plugin(focus);
Alpine.plugin(collapse);

Alpine.plugin(Precognition);
// Start Alpine
Alpine.start();
