const mix = require('laravel-mix');
mix.js('resources/js/app.js', 'public/js').vue({ version: 2 });
mix.js('resources/js/global.js', 'js');
