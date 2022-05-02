import gulp from 'gulp';
import imagemin from 'gulp-imagemin';
import webp from 'gulp-webp';
import minify from 'gulp-minify';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
const sass = gulpSass(dartSass);

const paths = {
    src: {
        'scss' : 'assets/src/scss/**/*.scss',
        'js': 'assets/src/js/*.js',
        'jsLibs': 'assets/src/js/libs/*.js',
        'img': 'assets/src/img/**/*',
    },
    dist: {
        'css': 'assets/dist/css/',
        'js': 'assets/dist/js/',
        'img': 'assets/dist/img/',
    }
}

gulp.task('sass', function() {
    return gulp.src(paths.src.scss)
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(gulp.dest(paths.dist.css));
});

gulp.task('js', async function(){
    return gulp.src(paths.src.js)
        .pipe(minify({
            noSource: true, 
            ext: {
                min: '.min.js'
            }
        }))
        .pipe(gulp.dest(paths.dist.js));
});

gulp.task('jsLib', async function(){
    return gulp.src(paths.src.jsLibs)
        .pipe(minify({
            noSource: true, 
            ext: {
                min: '.min.js'
            },
            ignoreFiles: ['*.min.js']
        }))
        .pipe(gulp.dest(paths.dist.js));
});

gulp.task('img', async function(){
    gulp.src(paths.src.img)
        .pipe(webp())
        .pipe(imagemin())
        .pipe(gulp.dest(paths.dist.img));
});

gulp.task('watch', function(){
    gulp.watch(paths.src.scss, gulp.series('sass'));
    gulp.watch(paths.src.js, gulp.series('js'));
    gulp.watch(paths.src.jsLibs, gulp.series('jsLib'));
    gulp.watch(paths.src.img, gulp.series('img'));
});