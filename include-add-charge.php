<?php include("include-dialog-head.php"); ?>
<input type="hidden" id="dispatcher" value="admin">
<div class="pop-box h-auto bg-ff Charge">
	<form id="form-add-charge">
    <input type="hidden" id="feeCatlog" name="feeCatlog">
    <input type="hidden" id="unit" name="unit">
	<ul class="three-list">
    	<li><i><b>*</b>项目编号：</i><label><input name="" id="chargeName" type="text" maxlength="56"></label></li>
    	<li><i><b>*</b>项目名称：</i><label><input name="" id="chargeName" type="text" maxlength="56"></label></li>
        <li><i><b>*</b>收费分类：</i><label><select name="" id="feeCatlogId"><option>
        	收费分类
        </option></select></label></li>
        <li><i><b>*</b>单位：</i><label><select name="" id="unitId"><option>
        	单位
        </option></select></label></li>
        <li><i><b>*</b>单价：</i><label><input name="" id="price" type="text" maxlength="9"></label></li>
        <li><i>是否启用：</i><label><input name="radio" type="radio" value="">&nbsp;是&nbsp;&nbsp;<input name="radio" type="radio" value="">&nbsp;否</label></li>
        <li class="error-out"><span class="error-text">123123</span></li>
    </ul>
    <div class="text-c mar-b20"><a href="javascript:;" id="saveCharge" data-action="js/mock-data/admin-add-type.json" class="green-but">保存</a>&nbsp;<a href="javascript:;" id="cancel" class="black-but">取消</a></div>
	</form>
</div>
<?php include("include-dialog-foot.php"); ?>