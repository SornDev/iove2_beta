<div class="row" style="padding-right: 30px;"><button type="button" class="close close_edit" data-dismiss="alert" aria-hidden="true">&times;</button></div> <?php foreach($show_in_out  as $data){ ?> <input type="hidden" value="<?php echo $data['doc_in_out']; ?>" id="edit_type"> <input type="hidden" value="<?php echo $data['doc_id']; ?>" id="doc_id"> <div class="row"> <div class="col-sm-6 col-md-6 col-lg-6"> <legend><strong><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> ຂໍ້ມູນເອກະສານ</strong></legend> <div class="progress progress-striped"> <div class="progress-bar progress-bar-custom active ch_data_bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> <span class="sr-only">60% Complete</span> </div> </div> <form class="form"> <div class="form-group"> </div> <div class="form-group"> <div class="input-group"> <div class="input-group-addon"> ຊື່ເອກະສານ: </div> <input type="text" class="form-control doc_name" placeholder=" ຊື່ເອກະສານ + ເລກທີ່" value="<?php echo $data['name']; ?>"> </div> </div> <div class="form-group"> <div class="input-group"> <div class="input-group-addon"> ວັນທີ່ອອກເອກະສານ: </div> <input type="text" class="form-control doc_date" placeholder="ສະຖານທີ່, ວວ/ດດ/ປປປປ" value="<?php echo $data['docex']; ?>"> </div> </div> <p > <div class="form-inline num_manual" > <div class="form-group" style="width: 120px;"> <div class="input-group"> <div class="input-group-addon"> ເລກທີ່: </div> <input type="text" class="form-control doc_new_id" value="<?php echo $data['num_in']; ?>" data="" disabled onkeypress="return isNumberKey(event)"> </div> </div> <div class="form-group"> <div class="input-group"> <div class="input-group-addon"> ໝວດເອກະສານ: </div> <select class="form-control doc_type" disabled data="<?php echo $data['doc_type']; ?>" > <option value="none" >= ເລືອກໝວດເອກະສານ =</option> <?php if($data['doc_in_out']=='in'){foreach($sh_gno_in  as $grono){  ?> <option value="<?php echo $grono['id']; ?>"> <?php echo $grono['grono_name']; ?></option> <?php } ?> <?php } else{foreach($sh_gno_out  as $grono){  ?> <option value="<?php echo $grono['id']; ?>"> <?php echo $grono['grono_name']; ?></option> <?php } } ?> </select> </div> </div> </div> </p> <p> <div class="form-inlines"> <div class="form-group"> <div class="input-group"> <div class="input-group-addon "> ຈາກພາກສ່ວນ: </div> <select class="form-control doc_from" data="<?php echo $data['doc_from']; ?>"> <option value="none"> = ເລືອກພາກສ່ວນ = </option> <optgroup label="ສຳນັກງານໃຫຍ່"> <?php foreach($sh_hoffice  as $office){  ?> <option value="h|<?php echo $office['id'] ?>"> <?php echo $office['name'] ?></option> <?php } ?> </optgroup> <optgroup label="ສາຂາ"> <?php foreach($sh_boffice  as $office){  ?> <option value="b|<?php echo $office['id'] ?>"> <?php echo $office['name'] ?></option> <?php } ?> </optgroup> <optgroup label="ໜ່ວຍບໍລິການ"> <?php foreach($sh_uoffice  as $office){  ?> <option value="u|<?php echo $office['id'] ?>"> <?php echo $office['name'] ?></option> <?php } ?> </optgroup> <optgroup label="ພາກສ່ວນອື່ນ"> <?php foreach($sh_ooffice  as $office){  ?> <option value="o|<?php echo $office['id'] ?>"> <?php echo $office['name'] ?></option> <?php } ?> </optgroup> </select> </div> </div> <div class="form-group"> <div class="input-group"> <div class="input-group-addon"> ເຖິງພາກສ່ວນ: </div> <select class="form-control doc_to" data="<?php echo $data['doc_to']; ?>"> <option value="none"> = ເລືອກພາກສ່ວນ = </option> <optgroup label="ສຳນັກງານໃຫຍ່"> <?php foreach($sh_hoffice  as $office){  ?> <option value="h|<?php echo $office['id'] ?>"> <?php echo $office['name'] ?></option> <?php } ?> </optgroup> <optgroup label="ສາຂາ"> <?php foreach($sh_boffice  as $office){  ?> <option value="b|<?php echo $office['id'] ?>"> <?php echo $office['name'] ?></option> <?php } ?> </optgroup> <optgroup label="ໜ່ວຍບໍລິການ"> <?php foreach($sh_uoffice  as $office){  ?> <option value="u|<?php echo $office['id'] ?>"> <?php echo $office['name'] ?></option> <?php } ?> </optgroup> <optgroup label="ພາກສ່ວນອື່ນ"> <?php foreach($sh_ooffice  as $office){  ?> <option value="o|<?php echo $office['id'] ?>"> <?php echo $office['name'] ?></option> <?php } ?> </optgroup> </select> </div> </div> </div> </p> <div class="form-group"  style="width: 200px;" > <div class="input-group"> <div class="input-group-addon"> ວັນທີ່ບັນທຶກ: </div> <input type="text" class="form-control" readonly value="<?php echo date('d/m/Y',strtotime($data['doc_date']));?>"> </div> </div> <div class="form-group"  style="width: 200px;" > <div class="input-group"> <div class="input-group-addon"> ຜູ້ບັນທຶກ: </div> <?php if($data['sex']=="ຊາຍ"){ $sex = "ທ. "; } else { $sex = "ນ. "; } if($data['user_name']=='admin'){ $sex = "";} ?> <input type="text" class="form-control" readonly value="<?php echo $sex.$data['user_name']; ?>"> </div> </div> ລາຍລະອຽດເພີ່ມເຕີມ: <textarea name="" id="input" class="form-control doc_detail" rows="5" required="required"><?php echo $data['detail'];?></textarea> </form> </div> <div class="col-sm-6 col-md-6 col-lg-6" id="upload-file"> <input type="hidden" class="file_upload" value="<?php echo $data['file_scan'];?>"> <input type="hidden" class="file_del" value=""> <legend><strong><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> ໄຟລ໌ເອກະສານອັບໂຫລດ </strong></legend> <ul class="list-group list_file"> </ul> <span class="output"></span><span class="sh_img"></span> <div class="progress progress-striped upload-bar" style="display: none;"> <div class="progress-bar progress-bar-custom active up-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> <span class="sr-only">60% Complete</span> </div> </div> <form id="form_upload"><input type="file" name="file_upload" style="display: none;" id="f_upload"></form> <P align="center"> <button type="button" class="btn btn-success btn-lg" onclick="$('#f_upload').click()"> <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> ເລືອກໄຟລ໌ເອກະສານ</button> </P> </div> </div> <P align="center"><br> <button type="button" class="btn btn-info btn-lg save_data" disabled> <i class="fa fa-save"></i> ບັນທຶກຂໍ້ມູນ</button> </P> <?php } ?> <input type="hidden" class="setting" file_type="<?php echo $setting->file_type_upload; ?>" max_file="<?php echo $setting->maxfile_size; ?>"> <input type="hidden" class="data_year" value="<?php echo $used_year->name; ?>" > <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel"><i class="fa fa-file-pdf-o"></i> ໄຟລ໌ທີ່ທ່ານອັບໂຫລດ</h4> </div> <div class="modal-body sh_file"></div> <div class="modal-footer"> <button type="button" class="btn btn-default btn_print" data="" > <span class="glyphicon glyphicon-print" aria-hidden="true"></span> ສັ່ງພິມ</button> </div> </div> </div > </div> <script> $('.close_edit').click(function(e){$('#list_data_edit').slideDown(); $('#form_edit').hide(); }); var edit_type = $('#edit_type').val(); if(edit_type=='in'){} else if(edit_type=='out'){} var doc_type = $('.doc_type').attr('data'); $('.doc_type').val(doc_type); var doc_from = $('.doc_from').attr('data'); $('.doc_from').val(doc_from); var doc_to = $('.doc_to').attr('data'); $('.doc_to').val(doc_to); var fupn = $('.file_upload').val(); var file = fupn.split("||"); for (var i = 0; i <= file.length; i++) {var filep = file[i]; if(filep!=null){var sfile = filep.split("."); var nn = 1; if(filep!=''){var ttsize = ''; get_file_size(url+'file_upload/'+filep,sfile[0],filep); } } } function get_file_size(url,fid,file) {var filesize=''; var http = new XMLHttpRequest(); http.open('HEAD',url,true); http.onreadystatechange = function(){if(this.readyState == this.DONE){if(this.status === 200){filesize = this.getResponseHeader('Content-Length'); $('.list_file').append('<li class="list-group-item f_'+fid+'"> <i class="fa fa-file-pdf-o"></i> ໄຟລ໌ອັບໂຫລດ <span class="pull-right"><a onclick="preview(\''+file+'\')" ><span class="glyphicon glyphicon-book" aria-hidden="true"></span> ເບີ່ງໄຟລ໌ ອັບໂຫລດ</a><span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span><a onclick="delfile(\''+file+'\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a> </span> <br> <small>ຂະໜາດໄຟລ໌: '+formatSizeUnits(filesize)+'</small >  </li>'); } } }; http.send(); } function get_filesize(url,callback) {var xhr = new XMLHttpRequest(); xhr.open("HEAD", url, true); xhr.onreadystatechange = function(){if (this.readyState == this.DONE){callback(parseInt(xhr.getResponseHeader("Content-Length"))); } }; xhr.send(); } var intrvl = setInterval(function(){ $('.doc_name:first').focus(); check_data(); clearInterval(intrvl); },800); function preview(file) {var sfile = file.split("."); if(sfile[1]=='pdf'){if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {$('.sh_file').html('<form method="get" action="'+url+'file_upload/'+file+'"><center><button type="submit" class="btn btn-default" ><i class="fa fa-file-pdf-o"></i> ດາວໂຫລດເອກະສານ PDF</button></center></form>'); } else {$('.sh_file').html('<object data="'+url+'file_upload/'+file+'" type="application/pdf" width="100%" height="500"></object>'); } } else {$('.sh_file').html('<image src="'+url+'file_upload/'+file+'" width="100%" >'); } $('.btn_print').attr('data', file); $('#myModal').modal('show'); } function delfile(file) {var fdel = $('.file_del').val(); var sfile = file.split("."); var fup = $('.file_upload').val(); var ud_file = fup.replace(file+"||", ""); $('.file_upload').val(ud_file); $('.f_'+sfile[0]).slideUp('slow'); $('.file_del').val(fdel+'||'+file); check_data(); } $('.btn_print').click(function(event) {var file = $('.btn_print').attr('data'); var w = window.open(url+'file_upload/'+file); $(w).ready(function(){w.print(); }); }); $('.doc_type').change(function(event) { check_doc(); }); function check_doc() {var docin_type = $('.doc_type').attr('data'); var num_in = $('.doc_type').attr('num_in'); var year = $('.data_year').val(); var doc_type_id = $('.doc_type').val(); if(doc_type_id=='none'){ $('.doc_new_id').val('....'); } else {$.post(url+'index.php/'+'mdata/getdoc_num',{ year:year, doc_type:'document', doc_type_id:doc_type_id} ,function(data){if(data=='0'){$('.doc_new_id').attr("disabled", false);} else { $('.doc_new_id').attr("disabled", true);  } if(doc_type_id==docin_type){ var ndata = num_in; } else {var ndata = parseInt(data) + 1;} var nn = pad(ndata,3); $('.doc_new_id').val(nn); $('.doc_new_id').attr('data', nn); var intrvl = setInterval(function(){ $('.doc_new_id:first').focus(); clearInterval(intrvl); },800); }); }} function pad(num, places) {var zero = places - num.toString().length + 1; return Array(+(zero > 0 && zero)).join("0") + num; } $('.ch_data_bar').attr('style', 'width: 0%;'); $('.save_data').attr('disabled', true); function check_data() {var a = 0, b = 0, c = 0, d = 0, e = 0, f = 0, g = 0; var data = 0; var doc_nam = $('.doc_name').val(); var doc_num = $('.doc_new_id').val(); var doc_date = $('.doc_date').val(); var type = $('.doc_type').val(); var form = $('.doc_form').val(); var to = $('.doc_to').val(); var file_upload = $('.file_upload').val(); var ndoc_m = parseInt(doc_num); if(doc_nam != ''){ a = 14; } else { a = 0;  } if(type != 'none'){ b = 14; } else { b = 0; } if(form !='none'){ c = 14; } else { c = 0; } if(to !='none'){ d = 14; } else { d = 0; } if(file_upload !=''){ e = 14;   } else { e = 0;  } if(doc_date != ''){ f = 14; } else { f = 0;  } if(doc_num != ''){if(ndoc_m != '0'){g = 14; } else { g = 0;  } } else { g = 0;  } data = a+b+c+d+e+f+g; if(data == '84'){$('#upload-file').slideDown('slow'); } if(data == '98') { $('.save_data').attr('disabled', false); data='100'; } else { $('.save_data').attr('disabled', true); } $('.ch_data_bar').attr('style', 'width: '+data+'%;'); } $('.doc_name').keyup(function(event) { check_data() }); $('.doc_new_id').keyup(function(event) { check_data() }); $('.doc_date').keyup(function(event) { check_data() }); $('.doc_type').change(function(event) { check_data() }); $('.doc_form').change(function(event) { check_data() }); $('.doc_to').change(function(event) { check_data() }); $('#f_upload').change(function(event) {$('#form_upload').submit(); }); $('#form_upload').on( "submit", function(event) {var ftype = $('.setting').attr('file_type'); event.preventDefault(); var proceed = true; var max_file_size = $('.setting').attr('max_file')*1024; var result_output = '.output'; var shimg = '.sh_img'; var form ='#form_upload'; var proceed = true; var allowed_file_types = ftype; var error = []; $(result_output).html(''); $(this.elements['file_upload'].files).each(function(i, ifile){if(ifile.value !== ""){if(allowed_file_types.indexOf(ifile.type) === -1){error.push("<div class=\"alert alert-warning alert-dismissible\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button><strong>ຂໍ້ຜິດຜາດ!</strong>  ໄຟລ໌ທີ່ທ່ານເລືອກ \""+ ifile.name +"\" ບໍ່ແມ່ນໄຟລ໌ອະນຸຍາດໃຫ້ອັບໂຫລດ!</div>"); proceed = false; } total_files_size = ifile.size; } }); if(total_files_size > max_file_size){error.push("<div class=\"alert alert-warning alert-dismissible\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button><strong>ຂໍ້ຜິດຜາດ!</strong>  ໄຟລ໌ທີ່ທ່ານເລືອກມີຂະໜາດ "+formatSizeUnits(total_files_size)+", ລະບົບອະນຸຍາດໃຫ້ອັບໂຫລດ " + formatSizeUnits(max_file_size) +"</div>"); proceed = false; } if(proceed){$(".upload-bar").css("width 0%"); $('.upload-bar').slideDown('slow'); $(this.elements['file_upload'].files).each(function(i, ifile){  }); $.ajax({ url : url+'index.php/'+'mdata/upload_file', type: "POST", data : new FormData(this), contentType: false, cache: false, processData:false, xhr: function(){var xhr = $.ajaxSettings.xhr(); if (xhr.upload) {xhr.upload.addEventListener('progress', function(event) {var percent = 0; var position = event.loaded || event.position; var total = event.total; if (event.lengthComputable) {percent = Math.ceil(position / total * 100); } $(".up-bar").css("width", + percent +"%"); }, true); } return xhr; }, mimeType:"multipart/form-data"}).done(function(res){$(form)[0].reset(); $('.upload-bar').slideUp('slow'); $(".upload-bar").css("width 0%"); if(res =='no_upload'){$('#output').html("<div class=\"alert alert-warning alert-dismissible\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button><strong>ຂໍ້ຜິດຜາດ!</strong>  ໄຟລ໌ທີ່ທ່ານເລືອກ ບໍ່ແມ່ນໄຟລ໌ອະນຸຍາດໃຫ້ອັບໂຫລດ!</div>"); } else {var fup = $('.file_upload').val(); $('.file_upload').val(fup+res+'||'); check_data(); var fupn = $('.file_upload').val(); var sfile = res.split("."); $('.list_file').append('<li class="list-group-item f_'+sfile[0]+'"> <i class="fa fa-file-pdf-o"></i> ໄຟລ໌ອັບໂຫລດ <span class="pull-right"><a onclick="preview(\''+res+'\')" ><span class="glyphicon glyphicon-book" aria-hidden="true"></span> ເບີ່ງໄຟລ໌ ອັບໂຫລດ</a><span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span><a onclick="delfile(\''+res+'\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a> </span> <br> <small>ຂະໜາດໄຟລ໌: '+formatSizeUnits(total_files_size)+'</small></li>'); } }); } else {  } $(error).each(function(i){$(result_output).append('<div class="error">'+error[i]+"</div>"); }); }); $('.save_data').click(function(event) {var doc_id = $('#doc_id').val(); var doc_name = $('.doc_name').val(); var doc_num = $('.doc_new_id').val(); var doc_type = $('.doc_type').val(); var doc_form = $('.doc_from').val(); var doc_to = $('.doc_to').val(); var doc_detail = $('.doc_detail').val(); var file_upload = $('.file_upload').val(); var docex = $('.doc_date').val(); var fdel = $('.file_del').val(); if(fdel!=''){var file = fdel.split("||"); for (var i = 0; i <= file.length; i++) {var filep = file[i]; if(filep!=null){$.post(url+'index.php/'+'mdata/del_file',{ file:filep} ,function(data){  }); } } }
      $('.save_data').attr('disabled', true); $('.save_data').html('<i class="fa fa-refresh fa-spin fa-fw"></i> ກຳລັງບັນທຶກ....');
      

      $.post(url+'index.php/'+'mdata/update',{ type:'update_doc', doc_id:doc_id, doc_name:doc_name, doc_form:doc_form, doc_to:doc_to, doc_detail:doc_detail, file_upload:file_upload, docex:docex } ,function(data){ 
      	var intrvl = setInterval(function(){ $('.save_data').html('<i class="fa fa-check-circle-o" ></i> ບັນທືກ ຂໍ້ມູນສຳເລັດ!!'); clearInterval(intrvl);
      		var intrvle = setInterval(function(){ $('.save_data').html('<i class="fa fa-save"></i> ບັນທຶກຂໍ້ມູນ'); 
      			$('#list_data_edit').slideDown();
      			$('#form_edit').hide(); 
      			$('.ls_name'+doc_id).html(doc_name);
         
          	clearInterval(intrvle); },800);
      	},800);

      });

  });


function formatSizeUnits(bytes){
	if      (bytes>=1073741824) {bytes=(bytes/1073741824).toFixed(2)+' GB';}
	else if (bytes>=1048576)    {bytes=(bytes/1048576).toFixed(2)+' MB';}
	else if (bytes>=1024)       {bytes=(bytes/1024).toFixed(2)+' KB';}
	else if (bytes>1)           {bytes=bytes+' bytes';}
	else if (bytes==1)          {bytes=bytes+' byte';}
	else                        {bytes='0 byte';}
	return bytes;
}

function isNumberKey(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;

	return true;
}
</script>