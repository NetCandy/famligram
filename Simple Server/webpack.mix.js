let mix = require('laravel-mix');

mix.postCss('src/app.css', 'public/css', [
    require('tailwindcss'),
]).browserSync({
    proxy: 'localhost:8080',
    'browser': 'google chrome'
});