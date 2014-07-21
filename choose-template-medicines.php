<?php include("include-dialog-head.php"); ?>
<input type="hidden" id="dispatcher" value="adjuvant-therapy">
<div class="pop-box h-auto bg-ff patientList-medicines">
    <form id="form-choose-plan">
	<ul class="three-list">
    	<li><i>治疗阶段：</i><label><select name="" id="treat_step" data-action="js/mock-data/include-choose-stage.json"><option value="0">
        	阶段
        </option><option value="1">阶段一</option></select></label></li>
        <li><i>治疗模板：</i><label><select name=""><option>
        	阶段
        </option></select></label></li>
        <li><i>日期：</i><label><input id="date" name="" class="Wdate" type="text"></label></li>
        <li class="h65"><i>备注：</i><label><textarea name="" cols="" rows="">12323</textarea></label></li>
        <li class="error-out"><span class="error-text" style="display:none"></span></li>
    </ul>
    <div class="text-c mar-b20"><a href="javascript:;" data-href="辅助治疗-患者列表-疗程记录-治疗药物.shtml" data-action="js/mock-data/include-add-project.json" class="green-but" id="savePlan">保存</a>&nbsp;<a href="javascript:;" class="black-but" id="cancel">取消</a></div>
</form>
</div>
<?php include("include-dialog-foot.php"); ?>