<?php include("include-dialog-head.php"); ?>
<input type="hidden" id="dispatcher" value="adjuvant-therapy">
<div class="pop-box h-auto bg-ff patientList-medicines">
    <form id="form-add-medicines">
	<ul class="three-list">
    	<li><i>治疗阶段：</i><label><select name=""><option>
        	阶段
        </option></select></label></li>
        <li><i>日期：</i><label><input name="" id="date" type="text" class="Wdate"></label></li>    	
        <li><i>时间：</i><label><input name="" type="text" class="w80">&nbsp;-&nbsp;<input name="" type="text" class="w80"></label></li>
        <li><i>处理天：</i><label><input name="" type="text"></label></li>
        <li><i>药物名称：</i><label><select name=""><option>
        	药物名称
        </option></select></label></li>
        <li><i>用药次数：</i><label><input name="" id="frequency" type="text"></label></li>
        <li><i>单次剂量：</i><label><input name="" id="dose" type="text"></label></li>
        <li><i>药物单位：</i><label><select name="" id="unit"><option>
        	刘德华
        </option></select></label></li>
        <li><i>药物总量：</i><label><span id="total"></span><input type="hidden" id="totalResult"></label></li>
        <li><i>药物类型：</i><label><select name=""><option>
        	药物类型
        </option></select></label></li>
        <li><i>用药方法：</i><label><select name=""><option>
        	用药方法
        </option></select></label></li>        
        <li class="h65"><i>备注：</i><label><textarea name="" cols="" rows="">12323</textarea></label></li>
        <li class="error-out"><span class="error-text" style="display:none;"></span></li>
    </ul>
    <div class="text-c mar-b20"><a href="javascript:;" data-href="辅助治疗-患者列表-疗程记录-治疗药物.shtml" data-action="js/mock-data/include-data-example.json" class="green-but" id="saveMedicines">保存</a>&nbsp;<a href="javascript:;" class="black-but" id="cancel">取消</a></div>
</form>
</div>
<?php include("include-dialog-foot.php"); ?>