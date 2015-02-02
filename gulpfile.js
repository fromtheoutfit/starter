// ****************************************************************************
// Plugins
// ****************************************************************************

var browserSync = require('browser-sync');
var concat      = require('gulp-concat');
var filter      = require('gulp-filter');
var gulp        = require('gulp');
var htmlReplace = require('gulp-html-replace');
var jsHint      = require('gulp-jshint');
var runSequence = require('run-sequence'); // Unnecessary once Gulp 4 is here.
var sass        = require('gulp-ruby-sass');
var stylish     = require('jshint-stylish');
var uglify      = require('gulp-uglify');




// ****************************************************************************
// Project Configuration
// ****************************************************************************

var config = {
  localUrl   : 'starter.dev:8888/', // This is what you setup in MAMP, etc.
  cssPath    : 'html/lib/css/',
  scssFile   : 'html/lib/scss/all.scss',
  jsPath     : 'html/lib/js/',
  jsProdFile : 'all.min.js',
  jsFiles    : [
    'html/lib/js/**/*.js',
    '!html/lib/js/vendor/**/*',
    '!html/lib/js/all.min.js'
  ],
  imagePath  : 'html/lib/img/**/*', // Currently unused.
  templateFiles : [
    'html/index.+(html|php)',
    // 'html/_templates/**/*.html', // As of right now, I *think* it's best if we DON'T allow the prep-templates task to work on these particular files. Why? Because we want the inline documentation and and the multiple script elements to stay put.
    'engine/expressionengine/snippets/default_site/**/*.html',
    'engine/expressionengine/templates/default_site/**/*.html'
  ]
};




// ****************************************************************************
// Styles Tasks
// ****************************************************************************

// Compile Scss.
gulp.task('scss', function() {
  return gulp.src(config.scssFile)
    .pipe(sass({style:'compressed', sourcemapPath:'../scss/'}))
    .on('error', function(err) {
      console.error(err.message);
    })
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
// Template Tasks
// ****************************************************************************

// Remove references to our many, individual JS files and replace them with a
// single reference to the concatenated + minified JS file, which has a rev
// query parameter whose value is set to the current unix timestamp. This allows
// us to cache-bust on the fly. Also strip out most of the documentation.
gulp.task('prep-templates', function() {
  return gulp.src(config.templateFiles, {base:'./'})
    .pipe(htmlReplace({
      'js': '/lib/js/'+config.jsProdFile+'?rev='+Date.now(),
      'docs': ''
    }))
    .pipe(gulp.dest('./'));
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
  gulp.watch('html/lib/scss/**/*.scss', ['scss']);
  gulp.watch(config.jsFiles, ['js-hint', 'bs-reload']);
  gulp.watch(config.templateFiles, ['bs-reload']);
});

gulp.task('go-prod', function() {
  runSequence('js-concat-uglify', 'prep-templates', 'browser-sync');
});
