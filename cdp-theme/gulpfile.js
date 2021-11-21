const { series } = require('gulp'),
    gulp = require('gulp'),
    sass = require('gulp-sass')(require('sass')),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    rename = require('gulp-rename'),
    purgeCss = require('gulp-purgecss'),
    browserSync = require('browser-sync').create(),
    del = require('del'),
    headerComment = require('gulp-header-comment');

function clean() {
    return del([
        './style.css',
    ]);
}

function css() {
    return gulp.src('./css/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(cleanCSS({compatibility: 'edge'}))
        .pipe(headerComment(`
Theme Name: Conteuses de Pas
Author: Guillaume Mellet & Sébastien Picq
Version: 1.0
        `))
        .pipe(rename(function(path) {
            path.basename = "style";
            path.extname = ".css";
        }))
        /*.pipe(purgeCss({
            content: ['./!**!/!*.php']
        }))*/
        .pipe(gulp.dest('./'))
        .pipe(browserSync.stream());
}

exports.default = series(clean, css)