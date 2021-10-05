//デフォルトタスク　コマンド「gulp」
//※※※※以下任意コマンド※※※※
//デフォルトタスク(SSL化で表示の場合)　コマンド「gulp ssl」
//ブラウザシンク無し　コマンド「gulp watch」

const gulp = require('gulp');
const sass = require('gulp-sass');
const connect = require('gulp-connect-php');
const browserSync = require('browser-sync');
const plumber = require('gulp-plumber');
const uglify = require("gulp-uglify");
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const changed = require('gulp-changed');
const imagemin = require('gulp-imagemin');
const imageminJpg = require('imagemin-jpeg-recompress');
const imageminPng = require('imagemin-pngquant');
const imageminGif = require('imagemin-gifsicle');
const svgmin = require('gulp-svgmin');


//cssファイルの名称に「.min」を付け加える処理に必要なプラグイン
// const rename = require('gulp-rename');

// ディレクトリを定義
const dir = {
  route_pass: './',
  src: './_src',
  sass: './_src/sass',
  css: './css',
  common_sass: './_src/common/sass',
  common_css: './common/css',
  js_before: './_src/js',
  js: './js',
  common_js_before: './_src/common/js',
  common_js: './common/js',
  img_before: './_src/img',
  img: './img',
  common_img_before: './_src/common/img',
  common_img: './common/img',
}

// sassのコンパイル
gulp.task('sass', done => {
  gulp
    .src(dir.sass + '/*.scss')
    .pipe(sass({
      outputStyle: 'expanded',
    }).on('error', sass.logError))
    .pipe(autoprefixer({
      grid: true
    }))
    // .pipe(gulp.dest(dir.css))
    .pipe(cleanCSS())
    .pipe(gulp.dest(dir.css))
  done()
});

// common sassのコンパイル
gulp.task('common-sass', done => {
  gulp
    .src(dir.common_sass + '/*.scss')
    .pipe(sass({
      outputStyle: 'expanded',
    }).on('error', sass.logError))
    .pipe(autoprefixer({
      grid: true
    }))
    // .pipe(gulp.dest(dir.common_css))
    .pipe(cleanCSS())
    //cssファイルの名称に「.min」を付け加える処理
    // .pipe(rename({
    //   suffix: '.min',
    // }))
    .pipe(gulp.dest(dir.common_css))
  done()
});

// javascriptの圧縮
gulp.task('javascript', done => {
  gulp.src(dir.js_before + '/*.js')
    .pipe(plumber())
    .pipe(uglify())
    .pipe(gulp.dest(dir.js))
  done()
});

// common javascriptの圧縮
gulp.task('common-javascript', done => {
  gulp.src(dir.common_js_before + '/*.js')
    .pipe(plumber())
    .pipe(uglify())
    .pipe(gulp.dest(dir.common_js))
  done()
});


// jpg,png,gif画像の圧縮タスク
gulp.task('imagemin', (done) => {
  var srcGlob = dir.img_before + '/**/*.+(jpg|jpeg|png|gif)';
  var dstGlob = dir.img;
  gulp.src(srcGlob)
    .pipe(changed(dstGlob))
    .pipe(imagemin([
      imageminPng(),
      imageminJpg(),
      imageminGif({
        interlaced: false,
        optimizationLevel: 3,
        colors: 180
      })
    ]))
    .pipe(gulp.dest(dstGlob));
  done();
});
// svg画像の圧縮タスク
gulp.task('svgmin', (done) => {
  var srcGlob = dir.img_before + '/**/*.+(svg)';
  var dstGlob = dir.img;
  gulp.src(srcGlob)
    // .pipe(changed( dstGlob ))
    // .pipe(svgmin())
    .pipe(gulp.dest(dstGlob));
  done();
});
// jpg,png,gif画像の圧縮タスク
gulp.task('common-imagemin', (done) => {
  var srcGlob = dir.common_img_before + '/**/*.+(jpg|jpeg|png|gif)';
  var dstGlob = dir.common_img;
  gulp.src(srcGlob)
    .pipe(changed(dstGlob))
    .pipe(imagemin([
      imageminPng(),
      imageminJpg(),
      imageminGif({
        interlaced: false,
        optimizationLevel: 3,
        colors: 180
      })
    ]))
    .pipe(gulp.dest(dstGlob));
  done();
});
// svg画像の圧縮タスク
gulp.task('common-svgmin', (done) => {
  var srcGlob = dir.common_img_before + '/**/*.+(svg)';
  var dstGlob = dir.common_img;
  gulp.src(srcGlob)
    .pipe(changed(dstGlob))
    .pipe(svgmin())
    .pipe(gulp.dest(dstGlob));
  done();
});



//完了のお知らせ
gulp.task('log', done => {
  done()
});


//ページのリロード
gulp.task("reload", function (done) {
  browserSync.reload({
    notify: false
  });
  done();
});

//ブラウザシンクの立ち上げ
gulp.task('sync', (done) => {
  connect.server({
    port: 3000,
    base: './'
  }, function () {
    browserSync({
      proxy: 'localhost:3000',
      notify: false
    });
  });
  done();
});

//ブラウザシンクの立ち上げ（SSLで表示する場合）
gulp.task('sync-ssl', (done) => {
  connect.server({
    port: 3000,
    base: './'
  }, function () {
    browserSync({
      proxy: 'localhost:3000',
      https: true,
      notify: false
    });
  });
  done();
});





//変更を監視
gulp.task('watch', () => {
  gulp.watch(dir.sass + '/*.scss', gulp.task('sass'));
  gulp.watch(dir.common_sass + '/*.scss', gulp.task('common-sass'));
  gulp.watch(dir.common_sass + '/*.scss', gulp.task('sass'));
  gulp.watch(dir.js_before + '/*.js', gulp.task('javascript'));
  gulp.watch(dir.common_js_before + '/*.js', gulp.task('common-javascript'));
  gulp.watch(dir.route_pass + "*.php", gulp.task('reload'));
  gulp.watch(dir.route_pass + "*/*.php", gulp.task('reload'));
  gulp.watch(dir.common_css + "/*.css", gulp.task('reload'));
  gulp.watch(dir.common_js + "/*.js", gulp.task('reload'));
  gulp.watch(dir.css + "/*.css", gulp.task('reload'));
  gulp.watch(dir.js + "/*.js", gulp.task('reload'));


  gulp.watch(dir.img_before + '/**/*', gulp.task('imagemin'));
  gulp.watch(dir.img_before + '/**/*', gulp.task('svgmin'));
  gulp.watch(dir.img_before + '/**/*', gulp.task('reload'));

  gulp.watch(dir.common_img_before + '/**/*', gulp.task('common-imagemin'));
  gulp.watch(dir.common_img_before + '/**/*', gulp.task('common-svgmin'));
  gulp.watch(dir.common_img_before + '/**/*', gulp.task('reload'));

});


//デフォルトタスク(SSL化で表示の場合)　コマンド「gulp ssl」
gulp.task('ssl', gulp.series('sync-ssl', 'watch', function (done) {
  done();
}));

//デフォルトタスク　コマンド「gulp」
gulp.task('default', gulp.series('sync', 'watch', function (done) {
  done();
}));
