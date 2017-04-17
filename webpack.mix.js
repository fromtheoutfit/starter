let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix.js('_js/app.js', 'html/lib/js')
   .sass('_scss/app.scss', 'html/lib/css')
   .options({
     processCssUrls: false
   })
   .sourceMaps()
   .browserSync({
     proxy: 'http://starter.vbox.bytheoutfit.com/',
     files: [
       '+(html|public)/lib/css/app.css',  // Generated .css file
       '+(html|public)/lib/js/app.js',    // Generated .js file
       // =====================================================================
       // You probably need only one of the below lines, depending
       // on which platform this project is being built upon.
       // =====================================================================
       '+(html|public)/**/*.+(html|php)',             // Generic .html and/or .php files [no specific platform]
       'laravel/resources/views/**/*.php',            // Laravel-specific view files
       'craft/templates/**/*.html',                   // Craft-specific templates
       '+(snippets|templates)/default_site/**/*.html' // EE-specific snippets and/or templates
     ]
   });

// Full API
// mix.js(src, output);
// mix.react(src, output); <-- Identical to mix.js(), but registers React Babel compilation.
// mix.extract(vendorLibs);
// mix.sass(src, output);
// mix.less(src, output);
// mix.stylus(src, output);
// mix.browserSync('my-site.dev');
// mix.combine(files, destination);
// mix.babel(files, destination); <-- Identical to mix.combine(), but also includes Babel compilation.
// mix.copy(from, to);
// mix.copyDirectory(fromDir, toDir);
// mix.minify(file);
// mix.sourceMaps(); // Enable sourcemaps
// mix.version(); // Enable versioning.
// mix.disableNotifications();
// mix.setPublicPath('path/to/public');
// mix.setResourceRoot('prefix/for/resource/locators');
// mix.autoload({}); <-- Will be passed to Webpack's ProvidePlugin.
// mix.webpackConfig({}); <-- Override webpack.config.js, without editing the file directly.
// mix.then(function () {}) <-- Will be triggered each time Webpack finishes building.
// mix.options({
//   extractVueStyles: false, // Extract .vue component styling to file, rather than inline.
//   processCssUrls: true, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
//   purifyCss: false, // Remove unused CSS selectors.
//   uglify: {}, // Uglify-specific options. https://webpack.github.io/docs/list-of-plugins.html#uglifyjsplugin
//   postCss: [] // Post-CSS options: https://github.com/postcss/postcss/blob/master/docs/plugins.md
// });