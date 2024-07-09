    let mix = require('laravel-mix');
    mix.sass('public/src/css/projectstyle.scss', 'public/dist/css', {
        sassOptions: {
        includePaths: [
            './node_modules/uniformcss'
        ]
        }})
    // .js('public/src/js/app.js', 'public/dist/js')
    // .js('public/src/js/video_modal_app.js', 'public/dist/js')
    .js(['public/src/js/video_modal_app.js', 'public/src/js/app.js'], 'public/dist/js/app.js')
    .copyDirectory('public/src/imgs', 'public/dist/imgs')
    .copyDirectory('public/src/assets', 'public/dist/assets');
    



