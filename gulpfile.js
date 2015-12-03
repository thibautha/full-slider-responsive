var gulp = require('gulp'),
    sass = require('gulp-sass'),
    notify = require('gulp-notify'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    rename = require("gulp-rename"),
    minifyCss = require('gulp-minify-css'),
    uglify = require('gulp-uglify'),
    concatCss = require('gulp-concat-css'),
    plumber = require('gulp-plumber');

//Watch task
gulp.task('watch', ['styles'], function() {
    gulp.watch(['app/sass/**/*.scss'], ['styles']);

});

gulp.task('dist', ['concat', 'minify'], function(){

});

gulp.task('styles', function() {
    gulp.src('app/sass/main.scss')
        .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
        .pipe(sourcemaps.init())
            .pipe(sass().on('error', sass.logError))
            .pipe(autoprefixer({
                browsers: ['last 5 versions']
            }))
        .pipe(sourcemaps.write('maps/'))
        .pipe(gulp.dest('app/sass/'))
        .pipe(notify({
            title: 'Scss',
            message: 'Scss Passed.',
        }));
});

gulp.task('concat', function() {
    gulp.src('app/scripts/*.js')
        .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
            .pipe(uglify())
            .pipe(rename({
                extname: '.min.js'
            }))
        .pipe(gulp.dest('app/dist/'))
        .pipe(notify({
            title: 'Uglify',
            message: 'JS uglify.',
        }));
});

gulp.task('minify', function() {
    gulp.src(['node_modules/normalize.css/normalize.css','app/sass/*.css'])
        .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
        .pipe(concatCss("main.css"))
        .pipe(minifyCss({compatibility: 'ie8'}))
        .pipe(rename({
            extname: '.min.css'
        }))
        .pipe(gulp.dest('app/dist'))
        .pipe(notify({
            title: 'Minify',
            message: 'Css mini'
        }));
});
