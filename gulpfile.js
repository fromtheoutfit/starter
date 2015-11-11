// ****************************************************************************
// Plugins
// ****************************************************************************

var browserSync  = require('browser-sync');
var autoprefixer = require('gulp-autoprefixer');
var concat       = require('gulp-concat');
var filter       = require('gulp-filter');
var gulp         = require('gulp');
var jsHint       = require('gulp-jshint');
var runSequence  = require('run-sequence'); // Unnecessary once Gulp 4 is here.
var sass         = require('gulp-sass');
var sourcemaps   = require('gulp-sourcemaps');
var stylish      = require('jshint-stylish');
var uglify       = require('gulp-uglify');




// ****************************************************************************
// Project Configuration
// ****************************************************************************

var config = {
  localUrl   : 'http://starter.vbox.bytheoutfit.com/', // This is what you setup in MAMP, etc.
  scssFile   : 'scss/all.scss',
  cssPath    : 'public/lib/css/',
  jsPath     : 'public/lib/js/',
  jsProdFile : 'all.min.js',
  jsFiles    : [
    'public/lib/js/**/*.js',
    '!public/lib/js/vendor/**/*',
    '!public/lib/js/all.min.js'
  ],
  imagePath  : 'public/lib/img/**/*', // Currently unused.
  templateFiles : [
    // It's *very* likely that you'll need to update the below paths on a per-
    // project basis. It's currently setup to watch template files and standard
    // ExpressionEngine files, but if your project isn't EE, those last two
    // lines are useless and probably need to be something different.
    'public/index.+(html|php)',
    'public/_templates/**/*.+(html|php)',
    'engine/expressionengine/snippets/default_site/**/*.html',
    'engine/expressionengine/templates/default_site/**/*.html'
  ]
};




// ****************************************************************************
// Styles Tasks
// ****************************************************************************

// Compile Scss.
gulp.task('scss', function() {
  gulp.src(config.scssFile)
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(config.cssPath))
    .pipe(filter('**/*.css'))
    .pipe(browserSync.reload({stream:true}));
});




// ****************************************************************************
// JavaScript Tasks
// ****************************************************************************

// Hint non-vendor JS files.
gulp.task('js-hint', function() {
  return gulp.src(config.jsFiles)
    .pipe(jsHint())
    .pipe(jsHint.reporter(stylish));
});

// Concatenate non-vendor JS files into one file, then minify it.
gulp.task('js-concat-uglify', function() {
  return gulp.src(config.jsFiles)
    .pipe(concat(config.jsProdFile))
    .pipe(gulp.dest(config.jsPath))
    .pipe(uglify())
    .pipe(gulp.dest(config.jsPath));
});







// ****************************************************************************
// BrowserSync Tasks
// ****************************************************************************

// Start a server and provide auto refreshing and action synchronization.
gulp.task('browser-sync', function() {
  browserSync({proxy:config.localUrl});
});

// A task that will reload all connected devices, which can be called manually.
gulp.task('bs-reload', function() {
  browserSync.reload();
});




// ****************************************************************************
// Combo Tasks
// ****************************************************************************

gulp.task('default', ['browser-sync'], function() {
  gulp.watch('scss/**/*.scss', ['scss']);
  gulp.watch(config.jsFiles, ['js-hint', 'bs-reload']);
  gulp.watch(config.templateFiles, ['bs-reload']);
});

gulp.task('go-prod', function() {
  runSequence('js-concat-uglify', 'prep-templates', 'browser-sync');
});
