var gulp = require('gulp');
var imagemin = require('gulp-imagemin');
var pngcrush = require('imagemin-pngcrush');
var minifycss = require('gulp-minify-css');
var sass = require('gulp-sass');


gulp.task('sass', function(){
    gulp.src('app/assets/sass/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('public/assets/css'))
});

gulp.task('image_min', function(){
    gulp.src('public/assets/images/listings/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngcrush()]
        }))
        .pipe(gulp.dest('public/dist/img'));
});

gulp.task('default', function () {
    gulp.run('sass');

    gulp.watch('public/assets/sass/*.scss', function(){
        gulp.run('sass');
    });
});