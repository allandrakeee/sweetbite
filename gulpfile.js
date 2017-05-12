'use strict';

var gulp = require('gulp');

/**
 * Defining base paths
 */
gulp.paths = {
    node: './node_modules/',
    bower: './bower_components/',
    temp: './temp/',
    dev: './assets-dev/',
    assets: './assets/'
};

/**
 * Require the ./gulp directory
 */
require('require-dir')('./gulp');