var gulp =  require('gulp');
var concat = require('gulp-concat');

const scripts = [
    './node_modules/jquery/dist/jquery.min.js',
    './node_modules/lodash/lodash.min.js',
    'node_modules/moment/min/moment.min.js',
    './node_modules/bootstrap/dist/js/bootstrap.min.js',
];

const styles = [
    './node_modules/animate.css/animate.min.css',
    './node_modules/bootstrap/dist/css/bootstrap.min.css',
    './node_modules/tabler-icons/iconfont/tabler-icons.css'

]

const appStyles = [
    './styles/shared.css',
    './styles/header.css',

];

const appScripts = [
    './scripts/navigator.js',
    './scripts/shared.js',

];

gulp.task('scripts', function() {
  return gulp.src(scripts)
    .pipe(concat('libs.js'))
    .pipe(gulp.dest('./dist/'));
});

gulp.task('styles', function() {
    return gulp.src(styles)
      .pipe(concat('libs.css'))
      .pipe(gulp.dest('./dist/'));
  });

  gulp.task('appScripts', function() {
    return gulp.src(appScripts)
      .pipe(concat('app.js'))
      .pipe(gulp.dest('./dist/'));
  });
  
  gulp.task('appStyles', function() {
      return gulp.src(appStyles)
        .pipe(concat('app.css'))
        .pipe(gulp.dest('./dist/'));
    });


    var gulpCopy = require('gulp-copy');
var iconSourceFiles = ['./node_modules/tabler-icons/iconfont/fonts/*.*'];
var svgSourceFiles = ['./node_modules/tabler-icons/icons/*.*'];
var spriteSourceFiles = ['./node_modules/tabler-icons/tabler-sprite.svg', './node_modules/tabler-icons/tabler-sprite-nostroke.svg'];

gulp.task('copy-tabler-icons', function(){
  return gulp
  .src(iconSourceFiles)
  .pipe(gulpCopy('dist/fonts',{prefix:4}))
})
gulp.task('copy-tabler-svg', function(){
  return gulp
  .src(svgSourceFiles)
  .pipe(gulpCopy('dist/svg',{prefix:3}))
})

gulp.task('copy-tabler-sprite', function(){
  return gulp
  .src(spriteSourceFiles)
  .pipe(gulpCopy('dist/sprites',{prefix:3}))
})

  gulp.task('default', gulp.parallel('scripts', 'styles', 'appScripts', 'appStyles', 'copy-tabler-icons', 'copy-tabler-svg', 'copy-tabler-sprite'));