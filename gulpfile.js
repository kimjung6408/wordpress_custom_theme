var gulp = require('gulp');
var browserSync = require('browser-sync').create();

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "localhost" // 여러분의 로컬 개발 서버
    });
});

gulp.task('watch', function(){
    gulp.watch("d:/XAMPP/htdocs/**/*").on('change', browserSync.reload);
});

gulp.task('default', gulp.series('browser-sync', 'watch'));