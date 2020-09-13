var gulp = require("gulp"),
  rimraf = require("rimraf"),
  concat = require("gulp-concat"),
  cssmin = require("gulp-cssmin"),
  uglify = require("gulp-uglify"),
  sass = require("gulp-sass"),
  runSequence = require("run-sequence");

var paths = {
  root: "./",
};

paths.js = paths.root + "vendor/js/*.js";
paths.minJs = paths.root + "assets/js/*.min.js";
paths.css = paths.root + "assets/css/*.css";
paths.minCss = paths.root + "assets/css/*.min.css";
paths.concatJsDest = paths.root + "assets/js/base.min.js";
paths.concatCssDest = paths.root + "assets/css/base.min.css";

gulp.task("default", function (done) {
  runSequence("clean", "sass", "min", function () {
    done();
  });
});

gulp.task("clean:js", function (cb) {
  rimraf(paths.concatJsDest, cb);
});
gulp.task("clean:css", function (cb) {
  rimraf(paths.concatCssDest, cb);
});
gulp.task("clean", ["clean:js", "clean:css"]);
gulp.task("sass", function () {
  return gulp.src("./vendor/scss/*.scss").pipe(sass()).pipe(gulp.dest("./assets/css"));
});
gulp.task("min:js", function () {
  return gulp
    .src([paths.js, "!" + paths.minJs], { base: "." })
    .pipe(concat(paths.concatJsDest))
    .pipe(uglify())
    .pipe(gulp.dest("."));
});
gulp.task("min:css", function () {
  return gulp
    .src([paths.css, "!" + paths.minCss])
    .pipe(concat(paths.concatCssDest))
    .pipe(cssmin())
    .pipe(gulp.dest("."));
});
gulp.task("min", ["min:js", "min:css"]);
