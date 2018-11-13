'use strict';

const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
const sass = require('gulp-sass');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const browserSync = require('browser-sync');
const plumber = require('gulp-plumber');
const babel = require('gulp-babel');
const sourecemaps = require('gulp-sourcemaps');

gulp.task('serve', ['sass', 'js-watch'], () => {
  browserSync.init({
    proxy: "devhm.com"
  });

  gulp.watch('src/assets/sass/**/*.scss', ['sass']);
  gulp.watch('src/js/*.js', ['js-watch']);
  gulp.watch("./**/*.php").on('change', browserSync.reload);
});

gulp.task('sass', () => {
  return gulp.src('src/assets/sass/main.scss')
    .pipe(sourecemaps.init())
    .pipe(plumber())
    .pipe(sass())
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(concat('style.min.css'))
    .pipe(sourecemaps.write("."))
    .pipe(gulp.dest('dist/css'))
    .pipe(browserSync.stream());
});

gulp.task('jsMinify', () => {
  return gulp.src('src/js/*.js')
    .pipe(sourecemaps.init())
    .pipe(plumber())
    .pipe(babel({
      "presets": ["@babel/env"],
    }))
    .pipe(uglify())
    .pipe(concat("all.js"))
    .pipe(sourecemaps.write("."))
    .pipe(gulp.dest('dist/js'));
});

gulp.task('js-watch', ['jsMinify'], done => {
  browserSync.reload();
  done();
});

gulp.task('default', [
  'serve'
]);