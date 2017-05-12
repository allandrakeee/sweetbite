/**
 * This is for watching files
 * on changes so that we can do
 * some actions like concatenating
 * and uglifying scripts and/or styles
 * 
 * @author Solomon Culaste
 */

var gulp = require('gulp'),
    paths = gulp.paths,
    watch = require('gulp-watch');

/**
 * Command: gulp watch
 * 
 * @description Compile first all styles and scripts
 * before starting the watcher.
 */
gulp.task(
    'watch',
    [
        'sass',
        'scripts'
    ],
    function () {

        /**
         * Watch SCSS dev files
         */
        gulp.watch(paths.dev + 'sass/**/*.scss', ['sass']);

        /**
         * Watch JS dev files
         */
        gulp.watch(paths.dev + 'js/**/*.js', ['scripts']);

    }
);