var gulp = require('gulp'),
	gutil = require('gulp-util'),
	compass = require('gulp-compass'),
	path = require('path');

gulp.task('compass', function() {
	gulp.src('sass/main.scss')
	.pipe(compass({
		sass: 'sass',
		css: 'css',
		image: 'images/',
		sourcemap: true,
		sassStyle: 'expanded',
		require: ['susy', 'breakpoint']
	})
	.on('error', gutil.log))
});

gulp.task('watch', function() {
	gulp.watch(['sass/*.scss', 'sass/*/*.scss'], ['compass']);
});

gulp.task('default', ['watch', 'compass']);