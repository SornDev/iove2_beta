<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 ">
        <legend><strong><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> ສິດທິຂອງຜູ້ໃຊ້</strong></legend>
        <ul class="text-justify">
            <li> <span class="label label-primary">Admin</span> ເປັນຜູ້ຈັດການລະບົບສູງສຸດ ສາມາດທີ່ຈະເຫັນຂໍ້ມູນ ຂອງຜູ້ໃຊ້ຄົນອື່ນໄດ້, ສາມາດແກ້ໄຂ ລຶບຂໍ້ມູນຂອງຕົນ ແລະຂໍ້ມູນຂອງຜູ້ໃຊ້ ຄົນອື່ນ, ສາມາດສ້າງ User ຂື້ນມາໄດ້, ສາມາດຕັ້ງຄ່າລະບົບຕ່າງໆ ຂອງໂປຼແກມເຊັ່ນ ຖານຂໍ້ມູນ, ຂໍ້ມູນລະບົບ, ຂໍ້ມູນອົງກອນ ຂໍ້ມູນສະມາຊິກ ແລະອື່ນໆ.</li>
            <li><span class="label label-info">Super-User</span> ເປັນຜູ້ໃຊ້ທີ່ມີສິດທິ ຮອງລົງມາຈາກ Admin ແຕ່ຈະບໍ່ສາມາດຕັ້ງຄ່າລະບົບຕ່າງໆຂອງໂປຼແກມໄດ້, ບໍ່ສາມາດ ສ້າງ User ໄດ້. ມີຄວາມສາມາດ ໃນການປ້ອນຂໍ້ມູນ ແກ້ໄຂຂໍ້ມູນຂອງຕົນ ແລະຂໍ້ມູນຂອງ User ທຳມະດາໄດ້, ບໍ່ສາມາດເຫັນຂໍ້ມູນທີ່ Admin ປ້ອນໄວ້ ຈະເຫັນພຽງຂໍ້ມູນຂອງຕົນ ແລະ User ທຳມະດາເທົ່ານັ້ນ.</li>
            <li><span class="label label-warning">User</span> ເປັນຜູ້ໃຊ້ງານ ທີ່ສາມາດປ້ອນຂໍ້ມູນ ແລະແກ້ໄຂຂໍ້ມູນໄດ້ຢ່າງດຽວ, ສາມາດສ້າງລາຍງານຂອງຕົນໄດ້, ບໍ່ສາມາດເຫັນຂໍ້ມູນການປ້ອນ ຂອງ Admin ແລະ Super-User. ສາມາດແກ້ໄຂ ລຶບຂໍ້ມູນຂອງຕົນເອງໄດ້ເທົ່ານັ້ນ.</li>
        </ul>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6">
        <legend> <span class="pull-right"> <?php if ($this->session->userdata("user_type") == 'admin') {  ?> <button type="button" class="btn btn-default bbox add-user-btn" data="show"> <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> ເພີ່ມຜູ້ໃຊ້ໃນລະບົບ</button> <?php } ?> </span> <strong> <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> ລາຍການຜູ້ໃຊ້</strong></legend>
        <div class="panel panel-default form-user" style="display: none;">
            <div class="panel-body">
                <p> <button type="button" class="close top-10 close-form-user"><span aria-hidden="true">&times;</span></button> </p>
                <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-custom active check-progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> </div>
                </div> <input type="hidden" id="data-form" data='add' id_update=''>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"> ຊື່ນາມສະກຸນ ຜູ້ໃຊ້: </div> <input type="text" class="form-control user-name" placeholder="ທອງສອນ ອິນທະວົງ">
                    </div>
                </div>
                <div class="form-inline">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon "> ເພດ: </div> <select class="form-control user-sex">
                                <option value=""> ເລືອກເພດ </option>
                                <option value="ຊາຍ">ຊາຍ</option>
                                <option value="ຍິງ">ຍິງ</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"> ປະເພດຜູ້ໃຊ້: </div> <select class="form-control user-type">
                                <option value=""> ເລືອກປະເພດ </option>
                                <option value="super-user"> Super-User </option>
                                <option value="user"> User </option>
                            </select>
                        </div>
                    </div>
                </div>
                <p>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"> ລະຫັດເຂົ້າລະບົບ: </div> <input type="password" class="form-control user-password" placeholder="ລະຫັດ">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"> ຍືນຍັນລະຫັດ: </div> <input type="password" class="form-control user-password2" placeholder="ຍືນຍັນລະຫັດ">
                        </div>
                    </div>
                    <div class="alert alert-warning box-alert" style="display: none;" role="alert"><strong>ແຈ້ງເຕືອນ!</strong><span class="msg"></span></div>
                </p>
            </div>
        </div>
        <ul class="list-group list-user"> <?php foreach ($sh_user as $user) {
                                                if ($user['user_type'] == 'admin') {
                                                    $user_show = '<span class="label label-primary"> Admin </span>';
                                                } elseif ($user['user_type'] == 'super-user') {
                                                    $user_show = '<span class="label label-info"> Super-User </span>';
                                                } else {
                                                    $user_show = '<span class="label label-warning"> User </span>';
                                                }
                                                if ($user['sex'] == 'ຊາຍ') {
                                                    $new_sex = 'ທ. ';
                                                } else {
                                                    $new_sex = 'ນ. ';
                                                }
                                                if ($user['user_name'] == 'admin') {
                                                    $new_sex = "";
                                                } ?> <li class="list-group-item user-item<?php echo $user['id']; ?>"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <span class="s<?php echo $user['id']; ?>"><?php echo $new_sex; ?></span><span class="u-name<?php echo $user['id']; ?>" user_type="<?php echo $user['user_type']; ?>" sex="<?php echo $user['sex']; ?>"><?php echo $user['user_name']; ?></span> <?php if ($this->session->userdata("user_type") == 'admin') {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        if ($user['user_type'] == 'admin') {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            echo '<span class="pull-right"> <a onclick="edit_admin(' . $user['id'] . ')" class="edad" data="1"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> ປ່ຽນລະຫັດ</a></span>'; ?> <div class="form_admin_newpass" style="display: none;">
                                <p>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"> ລະຫັດໃໝ່: </div> <input type="password" class="form-control admin-password" placeholder="ລະຫັດໃໝ່">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"> ຍືນຍັນລະຫັດ: </div> <input type="password" class="form-control admin-password2" placeholder="ຍືນຍັນລະຫັດ">
                                        </div>
                                    </div>
                                    <div class="alert alert-warning box-alert" style="display: none;" role="alert"><strong>ແຈ້ງເຕືອນ!</strong><span class="msg"></span></div>
                                </p>
                                <div style="text-align: center;"> 
                                  <button type="button" class="btn btn-primary bts_admin" disabled>ຍືນຍັນການປ່ຽນລະຫັດ</button> 
                                </div>
                            </div> <?php } else { ?> <span class="pull-right"> <a onclick="edit_user(<?php echo $user['id']; ?>)"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span> <a onclick="del_user(<?php echo $user['id']; ?>)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> </span> <?php }
                                                                                                                                                                                                                                                                                                                                                                                                                } ?> <br> <small>ສະຖານະ:</small> <span class="us<?php echo $user['id']; ?>"><?php echo $user_show; ?></span></li> <?php } ?> </ul>
    </div>
</div>
<script type="text/javascript">
    $('.add-user-btn').click(function(event) {
        $('.add-user-btn').attr('disabled', true);
        var urlh = window.location.href;
        var url = urlh.split('#')[0];
        var data = $('.add-user-btn').attr('data');
        $('.box-alert').hide();
        var intrvl = setInterval(function() {
            $('.user-name:first').focus();
            clearInterval(intrvl);
        }, 800);
        if (data == 'show') {
            $('.check-progress-bar').attr('style', 'width:0%;');
            $('.user-name').val('');
            $('.user-sex').val('');
            $('.user-type').val('');
            $('.user-password').val('');
            $('.user-password2').val('');
            $('.list-user').slideUp('slow');
            $('.add-user-btn').attr('class', 'btn btn-default bbox add-user-btn');
            $('.add-user-btn').html('<i class="fa fa-save"></i> ບັນທືກ');
            $('.add-user-btn').attr('data', 'save');
            $('.add-user-btn').attr('disabled', true);
            $('.form-user').slideDown('slow');
        } else if (data == 'save') {
            var name = $('.user-name').val(),
                sex = $('.user-sex').val(),
                user_type = $('.user-type').val(),
                pass = $('.user-password').val(),
                pass2 = $('.user-password2').val();
            var id_update = $('#data-form').attr('id_update');
            var data_form = $('#data-form').attr('data');
            if (data_form == "add") {
                $('.img-loading').show();
                $.post(url + 'index.php/' + 'mdata/add', {
                    type: 'add-user',
                    name: name,
                    sex: sex,
                    user_type: user_type,
                    pass: pass
                }, function(data) {
                    $('.img-loading').hide();
                    $('.list-user').slideDown('slow');
                    $('.add-user-btn').attr('data', 'show');
                    $('.add-user-btn').attr('disabled', false);
                    $('.add-user-btn').html('<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> ເພີ່ມຜູ້ໃຊ້');
                    $('.form-user').slideUp('slow');
                    $('.list-user').append(data);
                });
            } else if (data_form == "update") {
                $('.img-loading').show();
                $.post(url + 'index.php/' + 'mdata/update', {
                    type: 'update-user',
                    name: name,
                    sex: sex,
                    user_type: user_type,
                    pass: pass,
                    id_update: id_update
                }, function(data) {
                    $('.img-loading').hide();
                    $('#data-form').attr('data', 'add');
                    $('#data-form').attr('id_update', '');
                    $('.list-user').slideDown('slow');
                    $('.add-user-btn').attr('data', 'show');
                    $('.add-user-btn').attr('disabled', false);
                    $('.add-user-btn').html('<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> ເພີ່ມຜູ້ໃຊ້');
                    $('.form-user').slideUp('slow');
                    $('.u-name' + id_update).html(name);
                    $('.u-name' + id_update).attr('user_type', user_type);
                    $('.u-name' + id_update).attr('sex', sex);
                    if (user_type == 'admin') {
                        var user_show = '<span class="label label-primary"> Admin </span>';
                    } else if (user_type == 'super-user') {
                        var user_show = '<span class="label label-info"> Super-User </span>';
                    } else {
                        var user_show = '<span class="label label-warning"> User </span>';
                    }
                    if (sex == 'ຊາຍ') {
                        var nsex = 'ທ. ';
                    } else {
                        var nsex = 'ນ. ';
                    }
                    $('.s' + id_update).html(nsex);
                    $('.us' + id_update).html(user_show);
                });
            };
        }
    });
    $('.user-name').keyup(function(event) {
        check_data()
    });
    $('.user-sex').change(function(event) {
        check_data()
    });
    $('.user-type').change(function(event) {
        check_data()
    });
    $('.user-password').keyup(function(event) {
        check_data()
    });
    $('.user-password2').keyup(function(event) {
        check_data()
    });

    function check_data() {
        var name = $('.user-name').val(),
            sex = $('.user-sex').val(),
            type = $('.user-type').val(),
            pass = $('.user-password').val(),
            pass2 = $('.user-password2').val();
        var data_form = $('#data-form').attr('data');
        var data = '0';
        var all = '0';
        if (data_form == 'add') {
            if (name != '') {
                data = '10';
                if (sex != '') {
                    data = '20';
                    if (type != '') {
                        data = '30';
                        if (pass.length > 5) {
                            if (pass2.length > 5) {
                                if (pass == pass2) {
                                    data = '40';
                                    $('.box-alert').slideUp('slow');
                                } else {
                                    data = '30';
                                    $('.msg').html(' ລະຫັດຜ່ານ ທ່ານປ້ອນບໍ່ກົງກັນ! ');
                                    $('.box-alert').slideDown('slow');
                                }
                            } else {
                                data = '30';
                                $('.msg').html(' ລະຫັດຜ່ານ ຕ້ອງມີຢ່າງນ້ອຍ 6 ຕົວອັກສອນ!');
                                $('.box-alert').slideDown('slow');
                            }
                        } else {
                            data = '30';
                            $('.msg').html(' ລະຫັດຜ່ານ ຕ້ອງມີຢ່າງນ້ອຍ 6 ຕົວອັກສອນ!');
                            $('.box-alert').slideDown('slow');
                        }
                    } else {
                        data = '20'
                    }
                } else {
                    data = '10';
                }
            } else {
                data = '0';
            }
        } else if (data_form == 'update') {
            if (name != '') {
                data = '10';
                if (sex != '') {
                    data = '20';
                    if (type != '') {
                        data = '30';
                        if (pass != '') {
                            if (pass.length > 5) {
                                if (pass2.length > 5) {
                                    if (pass == pass2) {
                                        data = '40';
                                        $('.box-alert').slideUp('slow');
                                    } else {
                                        data = '30';
                                        $('.msg').html(' ລະຫັດຜ່ານ ທ່ານປ້ອນບໍ່ກົງກັນ! ');
                                        $('.box-alert').slideDown('slow');
                                    }
                                } else {
                                    data = '30';
                                    $('.msg').html(' ລະຫັດຜ່ານ ຕ້ອງມີຢ່າງນ້ອຍ 6 ຕົວອັກສອນ!');
                                    $('.box-alert').slideDown('slow');
                                }
                            } else {
                                data = '30';
                                $('.msg').html(' ລະຫັດຜ່ານ ຕ້ອງມີຢ່າງນ້ອຍ 6 ຕົວອັກສອນ!');
                                $('.box-alert').slideDown('slow');
                            }
                        } else {
                            data = '40';
                            $('.box-alert').slideUp('slow');
                        }
                    } else {
                        data = '20'
                    }
                } else {
                    data = '10';
                }
            } else {
                data = '0';
            }
        }
        all = (data * 2.5);
        $('.check-progress-bar').attr('style', 'width: ' + all + '%;');
        if (all == '100') {
            $('.add-user-btn').attr('data', 'save');
            $('.add-user-btn').attr('disabled', false);
        } else {
            $('.add-user-btn').attr('disabled', true);
        }
    }
    $('.close-form-user').click(function(event) {
        $('.list-user').slideDown('slow');
        $('.add-user-btn').attr('data', 'show');
        $('.add-user-btn').attr('disabled', false);
        $('.add-user-btn').html('<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> ເພີ່ມຜູ້ໃຊ້');
        $('.form-user').slideUp('slow');
    });
    $('#name-u').keyup(function(event) {
        if (event.keyCode == 13) {
            save_user();
        }
    });
    $('.save-u').click(function(event) {
        save_user();
    });
    $('.admin-password').keyup(function(e) {
        check_pass_admin();
    });
    $('.admin-password2').keyup(function(e) {
        check_pass_admin();
    });

    function check_pass_admin() {
        var npass = $('.admin-password').val();
        var re_npass = $('.admin-password2').val();
        if (npass != '' || re_npass != '') {
            if (npass.length > 5) {
                if (re_npass == '') {
                    $('.msg').html(' ປ້ອນລ່ະຫັດຍືນຍັນ! ');
                } else {
                    if (re_npass.length > 5) {
                        if (npass == re_npass) {
                            $('.box-alert').slideUp('slow');
                            $('.bts_admin').attr('disabled', false);
                        } else {
                            $('.msg').html(' ລະຫັດຜ່ານ ທ່ານປ້ອນບໍ່ກົງກັນ! ');
                            $('.box-alert').slideDown('slow');
                            $('.bts_admin').attr('disabled', true);
                        }
                    } else {
                        $('.msg').html(' ລະຫັດຜ່ານ ຕ້ອງມີຢ່າງນ້ອຍ 6 ຕົວອັກສອນ!');
                        $('.box-alert').slideDown('slow');
                        $('.bts_admin').attr('disabled', true);
                    }
                }
            } else {
                $('.msg').html(' ລະຫັດຜ່ານ ຕ້ອງມີຢ່າງນ້ອຍ 6 ຕົວອັກສອນ!');
                $('.box-alert').slideDown('slow');
                $('.bts_admin').attr('disabled', true);
            }
        } else {
            $('.box-alert').slideUp('slow');
            $('.bts_admin').attr('disabled', true);
        }
    }

    function edit_admin(id) {
        var bdata = $('.edad').attr('data');
        if (bdata == '1') {
            $('.edad').html('<p><button type="button" class="close top-10 close-form-user" ><span aria-hidden="true">&times;</span></button></p>');
            $('.edad').attr('data', '0');
        } else {
            $('.edad').html('<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> ປ່ຽນລະຫັດ');
            $('.edad').attr('data', '1');
        }
        $('.admin-password').val('');
        $('.admin-password2').val('');
        var urlh = window.location.href;
        var url = urlh.split('#')[0];
        $('.box-alert').hide();
        $('.form_admin_newpass').slideToggle('slow');
        var intrvl = setInterval(function() {
            $('.admin-password:first').focus();
            clearInterval(intrvl);
        }, 800);
    }
    $('.bts_admin').click(function(e) {
        var npass = $('.admin-password').val();
        var re_npass = $('.admin-password2').val();
        if (npass == re_npass) {
            $('.img-loading').show();
            $.post(url + 'index.php/' + 'mdata/update', {
                type: 'update-admin',
                id_update: '1',
                pass: npass
            }, function(data) {
                $('.img-loading').hide();
                $('.bts_admin').attr('disabled', true);
                $('.edad').click();
            });
        } else {
            $('.msg').html(' ລະຫັດຜ່ານ ທ່ານປ້ອນບໍ່ກົງກັນ! ');
            $('.box-alert').slideDown('slow');
            $('.bts_admin').attr('disabled', true);
        }
    });

    function edit_user(id) {
        var name = $('.u-name' + id).html();
        var user_type = $('.u-name' + id).attr('user_type');
        var sex = $('.u-name' + id).attr('sex');
        $('.user-name').val(name);
        $('.user-sex').val(sex);
        $('.user-type').val(user_type);
        $('.user-password').val('');
        $('.user-password2').val('');
        var urlh = window.location.href;
        var url = urlh.split('#')[0];
        $('.check-progress-bar').attr('style', 'width:0%;');
        $('.box-alert').hide();
        $('.list-user').slideUp('slow');
        $('.add-user-btn').attr('class', 'btn btn-default bbox add-user-btn');
        $('.add-user-btn').html('<i class="fa fa-save"></i> ບັນທືກ');
        $('#data-form').attr('data', 'update');
        $('#data-form').attr('id_update', id);
        $('.add-user-btn').attr('disabled', true);
        $('.form-user').slideDown('slow');
        var intrvl = setInterval(function() {
            $('.user-name:first').focus();
            clearInterval(intrvl);
        }, 800);
    }

    function del_user(id) {
        var urlh = window.location.href;
        var url = urlh.split('#')[0];
        var name = $('.u-name' + id).html();
        var sex = $('.s' + id).html();
        var datash = "<div class='well'><h4>ຜູ້ໃຊ້: " + sex + name + "</h4></div>";
        window.b = $.confirm({
            title: '<font color="#ffbd4a"><i class=" ti-alert "></i> ທ່ານແນ່ໃຈບໍ່ ທີ່ຈະລຶບຂໍ້ມູນນີ້?</font>',
            content: datash,
            animation: 'zoom',
            animationClose: 'top',
            confirmButton: '<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> ຍືນຍັນລຶບ',
            cancelButton: '<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> ຍົກເລີກ',
            confirm: function() {
                $('.img-loading').show();
                $.post(url + 'index.php/' + 'mdata/del', {
                    type: 'del-user',
                    id: id
                }, function(data) {
                    $('.user-item' + id).remove();
                    $('.img-loading').hide();
                });
            }
        });
    }
</script>