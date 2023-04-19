let preprocessor = 'scss'; // Preprocessor (sass, scss, less, styl)
let fileswatch   = 'php,woff2'; // List of files extensions for watching & hard reload (comma separated)

const { src, dest, parallel, series, watch } = require('gulp');
const sass           = require('gulp-sass');
const scss           = require('gulp-sass');
const less           = require('gulp-less');
const styl           = require('gulp-stylus');
const cleancss       = require('gulp-clean-css');
const concat         = require('gulp-concat');
const browserSync    = require('browser-sync').create();
const uglify         = require('gulp-uglify-es').default;
const autoprefixer   = require('gulp-autoprefixer');
const newer          = require('gulp-newer');
const rsync          = require('gulp-rsync');
const del            = require('del');

// Local Server

function browsersync() {
	browserSync.init({
		proxy: "test.lukskrym.ru",
		notify: true,
		// online: false, // Work offline without internet connection
	})
}

// Custom Styles

function styles() {
	return src('assets/' + preprocessor + '/theme.*')
	.pipe(eval(preprocessor)())
	.pipe(concat('theme.min.css'))
	.pipe(autoprefixer({ overrideBrowserslist: ['last 10 versions'], grid: true }))
	.pipe(cleancss( {level: { 1: { specialComments: 0 } } }))
	.pipe(dest('assets/css'))
	.pipe(browserSync.stream())
}

// Scripts & JS Libraries

function scripts() {
	return src([
		'assets/libs/owl-carousel/dist/owl.carousel.min.js',
		'assets/libs/equalHeights/jquery.equalheights.min.js',
		'assets/libs/paraxify.min.js',
		'assets/libs/lazyload/lazyload.min.js',
		'assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js',
		'assets/libs/fotorama/fotorama.js',
		'assets/libs/mixitup2/jquery.mixitup.min.js',
		'assets/libs/wowjs/wow.min.js',
		'assets/libs/clamp.js',
		'assets/libs/nouislider/nouislider.min.js',
		'assets/libs/swiper/swiper-bundle.min.js',
		'assets/js/theme.js' // Always at the end
		])
	.pipe(concat('theme.min.js'))
	.pipe(uglify()) // Minify JS (opt.)
	.pipe(dest('assets/js'))
	.pipe(browserSync.stream())
}

// Watching

function startwatch() {
	watch('assets/' + preprocessor + '/**/*', parallel('styles'));
	watch(['assets/**/*.js', '!assets/js/*.min.js'], parallel('scripts'));
	watch(['**/*.{' + fileswatch + '}']).on('change', browserSync.reload);
}

exports.browsersync = browsersync;
exports.assets      = series(styles, scripts);
exports.styles      = styles;
exports.scripts     = scripts;
exports.default     = parallel(styles, scripts, browsersync, startwatch);
