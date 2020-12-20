const mix = require('laravel-mix');

mix.disableNotifications();

mix
  .sass('resources/sass/quick-brown-fox.scss', 'public/css')
  .options({
    processCssUrls: false,
  })
  .version();
