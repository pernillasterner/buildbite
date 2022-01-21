const { src, dest, watch, series } = require('gulp')
const sass = require('gulp-sass')(require('sass'))
// const purgecss = require('gulp-purgecss')


// Compile sass file
function buildStyles() {
    return src('./assets/sass/screen.scss')
    .pipe(sass())
    // .pipe(purgecss({ content: ['*.html'] }))
    .pipe(dest('./assets/css/'))
}


// Watch function
function watchTask() {
    watch(['./assets/sass/components/**/*.scss'], buildStyles)
}

// Run the file
exports.default = series(buildStyles, watchTask)
