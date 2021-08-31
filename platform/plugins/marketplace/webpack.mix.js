let mix = require('laravel-mix');

const path = require('path');
let directory = path.basename(path.resolve(__dirname));

const source = 'platform/plugins/' + directory;
const dist = 'public/vendor/core/plugins/' + directory;

mix
    .js(source + '/resources/assets/js/marketplace.js', dist + '/js')
    .js(source + '/resources/assets/js/discount.js', dist + '/js')
    .sass(source + '/resources/assets/sass/marketplace.scss', dist + '/css')
    .sass(source + '/resources/assets/sass/marketplace-rtl.scss', dist + '/css')

    .copyDirectory(dist + '/js', source + '/public/js')
    .copyDirectory(dist + '/css', source + '/public/css');
