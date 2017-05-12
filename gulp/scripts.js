/**
 * Tasks for script assets
 * 
 * @author Solomon Culaste
 */

var gulp = require('gulp'),
    paths = gulp.paths,
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify');

/**
 * Command: gulp scripts
 * 
 * @description Uglifies and concat all admin JS dev files into one
 */
gulp.task('scripts', function() {

    var scripts = [

        /**
         * jQuery JS File
         */
        paths.temp + 'js/jquery.js',

        /**
         * Tether JS
         * Must be loaded before Bootstrap 4
         */
        paths.temp + 'js/tether.js',

        /**
         * Bootstrap 4 JS
         */
        paths.temp + 'js/bootstrap.js',

        /**
         * WP skip link focus fix
         */
        paths.temp + 'js/skip-link-focus-fix.js',

        /**
         * Theme core JS files
         */
        paths.dev + 'js/**/*.js',

        /**
         * Exclude customizer.js
         */
        '!' + paths.dev + 'js/customizer.js'
    ];

    // Uncomment this out if you already want to uglify the sweetbite-booking-public.js
    /**
     * Concatenates and minify all the scripts that are included
     * in the 'scripts' variable into one file ('theme.js')
     * 
     * Destination: paths.assets + 'js/'
     */
    // gulp.src(scripts)
    //     .pipe(concat('theme.min.js'))
    //     .pipe(uglify())
    //     .pipe(gulp.dest(basePaths.prod + 'js/'));

    /**
     * Concatenates all the scripts that are included
     * in the 'scripts' variable into one file ('theme.js')
     * 
     * Destination: paths.assets + 'js/'
     */
    gulp.src(scripts)
        .pipe(concat('theme.js'))
        .pipe(gulp.dest(paths.assets + 'js/'));

});