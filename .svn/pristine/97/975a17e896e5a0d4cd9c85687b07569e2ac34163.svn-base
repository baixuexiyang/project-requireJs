/*globals define,require*/

define(function(require, exports, module) {

	require(['app/common'], function(common) {
		common.loadCss('pkg/Uploadify/src/uploadify.css');
	});

	var $ = require('jquery');

	require('./src/jquery.uploadify');

	/*require(['./src/jquery.uploadify'], function() {
		$.fn.extend({
			uploadFile: function() {
				$(this).uploadify({
					height: 25,
					width: 100,
					'swf': 'uploadify.swf',
					'uploader': 'uploadify.php',
					'onUploadSuccess': function(file, data, response) {
						alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
					}
				});
			}
		});
	});*/

});