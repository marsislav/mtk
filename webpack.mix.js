const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js") // Add jQuuery and jQuery plugins or custom scripts here
    .sass("resources/sass/app.scss", "public/css") //SCSS compiler
    .sourceMaps();
