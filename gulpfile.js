const { src, dest, watch, series } = require('gulp')
const sass = require('gulp-sass')(require('sass'))
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const terser = require('gulp-terser');
const browsersync = require('browser-sync').create();
// const purgecss = require('gulp-purgecss')


// const URL = 'http://localhost:8888/buildbite/'; // Techlove

// Compile sass files
function buildStyles() {
    return src('./assets/sass/screen.scss')
    .pipe(sass())
    .pipe(postcss([cssnano()]))
    // .pipe(purgecss({ content: ['*.html'] }))
    .pipe(dest('./assets/css/'))
}

// Compile js files
function buildScripts() {
    return src('/assets/js/app.js')
    .pipe(terser())
    .pipe(dest('./assets/js/'))
}

// browsersync tasks
// browsersync tasks
// function browsersyncServe() {
//     browsersync.init({
//         proxy: 'http://localhost:8888/buildbite/',
//     });
// }

// Watch function
function watchTask() {
    watch(['./assets/sass/components/**/*.scss', './assets/js/app.js'], buildStyles)
    // browserSync.init({
    //     proxy: URL
    // });
}

// Run the file
exports.default = series(buildStyles, watchTask)