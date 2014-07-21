define([
	'jquery',
	'app/common',
	'app/util',
	'jqtmpl',
	'pkg/DatePicker/app',
	'pkg/DateFormat/app',
	'pkg/Uploadify/app',
	'json',
	'artDialog',
	'iframe'
], function($, common) {
	"use strict";


	/*冷冻储存记录*/
	var StroageRecord = {
		init: function() {
			var me = this;


			// 根据医疗号查找姓名-出生日期
			$('#medicinesNum').blur(function() {
				var medicinesNum = $.trim($(this).val());
				if (medicinesNum === '')
					return;
				var api = $(this).attr('data-action');
				$.ajax(common.ajaxCall({
					url: api,
					data: {
						medicalNo: medicinesNum
					},
					success: function(data) {
						var item = data.ds[0];
						$('#name').val(item.patientname);
						$('#birthday').val(item.birthday);
					},
					error: function(msg) {
						alert(msg);
					}
				}));
			});



			$('.add-ylfa-list h3').click(function() {
				if ($(this).hasClass('bg-f5')) {
					$('.hov-bg-green').removeClass('hov-bg-green').addClass('bg-f5').next('ul').hide(400);
					$(this).next('ul').show(400);
				} else {
					$(this).next('ul').hide(400);
				}
				$(this).toggleClass('hov-bg-green').toggleClass('bg-f5');
			});

			$('.open,.close').die('click').live('click', function() {
				if ($(this).hasClass('open')) {
					$('.close:visible').removeClass('close').addClass('open').parents('.w958-border').find('.pad5').hide(400);
					$(this).parents('.w958-border:first').find('.pad5').show(400);
				} else {
					$(this).parents('.w958-border:first').find('.pad5').hide(400);
				}
				$(this).toggleClass('open').toggleClass('close');
			});

			// 选择存放目录
			$('#chooseDirectory').click(function() {
				me.Ashow(this);
			});

			// 保存
			me.saveInfo();

			// 删除
			$('.delete,.delete-all').click(function() {
				var api = $(this).attr('data-action');
				var callback = function() {
					$.ajax(common.ajaxCall({
						url: api,
						type: 'post',
						success: function() {
							top.location.reload();
						},
						error: function(msg) {
							alert(msg);
						}
					}));
				};
				$(this).dialogConfirm(callback);
			});

			// 打印预览
			$('#preview-print').printPreview({
				tit: '打印预览'
			});

			// 点击解冻
			$('.unfreeze').click(function() {
				art.dialog.data('record', $(this).attr('data-id'));
				var api = $(this).attr('data-href');
				$.ajax({
					url: api,
					cache: false,
					success: function(html) {
						art.dialog({
							id: 'freeze',
							content: html,
							width: 380,
							height: 200,
							lock: true,
							init: function() {
								$('#cancel').click(function() {
									art.dialog.list['freeze'].close();
								});
								// 点击确定
								$('#determine').click(function() {
									if ($('#freeze_date').val() === '') {
										if ($('.error-text').is(":hidden")) {
											$('.error-text').show();
										}
										$('.error-text').html('请填写解冻日期！');
										return;
									}
									var recordId = art.dialog.data('record');
									var api = $(this).attr('data-action');
									$.ajax(common.ajaxCall({
										url: api,
										data: {
											id: recordId,
											date: $('#freeze_date').val()
										},
										success: function() {
											top.location.reload();
										},
										error: function(msg) {
											alert(msg);
										}
									}));
								});
							}
						});
					},
					error: function(xhr, textstatus, msg) {
						alert(textstatus);
					}
				});
			});

		},
		Ashow: function(atr) {
			var me = this;
			var api = $(atr).attr('data-href');
			$.ajax({
				url: api,
				cache: false,
				success: function(html) {
					art.dialog({
						id: 'exploring',
						content: html,
						width: 660,
						height: 500,
						title: '请选择存放目录',
						lock: true,
						init: me.oper
					});
				},
				error: function(xhr, textstatus, msg) {
					alert(textstatus);
				}
			});
		},
		oper: function() {

			$('.aui_main').css('vertical-align', 'top');


			$(document).delegate('#selectTank', 'change', function() {
				var tank = $(this).children('option:selected').val();
				var api = $(this).attr('data-action');
				$.ajax({
					url: api,
					cache: false,
					data: {
						tankId: tank
					},
					success: function(html) {
						$('#content').replaceWith(html);
					},
					error: function(xhr, textstatus, msg) {
						alert(textstatus);
					}
				});
			});


			$('#addTank').live('click', function() {
				$('#chooseType').show();
				$('#list').hide();
			});

			// 点击确定添加
			$('#confirmAdd').die('click').live('click', function() {
				var tarForm = $('#form-add-iquid');
				var api = $(this).attr('data-action');
				$.ajax({
					url: api,
					cache: false,
					data: tarForm.serialize(),
					success: function(html) {
						$('#content').replaceWith(html);
					},
					error: function(xhr, textstatus, msg) {
						alert(textstatus);
					}
				});
			});

			// 合并
			$('.first').die('click').live('click', function() {
				$(this).toggleClass('but-20-20B').toggleClass('but-20-20');
				$(this).parents('table:first').children('tbody').toggle();
			});

			$('.second').die('click').live('click', function() {
				$(this).toggleClass('but-20-20B').toggleClass('but-20-20');
				$(this).parents('tr:first').nextUntil('.two').toggle();
			});


			// 点击编辑
			$('.editName').die('click').live('click', function() {
				if ($(this).attr('data-edit') === 'false')
					return;
				$(this).parents('tr:first').find('.edit').show().prev('label').hide();
				$(this).parents('.operator').hide().next('.save').show();
			});
			// 点击取消
			$('.cancel').die('click').live('click', function() {
				$(this).parents('tr:first').find('.edit').hide().prev('label').show();
				$(this).parents('.save').hide().prev('.operator').show();
			});
			// 点击保存
			$('.saveBtn').die('click').live('click', function() {
				var _parent = $(this).parents('tr:first');
				if (_parent.find('input:[type="text"]').val() === '')
					return;
				var tarForm = _parent.find('.form-edit-data');
				var api = $(this).attr('data-href');
				$.ajax({
					url: api,
					cache: false,
					data: tarForm.serialize(),
					success: function(html, textstatus, xhr) {
						$('#content').replaceWith(html);
					},
					error: function(xhr, textstatus, err) {
						alert(textstatus);
					}
				});
			});
			// 点击选择
			$('.select').die('click').live('click', function() {
				var _parent = $(this).parents('tr:first');
				if (_parent.find('input:[type="text"]').val() === '')
					return;
				var tarForm = _parent.find('.form-edit-data');
				var api = $(this).attr('data-action');
				$.ajax({
					url: api,
					cache: false,
					data: tarForm.serialize(),
					success: function(data) {
						var item = data.ds[0];
						$('#chooseDirectory').html(item.resultStr);
						$('#storageInfo').val(item.resultStr);
						$('#strawCode').val(item.strawName);
						$('#tankDetailId').val(item.tankDetailId);
						var strawColorList = item.strawColorList;
						var html = '<option>请选择</option>';
						for(var i = 0; i < strawColorList.length; i++) {
							html += '<option>'+ strawColorList[i] +'</option>';
						}
						$('#strawColor').empty().append(html);
						art.dialog.list['exploring'].close();
					},
					error: function(xhr, textstatus, err) {
						alert(textstatus);
					}
				});
			});


			$(document).delegate('#typeId', 'change', function() {
				var name = $(this).children('option:selected').text();
				$('#type_name').val(name);
			});
			setTimeout(function() {
				$('#typeId').trigger('change');
			}, 1000);
		},
		saveInfo: function() {
			$('#saveStorage').click(function() {
				var tarForm = $("#form-storage-record");
				if (!tarForm.doValidate())
					return;
				if (!$('#storageInfo').val())
					return;
				var api = $(this).attr('data-action');
				$.ajax(common.ajaxCall({
					url: api,
					data: tarForm.serialize(),
					success: function() {
						location.reload();
					},
					error: function(msg) {
						alert(msg);
					}
				}));
			});
		}
	};

	/***程序入口******/
	var Main = {
		init: function() {
			StroageRecord.init();
		}
	};

	Main.init();
});