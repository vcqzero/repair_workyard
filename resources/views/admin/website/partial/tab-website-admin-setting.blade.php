<div class="tab-pane active" id="tab-website-admin-setting">
<table id="websiteTable" class="table table-bordered table-striped">
	<tbody>
		<tr>
			<td style="width: 10%">站点标题</td>
			<td style="width: 90%">
			<a 
			href="javascript:;" 
			id="title"
			data-pk="1"
			data-type="text" 
			data-original-title="站点标题"
			data-emptytext="未设置"
			class="editable editable-click edit-website-admin" tabindex="-1"
			style="display: inline;width: 90%">{{ $title }}</a>
			</td>
		</tr>
		<tr>
			<td>备案信息</td>
			<td>
			<a href="javascript:;" 
			data-name="record"
			data-type="text"
			data-pk="1"
			data-placement="right" 
			data-placeholder="请输入站点备案信息"
			data-original-title="备案信息"
			class="editable editable-click edit-website-admin" tabindex="-1">{{ $record }}</a>
			</td>
		</tr>
        <!-- 
		<tr>
			<td>ico</td>
			<td>
    		<div class="thumbnail dropzone-previews" 
    		style="width: 120px; height: 120px; margin-bottom: 10px; padding:40px">
    		<img src="{{ $ico }}" alt="ico" id="img_ico">
    		</div>
    		<a href="javascript:;" class="btn red btn-outline upload-file">选择文件</a>
    		<span>请上传ico图标文件，100k以内</span>
			<div class="dropzone hide admin-upload-ico"></div>
			</td>
		</tr>
		 -->
	</tbody>
</table>
</div>