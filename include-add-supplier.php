<?php include("include-dialog-head.php"); ?>
<input type="hidden" id="dispatcher" value="admin">
<div class="pop-box h-auto bg-ff Supplier">
	<form id="form-add-supplier">
	<ul class="three-list">
    	<li><i><b>*</b>供应商编码：</i><label><input name="" class="validate" id="supplierCode" type="text" maxlength="18"></label></li>
        <li><i><b>*</b>供应商名称：</i><label><input name="" class="validate" id="supplierName" type="text" maxlength="36"></label></li>
        <li><i><b>*</b>联系电话：</i><label><input name="" class="validate" id="phone" type="text" maxlength="13"></label></li>
        <li><i><b>*</b>地区：</i><label><select name="" class="validate" id="province" data-href="js/mock-data/adc-tree-pretty.json"><option value="0">
        	请选择省份
        </option></select>&nbsp;<select name="" class="validate" id="city" value="选择市"><option value="0">
        	请选择城市
        </option></select></label></li>
        <li class="h65"><i>地址：</i><label><textarea name="" cols="" rows="" amxlength="361">12323</textarea></label></li>
        <li><i>传真：</i><label><input name="" type="text" maxlength="13"></label></li>
        <li><i>邮编：</i><label><input name="" type="text" maxlength="8"></label></li>
        <li class="error-out"><span class="error-text">123123</span></li>
    </ul>
    <div class="text-c mar-b20"><a href="javascript:;" id="saveSupplier" data-action="js/mock-data/include-data-example.json" class="green-but">保存</a>&nbsp;<a href="javascript:;" id="cancel" class="black-but">取消</a></div>
</form>
</div>
<?php include("include-dialog-foot.php") ?>