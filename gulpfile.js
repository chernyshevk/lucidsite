var gulp = require('gulp');
var rename = require('gulp-rename');
var sass = require('gulp-sass');

function style(done) {

    gulp.src('./scss/style.scss')
        .pipe(sass({
            errorLogToConsole: true
        }))
        .on('error', console.error.bind(console))
        .pipe(rename('fonts.css'))
        .pipe(rename('main.css'))
        .pipe(gulp.dest('./css/'));
    done();
}

gulp.task(style);