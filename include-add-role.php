<?php include("include-dialog-head.php"); ?>
<input type="hidden" id="dispatcher" value="admin">
<div class="pop-box h-auto bg-ff RoleManage">
	<form id="form-add-role">
	<ul class="three-list">
    	<li><i><b>*</b>角色编码：</i><label><input name="" class="validate" id="role-code" type="text" maxlength="24"></label></li>
        <li><i><b>*</b>角色名称：</i><label><input name="" class="validate" id="role-name" type="text" maxlength="18"></label></li>
        <li class="h65"><i>备注：</i><label><textarea name="" cols="" rows="" maxlength="48">12323</textarea></label></li>
        <li class="error-out"><span class="error-text" style="display:none;"></span></li>
    </ul>
    <div class="text-c mar-b20"><a href="javascript:;" data-action="js/mock-data/include-data-example.json" class="green-but" id="saveRole">保存</a>&nbsp;<a href="javascript:;" class="black-but" id="cancel">取消</a></div>
</form>
</div>
<?php include("include-dialog-foot.php"); ?>