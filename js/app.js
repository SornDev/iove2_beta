$(document).ready(function() {
    var url = $('#base_url');
    $('.menu-search').click(function(event) {
        $('.search').slideDown('slow');
        var intrvl = setInterval(function() {
            $('#search_doc:first').focus();
            clearInterval(intrvl);
        }, 800);
    });
    var a = '0';
    $(function() { load_page(); });
    $('.navbar-toggle').click(function(event) { var a = $('#navbar').attr('dd'); if (a == '0') { $('#navbar').attr('dd', '1'); } else { $('#navbar').attr('dd', '0'); } });
    $(window).bind('hashchange', function() {
        load_page();
        var a = $('#navbar').attr('dd');
        if (a == '1') {
            if ($(window).width() <= '755') {
                $('.navbar-toggle').click();
                $('#navbar').attr('dd', '0');
            }
        }
    });

    function load_page() {
        var urlh = window.location.href + '#';
        var hash = urlh.split('#')[1];
        var url = urlh.split('#')[0];
        var idview = hash.split(':')[1];
        var hash_new = hash.split(':')[0];
        if (idview != null) { hash = hash_new; }
        if (hash != null) {
            switch (hash) {
                case 'index':
                    $('#main-panel').hide();
                    $('.img-loading').show();
                    var data_year = $('.data_year').val();
                    $('#main-panel').attr('class', 'panel panel-default');
                    $('.search').slideUp('slow');
                    $('.m-title').html('<h3 class="panel-title"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> ການເຄື່ອນໄຫວ ເອກະສານປະຈຳເດືອນ ປີ ' + data_year + '</h3>');
                    $.post(url + 'index.php/' + 'load_page', { page: 'index', year: data_year }, function(data) {
                        $('.m-contain').html(data);
                        $('.loading').html('');
                        chdata(data);
                        $('#main-panel').slideDown();
                        $('.img-loading').hide();
                    });
                    $('#search_doc').val('');
                    break;
                case 'search':
                    $('#main-panel').hide();
                    $('.img-loading').show();
                    $('#main-panel').attr('class', 'panel panel-danger');
                    $('.search').slideDown('slow');
                    var intrvl = setInterval(function() {
                        $('#search_doc:first').focus();
                        clearInterval(intrvl);
                    }, 800);
                    var data_year = $('.data_year').val();
                    $('.m-title').html('<span class="pull-right"><button type="button" class="btn btn-default bbox search-ad"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> ຄົ້ນຫາລະອຽດ</button></span><h3 class="panel-title"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> ລາຍການຄົ້ນຫາ</h3>');
                    $.post(url + 'index.php/' + 'load_page', { page: 'search', year: data_year }, function(data) {
                        $('.m-contain').html(data);
                        $('.loading').html('');
                        chdata(data);
                        $('#main-panel').slideDown();
                        $('.img-loading').hide();
                    });
                    $('#search_doc').val('');
                    break;
                case 'in-doc':
                    var data_year = $('.data_year').val();
                    $('#main-panel').hide();
                    $('.img-loading').show();
                    $('#main-panel').attr('class', 'panel panel-success');
                    $('.search').slideUp('slow');
                    $('.m-title').html('<h3 class="panel-title"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> ບັນທຶກເອກະສານ ຂາເຂົ້າ</h3>');
                    $.post(url + 'index.php/' + 'load_page', { page: 'in-doc', year: data_year }, function(data) {
                        $('.m-contain').html(data);
                        $('.loading').html('');
                        chdata(data);
                        $('#main-panel').slideDown();
                        $('.img-loading').hide();
                    });
                    $('#search_doc').val('');
                    break;
                case 'out-doc':
                    var data_year = $('.data_year').val();
                    $('#main-panel').hide();
                    $('.img-loading').show();
                    $('#main-panel').attr('class', 'panel panel-info');
                    $('.search').slideUp('slow');
                    $('.m-title').html('<h3 class="panel-title"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> ບັນທຶກເອກະສານ ຂາອອກ</h3>');
                    $.post(url + 'index.php/' + 'load_page', { page: 'out-doc', year: data_year }, function(data) {
                        $('.m-contain').html(data);
                        $('.loading').html('');
                        chdata(data);
                        $('#main-panel').slideDown();
                        $('.img-loading').hide();
                    });
                    $('#search_doc').val('');
                    break;
                case 'report':
                    $('#main-panel').hide();
                    $('.img-loading').show();
                    $('.search').slideUp('slow');
                    $('#main-panel').attr('class', 'panel panel-primary');
                    $('.m-title').html('<h3 class="panel-title"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> ລາຍງານ</h3>');
                    $.post(url + 'index.php/' + 'load_page', { page: 'report' }, function(data) {
                        $('.m-contain').html(data);
                        $('.loading').html('');
                        chdata(data);
                        $('#main-panel').slideDown();
                        $('.img-loading').hide();
                    });
                    $('#search_doc').val('');
                    $('.img-loading').hide();
                    break;
                case 'config-system':
                    $('#main-panel').hide();
                    $('.img-loading').show();
                    $('#main-panel').attr('class', 'panel panel-primary');
                    $('.search').slideUp('slow');
                    $('.m-title').html('<h3 class="panel-title"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> ການຕັ້ງຄ່າ</h3>');
                    $.post(url + 'index.php/' + 'load_page', { page: 'config-system' }, function(data) {
                        $('.m-contain').html(data);
                        $('.loading').html('');
                        chdata(data);
                        $('#main-panel').slideDown();
                        $('.img-loading').hide();
                    });
                    $('#search_doc').val('');
                    break;
                case 'config-user':
                    $('#main-panel').hide();
                    $('.img-loading').show();
                    $('#main-panel').attr('class', 'panel panel-primary');
                    $('.search').slideUp('slow');
                    $('.m-title').html('<h3 class="panel-title"> <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> ຜູ້ໃຊ້ ແລະ ສິດທິ</h3>');
                    $.post(url + 'index.php/' + 'load_page', { page: 'config-user' }, function(data) {
                        $('.m-contain').html(data);
                        $('.loading').html('');
                        chdata(data);
                        $('#main-panel').slideDown();
                        $('.img-loading').hide();
                    });
                    $('#search_doc').val('');
                    break;
                case 'about':
                    $('#main-panel').hide();
                    $('.img-loading').show();
                    $('#main-panel').attr('class', 'panel panel-primary');
                    $('.search').slideUp('slow');
                    $('.m-title').html('<h3 class="panel-title"><i class="fa fa-info-circle"></i> ຂໍ້ມູນກ່ຽວກັບ ໂປຼແກມ</h3>');
                    $.post(url + 'index.php/' + 'load_page', { page: 'about' }, function(data) {
                        $('.m-contain').html(data);
                        $('.loading').html('');
                        chdata(data);
                        $('#main-panel').slideDown();
                        $('.img-loading').hide();
                    });
                    $('#search_doc').val('');
                    $('.img-loading').hide();
                    break;
                case 'config-grono-type':
                    $('#main-panel').hide();
                    $('.img-loading').show();
                    $('#main-panel').attr('class', 'panel panel-primary');
                    $('.search').slideUp('slow');
                    $('.m-title').html('<h3 class="panel-title"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> ໂກຼໂນ ແລະ ພາກສ່ວນ</h3>');
                    $.post(url + 'index.php/' + 'load_page', { page: 'config-gno-type' }, function(data) {
                        $('.m-contain').html(data);
                        $('.loading').html('');
                        chdata(data);
                        $('#main-panel').slideDown();
                        $('.img-loading').hide();
                    });
                    $('#search_doc').val('');
                    break;
                case 'edit_data':
                    var data_year = $('.data_year').val();
                    $('#main-panel').hide();
                    $('.img-loading').show();
                    $('#main-panel').attr('class', 'panel panel-primary');
                    $('.search').slideUp('slow');
                    $('.m-title').html('<h3 class="panel-title"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  ແກ້ໄຂຂໍ້ມູນ</h3>');
                    $.post(url + 'index.php/' + 'load_page', { page: 'edit_data', year: data_year }, function(data) {
                        $('.m-contain').html(data);
                        $('.loading').html('');
                        chdata(data);
                        $('#main-panel').slideDown();
                        $('.img-loading').hide();
                    });
                    $('#search_doc').val('');
                    break;
                case 'trash':
                    var data_year = $('.data_year').val();
                    $('#main-panel').hide();
                    $('.img-loading').show();
                    $('#main-panel').attr('class', 'panel panel-danger');
                    $('.search').slideUp('slow');
                    $('.m-title').html('<h3 class="panel-title"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>  ຖັງຂິ້ເຫຍື້ອລະບົບ</h3>');
                    $.post(url + 'index.php/' + 'load_page', { page: 'trash', year: data_year }, function(data) {
                        $('.m-contain').html(data);
                        $('.loading').html('');
                        chdata(data);
                        $('#main-panel').slideDown();
                        $('.img-loading').hide();
                    });
                    $('#search_doc').val('');
                    break;
            }
        }
    }

    function chdata(data) { var urlh = window.location.href + '#'; var url = urlh.split('#')[0]; if (data == '') { window.location.href = url; } }
    var intrvl = setInterval(function() {
        $('.user-name:first').focus();
        clearInterval(intrvl);
    }, 800);

    function checklogin() { var user = $('.user-name').val(); var pass = $('.user-pass').val(); if (user != '' && pass != '') { $('.btn-login').attr('disabled', false); } else { $('.btn-login').attr('disabled', true); } }
    $('.user-name').keyup(function(event) { checklogin(); if (event.keyCode == 13) { $('.btn-login').click(); } });
    $('.user-pass').keyup(function(event) { checklogin(); if (event.keyCode == 13) { $('.btn-login').click(); } });
    $('.btn-login').click(function(event) {
        $('.btn-login').attr('disabled', true);
        $('.loading').html('<div class="text-primary text-center"><i class="fa fa-refresh fa-spin" ></i> ລະບົບກຳລັງກວດຊອບ...</div>');
        var uurl = window.location.href;
        var url = uurl.split('login')[0];
        var user = $('.user-name').val();
        var pass = $('.user-pass').val();
        $.post(url + 'user', { login: 'check', user: user, pass: pass }, function(data) {
            $('.loading').html(data);
            var lg = $('.login-go').val();
            if (lg == 'login-yes') {
                var uurl = window.location.href;
                var url = uurl.split('login')[0];
                var url2 = url.split('index.php/')[0];
                window.location.href = url2;
            }
        });
    });
});

function run_st(e) { if (e.keyCode == 13) { return false; } }