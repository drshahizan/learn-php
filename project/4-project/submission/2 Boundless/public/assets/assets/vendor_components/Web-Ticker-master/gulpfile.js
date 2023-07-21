var gulp = require('gulp'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    notify = require('gulp-notify');

gulp.task('default', function() {
    gulp.start('scripts');
});


gulp.task('scripts', function() {

  return gulp.src([
      'jquery.webticker.js'
      ])
    .pipe(jshint('.jshintrc'))
    .pipe(jshint.reporter('default'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify()).on('error', errorHandler)
    .pipe(gulp.dest('.',{overwrite: true}))
    .pipe(notify({ message: 'Scripts task complete' }));
});

// Watch
gulp.task('watch', function() {
 
  // Watch .js files
  gulp.watch('jquery.webticker.js', ['scripts']);
 
});

// Handle the error
function errorHandler (error) {
  console.log(error.toString());
  this.emit('end');
}