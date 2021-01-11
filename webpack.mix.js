const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .styles(
        [
            'resources/views/LDXPS/layout/css/page.css' 
        ],
        'public/LDXPS/css/pageCss.css'
    )
    .styles(
        [
            'resources/views/LDXPS/layout/css/form.css' 
        ],
        'public/LDXPS/css/formCss.css'
    )
    .sass   (
        'resources/views/LDXPS/layout/scss/pageCuston.scss',
        'public/LDXPS/css/pageSass.css'
    )
    .scripts(
        'node_modules/jquery/dist/jquery.js',   
        'public/LDXPS/js/jquery.js'
    )    
    .scripts(
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
        'public/LDXPS/js/bootstrap.js'
    )
    .scripts(
        'node_modules/feather-icons/dist/feather.js',
        'public/LDXPS/js/feather.js'
    )  
    .scripts(
        [
            'resources/views/LDXPS/layout/js/page.js',
        ],
        'public/LDXPS/js/page.js'
    ) 
        .scripts(
        [
            'resources/views/LDXPS/layout/js/form.js',
        ],
        'public/LDXPS/js/form.js'
    ) 
    .version();
