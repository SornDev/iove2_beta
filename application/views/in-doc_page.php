<div class="row">
    <?php  foreach($data_rd as $data){if($data['name']==$used_year->name){if($used_year->name!=date('Y')){ ?> <div
        class="container-fluid">
        <div class="alert alert-warning"> <strong><span class="glyphicon glyphicon-warning-sign"
                    aria-hidden="true"></span> ລະບົບ ບໍ່ອະນຸຍາດໃຫ້ ບັນທຶກຂໍ້ມູນໄດ້!</strong>
            <p> - ການຕັ້ງຄ່າເລຶອກປີຂອງຖານຂໍ້ມູນ ທີ່ບັນທຶກ ບໍ່ຕົງກັບປີປະຈຸບັນ! <b>ປີທີ່ຕັ້ງຄ່າເລືອກ:
                    <?php echo $used_year->name; ?>. ປີປະຈຸບັນ: <?php echo date('Y'); ?></b><br> - ການບັນທຶກຂໍ້ມູນ
                ຖືກຈຳກັດຍ້ອນຂໍ້ມູນປີທີ່ເລືອກບັນທຶກ ກັບປີປະຈຸບັນບໍ່ຕົງກັນ. ກະລຸນາເຂົ້າສູ່ລະບົບ Admin ແລ້ວຕັ້ງຄ່າ
                ເລືອກປີທີ່ຈະບັນທຶກຂໍ້ມູນ ໃຫ້ຕົງກັບປີປະຈຸບັນ!</p>
        </div>
    </div> <?php } else if($data['data_readonly']==1){ ?> <div class="container-fluid">
        <div class="alert alert-warning"> <strong><span class="glyphicon glyphicon-warning-sign"
                    aria-hidden="true"></span> ລະບົບ ບໍ່ອະນຸຍາດໃຫ້ ບັນທຶກຂໍ້ມູນໄດ້!</strong>
            <p> - ຂໍ້ມູນໄດ້ຖຶກກຳນົດ ໃຫ້ຄົ້ນຫາ ແລະອ່ານຂໍ້ມູນເທົ່ານັ້ນ!<br> - ການບັນທຶກ ແກ້ໄຂຂໍ້ມູນ ຖືກຈຳກັດໂດຍ
                ຜູ້ດູແລລະບົບ. ກະລຸນາຕິດຕໍ່ ຜູ້ດູແລລະບົບ ຫາກຕ້ອງການບັນທຶກແກ້ໄຂ ຂໍ້ມູນ!</p>
        </div>
    </div> <?php  }else{ ?> <div class="col-sm-6 col-md-6 col-lg-6">
        <legend><strong><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> ຂໍ້ມູນເອກະສານ </strong>
        </legend>
        <div class="progress progress-striped">
            <div class="progress-bar progress-bar-custom active ch_data_bar" role="progressbar" aria-valuenow="60"
                aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> <span class="sr-only">60% Complete</span>
            </div>
        </div>
        <form class="form">
            <div class="form-group"> </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"> ຊື່ເອກະສານ: </div> <input type="text"
                        class="form-control docin_name" placeholder=" ຊື່ເອກະສານ + ເລກທີ່">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"> ວັນທີ່ອອກເອກະສານ: </div> <input type="text"
                        class="form-control docin_date" placeholder="ສະຖານທີ່, ວວ ດດ ປປປປ">
                </div>
            </div>
            <p>
                <div class="form-inline num_manual">
                    <div class="form-group" style="width: 120px;">
                        <div class="input-group">
                            <div class="input-group-addon"> ເລກທີ່: </div> <input type="text"
                                class="form-control doc_new_id" value="...." data="" disabled
                                onkeypress="return isNumberKey(event)">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"> ໝວດເອກະສານ: </div> <select class="form-control docin_type">
                                <option value="none">= ເລືອກໝວດເອກະສານ =</option>
                                <?php foreach($sh_gno_in  as $grono){  ?> <option value="<?php echo $grono['id']; ?>">
                                    <?php echo $grono['grono_name']; ?></option> <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </p>
            <p>
                <div class="form-inlines">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon "> ຈາກພາກສ່ວນ: </div> <select class="form-control docin_form">
                                <option value="none"> = ເລືອກພາກສ່ວນ = </option>
                                <optgroup label="ສຳນັກງານໃຫຍ່"> <?php foreach($sh_hoffice  as $office){  ?> <option
                                        value="h|<?php echo $office['id'] ?>"> <?php echo $office['name'] ?></option>
                                    <?php } ?> </optgroup>
                                <optgroup label="ສາຂາ"> <?php foreach($sh_boffice  as $office){  ?> <option
                                        value="b|<?php echo $office['id'] ?>"> <?php echo $office['name'] ?></option>
                                    <?php } ?> </optgroup>
                                <optgroup label="ໜ່ວຍບໍລິການ"> <?php foreach($sh_uoffice  as $office){  ?> <option
                                        value="u|<?php echo $office['id'] ?>"> <?php echo $office['name'] ?></option>
                                    <?php } ?> </optgroup>
                                <optgroup label="ພາກສ່ວນອື່ນ"> <?php foreach($sh_ooffice  as $office){  ?> <option
                                        value="o|<?php echo $office['id'] ?>"> <?php echo $office['name'] ?></option>
                                    <?php } ?> </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"> ເຖິງພາກສ່ວນ: </div> <select class="form-control docin_to">
                                <option value="none"> = ເລືອກພາກສ່ວນ = </option>
                                <optgroup label="ສຳນັກງານໃຫຍ່"> <?php foreach($sh_hoffice  as $office){  ?> <option
                                        value="h|<?php echo $office['id'] ?>"> <?php echo $office['name'] ?></option>
                                    <?php } ?> </optgroup>
                                <optgroup label="ສາຂາ"> <?php foreach($sh_boffice  as $office){  ?> <option
                                        value="b|<?php echo $office['id'] ?>"> <?php echo $office['name'] ?></option>
                                    <?php } ?> </optgroup>
                                <optgroup label="ໜ່ວຍບໍລິການ"> <?php foreach($sh_uoffice  as $office){  ?> <option
                                        value="u|<?php echo $office['id'] ?>"> <?php echo $office['name'] ?></option>
                                    <?php } ?> </optgroup>
                                <optgroup label="ພາກສ່ວນອື່ນ"> <?php foreach($sh_ooffice  as $office){  ?> <option
                                        value="o|<?php echo $office['id'] ?>"> <?php echo $office['name'] ?></option>
                                    <?php } ?> </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </p>
            <div class="form-group" style="width: 200px;">
                <div class="input-group">
                    <div class="input-group-addon"> ວັນທີ່ບັນທຶກ: </div> <input type="text" class="form-control"
                        readonly value="<?php echo date("d/m/Y"); ?>">
                </div>
            </div>
            <div class="form-group" style="width: 200px;">
                <div class="input-group">
                    <div class="input-group-addon"> ຜູ້ບັນທຶກ: </div> <input type="text" class="form-control" readonly
                        value="<?php echo $this->session->userdata("user_name"); ?>">
                </div>
            </div> ລາຍລະອຽດເພີ່ມເຕີມ: <textarea name="" id="input" class="form-control docin_detail" rows="5"
                required="required"></textarea>
        </form>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6" style="display: none;" id="upload-file"> <input type="hidden"
            class="file_upload" value="">
        <legend><strong><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> ໄຟລ໌ເອກະສານອັບໂຫລດ </strong>
        </legend>
        <ul class="list-group list_file"> </ul> <span id="output"></span><span class="sh_img"></span>
        <div class="progress progress-striped upload-bar" style="display: none;">
            <div class="progress-bar progress-bar-custom active up-bar" role="progressbar" aria-valuenow="60"
                aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> <span class="sr-only">60% Complete</span>
            </div>
        </div>
        <form id="form_upload"><input type="file" name="file_upload" style="display: none;" id="f_upload"></form>
        <P align="center"> <button type="button" class="btn btn-success btn-lg" onclick="$('#f_upload').click()"> <span
                    class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> ເລືອກໄຟລ໌ເອກະສານ</button> </P>
    </div>
</div>
<P align="center"><br> <button type="button" class="btn btn-info btn-lg save_data" disabled> <i class="fa fa-save"></i>
        ບັນທຶກຂໍ້ມູນ</button> </P> <?php }}}?> <div class="col-sm-12 col-md-12 col-lg-12 mlast" style="display: none;">
    <legend><strong><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> ບັນທຶກລ່າສຸດ</strong></legend>
    <div style="height: 380px; overflow-y: scroll; padding-right: 8px; " class="last_post"> </div>
</div> <input type="hidden" class="setting" file_type="<?php echo $setting->file_type_upload; ?>"
    max_file="<?php echo $setting->maxfile_size; ?>"> <input type="hidden" class="data_year"
    value="<?php echo $used_year->name; ?>">
<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-file-pdf-o"></i> ໄຟລ໌ທີ່ທ່ານອັບໂຫລດ</h4>
            </div>
            <div class="modal-body sh_file"></div>
            <div class="modal-footer"> <button type="button" class="btn btn-default btn_print" data=""> <span
                        class="glyphicon glyphicon-print" aria-hidden="true"></span> ສັ່ງພິມ</button> </div>
        </div>
    </div>
</div>
<script type="text/javascript">
var string = 'p';
var encodedString = btoa(string);
console.log(encodedString);
var decodedString = atob(encodedString);
console.log(decodedString);
var urlh = window.location.href;
var url = urlh.split('#')[0];
var intrvl = setInterval(function() {
    $('.docin_name:first').focus();
    clearInterval(intrvl);
}, 800);
var lyear = $('.data_year').val();
$.post(url + 'index.php/' + 'load_page', {
    page: 'last_post',
    year: lyear,
    doc: 'in'
}, function(data) {
    $('.last_post').html(data);
});

function get_one_last(id) {
    var lyear = $('.data_year').val();
    $.post(url + 'index.php/' + 'load_page', {
        page: 'last_one',
        year: lyear,
        doc: 'in',
        id: id,
        type: 'lsone'
    }, function(data) {
        $('.last_pos_it').prepend(data);
    });
}

function preview(file) {
    var sfile = file.split(".");
    if (sfile[1] == 'pdf') {
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            $('.sh_file').html('<form method="get" action="' + url + 'file_upload/' + file +
                '"><center><button type="submit" class="btn btn-default" ><i class="fa fa-file-pdf-o"></i> ດາວໂຫລດເອກະສານ PDF</button></center></form>'
                );
        } else {
            $('.sh_file').html('<object data="' + url + 'file_upload/' + file +
                '" type="application/pdf" width="100%" height="500"></object>');
        }
    } else {
        $('.sh_file').html('<image src="' + url + 'file_upload/' + file + '" width="100%" >');
    }
    $('.btn_print').attr('data', file);
    $('#myModal').modal('show');
}

function delfile(file) {
    var sfile = file.split(".");
    var fup = $('.file_upload').val();
    var ud_file = fup.replace(file + "||", "");
    $('.file_upload').val(ud_file);
    $.post(url + 'index.php/' + 'mdata/del_file', {
        file: file
    }, function(data) {
        $('.f_' + sfile[0]).slideUp('slow');
    });
    check_data();
}
$('.btn_print').click(function(event) {
    var file = $('.btn_print').attr('data');
    var w = window.open(url + 'file_upload/' + file);
    $(w).ready(function() {
        w.print();
    });
});
$('.docin_type').change(function(event) {
    var year = $('.data_year').val();
    var doc_type_id = $('.docin_type').val();
    if (doc_type_id == 'none') {
        $('.doc_new_id').val('....');
    } else {
        $.post(url + 'index.php/' + 'mdata/getdoc_num', {
            year: year,
            doc_type: 'document',
            doc_type_id: doc_type_id
        }, function(data) {
            if (data == '0') {
                $('.doc_new_id').attr("disabled", false);
            } else {
                $('.doc_new_id').attr("disabled", true);
            }
            var ndata = parseInt(data) + 1;
            var nn = pad(ndata, 3);
            $('.doc_new_id').val(nn);
            $('.doc_new_id').attr('data', nn);
            var intrvl = setInterval(function() {
                $('.doc_new_id:first').focus();
                clearInterval(intrvl);
            }, 800);
        });
    }
});

function pad(num, places) {
    var zero = places - num.toString().length + 1;
    return Array(+(zero > 0 && zero)).join("0") + num;
}
$('.ch_data_bar').attr('style', 'width: 0%;');
$('.save_data').attr('disabled', true);

function check_data() {
    var a = 0,
        b = 0,
        c = 0,
        d = 0,
        e = 0,
        f = 0,
        g = 0;
    var data = 0;
    var doc_nam = $('.docin_name').val();
    var doc_num = $('.doc_new_id').val();
    var doc_date = $('.docin_date').val();
    var type = $('.docin_type').val();
    var form = $('.docin_form').val();
    var to = $('.docin_to').val();
    var file_upload = $('.file_upload').val();
    var ndoc_m = parseInt(doc_num);
    if (doc_nam != '') {
        a = 14;
    } else {
        a = 0;
    }
    if (type != 'none') {
        b = 14;
    } else {
        b = 0;
    }
    if (form != 'none') {
        c = 14;
    } else {
        c = 0;
    }
    if (to != 'none') {
        d = 14;
    } else {
        d = 0;
    }
    if (file_upload != '') {
        e = 14;
    } else {
        e = 0;
    }
    if (doc_date != '') {
        f = 14;
    } else {
        f = 0;
    }
    if (doc_num != '') {
        if (ndoc_m != '0') {
            g = 14;
        } else {
            g = 0;
        }
    } else {
        g = 0;
    }
    data = a + b + c + d + e + f + g;
    if (data == '84') {
        $('#upload-file').slideDown('slow');
    }
    if (data == '98') {
        $('.save_data').attr('disabled', false);
        data = '100';
    } else {
        $('.save_data').attr('disabled', true);
    }
    $('.ch_data_bar').attr('style', 'width: ' + data + '%;');
}
$('.docin_name').keyup(function(event) {
    check_data()
});
$('.doc_new_id').keyup(function(event) {
    check_data()
});
$('.docin_date').keyup(function(event) {
    check_data()
});
$('.docin_type').change(function(event) {
    check_data()
});
$('.docin_form').change(function(event) {
    check_data()
});
$('.docin_to').change(function(event) {
    check_data()
});
$('#f_upload').change(function(event) {
    $('#form_upload').submit();
});
$('#form_upload').on("submit", function(event) {
    var ftype = $('.setting').attr('file_type');
    event.preventDefault();
    var proceed = true;
    var max_file_size = $('.setting').attr('max_file') * 1024;
    var result_output = '#output';
    var shimg = '.sh_img';
    var form = '#form_upload';
    var proceed = true;
    var allowed_file_types = ftype;
    var error = [];
    $(result_output).html('');
    $(this.elements['file_upload'].files).each(function(i, ifile) {
        if (ifile.value !== "") {
            if (allowed_file_types.indexOf(ifile.type) === -1) {
                error.push(
                    "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button><strong>ຂໍ້ຜິດຜາດ!</strong>  ໄຟລ໌ທີ່ທ່ານເລືອກ \"" +
                    ifile.name + "\" ບໍ່ແມ່ນໄຟລ໌ອະນຸຍາດໃຫ້ອັບໂຫລດ!</div>");
                proceed = false;
            }
            total_files_size = ifile.size;
        }
    });
    if (total_files_size > max_file_size) {
        error.push(
            "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button><strong>ຂໍ້ຜິດຜາດ!</strong>  ໄຟລ໌ທີ່ທ່ານເລືອກມີຂະໜາດ " +
            formatSizeUnits(total_files_size) + ", ລະບົບອະນຸຍາດໃຫ້ອັບໂຫລດ " + formatSizeUnits(
            max_file_size) + "</div>");
        proceed = false;
    }
    if (proceed) {
        $(".upload-bar").css("width 0%");
        $('.upload-bar').slideDown('slow');
        $(this.elements['file_upload'].files).each(function(i, ifile) {});
        $.ajax({
            url: url + 'index.php/' + 'mdata/upload_file',
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            xhr: function() {
                var xhr = $.ajaxSettings.xhr();
                if (xhr.upload) {
                    xhr.upload.addEventListener('progress', function(event) {
                        var percent = 0;
                        var position = event.loaded || event.position;
                        var total = event.total;
                        if (event.lengthComputable) {
                            percent = Math.ceil(position / total * 100);
                        }
                        $(".up-bar").css("width", +percent + "%");
                    }, true);
                }
                return xhr;
            },
            mimeType: "multipart/form-data"
        }).done(function(res) {
            $(form)[0].reset();
            $('.upload-bar').slideUp('slow');
            $(".upload-bar").css("width 0%");
            console.log(res);
            if (res == 'no_upload') {
                $('#output').html(
                    "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button><strong>ຂໍ້ຜິດຜາດ!</strong>  ໄຟລ໌ທີ່ທ່ານເລືອກ ບໍ່ແມ່ນໄຟລ໌ອະນຸຍາດໃຫ້ອັບໂຫລດ! Er1</div>"
                    );
            } else {
                var fup = $('.file_upload').val();
                $('.file_upload').val(fup + res + '||');
                check_data();
                var fupn = $('.file_upload').val();
                var sfile = res.split(".");
                $('.list_file').append('<li class="list-group-item f_' + sfile[0] +
                    ' flit"> <i class="fa fa-file-pdf-o"></i> ໄຟລ໌ອັບໂຫລດ <span class="pull-right"><a onclick="preview(\'' +
                    res +
                    '\')" ><span class="glyphicon glyphicon-book" aria-hidden="true"></span> ເບີ່ງໄຟລ໌ ອັບໂຫລດ</a><span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span><a onclick="delfile(\'' +
                    res +
                    '\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a> </span> <br> <small>ຂະໜາດໄຟລ໌: ' +
                    formatSizeUnits(total_files_size) + '</small></li>');
            }
        });
    } else {}
    $(error).each(function(i) {
        $(result_output).append('<div class="error">' + error[i] + "</div>");
    });
});

function formatSizeUnits(bytes) {
    if (bytes >= 1073741824) {
        bytes = (bytes / 1073741824).toFixed(2) + ' GB';
    } else if (bytes >= 1048576) {
        bytes = (bytes / 1048576).toFixed(2) + ' MB';
    } else if (bytes >= 1024) {
        bytes = (bytes / 1024).toFixed(2) + ' KB';
    } else if (bytes > 1) {
        bytes = bytes + ' bytes';
    } else if (bytes == 1) {
        bytes = bytes + ' byte';
    } else {
        bytes = '0 byte';
    }
    return bytes;
}

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function clear_form() {
    $('.docin_name').val('');
    $('.doc_new_id').val('');
    $('.docin_type').val('none');
    $('.docin_form').val('none');
    $('.docin_to').val('none');
    $('.docin_detail').val('');
    $('.file_upload').val('');
    $('.docin_date').val('');
    $('.flit').remove();
    $('#upload-file').slideUp('slow');
    check_data();
    var intrvl = setInterval(function() {
        $('.docin_name:first').focus();
        clearInterval(intrvl);
    }, 800);
}
$('.save_data').click(function(event) {
    var docin_name = $('.docin_name').val();
    var docin_num = $('.doc_new_id').val();
    var docin_type = $('.docin_type').val();
    var docin_form = $('.docin_form').val();
    var docin_to = $('.docin_to').val();
    var docin_detail = $('.docin_detail').val();
    var file_upload = $('.file_upload').val();
    var docex = $('.docin_date').val();
    var doc_in_out = 'in';
    $('.save_data').attr('disabled', true);
    $('.save_data').html('<i class="fa fa-refresh fa-spin fa-fw"></i> ກຳລັງບັນທຶກ....');
    $.post(url + 'index.php/' + 'mdata/add', {
        type: 'document',
        doc_in_out: doc_in_out,
        docin_name: docin_name,
        docin_num: docin_num,
        docin_type: docin_type,
        docin_form: docin_form,
        docin_to: docin_to,
        docin_detail: docin_detail,
        file_upload: file_upload,
        docex: docex
    }, function(data) {
        var intrvl = setInterval(function() {
            $('.save_data').html('<i class="fa fa-check-circle-o" ></i> ບັນທືກ ຂໍ້ມູນສຳເລັດ!!');
            clearInterval(intrvl);
            var intrvle = setInterval(function() {
                $('.save_data').html('<i class="fa fa-save"></i> ບັນທຶກຂໍ້ມູນ');
                $('.mlast').slideDown('slow');
                get_one_last(data);
                clear_form();
                clearInterval(intrvle);
            }, 800);
        }, 800);
    });
});
$('.aa').click(function(event) {
    $('#upload-file').slideDown('slow');
});
$('.bb').click(function(event) {
    $('#upload-file').slideUp('slow')
});
</script>