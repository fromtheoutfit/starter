// ****************************************************************************
// Plugins
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




// ****************************************************************************
// Project Configuration
// ****************************************************************************

var localUrl      = 'http://starter.vbox.bytheoutfit.com/';
var scssFile      = 'scss/all.scss';
var cssPath       = 'html/lib/css/';
var jsAllFiles    = 'html/lib/js/**/*.js';
var jsVendor      = 'html/lib/js/**/*vendor*';
var jsCompiled    = 'html/lib/js/compiled/**/*';
var jsHintTarget  = [
                      jsAllFiles,
                      '!' + jsCompiled,
                      '!' + jsVendor
                    ];
var templateFiles = [
                      'html/**/*.+(html|php)',
                      '+(snippets|templates)/default_site/**/*.html',
                      'craft/templates/**/*.html'
                    ];




// ****************************************************************************
// Styles Tasks
// ****************************************************************************

// Compile Scss.
gulp.task('scss', function() {
  gulp.src(scssFile)
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compressed'})
    .on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(cssPath))
    .pipe(filter('**/*.css'))
    .pipe(browserSync.reload({stream:true}));
});




// ****************************************************************************
// JavaScript Tasks
// ****************************************************************************

// Hint non-vendor JS files.
gulp.task('js-hint', function() {
  return gulp.src(jsHintTarget)
    .pipe(jsHint())
    .pipe(jsHint.reporter(stylish));
});




// ****************************************************************************
// BrowserSync Tasks
// ****************************************************************************

// Start a server and provide auto refreshing and action synchronization.
gulp.task('browser-sync', function() {
  browserSync({proxy:localUrl});
});

// A task that will reload all connected devices, which can be called manually.
gulp.task('bs-reload', function() {
  browserSync.reload();
});




// ****************************************************************************
// Combo Tasks
// ****************************************************************************

// maybe a 'css' task for recompiling sass
// and a 'js' task for all js stuff
// and a default task for everything
// that way any of us can run the single tasks quickly, or one combo-task

gulp.task('default', ['browser-sync'], function() {
  gulp.watch('scss/**/*.scss', ['scss']);
  gulp.watch(jsHintTarget, 'js-hint', 'bs-reload']);
  gulp.watch(templateFiles, ['bs-reload']);
});
