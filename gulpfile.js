'use strict';
var gulp = require('gulp');
var sass = require('gulp-ruby-sass');
var del = require('del');
var watch = require('gulp-watch');
var batch = require('gulp-batch');

gulp.task('compileSass', function () {
  return sass('sass/style.scss')
    .on('error', sass.logError)
    .pipe(gulp.dest('stylesheets/'));
});

gulp.task('clean', function(){
  del(['stylesheets/*css']);
});

gulp.task('default', ['clean'], function(){
  gulp.start('compileSass');
});

gulp.task('watch', function () {
  watch('**/*.scss', batch(function (events, done) {
    gulp.start('default', done);
  }));
});
