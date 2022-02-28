<div style="  height: 600px; overflow-y: scroll; padding-right: 8px;"> <ul class="list-group dp-doc" > <?php foreach ($show_in_out  as $data) {
    if ($data['doc_in_out']=='in') {
        $from = explode("|", $data['doc_from']);
        $from_main = $from['0'];
        $from_id = $from['1'];
        if ($from_main=='h') {
            foreach ($sh_hoffice  as $dat) {
                if ($dat['id']==$from_id) {
                    $new_from=$dat['name'];
                }
            }
        } elseif ($from_main=='b') {
            foreach ($sh_boffice  as $dat) {
                if ($dat['id']==$from_id) {
                    $new_from=$dat['name'];
                }
            }
        } elseif ($from_main=='u') {
            foreach ($sh_uoffice  as $dat) {
                if ($dat['id']==$from_id) {
                    $new_from=$dat['name'];
                }
            }
        } elseif ($from_main=='o') {
            foreach ($sh_ooffice  as $dat) {
                if ($dat['id']==$from_id) {
                    $new_from=$dat['name'];
                }
            }
        }
        $to = explode("|", $data['doc_to']);
        $to_main = $to['0'];
        $to_id = $to['1'];
        if ($to_main=='h') {
            foreach ($sh_hoffice  as $dat) {
                if ($dat['id']==$to_id) {
                    $new_to=$dat['name'];
                }
            }
        } elseif ($to_main=='b') {
            foreach ($sh_boffice  as $dat) {
                if ($dat['id']==$to_id) {
                    $new_to=$dat['name'];
                }
            }
        } elseif ($to_main=='u') {
            foreach ($sh_uoffice  as $dat) {
                if ($dat['id']==$to_id) {
                    $new_to=$dat['name'];
                }
            }
        } elseif ($to_main=='o') {
            foreach ($sh_ooffice  as $dat) {
                if ($dat['id']==$to_id) {
                    $new_to=$dat['name'];
                }
            }
        }
        if ($data['detail']!='') {
            $detail = "<label>ລາຍລະອຽດ:</label> ".$data['detail']." <br>";
        } else {
            $detail = '';
        }
        if ($data['sex']=="ຊາຍ") {
            $sex = "ທ. ";
        } else {
            $sex = "ນ. ";
        }
        if ($data['user_name']=='admin') {
            $sex = "";
        }
        echo '<a  class="list-group-item" Onclick="showdetail('.$data['doc_id'].')"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> '.$data['name'].' </a><div style="display:none; padding: 10px; border: 1px solid #ddd;" class="doc_detail" id="doc'.$data['doc_id'].'"> <label>ໝວດ:</label> '.$data['grono_name'].' <label>ຂາເຂົ້າເລກທີ່:</label> '.sprintf("%03d", $data['num_in']).'<br> <label>ຈາກ:</label> '.$new_from.' ('.$data['docex'].') <br> <label>ເຖິງ:</label> '.$new_to.' <br> <label>ໄຟລ໌ສະແກນ:</label> <div class="well well-sm" style="font-size: 18px;">';
        $file = explode("||", $data['file_scan']);
        for ($i=0;$i<count($file);$i++) {
            if ($file[$i]!='') {
                echo '<span onclick="shfile(\''.$file[$i].'\')" data="'.$file[$i].'" style="cursor: pointer;"><i class="fa fa-file-pdf-o"></i></span> ';
                if ($i<count($file)-2) {
                    echo ' - ';
                }
            }
        }
        echo '</div> '.$detail.'<div class="pull-right"><small><label>ບັນທຶກໂດຍ:</label> '.$sex.$data['user_name'].'  <label>ເມື່ອ:</label> '.timeago($data['doc_date']).'</small></div>    <div style="clear: both;"></div> </div>';
    } else {
        $from = explode("|", $data['doc_from']);
        $from_main = $from['0'];
        $from_id = $from['1'];
        if ($from_main=='h') {
            foreach ($sh_hoffice  as $dat) {
                if ($dat['id']==$from_id) {
                    $new_from=$dat['name'];
                }
            }
        } elseif ($from_main=='b') {
            foreach ($sh_boffice  as $dat) {
                if ($dat['id']==$from_id) {
                    $new_from=$dat['name'];
                }
            }
        } elseif ($from_main=='u') {
            foreach ($sh_uoffice  as $dat) {
                if ($dat['id']==$from_id) {
                    $new_from=$dat['name'];
                }
            }
        } elseif ($from_main=='o') {
            foreach ($sh_ooffice  as $dat) {
                if ($dat['id']==$from_id) {
                    $new_from=$dat['name'];
                }
            }
        }
        $to = explode("|", $data['doc_to']);
        $to_main = $to['0'];
        $to_id = $to['1'];
        if ($to_main=='h') {
            foreach ($sh_hoffice  as $dat) {
                if ($dat['id']==$to_id) {
                    $new_to=$dat['name'];
                }
            }
        } elseif ($to_main=='b') {
            foreach ($sh_boffice  as $dat) {
                if ($dat['id']==$to_id) {
                    $new_to=$dat['name'];
                }
            }
        } elseif ($to_main=='u') {
            foreach ($sh_uoffice  as $dat) {
                if ($dat['id']==$to_id) {
                    $new_to=$dat['name'];
                }
            }
        } elseif ($to_main=='o') {
            foreach ($sh_ooffice  as $dat) {
                if ($dat['id']==$to_id) {
                    $new_to=$dat['name'];
                }
            }
        }
        if ($data['detail']!='') {
            $detail = "<label>ລາຍລະອຽດ:</label> ".$data['detail']." <br>";
        } else {
            $detail = '';
        }
        if ($data['sex']=="ຊາຍ") {
            $sex = "ທ. ";
        } else {
            $sex = "ນ. ";
        }
        if ($data['user_name']=='admin') {
            $sex = "";
        }
        echo '<a  class="list-group-item" Onclick="showdetail('.$data['doc_id'].')"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> '.$data['name'].' </a><div style="display:none; padding: 10px; border: 1px solid #ddd;" class="doc_detail" id="doc'.$data['doc_id'].'">  <label>ໝວດ:</label> '.$data['grono_name'].' <label>ຂາອອກເລກທີ່:</label> '.sprintf("%03d", $data['num_in']).'<br> <label>ຈາກ:</label> '.$new_from.' ('.$data['docex'].') <br> <label>ເຖິງ:</label> '.$new_to.' <br> <label>ໄຟລ໌ສະແກນ:</label> <div class="well well-sm" style="font-size: 18px;">';
        $file = explode("||", $data['file_scan']);
        for ($i=0;$i<count($file);$i++) {
            if ($file[$i]!='') {
                echo '<span onclick="shfile(\''.$file[$i].'\')" data="'.$file[$i].'" style="cursor: pointer;"><i class="fa fa-file-pdf-o"></i></span> ';
                if ($i<count($file)-2) {
                    echo ' - ';
                }
            }
        }
        echo '</div> '.$detail.'<div class="pull-right"><small><label>ບັນທຶກໂດຍ:</label> '.$sex.$data['user_name'].'  <label>ເມື່ອ:</label> '.timeago($data['doc_date']).'</small></div>    <div style="clear: both;"></div> </div>';
    }
} ?> </ul> </div> <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel"><i class="fa fa-file-pdf-o"></i> ໄຟລ໌ເອກະສານ</h4> </div> <div class="modal-body sh_file"></div> <div class="modal-footer"> <button type="button" class="btn btn-default btn_print" data="" > <span class="glyphicon glyphicon-print" aria-hidden="true"></span> ສັ່ງພິມ</button> </div> </div> </div> </div> <input type="hidden" class="data_year" value="<?php echo $used_year->name; ?>" > <input type="hidden" value="" id="clicklist"> <script type="text/javascript"> function showdetail(id) {var cl = $('#clicklist').val(); if(cl == id){$('.doc_detail').slideUp('slow'); $('#clicklist').val(''); } else {$('.doc_detail').slideUp('slow'); $('#doc'+id).slideDown('slow'); $('#clicklist').val(id); } } var urlh = window.location.href; var url = urlh.split('#')[0]; function shfile(file) {var sfile = file.split("."); if(sfile[1]=='pdf'){if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {$('.sh_file').html('<form method="get" action="'+url+'file_upload/'+file+'"><center><button type="submit" class="btn btn-default" ><i class="fa fa-file-pdf-o"></i> ດາວໂຫລດເອກະສານ PDF</button></center></form>'); } else {$('.sh_file').html('<object data="'+url+'file_upload/'+file+'" type="application/pdf" width="100%" height="500"></object>'); } } else {$('.sh_file').html('<image src="'+url+'file_upload/'+file+'" width="100%" >'); } $('.btn_print').attr('data', file); $('#myModal').modal('show'); } $('.btn_print').click(function(event) {var file = $('.btn_print').attr('data'); var w = window.open(url+'file_upload/'+file); $(w).ready(function(){w.print(); }); }); </script>