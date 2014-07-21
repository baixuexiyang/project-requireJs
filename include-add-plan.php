<?php include("include-dialog-head.php"); ?>
<input type="hidden" id="dispatcher" value="admin">
<div class="pop-box h-auto bg-ff Treatment">
    <form id="form-add-plan">
	<ul class="three-list">
    	<li><i><b>*</b>处理天：</i><label><input name="" class="validate" maxlength="3" type="text" id="deal-time"></label></li>
        <li><i>时间：</i><label><input name="" type="text" id="hour" style=" width:80px;">&nbsp;-&nbsp;<input name="" id="minute" type="text" style=" width:80px;"></label></li>
        <li><i><b>*</b>治疗类型：</i><label><select name="" id="treat-type" class="validate" data-action="js/mock-data/include-data-project.json"><option value="1">
            药物处方
        </option><option value="2">生化检验</option><option value="3">治疗项目</option><option value="4">其他项目</option></select></label></li>
        <li><i><b>*</b>治疗项目：</i><label><input name="" id="treat-project" type="text" data-href="js/mock-data/get-project-list.json"><input type="hidden" id="projectId"></label></li>
        <li><i>药剂类型：</i><label><select name="" id="medicines-type"><option value="1">
        	刘德华
        </option><option value="2">请选择</option></select></label></li>
        <li><i>用药方法：</i><label><select name="" id="method"><option value="1">
        	刘德华
        </option><option value="2">请选择</option></select></label></li>
        <li><i>用药次数：</i><label><input name="" id="frequency" type="text"></label></li>
        <li><i>单次剂量：</i><label><input name="" id="singledose" type="text"></label></li>
        <li><i>单位：</i><label><select name="" class="unit"><option value="1">
        	刘德华
        </option><option value="2">请选择</option></select></label></li>
        <li><i>总剂量：</i><label><span id="totaldose"></span></label></li>
        <li class="h65"><i>备注：</i><label><textarea id="note" name="" cols="" rows="">12323</textarea></label></li>
        <li class="error-out"><span class="error-text" style="display:none;"></span></li>
    </ul>
    <div class="text-c mar-b20"><a href="javascript:;" class="green-but" id="savePlan">保存</a>&nbsp;<a href="javascript:;" class="black-but" id="cancel">取消</a></div>
</form>
</div>
<?php include("include-dialog-foot.php"); ?>