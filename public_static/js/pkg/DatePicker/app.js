/*
日期选择模块
lihongbo@eetop.com
*/
define(['jquery', './source/WdatePicker'],function() {
  $.fn.extend({
    datePicker: function(options) {
      var settings = {
        dateFmt: 'yyyy-MM-dd'
      };
      settings = $.extend(settings, options);
      $(this).focus(function() {
        WdatePicker(settings);
      });
      $(this).click(function() {
        WdatePicker(settings);
      });
    }
  });

});