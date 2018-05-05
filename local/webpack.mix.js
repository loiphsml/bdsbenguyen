let mix = require('laravel-mix');
mix.setPublicPath('../');
mix.setResourceRoot('../');

mix.styles([
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/bootstrap/dist/js/bootstrap.min.js',
    // Fancy chưa sử dụng
    // 'bower_components/fancybox/dist/jquery.fancybox.min.js',
], '../js/core.common.js')

    // .copy([
    //     'bower_components/font-awesome/web-fonts-with-css/webfonts/**'
    // ],'../webfonts')
    //CSS DÙNG CHUNG CHO FRONTEND VÀ BACKEND
    .styles([
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css',
        // 'bower_components/Ionicons/css/ionicons.min.css',
        // 'bower_components/fancybox/dist/jquery.fancybox.min.css',
    ], '../css/core.common.css')

    .sass('resources/assets/sass/styles.scss', '../css/frontend.css')

    .styles('resources/assets/js/script.js','../js/script.js')
