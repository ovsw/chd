var gulp  = require('gulp'),
watch = require('gulp-watch'),
browserSync = require('browser-sync').create();


// watch
gulp.task('watch', function(){

	browserSync.init({
		
		proxy: "http://chd.ovs/"
	});

	watch(['./**/*.php','./**/*.inc'], function(){
		browserSync.reload();
	});

	// watch('./sources/styles/landing/**/*.css', function(){
	// 	gulp.start('cssInject');
	// });

	// watch('./sources/styles/global/**/*.css', function(){
	// 	gulp.start('cssInject');
	// });

	// watch('./sources/styles/modules/**/*.css', function(){
	// 	gulp.start('cssInject');
	// });

	watch('./sources/js/**/*.js', function(){
		gulp.start('scriptsRefresh');
	});
	
});
// end gulp watch

// browserSync CSS Inject
gulp.task('cssInject', function(){ // gulp.task('cssInject', ['stylesLanding'], function(){
	gulp.src('./assets/styles/styles-landing.css')
	.pipe(browserSync.stream());
});

gulp.task('scriptsRefresh', function(){ //'scriptsRefresh',['scripts'], function(){
	browserSync.reload();
});