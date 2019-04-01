"use strict";

var gulp = require("gulp");
var sass = require("gulp-sass");
var plumber = require("gulp-plumber");
var postcss = require("gulp-postcss");
var autoprefixer = require("autoprefixer");
var server = require("browser-sync").create();
var csso = require("gulp-csso");
var rename = require("gulp-rename");
var imagemin = require("gulp-imagemin");
var webp = require("gulp-webp");
var svgstore = require("gulp-svgstore");
var posthtml = require("gulp-posthtml");
var include = require("posthtml-include");
var del = require("del");
var svgmin = require("gulp-svgmin");
var browserSync   = require('browser-sync');

gulp.task("css", function () {
  return gulp.src("sass/style.scss")
    .pipe(plumber())
    .pipe(sass())
    .pipe(postcss([
      autoprefixer()
    ]))

    .pipe(csso())
    .pipe(rename("style.css"))
    .pipe(gulp.dest("./"))
    .pipe(browserSync.stream());
});

gulp.task("sprite", function () {
  return gulp.src(["source/img/icon-*.svg", "source/img/bg-*.svg", "source/img/logo-*.svg"])
    .pipe(svgstore({
      inlineSvg: true,

    }))

  .pipe(rename("sprite.svg"))
  .pipe(gulp.dest("build/img"));
});

gulp.task("html", function () {
  return gulp.src("source/*.html")
    .pipe(posthtml([
      include()
    ]))
    .pipe(gulp.dest("build"));
});

gulp.task("refresh", function (done) {
  browserSync.reload();
  done();
});


gulp.task('browser-sync', function() {
	browserSync({
		proxy: "http://maximus1",
		notify: false,
		//  open: true,
		//  tunnel: true,
    //  tunnel: "gulp-wp-fast-start.http://maximus1", //Demonstration page: http://gulp-wp-fast-start.localtunnel.me


  })

  gulp.watch("sass/**/*.{scss,sass}", gulp.series("css"));
  gulp.watch("img/icon-*.svg", gulp.series("sprite", "html"));
  gulp.watch("*.php", gulp.series("refresh"));
});



gulp.task("images", function () {
  return gulp.src("source/img/**/*.{png,jpg,svg}")
  .pipe(imagemin([
    imagemin.optipng({optimizationLevel: 3}),
    imagemin.jpegtran({progressive: true}),
    imagemin.svgo()
  ]))
  .pipe(gulp.dest("source/img"));
});

gulp.task("webp", function () {
  return gulp.src("source/img/**/*.{png,jpg}")
    .pipe(webp({quality: 80}))
    .pipe(gulp.dest("source/img"));
});

gulp.task("build", gulp.series(
  "css",
  "html"
));

gulp.task("start", gulp.series("build", "browser-sync"));
