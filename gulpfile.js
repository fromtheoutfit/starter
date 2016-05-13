// ****************************************************************************
// Tasks you can run on the command line and what they'll do for you.
// ****************************************************************************
//
// 'gulp':
//   - creates a server that points to localUrl (defined below) and makes
//     localhost:3000 and [your IP address]:3000 available to devices on your
//     wifi network.
//   - watches for template changes and refreshes page(s).
//   - watches for js changes, hints js, compiles js, and refreshes page(s).
//   - watches for scss changes, compiles scss, and injects styles.
//
// 'gulp js':
//   - watches for js changes, hints js, and compiles js.
//
// 'gulp scss':
//   - compiles scss to css, overwriting all.css and all.css.map. ♥ Michael.




// ****************************************************************************
// Plugins.
// ****************************************************************************

var browserSync  = require('browser-sync');
var autoprefixer = require('gulp-autoprefixer');
var filter       = require('gulp-filter');
var gulp         = require('gulp');
var jsHint       = require('gulp-jshint');
var runSequence  = require('run-sequence'); // Unnecessary once Gulp 4 is here.
var sass         = require('gulp-sass');
var sourcemaps   = require('gulp-sourcemaps');
var stylish      = require('jshint-stylish');
var concat       = require('gulp-concat');
var rename       = require('gulp-rename');
var uglify       = require('gulp-uglify');
var fs           = require('fs');
var path         = require('path');




// ****************************************************************************
// Project configuration.
// ****************************************************************************

var localUrl        = 'http://starter.vbox.bytheoutfit.com/';
var libPath         = 'html/lib/'
var scssFile        = 'scss/all.scss';
var cssPath         = libPath + 'css/';
var jsPathCompiled  = libPath + 'js/';
var jsPathFeatures  = 'js/features/';
var jsFilesGlobal   = 'js/global/**/*.js';
var jsDevFiles      = ['js/**/*.js', '!js/**/*vendor*'];
var templates       = [
                        'html/**/*.+(html|php)',
                        '+(snippets|templates)/default_site/**/*.html',
                        'craft/templates/**/*.html'
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
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(cssPath))
    .pipe(filter('**/*.css'))
    .pipe(browserSync.reload({stream:true}));
});




// ****************************************************************************
// JavaScript tasks.
// ****************************************************************************

// Concatenate and minify all JS global files.
// ----------------------------------------------------------------------------
gulp.task('js-compile-global', function() {
  return gulp.src(jsFilesGlobal)
    .pipe(concat('global.js'))
    // .pipe(gulp.dest(jsPathCompiled)) // Also save a non-minified version.
    .pipe(rename({suffix:'.min'}))
    .pipe(uglify({mangle:false}))
    .pipe(gulp.dest(jsPathCompiled));
});


// Concatenate and minify all JS features files.
// ----------------------------------------------------------------------------
function getFolders(dir) {
  return fs.readdirSync(dir).filter(function(file) {
    return fs.statSync(path.join(dir, file)).isDirectory();
  });
}
gulp.task('js-compile-features', function() {
  var folders = getFolders(jsPathFeatures);
  var tasks   = folders.map(function(folder) {
    return gulp.src(path.join(jsPathFeatures, folder, '**/*.js'))
      .pipe(concat(folder + '.js'))
      // .pipe(gulp.dest(jsPathCompiled)) // Also save a non-minified version.
      .pipe(rename({suffix:'.min'}))
      .pipe(uglify({mangle:false}))
      .pipe(gulp.dest(jsPathCompiled));
  });
  return tasks;
});


// Hint non-vendor JS files.
// ----------------------------------------------------------------------------
gulp.task('js-hint', function() {
  return gulp.src(jsDevFiles)
    .pipe(jsHint())
    .pipe(jsHint.reporter(stylish));
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
  gulp.watch('scss/**/*.scss', ['scss']);
  gulp.watch(jsDevFiles, function(e) {
    runSequence('js-hint', ['js-compile-global', 'js-compile-features'], 'bs-reload');
  });
});


// The js task that's typically run back-end devs working on js.
// ----------------------------------------------------------------------------
gulp.task('js', function() {
  gulp.watch(jsDevFiles, function(e) {
    runSequence('js-hint', ['js-compile-global', 'js-compile-features']);
  });
});
