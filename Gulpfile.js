/*
 * gulp task requirements
 */
    var gulp = require('gulp');
    var watch = require('gulp-watch');


/*
 * css task requirements
 */
    var sass = require('gulp-sass');
    var autoprefixer = require('gulp-autoprefixer');
    var cssnano = require('gulp-cssnano');

/*
 * css paths
 */
    var paths = {
        scss: 'sass/*.scss'
    };

/*
 * css compliler
 */
    gulp.task('css', function () {
        var processors = [
            autoprefixer,
            cssnano
        ];
        return gulp.src(paths.scss)
            .pipe(sass().on('error', sass.logError))
            .pipe(autoprefixer())
            .pipe(cssnano())
            .pipe(gulp.dest(''));
    });
    gulp.task('watch-styles', function() {
      gulp.watch('sass/**/*.*', ['css']);
    });

/*
 * javascript task requirements
 */
    var concat = require('gulp-concat');
    var uglify = require('gulp-uglify');

/*
 * javascript compliler
 */
    gulp.task('concat-scripts', function() {
        return gulp.src([
            './js/!(theme)*.js',
            './js/theme.js'
        ])
        .pipe(concat('./js/scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(''));
    });