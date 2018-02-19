var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('default', function() {
        gulp.src('resources/sass/**/*.scss')
            .pipe(sass({ includePaths: ['node_modules' ] }).on('error', sass.logError))
            .pipe(sass().on('error', sass.logError))
            .pipe(gulp.dest('./public/css/'));
});