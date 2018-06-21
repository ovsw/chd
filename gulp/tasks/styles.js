var gulp  = require('gulp'),
// postcss = require('gulp-postcss'),
// fs = require('fs'),
// autoprefixer = require('autoprefixer'),
// cssvars = require('postcss-simple-vars'),
// nested = require('postcss-nested'),
// cssimport = require('postcss-import'),
// csscolor = require('postcss-color-function'),
// mixins = require('postcss-mixins'),
// sourcemaps = require('gulp-sourcemaps');

 purgecss = require('gulp-purgecss');

 gulp.task('purgecss', () => {
  return gulp
    .src('./css/**/*.css')
    .pipe(
      purgecss({
        content: ['./**/*.php', './**/*.inc', './js/**/*.js' ]
      })
    )
    .pipe(gulp.dest('./build/css'))
})


// gulp.task('stylesLanding', function(){
// 	return gulp.src('./sources/styles/landing/styles-landing.css') //return gulp.src(['./sources/styles/**/*.css','!_*'])
// 		.pipe(sourcemaps.init())
// 		.pipe(postcss([cssimport, cssvars, mixins, csscolor, nested, autoprefixer]))
// 		.on('error', function(errorInfo){
// 			console.log(errorInfo.toString());
// 			this.emit('end');
// 		})
// 		.pipe(sourcemaps.write('maps'))
// 		.pipe(gulp.dest('./assets/styles'));
// });
