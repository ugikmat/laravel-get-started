let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.js('node_modules/startbootstrap-sb-admin/js/sb-admin.min.js','public/js');
mix.js('node_modules/startbootstrap-sb-admin/js/sb-admin-datatables.min.js', 'public/js');
mix.js('node_modules/startbootstrap-sb-admin/js/sb-admin-charts.min.js', 'public/js');

mix.js('node_modules/datatables.net/js/jquery.dataTables.js', 'public/js');
mix.js('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js', 'public/js');

mix.js('node_modules/chart.js/dist/Chart.min.js', 'public/js');

mix.combine(['public/js/app.js', 'public/js/sb-admin.min.js'], 'public/js/app.js');
mix.combine(['public/js/app.js', 'public/js/sb-admin-datatables.min.js'], 'public/js/app.js');
mix.combine(['public/js/app.js', 'public/js/sb-admin-charts.min.js'], 'public/js/app.js');

mix.combine(['public/js/app.js', 'public/js/jquery.dataTables.js'], 'public/js/app.js');
mix.combine(['public/js/app.js', 'public/js/dataTables.bootstrap4.js'], 'public/js/app.js');

mix.combine(['public/js/app.js', 'public/js/Chart.min.js'], 'public/js/app.js');

mix.combine(['public/css/app.css', 'node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css'], 'public/css/app.css');