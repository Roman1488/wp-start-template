'use strict';

var gulp         = require('gulp');
var sass         = require('gulp-sass');
var cssmin       = require('gulp-cssmin');
var rename       = require('gulp-rename');
var concat       = require('gulp-concat');
var uglify       = require('gulp-uglify');
var browserSync  = require('browser-sync');
var autoprefixer = require('gulp-autoprefixer');
var del          = require('del');
var font2css     = require('gulp-font2css').default;
var notify       = require("gulp-notify");
var concatCss    = require('gulp-concat-css');
var imagemin     = require('gulp-imagemin');


gulp.task('styles', function() {
    return gulp.src('scss/**/*.scss')
        .pipe(sass({ style: 'expanded' }).on('error', sass.logError))
        .pipe(autoprefixer('last 2 version'))
        .pipe(concatCss("../css/style.css"))
        .pipe(gulp.dest('../css'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(cssmin())
        .pipe(gulp.dest('../css'))
        .pipe(notify({ message: 'SASS Compiled' }))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('fonts', function() {
    return gulp.src('fonts/**/*.{otf,ttf,woff,woff2}')
        .pipe(font2css())
        .pipe(concat('fonts.css'))
        .pipe(gulp.dest('../fonts'))
});

gulp.task('scripts', function() {
    return gulp.src([
        'libs/tether/dist/js/tether.min.js',
        'libs/bootstrap/dist/js/bootstrap.min.js',
        'js/scripts.js'
        ])
        .pipe(concat('scripts.js'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(uglify())
        .pipe(gulp.dest('../js'))
        .pipe(notify({ message: 'Scripts are built' }))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('images', function() {
    return gulp.src('img/*.*')
        .pipe(imagemin())
        .pipe(gulp.dest('../img'))
        .pipe(notify({ message: 'Images have been optimized' }))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('browser-sync', function() {
    browserSync({
        proxy: "http://localhost/",
        notify: true
    });
});

gulp.task('watch', ['browser-sync', 'styles', 'scripts', 'fonts', 'images'], function() {
    gulp.watch('scss/**/*.scss', ['styles']);
    gulp.watch('js/*.js', ['scripts']);
    gulp.watch('img/*', ['images']);
    gulp.watch('fonts/*', ['fonts']);
});

gulp.task('default', ['watch']);