<div class="row"> <?php  foreach($data_rd as $data){if($data['name']==$used_year->name){if($used_year->name!=date('Y')){ ?> <div class="container-fluid"> <div class="alert alert-warning"> <strong><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> ລະບົບ ບໍ່ອະນຸຍາດໃຫ້ ບັນທຶກຂໍ້ມູນໄດ້!</strong> <p> - ການຕັ້ງຄ່າເລຶອກປີຂອງຖານຂໍ້ມູນ ທີ່ບັນທຶກ ບໍ່ຕົງກັບປີປະຈຸບັນ! <b>ປີທີ່ຕັ້ງຄ່າເລືອກ: <?php echo $used_year->name; ?>. ປີປະຈຸບັນ: <?php echo date('Y'); ?></b><br> - ການບັນທຶກຂໍ້ມູນ ຖືກຈຳກັດຍ້ອນຂໍ້ມູນປີທີ່ເລືອກບັນທຶກ ກັບປີປະຈຸບັນບໍ່ຕົງກັນ. ກະລຸນາເຂົ້າສູ່ລະບົບ Admin ແລ້ວຕັ້ງຄ່າ ເລືອກປີທີ່ຈະບັນທຶກຂໍ້ມູນ ໃຫ້ຕົງກັບປີປະຈຸບັນ!</p> </div> </div> <?php } else if($data['data_readonly']==1){ ?> <div class="container-fluid"> <div class="alert alert-warning"> <strong><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> ລະບົບ ບໍ່ອະນຸຍາດໃຫ້ ບັນທຶກຂໍ້ມູນໄດ້!</strong> <p> - ຂໍ້ມູນໄດ້ຖຶກກຳນົດ ໃຫ້ຄົ້ນຫາ ແລະອ່ານຂໍ້ມູນເທົ່ານັ້ນ!<br> - ການບັນທຶກ ແກ້ໄຂຂໍ້ມູນ ຖືກຈຳກັດໂດຍ ຜູ້ດູແລລະບົບ. ກະລຸນາຕິດຕໍ່ ຜູ້ດູແລລະບົບ ຫາກຕ້ອງການບັນທຶກແກ້ໄຂ ຂໍ້ມູນ!</p> </div> </div> <?php  }else{ ?> <div class="col-sm-12 col-md-12 col-lg-12"> <div id="list_data_edit"> <span class="box" ><input type="radio" checked class="fill_all ch" name="dtype" data="1"> ສະແດງທັງໝົດ</span> <span class="box" ><input type="radio" class="fill_in ch" name="dtype" data="0"> ສະເພາະ ຂາເຂົ້າ</span> <span class="box" ><input type="radio" class="fill_out ch" name="dtype" data="0"> ສະເພາະ ຂາອອກ</span> <hr> <form class="form search" onkeypress="return run_st(event)"> <div class="form-group"> <div class="input-group"> <div class="input-group-addon input-lg"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span>  </div> <input type="text" class="form-control input-lg" id="sh_doc" placeholder="ຫົວຂໍ້ເອກະສານ ທີ່ຕ້ອງການຄົ້ນຫາ"> </div> </div> </form> <div class="panel panel-default"> <div class="panel-body" > <table class="table table-striped" > <thead> <tr> <th scope="col" width="40">#</th> <th scope="col">ຫົວຂໍ້ເອກະສານ</th> <th scope="col" width="90">ຈັດການ</th> </tr> </thead> </table> <div style="height: 500px; overflow-y: scroll; padding-right: 8px;" class="table_edit"> </div> </div> </div> </div> <div id="form_edit" style="display: none;"> </div> </div> </div> <input type="hidden" class="user-log" u-id="<?php echo $this->session->userdata("user_id"); ?>" u-type="<?php echo $this->session->userdata("user_type"); ?>" > <div class="modal fade " id="no_del" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel"> <span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> ແຈ້ງເຕືອນຈາກລະບົບ!!</h4> </div> <div class="modal-body"> <div class="container-fluid"> <div class="alert alert-warning alert-dismissible" role="alert"> <strong>  ລະບົບບໍ່ອະນຸຍາດໃຫ້ແກ້ໄຂ ຫລື ລຶບຂໍ້ມູນຂໍ້ມູນຂອງ User ອື່ນ!</strong> <br> - ສະເພາະ ຜູ້ດູແລລະບົບ ເທົ່ານັ້ນ! </div> </div></div> </div> </div > </div> <?php }}} ?> <script type="text/javascript"> function close_e(){$('#list_data_edit').slideDown(); $('#form_edit').hide(); } load_table('all',''); $('.ch').click(function(e){$('.ch').attr('data','0'); $(this).attr('data','1'); sh(); }); $('#sh_doc').keyup(function(e){sh(); }); function sh() {var type = ''; var fall = $('.fill_all').attr('data'); var fin = $('.fill_in').attr('data'); var fout = $('.fill_out').attr('data'); var sh = $('#sh_doc').val(); if(fall=='1'){ type="all" } else{if(fin=='1'){ type='in'} else{if(fout=='1'){ type='out';} } } load_table(type,sh); } function load_table(type,seach) {var data_year = $('.data_year').val(); $('.img-loading').show(); $.post(url+'index.php/'+'load_page',{ page:'table_edit',year:data_year, type:type, seach:seach} ,function(data){ $('.table_edit').html(data); $('.loading').html(''); $('.img-loading').hide(); }); } function edit_data(id) {var user_log_type = $('.user-log').attr('u-type'); var user_log_id = $('.user-log').attr('u-id'); var user_edit = $('.ls_name'+id).attr('user'); var user_type = $('.ls_name'+id).attr('user_type'); var chk = true; if(user_log_type == 'user'){if(user_log_id==user_edit){chk = true; } else{chk = false; } } if(user_log_type == 'super-user'){if(user_log_id==user_edit){chk = true; } else{if(user_type=='user'){chk = true; } else {chk = false; } } } if(chk==true){$('#list_data_edit').hide(); $('.img-loading').show(); var data_year = $('.data_year').val(); $.post(url+'index.php/'+'load_page',{ page:'page_edit',year:data_year, id:id} ,function(data){ $('#form_edit').html(data); $('#form_edit').slideDown(); $('.loading').html(''); $('.img-loading').hide();   $('#main-panel').slideDown(); }); } else{$('#no_del').modal('show'); } } function del(id) {var user_log_type = $('.user-log').attr('u-type'); var user_log_id = $('.user-log').attr('u-id'); var user_edit = $('.ls_name'+id).attr('user'); var user_type = $('.ls_name'+id).attr('user_type'); var chk = true; if(user_log_type == 'user'){if(user_log_id==user_edit){chk = true; } else{chk = false; } } if(user_log_type == 'super-user'){if(user_log_id==user_edit){chk = true; } else{if(user_type=='user'){chk = true; } else {chk = false; } } } if(chk==true){var urlh = window.location.href; var url = urlh.split('#')[0]; var name = $('.ls_name'+id).html(); var datash = "<div class='well'><h4>ລາຍການ: "+name+"</h4></div> ໝາຍເຫດ: ຂໍ້ມູນທີ່ຖຶກລຶບ ຈະໄປຢູ່ໃນຖັງຂີ້ເຫຍືອ ຂອງລະບົບ."; window.b = $.confirm({title: '<font color="#ffbd4a"><i class=" ti-alert "></i> ທ່ານແນ່ໃຈບໍ່ ທີ່ຈະລຶບຂໍ້ມູນນີ້?</font>', content: datash, animation: 'zoom', animationClose: 'top', confirmButton: '<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> ຍືນຍັນລຶບ', cancelButton: '<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> ຍົກເລີກ', confirm: function () {  $('.img-loading').show(); $.post(url+'index.php/'+'mdata/update',{ type:'update_doc_del', doc_id:id} ,function(data){$('.img-loading').hide(); $('.dc-'+id).remove(); }); }  }); } else{$('#no_del').modal('show'); } } </script>