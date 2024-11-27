const { watch, series } = require('gulp');
const browserSync = require('browser-sync').create();

function browserSyncTask(done) {
    browserSync.init({
        server: {
            baseDir: './', 
        },
        notify: false, 
    });
    done();
}

function reload(done) {
    browserSync.reload();
    done();
}

function watchFiles() {
    watch(['./*.html', './*.css'], reload); 
}

exports.default = series(browserSyncTask, watchFiles);
