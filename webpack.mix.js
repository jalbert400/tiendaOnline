const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
  //ADMINISTRADOR
  .js('resources/js/administrador/index.js', 'public/js/sistema/administrador/index.js')
  //ROLES
  .js('resources/js/administrador/modulos/role/index.js', 'public/js/sistema/modulos/roles/index.min.js')
  //BANNERS
  .js('resources/js/administrador/modulos/banner/index.js', 'public/js/sistema/modulos/banners/index.min.js')


  .sass('resources/sass/app.scss', 'public/css')
  .sass('resources/sass/login.scss', 'public/css/')
  .sass('resources/sass/estructura.scss', 'public/css/');

mix.webpackConfig({
  resolve: {
    alias: {
      "@": path.resolve(
        __dirname,
        "resources/js"
      )
    }
  }
});
