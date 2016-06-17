// ****************************************************************************
// Tasks you can run on the command line and what they'll do for you.
// ****************************************************************************
//
// gulp:
//   - Creates an environment that points to your local server's host URL and
//     makes http://localhost:3000 and http://[your IP address]:3000 available
//     to devices on your wifi network;
//   - watches for template changes and refreshes page(s);
//   - watches for js changes, lints js, compiles js, minifies js, and
//     refreshes page(s);
//   - watches for scss changes, compiles scss, and injects styles.
//
// gulp js:
//   - watches for js changes, lints js, compiles js, and minifies js.
//
// gulp scss:
//   - compiles scss to css, overwriting all.css and all.css.map. ♥ Michael.




// ****************************************************************************
// Plugins.
// ****************************************************************************

var browserSync  = require('browser-sync');
var fs           = require('fs');
var gulp         = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var concat       = require('gulp-concat');
var esLint       = require('gulp-eslint');
var filter       = require('gulp-filter');
var rename       = require('gulp-rename');
var sass         = require('gulp-sass');
var sourcemaps   = require('gulp-sourcemaps');
var uglify       = require('gulp-uglify');
var path         = require('path');
var runSequence  = require('run-sequence'); // Unnecessary once Gulp 4 is here.




// ****************************************************************************
// Project configuration.
// ****************************************************************************

var localUrl    = 'http://starter.vbox.bytheoutfit.com/';
var scssFile    = '_scss/all.scss';
var cssCompiled = 'html/lib/css/';
var jsCompiled  = 'html/lib/js/';
var jsWatch     = '_js/**/*.js';
var jsFeatures  = '_js/features/';
var jsGlobal    = ['_js/global/vendor/**/*.js', '_js/global/**/*.js'];
var jsLint      = ['_js/**/*.js', '!_js/**/*vendor*'];
var templates   = [
      /* Basics: */ 'html/**/*.+(html|css|php)',
      /*     EE: */ '+(snippets|templates)/default_site/**/*.html',
      /*  Craft: */ 'craft/templates/**/*.html'
                  ];




// ****************************************************************************
// Styles tasks.
// ****************************************************************************

// Compile Scss.
// ----------------------------------------------------------------------------
gulp.task('scss', function() {
  gulp.src(scssFile)
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write('maps'))
    .pipe(gulp.dest(cssCompiled))
    .pipe(filter('**/*.css'))
    .pipe(browserSync.reload({stream:true}));
});




// ****************************************************************************
// JavaScript tasks.
// ****************************************************************************

// Concatenate and minify all global JS files.
// ----------------------------------------------------------------------------
gulp.task('js-compile-global', function() {
  return gulp.src(jsGlobal)
    .pipe(sourcemaps.init())
    .pipe(concat('global.js'))
    // .pipe(gulp.dest(jsCompiled)) // Also save a non-minified version.
    .pipe(rename({suffix:'.min'}))
    .pipe(uglify({mangle:false}))
    .pipe(sourcemaps.write('maps'))
    .pipe(gulp.dest(jsCompiled));
});


// Concatenate and minify all feature JS files.
// ----------------------------------------------------------------------------
function getFolders(dir) {
  return fs.readdirSync(dir).filter(function(file) {
    return fs.statSync(path.join(dir, file)).isDirectory();
  });
}
gulp.task('js-compile-features', function() {
  var folders = getFolders(jsFeatures);
  var tasks   = folders.map(function(folder) {
    return gulp.src(path.join(jsFeatures, folder, '**/*.js'))
      .pipe(sourcemaps.init())
      .pipe(concat(folder + '.js'))
      // .pipe(gulp.dest(jsCompiled)) // Also save a non-minified version.
      .pipe(rename({suffix:'.min'}))
      .pipe(uglify({mangle:false}))
      .pipe(sourcemaps.write('maps'))
      .pipe(gulp.dest(jsCompiled));
  });
  return tasks;
});


// Lint non-vendor JS files.
// ----------------------------------------------------------------------------
gulp.task('js-lint', function() {
  return gulp.src(jsLint)
    .pipe(esLint({
      extends: 'eslint:recommended',
      rules: {
        'curly':'warn',
        'eqeqeq':'warn',
        'no-console':'off'
      },
      globals: {
        'jquery':true,
        'modernizr':true
      },
      envs: ['browser']
    }))
    .pipe(esLint.format());
});




// ****************************************************************************
// BrowserSync tasks.
// ****************************************************************************

// Start a server and provide auto refreshing and event synchronization.
// ----------------------------------------------------------------------------
gulp.task('browser-sync', function() {
  browserSync({proxy:localUrl});
});


// A task that will reload all connected devices, which can be called manually.
// ----------------------------------------------------------------------------
gulp.task('bs-reload', function() {
  browserSync.reload();
});




// ****************************************************************************
// Combo tasks.
// ****************************************************************************

// The default task that's typically run by full front-end devs.
// ----------------------------------------------------------------------------
gulp.task('default', ['browser-sync'], function() {
  gulp.watch(templates, ['bs-reload']);
  gulp.watch('_scss/**/*.scss', ['scss']);
  gulp.watch(jsWatch, function(e) {
    runSequence('js-lint', ['js-compile-global', 'js-compile-features'], 'bs-reload');
  });
});


// The js task that's typically run back-end devs working on js.
// ----------------------------------------------------------------------------
gulp.task('js', function() {
  gulp.watch(jsWatch, function(e) {
    runSequence('js-lint', ['js-compile-global', 'js-compile-features']);
  });
});
