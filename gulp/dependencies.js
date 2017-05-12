/**
 * Dependency management
 * 
 * @author Solomon Culaste
 */

var gulp = require('gulp'),
    paths = gulp.paths,
    del = require('del');

/**
 * Command: gulp clear-temp
 * 
 * @description Deletes all the contents of the /temp folder.
 * This is usually a dependency task of 'copy-assets' to be executed first
 * to make sure that there are no unecessary files that are
 * being stored. 
 */
gulp.task('clear-temp', function () {
  return del(paths.temp + '**/*');
});

/**
 * Command: gulp copy-assets
 * 
 * @description Copies required packages from
 * bower_components and node_modules
 * to a temporary directory.
 */
gulp.task('copy-assets', ['clear-temp'], function() {
    
    /**
     * Bootstrap 4 JS file
     * Destination: Temporary folder
     */
    var stream = gulp.src(paths.bower + 'bootstrap/dist/js/bootstrap.js')
                    .pipe(gulp.dest(paths.temp + 'js/'));
    
    /**
     * Bootstrap 4 SCSS files
     * Destination: Temporary folder
     */
    gulp.src(paths.bower + 'bootstrap/scss/**/*.scss')
        .pipe(gulp.dest(paths.temp + 'sass/bootstrap4'));

    /**
     * Fontawesome font files
     * Destination: Assets folder
     */
    gulp.src(paths.bower + 'font-awesome/fonts/**/*.{ttf,woff,woff2,eof,svg}')
        .pipe(gulp.dest(paths.assets + 'fonts'));

    /**
     * Fontawesome SCSS files
     * Destination: Temporary folder
     */
    gulp.src(paths.bower + 'font-awesome/scss/*.scss')
        .pipe(gulp.dest(paths.temp + 'sass/fontawesome'));

    /**
     * jQuery JS file
     * Destination: Temporary folder
     */
    gulp.src(paths.bower + 'jquery/dist/jquery.js')
        .pipe(gulp.dest(paths.temp + 'js'));

    /**
     * _s JS files
     */
    gulp.src(paths.node + 'undescores-for-npm/js/*.js')
        .pipe(gulp.dest(paths.assets + '/js'));

    /**
     * Tether JS file
     * Destination: Temporary folder
     */
    gulp.src(paths.bower + 'tether/dist/js/tether.js')
        .pipe(gulp.dest(paths.temp + 'js'));

    /**
     * Tether CSS files
     * Destination: Temporary folder
     */
    gulp.src(paths.bower + 'tether/dist/css/*.css')
        .pipe(gulp.dest(paths.temp + 'css'));

    return stream;
});