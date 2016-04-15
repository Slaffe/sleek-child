var gulp = require('gulp');

var paths = {
	sass: 'sass/',
	js: 'js/',
	dest: 'public/',
	icons: 'public/icons/'
};

/**
 * SASS
 */
var sleekSASS = require('../sleek/gulp/sass.js');

gulp.task('sass', ['icons'], function () {
	sleekSASS(paths.sass + 'all.scss', paths.dest);
});

gulp.task('sass-only', function () {
	sleekSASS(paths.sass + 'all.scss', paths.dest);
});

/**
 * Icons
 */
var sleekIcons = require('../sleek/gulp/icons.js');

gulp.task('rewrite-icon-css', ['download-icons'], function () {
	sleekIcons.rewriteCSS(paths.icons, paths.sass);
});

gulp.task('download-icons', function () {
	sleekIcons.download('icons.json', paths.icons);
});

gulp.task('icons', ['rewrite-icon-css']);

/**
 * Styleguide
 */
var sleekStyleguide = require('../sleek/gulp/styleguide.js');

gulp.task('styleguide', function () {
	sleekStyleguide(paths.sass + 'all.scss', paths.dest);
});

/**
 * JS
 */
var sleekJS = require('../sleek/gulp/js.js');
var sleekJSHint = require('../sleek/gulp/jshint.js');

gulp.task('js', ['js-hint'], function () {
	sleekJS(paths.js, paths.dest);
});

gulp.task('js-hint', function () {
	sleekJSHint(paths.js);
});

 /**
  * Watch and default
  */
 gulp.task('default', ['sass', 'js', 'styleguide']);

 gulp.task('watch', function () {
 	gulp.watch(paths.sass + '**/*.scss', ['sass-only']);
 	gulp.watch(paths.js + '**/*.js', ['js']);
 	gulp.watch('icons.json', ['sass']);
 });
