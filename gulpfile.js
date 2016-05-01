/*var gulp = require('gulp'),
    gutil = require('gulp-util'),
    notify = require('gulp-notify'),
    watch = require('gulp-watch'),
    sass = require('gulp-ruby-sass'),
    changed = require('gulp-changed'),
    autoprefixer = require('gulp-autoprefixer');

var base_path_assets = 'resources/assets/';
var base_path_styles = 'public/';

var target = {*/
   // sass_watch  : base_path_assets + 'scss/*/*.scss',
  //  sass_src    : base_path_assets + 'scss/*.scss',	// all sass files
  //  css_dest    : base_path_styles + 'css' 			// where to put minified css
//};
/*
gulp.task('sass', function() {
    return gulp.src(target.sass_src)
        .pipe(changed(target.css_dest))
        .pipe(sass({ style: 'compressed' }).on('error', gutil.log))
        .pipe(autoprefixer(
            'last 2 version',
            '> 1%',
            'ie 8',
            'ie 9',
            'ios 6',
            'android 4'
        ))
        .pipe(gulp.dest(target.css_dest))
        .pipe(notify('css done'));
});

gulp.task('default', function() {
    gulp.watch(target.sass_watch, ['sass']);
    gulp.watch(target.sass_src, ['sass']);
});

    */

var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix.sass('app.scss');
    
});