const { parallel } = require('gulp');

function task1(done) {
    console.log('First task is being completed');
	done();
}

function task2(done) {
    console.log('Second task is being completed');
    done();
}

exports.default = parallel(task1, task2);
