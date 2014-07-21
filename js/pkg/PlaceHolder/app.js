/*
输入框占位字符
*/
define(function(require, exports, module){

  var $ = require('jquery');

  if($('input[placeholder], textarea[placeholder]').length > 0){
  	
  	require('pkg/PlaceHolder/source/source');
    $('input[placeholder], textarea[placeholder]').placeholderEnhanced();
  }

});