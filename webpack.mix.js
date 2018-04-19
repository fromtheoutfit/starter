let mix = require('laravel-mix')
require('laravel-mix-purgecss')

const config = {
  localUrl: 'starter.test',
  templates: [
    // ========================================================================
    // You probably need only one of the below lines, depending on which
    // platform this project is being built upon.
    // ========================================================================
    'public/**/*.+(html|php)',          // Generic .html and/or .php files [no specific platform]
    'laravel/resources/views/**/*.php', // Laravel-specific view files
    'craft/templates/**/*.+(html|twig)' // Craft-specific templates, as html and/or twig
  ]
}

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

mix
  .autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
    'ally.js/ally.js': ['ally']
  })
  .options({
    autoprefixer: {options: {grid: true}},
    processCssUrls: false
  })
  .js('_js/app.js', 'public/lib/js')
  .sass('_scss/app.scss', 'public/lib/css')
  .sass('_scss/print.scss', 'public/lib/css')
  .purgeCss({globs: config.templates})
  .sourceMaps()
  .webpackConfig({devtool: 'source-map'})
  .browserSync({
    proxy: config.localUrl,
    files: config.templates.concat([
      'public/lib/css/app.css',   // Generated app.css file
      'public/lib/css/print.css', // Generated print.css file
      'public/lib/js/app.js',     // Generated .js file
    ])
  })

// Full API
// mix.js(src, output);
// mix.react(src, output); <-- Identical to mix.js(), but registers React Babel compilation.
// mix.preact(src, output); <-- Identical to mix.js(), but registers Preact compilation.
// mix.coffee(src, output); <-- Identical to mix.js(), but registers CoffeeScript compilation.
// mix.ts(src, output); <-- TypeScript support. Requires tsconfig.json to exist in the same folder as webpack.mix.js
// mix.extract(vendorLibs);
// mix.sass(src, output);
// mix.standaloneSass('src', output); <-- Faster, but isolated from Webpack.
// mix.fastSass('src', output); <-- Alias for mix.standaloneSass().
// mix.less(src, output);
// mix.stylus(src, output);
// mix.postCss(src, output, [require('postcss-some-plugin')()]);
// mix.browserSync('my-site.test');
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
// mix.babelConfig({}); <-- Merge extra Babel configuration (plugins, etc.) with Mix's default.
// mix.then(function () {}) <-- Will be triggered each time Webpack finishes building.
// mix.extend(name, handler) <-- Extend Mix's API with your own components.
// mix.options({
//   extractVueStyles: false, // Extract .vue component styling to file, rather than inline.
//   globalVueStyles: file, // Variables file to be imported in every component.
//   processCssUrls: true, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
//   purifyCss: false, // Remove unused CSS selectors.
//   uglify: {}, // Uglify-specific options. https://webpack.github.io/docs/list-of-plugins.html#uglifyjsplugin
//   postCss: [] // Post-CSS options: https://github.com/postcss/postcss/blob/master/docs/plugins.md
// });
