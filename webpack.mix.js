const mix = require('laravel-mix')
require('laravel-mix-jigsaw')

mix.disableNotifications()
mix.setPublicPath('source/assets/build/')

mix
  .js('source/_assets/js/main.js', 'js')
  .sass('source/_assets/sass/main.scss', 'css/main.css')
  .jigsaw({
    watch: ['config.php', 'source/**/*.md', 'source/**/*.php', 'source/**/*.scss'],
  })
  .options({
    processCssUrls: false,
  })
  .sourceMaps()
  .version()
// .webpackConfig({
//   stats: {
//     children: true
//   }
// })
