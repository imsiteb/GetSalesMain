"use strict"

const {src, dest} = require("gulp")
const gulp = require("gulp")
const autoprefixer = require("gulp-autoprefixer")
const cssbeautify = require("gulp-cssbeautify");
const removeComments = require('gulp-strip-css-comments');
const rename = require("gulp-rename");
const rigger = require("gulp-rigger")
const sass = require("gulp-sass")(require('sass'));
const cssnano = require("gulp-cssnano");
const uglify = require("gulp-uglify");
const plumber = require("gulp-plumber");
const imagemin = require("gulp-imagemin");
const del = require("del");
const imagewebp = require("gulp-webp")
const browserSync = require("browser-sync").create();

/* Paths */
const srcPath = "src/"
const distPath = "dist/"


const path = {
    build: {
        html: distPath,
        css: distPath + "css/",
        js: distPath + "js/",
        images: distPath + "img/",
        fonts: distPath + "fonts/"
    },
    src: {
        html: srcPath + "*.html",
        css: srcPath + "scss/*.scss",
        js: srcPath + "js/*.js",
        images: srcPath + "img/**/*.{jpg,png,svg,gif,ico,webp,webmanifest,xml,json}",
        fonts:  srcPath + "fonts/**/*.{eot,woff,woff2,ttf,svg}"
    },
    watch: {
        html:   srcPath + "**/*.html",
        js:     srcPath + "js/**/*.js",
        css:    srcPath + "scss/**/*.scss",
        images: srcPath + "img/**/*.{jpg,png,svg,gif,ico,webp,webmanifest,xml,json}",
        fonts:  srcPath + "fonts/**/*.{eot,woff,woff2,ttf,svg}"
    },
    clean: "./" + distPath
}

function serve() {
    browserSync.init({
        server: {
            baseDir: "./" + distPath
        }
    });
}


function html() {
    return src(path.src.html, {base: srcPath})
        .pipe(plumber())
        .pipe(dest(path.build.html))
        .pipe(browserSync.reload({stream: true}));
}

function css() {
    return src(path.src.css, {base: srcPath + "scss/"})
        .pipe(plumber())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cssbeautify())
        .pipe(dest(path.build.css))
        .pipe(cssnano({
            zindex: false,
            discardComments: {
                removeAll: true
            }
        }))
        .pipe(removeComments())
        .pipe(rename({
            suffix: ".min",
            extname: ".css"
        }))
        .pipe(dest(path.build.css))
        .pipe(browserSync.reload({stream: true}));
}

function js() {
    return src(path.src.js, {base: srcPath + "js/"})
        .pipe(plumber())
        .pipe(rigger())
        .pipe(dest(path.build.js))
        .pipe(uglify())
        .pipe(rename({
            suffix: ".min",
            extname: ".js"
        }))
        .pipe(dest(path.build.js))
        .pipe(browserSync.reload({stream: true}));
}

function images() {
    return src(path.src.images, {base: srcPath + "img/"})
        .pipe(imagemin([
            imagemin.gifsicle({interlaced: true}),
            imagemin.mozjpeg({quality: 75, progressive: true}),
            imagemin.optipng({optimizationLevel: 5}),
            imagemin.svgo({
                plugins: [
                    {removeViewBox: true},
                    {cleanupIDs: false}
                ]
            })
        ]))
        .pipe(dest(path.build.images))
        .pipe(browserSync.reload({stream: true}));
}

function webpImages() {
    return src(path.src.images, {base: srcPath + "img/"})
    .pipe(imagewebp())
    .pipe(dest(path.build.images))
 }

function fonts() {
    return src(path.src.fonts, {base: srcPath + "fonts/"})
    .pipe(dest(path.build.fonts))
    .pipe(browserSync.reload({stream: true}));
}

function clean() {
    return del(path.clean)
}

function watchFiles() {
    gulp.watch([path.watch.html], html)
    gulp.watch([path.watch.css], css)
    gulp.watch([path.watch.js], js)
    gulp.watch([path.watch.images], images)
    gulp.watch([path.watch.fonts], fonts)
}

const build = gulp.series(clean, gulp.parallel(html, css, js, images, fonts))
const watch = gulp.parallel(build, watchFiles, serve)


exports.html = html
exports.css = css
exports.js = js
exports.images = images
exports.webpImages = webpImages
exports.fonts = fonts
exports.clean = clean
exports.build = build
exports.watch = watch
exports.default = watch