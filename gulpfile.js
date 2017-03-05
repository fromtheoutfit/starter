// ****************************************************************************
// Tasks you can run on the command line and what they'll do for you.
// ****************************************************************************
//
// gulp:
//   - Creates an environment that points to your local server's host URL (see
//     line #48) and makes http://localhost:3000 and http://[IP address]:3000
//     available to devices on your wifi network;
//   - watches for template changes and refreshes page(s);
//   - watches for scss changes, compiles scss, and injects styles;
//   - watches for media and minifies all of it;
//   - watches for js changes, lints js, compiles js, minifies js, and
//     refreshes page(s).
//
// gulp js:
//   - watches for js changes, lints js, compiles js, and minifies js.
//
// gulp scss:
//   - compiles scss to css, overwriting all.css and all.css.map. ♥ Michael.




// ****************************************************************************
// Plugins.
// ****************************************************************************

var bs       = require('browser-sync');
var fs       = require('fs');
var gulp     = require('gulp');
var path     = require('path');
var pngquant = require('imagemin-pngquant');
var rs       = require('run-sequence'); // Unnecessary once Gulp 4 is here.
var plugin   = require('gulp-load-plugins')(); // This auto-loads plugins named
                                               // gulp-* or gulp.* from the
                                               // package.json file.




// ****************************************************************************
// Project configuration.
// ****************************************************************************

// ! = Update = ! This is the URL that your local server provides to you for
//                this particular project.
// ----------------------------------------------------------------------------
var localUrl      = 'http://starter.vbox.bytheoutfit.com/';

// ! = Update = ! Gulp will watch the below files and reload your browser(s)
//                when one of them changes. They are common paths we tend to
//                use, but be sure to update the array as needed for this
//                particular project.
// ----------------------------------------------------------------------------
var templates   = [
    /* Basics: */ 'html/**/*.+(html|php)',
    /*     EE: */ '+(snippets|templates)/default_site/**/*.html',
    /*  Craft: */ 'craft/templates/**/*.html',
  /*  Laravel: */ 'laravel/resources/views/**/*.blade.php'
                  ];

// Style paths.
// ----------------------------------------------------------------------------
var styleSrc      = '_scss/all.scss';
var styleDest     = 'html/lib/css/';

// Media paths.
// ----------------------------------------------------------------------------
var mediaSrc      = ['_media/**/*', '!_media/**/*.DS_Store'];
var mediaDest     = 'html/lib/media/';

// JavaScript paths.
// ----------------------------------------------------------------------------
var jsSrc         = '_js/**/*.js';
var jsSrcFeatures = '_js/features/';
var jsSrcGlobal   = ['_js/global/vendor/**/*.js', '_js/global/**/*.js'];
var jsSrcLint     = ['_js/**/*.js', '!_js/**/*vendor*/*.js'];
var jsDest        = 'html/lib/js/';




// ****************************************************************************
// Styles tasks.
// ****************************************************************************

// Compile Scss.
// ----------------------------------------------------------------------------
gulp.task('scss', function() {
  gulp.src(styleSrc)
    .pipe(plugin.sourcemaps.init())
    .pipe(plugin.sass({outputStyle:'compressed'}).on('error', plugin.sass.logError))
    .pipe(plugin.autoprefixer())
    .pipe(plugin.sourcemaps.write('maps'))
    .pipe(gulp.dest(styleDest))
    .pipe(plugin.filter('**/*.css'))
    .pipe(plugin.size({showFiles:true}))
    .pipe(bs.reload({stream:true}));
});




// ****************************************************************************
// Media tasks.
// ****************************************************************************

// Minify media.
// ----------------------------------------------------------------------------
gulp.task('minify-media', function() {
  gulp.src(mediaSrc)
    .pipe(plugin.changed(mediaDest))
    .pipe(plugin.imagemin([
      // Learn more about each of these (and other) plugins here:
      // https://www.npmjs.com/browse/keyword/imageminplugin
      plugin.imagemin.gifsicle({interlaced:true, optimizationLevel:2}),
      plugin.imagemin.jpegtran({progressive:true}),
      plugin.imagemin.svgo(),
      pngquant()
    ]))
    .pipe(gulp.dest(mediaDest))
    .pipe(plugin.size({showFiles:true}));
});




// ****************************************************************************
// JavaScript tasks.
// ****************************************************************************

// Concatenate and minify all global JS files.
// ----------------------------------------------------------------------------
gulp.task('js-compile-global', function() {
  return gulp.src(jsSrcGlobal)
    .pipe(plugin.sourcemaps.init())
    .pipe(plugin.concat('global.js'))
    // .pipe(gulp.dest(jsDest)) // Also save a non-minified version.
    .pipe(plugin.rename({suffix:'.min'}))
    .pipe(plugin.uglify({mangle:false}))
    .pipe(plugin.sourcemaps.write('maps'))
    .pipe(gulp.dest(jsDest))
    .pipe(plugin.size({showFiles:true}));
});


// Concatenate and minify all feature JS files.
// ----------------------------------------------------------------------------
function getFolders(dir) {
  return fs.readdirSync(dir).filter(function(file) {
    return fs.statSync(path.join(dir, file)).isDirectory();
  });
}
gulp.task('js-compile-features', function() {
  var folders = getFolders(jsSrcFeatures);
  var tasks   = folders.map(function(folder) {
    return gulp.src(path.join(jsSrcFeatures, folder, '**/*.js'))
      .pipe(plugin.sourcemaps.init())
      .pipe(plugin.concat(folder + '.js'))
      // .pipe(gulp.dest(jsDest)) // Also save a non-minified version.
      .pipe(plugin.rename({suffix:'.min'}))
      .pipe(plugin.uglify({mangle:false}))
      .pipe(plugin.sourcemaps.write('maps'))
      .pipe(gulp.dest(jsDest))
      .pipe(plugin.size({showFiles:true}));
  });
  return tasks;
});


// Lint non-vendor JS files.
// ----------------------------------------------------------------------------
gulp.task('js-lint', function() {
  return gulp.src(jsSrcLint)
    .pipe(plugin.eslint({
      extends: 'eslint:recommended',
      rules: {
        'curly':'warn',
        'eqeqeq':'warn',
        'no-console':'off'
      },
      globals: [
        'jquery',
        'modernizr'
      ],
      envs: ['browser', 'jquery']
    }))
    .pipe(plugin.eslint.format());
});




// ****************************************************************************
// BrowserSync tasks.
// ****************************************************************************

// Start a server and provide auto refreshing and event synchronization.
// ----------------------------------------------------------------------------
gulp.task('browser-sync', function() {
  bs({proxy:localUrl});
});


// A task that will reload all connected devices, which can be called manually.
// ----------------------------------------------------------------------------
gulp.task('bs-reload', function() {
  bs.reload();
});




// ****************************************************************************
// Combo tasks.
// ****************************************************************************

// The default task that's typically run by front-end devs.
// ----------------------------------------------------------------------------
gulp.task('default', ['browser-sync'], function() {
  gulp.watch(templates, ['bs-reload']);
  gulp.watch('_scss/**/*.scss', ['scss']);
  plugin.watch(mediaSrc, plugin.batch({timeout:1000}, function(e) {
    e.on('end', gulp.start('minify-media'));
  }));
  gulp.watch(jsSrc, function(e) {
    rs('js-lint', ['js-compile-global', 'js-compile-features'], 'bs-reload');
  });
});


// The js task that's typically run back-end devs working on js.
// ----------------------------------------------------------------------------
gulp.task('js', function() {
  gulp.watch(jsSrc, function(e) {
    rs('js-lint', ['js-compile-global', 'js-compile-features']);
  });
});
