var gulp = require('gulp');
var scss = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var cssmin = require('gulp-cssmin');
var insert = require('gulp-insert');
var livereload = require('gulp-livereload');
var fs = require("fs");
var metaStyle = "";


var input = './styles/scss/*';
var output = './';
var outputDebug = './styles/';

gulp.task('scss', function () {
  return gulp
    .src(input)
    .pipe(scss({
        onError: function(err) {return notify().write(err);}
        }))
    .pipe(prefix({
        browsers: ['> 1%','last 8 versions','Firefox >= 20'],
        cascade: false
    }))
    .pipe(gulp.dest(outputDebug))
    .pipe(cssmin())
    .pipe(insert.prepend(metaStyle))
    .pipe(gulp.dest(output))
    .pipe(livereload());
});


gulp.task('watch', function() {
    livereload.listen();
  return gulp
    .watch(input, ['scss'])
});
gulp.task('init',function() {
    metaStyle = fs.readFileSync("./styles/stylesheet_meta.css", "utf-8");
    console.log("added meta information");
    return gulp;
});

gulp.task('build', ['init', 'scss'])
gulp.task('default', ['init','scss', 'watch']);
