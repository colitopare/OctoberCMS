const gulp = require("gulp");
const sass = require("gulp-sass");
const del = require("del");

// http://zetcode.com/gulp/sass/

gulp.task("styles", () => {
  return gulp
    .src("themes/olympos/assets/scss/**/*.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest("themes/olympos/assets/css"));
});

gulp.task("clean", () => {
  return del(["assets/css/style.css"]);
});

gulp.task("default", gulp.series(["clean", "styles"]));
