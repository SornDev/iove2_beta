 <?php if ($type =='lsone') {
    if ($doc =='in') {
        foreach ($show_in_out  as $data) {
            if ($data['doc_id']==$id) {
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
                echo '<a  class="list-group-item" Onclick="showdetail('.$data['doc_id'].')"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> '.$data['name'].' </a><div style="display:none; padding: 10px; border: 1px solid #ddd;" class="doc_detail" id="doc'.$data['doc_id'].'"> <div class="doc_edit'.$data['doc_id'].'" style="display:none;"> aaaaa </div> <div class="doc_contain'.$data['doc_id'].'"> <label>ໝວດ:</label> '.$data['grono_name'].' <label>ຂາເຂົ້າເລກທີ່:</label> '.sprintf("%03d", $data['num_in']).'<br> <label>ຈາກ:</label> '.$new_from.' ('.$data['docex'].') <br> <label>ເຖິງ:</label> '.$new_to.' <br> <label>ໄຟລ໌ສະແກນ:</label> <div class="well well-sm" style="font-size: 18px;">';
                $file = explode("||", $data['file_scan']);
                for ($i=0;$i<count($file);$i++) {
                    if ($file[$i]!='') {
                        echo '<span onclick="shfile(\''.$file[$i].'\')" data="'.$file[$i].'" style="cursor: pointer;"><i class="fa fa-file-pdf-o"></i></span> ';
                        if ($i<count($file)-2) {
                            echo ' - ';
                        }
                    }
                }
                echo '</div> '.$detail.'<div class="pull-right"><small><label>ບັນທຶກໂດຍ:</label> '.$sex.$data['user_name'].'  <label>ເມື່ອ:</label> '.timeago($data['doc_date']).'</small></div>    <div style="clear: both;"></div> </div> </div> ';
            }
        }
    } else {
        foreach ($show_in_out  as $data) {
            if ($data['doc_id']==$id) {
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
                echo '<a  class="list-group-item" Onclick="showdetail('.$data['doc_id'].')"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> '.$data['name'].' </a><div style="display:none; padding: 10px; border: 1px solid #ddd;" class="doc_detail" id="doc'.$data['doc_id'].'"> <div class="doc_edit'.$data['doc_id'].'" style="display:none;"> aaaaa bbbb </div> <div class="doc_contain'.$data['doc_id'].'"> <label>ໝວດ:</label> '.$data['grono_name'].' <label>ຂາອອກເລກທີ່:</label> '.sprintf("%03d", $data['num_in']).'<br> <label>ຈາກ:</label> '.$new_from.' ('.$data['docex'].') <br> <label>ເຖິງ:</label> '.$new_to.' <br> <label>ໄຟລ໌ສະແກນ:</label> <div class="well well-sm" style="font-size: 18px;">';
                $file = explode("||", $data['file_scan']);
                for ($i=0;$i<count($file);$i++) {
                    if ($file[$i]!='') {
                        echo '<span onclick="shfile(\''.$file[$i].'\')" data="'.$file[$i].'" style="cursor: pointer;"><i class="fa fa-file-pdf-o"></i></span> ';
                        if ($i<count($file)-2) {
                            echo ' - ';
                        }
                    }
                }
                echo '</div> '.$detail.'<div class="pull-right"><small><label>ບັນທຶກໂດຍ:</label> '.$sex.$data['user_name'].'  <label>ເມື່ອ:</label> '.timeago($data['doc_date']).'</small></div>    <div style="clear: both;"></div> </div> </div> ';
            }
        }
    }
} else {
    echo "<ul class='list-group last_pos_it' >";
    foreach ($show_in_out  as $data) {
        if ($data['doc_in_out'] =='in') {
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
            echo '<a  class="list-group-item" Onclick="showdetail('.$data['doc_id'].')"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> '.$data['name'].' </a><div style="display:none; padding: 10px; border: 1px solid #ddd;" class="doc_detail" id="doc'.$data['doc_id'].'"> <div class="doc_edit'.$data['doc_id'].'" style="display:none;"> aaaaa </div> <div class="doc_contain'.$data['doc_id'].'"> <label>ໝວດ:</label> '.$data['grono_name'].' <label>ຂາເຂົ້າເລກທີ່:</label> '.sprintf("%03d", $data['num_in']).'<br> <label>ຈາກ:</label> '.$new_from.' ('.$data['docex'].') <br> <label>ເຖິງ:</label> '.$new_to.' <br> <label>ໄຟລ໌ສະແກນ:</label> <div class="well well-sm" style="font-size: 18px;">';
            $file = explode("||", $data['file_scan']);
            for ($i=0;$i<count($file);$i++) {
                if ($file[$i]!='') {
                    echo '<span onclick="shfile(\''.$file[$i].'\')" data="'.$file[$i].'" style="cursor: pointer;"><i class="fa fa-file-pdf-o"></i></span> ';
                    if ($i<count($file)-2) {
                        echo ' - ';
                    }
                }
            }
            echo '</div> '.$detail.'<div class="pull-right"><small><label>ບັນທຶກໂດຍ:</label> '.$sex.$data['user_name'].'  <label>ເມື່ອ:</label> '.timeago($data['doc_date']).'</small></div>    <div style="clear: both;"></div> </div> </div> ';
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
            echo '<a  class="list-group-item" Onclick="showdetail('.$data['doc_id'].')"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> '.$data['name'].' </a><div style="display:none; padding: 10px; border: 1px solid #ddd;" class="doc_detail" id="doc'.$data['doc_id'].'"> <div class="doc_edit'.$data['doc_id'].'" style="display:none;"> aaaaa bbbb </div> <div class="doc_contain'.$data['doc_id'].'"> <label>ໝວດ:</label> '.$data['grono_name'].' <label>ຂາອອກເລກທີ່:</label> '.sprintf("%03d", $data['num_in']).'<br> <label>ຈາກ:</label> '.$new_from.' ('.$data['docex'].') <br> <label>ເຖິງ:</label> '.$new_to.' <br> <label>ໄຟລ໌ສະແກນ:</label> <div class="well well-sm" style="font-size: 18px;">';
            $file = explode("||", $data['file_scan']);
            for ($i=0;$i<count($file);$i++) {
                if ($file[$i]!='') {
                    echo '<span onclick="shfile(\''.$file[$i].'\')" data="'.$file[$i].'" style="cursor: pointer;"><i class="fa fa-file-pdf-o"></i></span> ';
                    if ($i<count($file)-2) {
                        echo ' - ';
                    }
                }
            }
            echo '</div> '.$detail.'<div class="pull-right"><small><label>ບັນທຶກໂດຍ:</label> '.$sex.$data['user_name'].'  <label>ເມື່ອ:</label> '.timeago($data['doc_date']).'</small></div>    <div style="clear: both;"></div> </div> </div> ';
        }
    }
    echo "</ul>";
} ?>