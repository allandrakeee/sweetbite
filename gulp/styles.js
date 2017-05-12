/**
 * Tasks for style assets
 * 
 * @author Solomon Culaste
 */

var gulp = require('gulp'),
    paths = gulp.paths,
    plumber = require('gulp-plumber'),
    sourcemaps = require('gulp-sourcemaps'),
    sassGlob = require('gulp-sass-glob'),
    sass = require('gulp-sass'),
    rename = require('gulp-rename');

/**
 * Command: gulp sass
 * 
 * @description Compiles Public SCSS files in CSS
 */
gulp.task('sass', function() {

    var stream = gulp.src(paths.dev + 'sass/*.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(sassGlob())
        .pipe(sass())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(paths.assets + 'css'))
        .pipe(rename('custom-editor-style.css'));

    return stream;

});