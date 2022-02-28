<?php defined('BASEPATH') or exit('No direct script access allowed'); class Mdata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $type =$this->input->post('type');
        switch ($page) {case 'index': $this->load->view('day_page'); break; }
    }
    public function add()
    {
        $type =$this->input->post('type');
        switch ($type) {case 'add-grono': $name = $this->input->post('name'); $gtype = $this->input->post('gtype'); $data =  array('grono_name'=>$name,'grono_type'=>$gtype); $this->In_outv2->add_data('grono_doc', $data); $insert_id = $this->db->insert_id('grono_doc'); if ($gtype=='gin') {
            echo '<li class="list-group-item item_gin'.$insert_id.'"> <i class="fa fa-folder-o"></i> <span id="gin_name'.$insert_id.'">'.$name.'</span> <span class="pull-right"><a onclick="edit_gin('.$insert_id.')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span> <a onclick="del_gin('.$insert_id.')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a> </span></li>';
        } elseif ($gtype=='gout') {
            echo '<li class="list-group-item item_gout'.$insert_id.'"> <i class="fa fa-folder-o"></i> <span id="gout_name'.$insert_id.'">'.$name.'</span> <span class="pull-right"><a onclick="edit_gout('.$insert_id.')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span> <a onclick="del_gout('.$insert_id.')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a> </span></li>';
        } break; case 'add-heard': $name = $this->input->post('name'); $data =  array('name'=>$name); $this->In_outv2->add_data('heard_office', $data); $insert_id = $this->db->insert_id('heard_office'); echo '<li class="list-group-item item_heard'.$insert_id.'"> <i class="fa fa-caret-square-o-right"></i> <span id="heard_name'.$insert_id.'">'.$name.'</span> <span class="pull-right"><a onclick="edit_heard('.$insert_id.')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span> <a onclick="del_heard('.$insert_id.')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a> </span></li>'; break; case 'add-brunch': $name = $this->input->post('name'); $data =  array('name'=>$name); $this->In_outv2->add_data('brunch_office', $data); $insert_id = $this->db->insert_id('brunch_office'); echo '<li class="list-group-item item_brunch'.$insert_id.'"> <i class="fa fa-caret-square-o-right"></i> <span id="brunch_name'.$insert_id.'">'.$name.'</span> <span class="pull-right"><a onclick="edit_brunch('.$insert_id.')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span> <a onclick="del_brunch('.$insert_id.')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a> </span></li>'; break; case 'add-unit': $name = $this->input->post('name'); $data =  array('name'=>$name); $this->In_outv2->add_data('unit_office', $data); $insert_id = $this->db->insert_id('unit_office'); echo '<li class="list-group-item item_unit'.$insert_id.'"> <i class="fa fa-caret-square-o-right"></i> <span id="unit_name'.$insert_id.'">'.$name.'</span> <span class="pull-right"><a onclick="edit_unit('.$insert_id.')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span> <a onclick="del_unit('.$insert_id.')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a> </span></li>'; break; case 'add-other': $name = $this->input->post('name'); $data =  array('name'=>$name); $this->In_outv2->add_data('other_office', $data); $insert_id = $this->db->insert_id('other_office'); echo '<li class="list-group-item item_other'.$insert_id.'"> <i class="fa fa-caret-square-o-right"></i> <span id="other_name'.$insert_id.'">'.$name.'</span> <span class="pull-right"><a onclick="edit_other('.$insert_id.')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span> <a onclick="del_other('.$insert_id.')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a> </span></li>'; break; case 'add-user': $name = $this->input->post('name'); $new_name = str_replace("'", "", $name); $sex = $this->input->post('sex'); $user_type = $this->input->post('user_type'); $pass = $this->input->post('pass'); $data =  array('user_type'=>$user_type,'user_name'=>$name,'sex'=>$sex,'pass'=>md5('inout'.$pass),'date'=>date("Y-m-d H:i:s")); $this->In_outv2->add_data('user', $data); $insert_id = $this->db->insert_id('user'); if ($user_type=='super-user') {
            $user_show = '<span class="label label-info"> Super-User </span>';
        } else {
            $user_show = '<span class="label label-warning"> User </span>';
        } if ($sex=='ຊາຍ') {
            $new_sex = 'ທ. ';
        } else {
            $new_sex = 'ນ. ';
        } echo '<li class="list-group-item user-item'.$insert_id.'"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <span class="s'.$insert_id.'">'.$new_sex.'</span><span class="u-name'.$insert_id.'" user_type="'.$user_type.'" sex="'.$sex.'">'.$name.'</span> <span class="pull-right"> <a onclick="edit_user('.$insert_id.')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span> <a onclick="del_user('.$insert_id.')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> </span>  <br> <small>ສະຖານະ:</small> <span class="us'.$insert_id.'">'.$user_show.'</span> </li>'; break; case 'add-year': $year = $this->input->post("year"); $data =  array('name'=>$year,'data_used'=>'0','data_readonly'=>'0'); $this->In_outv2->add_data('data_base_year', $data); $insert_id = $this->db->insert_id('data_base_year'); echo '<li class="list-group-item"><span class="glyphicon glyphicon-hdd" aria-hidden="true"></span> Data base ປີ '.$year.'<div class="media"> <span class="pull-right"> <label ><input type="checkbox" name="used" class="udata'.$insert_id.'" data_used="0" onclick="check_readonly('.$insert_id.')"> ອ່ານຢ່າງດຽວ </label> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span> <label ><input type="radio" name="used" data="0" daid="'.$insert_id.'" onclick="udata('.$insert_id.')" class="used-year'.$insert_id.'" > ນຳໃຊ້ຂໍ້ມູນ</label> </span </div> </li>'; break; case 'document': $docin_name = strip_tags(str_replace("\"", "'", $this->input->post("docin_name")));; $docin_num = $this->input->post("docin_num"); $docin_type = $this->input->post("docin_type"); $docin_form = $this->input->post("docin_form"); $docin_to = $this->input->post("docin_to"); $docex = $this->input->post("docex"); $docin_detail = strip_tags(str_replace("\"", "'", $this->input->post("docin_detail"))); $file_upload = $this->input->post("file_upload"); $doc_in_out = $this->input->post("doc_in_out"); $user = $this->session->userdata("user_id"); if ($doc_in_out=='out') {
            $addr = $this->input->post('addr');
            $d = date("d");
            $m = date("m");
            $y = date("Y");
            switch ($m) {case '01': $m = 'ມັງກອນ'; break; case '02': $m = 'ກຸມພາ'; break; case '03': $m = 'ມີນາ'; break; case '04': $m = 'ເມສາ'; break; case '05': $m = 'ພຶດສະພາ'; break; case '06': $m = 'ມິຖຸນາ'; break; case '07': $m = 'ກໍລະກົດ'; break; case '09': $m = 'ກັນຍາ'; break; case '10': $m = 'ຕຸລາ'; break; case '11': $m = 'ພະຈິກ'; break; case '12': $m = 'ທັນວາ'; break; }
            $docex = $addr.', '.$d.' '.$m.' '.$y;
        } $data =  array('user_id'=>$user, 'num_in'=>$docin_num, 'doc_in_out'=>$doc_in_out, 'name'=>$docin_name, 'detail'=>$docin_detail, 'file_scan'=>$file_upload, 'doc_type'=>$docin_type, 'doc_from'=>$docin_form, 'doc_to'=>$docin_to, 'status'=>'show', 'doc_date'=>date("Y-m-d H:i:s"), 'docex'=>$docex); $this->In_outv2->add_data_last_id('document', $data); break; }
    }
    public function update()
    {
        $type =$this->input->post('type');
        switch ($type) {case 'update-grono': $name = $this->input->post('name'); $id = $this->input->post('id'); $data =  array('grono_name'=>$name); $this->In_outv2->update_data('grono_doc', $data, $id); break; case 'update-heard': $name = $this->input->post('name'); $id = $this->input->post('id'); $data =  array('name'=>$name); $this->In_outv2->update_data('heard_office', $data, $id); break; case 'update-brunch': $name = $this->input->post('name'); $id = $this->input->post('id'); $data =  array('name'=>$name); $this->In_outv2->update_data('brunch_office', $data, $id); break; case 'update-unit': $name = $this->input->post('name'); $id = $this->input->post('id'); $data =  array('name'=>$name); $this->In_outv2->update_data('unit_office', $data, $id); break; case 'update-other': $name = $this->input->post('name'); $id = $this->input->post('id'); $data =  array('name'=>$name); $this->In_outv2->update_data('other_office', $data, $id); break; case 'update-user': $name = $this->input->post('name'); $new_name = str_replace("'", "", $name); $sex = $this->input->post('sex'); $user_type = $this->input->post('user_type'); $pass = $this->input->post('pass'); $id = $this->input->post('id_update'); if ($pass!='') {
            $data =  array('user_type'=>$user_type,'user_name'=>$name,'sex'=>$sex,'pass'=>md5('inout'.$pass));
        } else {
            $data =  array('user_type'=>$user_type,'user_name'=>$name,'sex'=>$sex);
        } $this->In_outv2->update_data('user', $data, $id); break; case 'update-admin': $pass = $this->input->post('pass'); $id = $this->input->post('id_update'); $data =  array('pass'=>md5('inout'.$pass)); $this->In_outv2->update_data('user', $data, $id); break; case 'update-setting': $name = $this->input->post("name"); $tel = $this->input->post("tel"); $address = $this->input->post("address"); $type = $this->input->post("office_type"); $file_type = $this->input->post("file_type"); $upload_size = $this->input->post("upload_size"); $data =  array('name'=>$name,'type'=>$type,'file_type_upload'=>$file_type,'maxfile_size'=>$upload_size,'address'=>$address,'tel'=>$tel); $this->In_outv2->update_data('setting_data', $data, '1'); break; case 'update_doc': $doc_id = $this->input->post("doc_id"); $doc_name = $this->input->post("doc_name"); $doc_form = $this->input->post("doc_form"); $doc_to = $this->input->post("doc_to"); $doc_detail = $this->input->post("doc_detail"); $file_upload = $this->input->post("file_upload"); $docex = $this->input->post("docex"); $data =  array('name'=>$doc_name,'doc_from'=>$doc_form,'doc_to'=>$doc_to ,'detail'=>$doc_detail ,'file_scan'=>$file_upload,'docex'=>$docex); $this->In_outv2->update_doc('document', $data, $doc_id); break; case 'update_doc_del': $doc_id = $this->input->post("doc_id"); $data =  array('status'=>'hide'); $this->In_outv2->update_doc('document', $data, $doc_id); break; case 'restor_doc': $doc_id = $this->input->post("doc_id"); $data =  array('status'=>'show'); $this->In_outv2->update_doc('document', $data, $doc_id); break; case 'update-setting-profile': echo "Save Data"; $config = array("upload_path"=>"images/","allowed_types"=>"jpg|gif|png|jpeg",); $this->load->library('upload', $config); if ($this->upload->do_upload("file_img")) {
            $data = $this->upload->data();
            $name_pic='sd_logo';
            rename($data["full_path"], $data["file_path"].$name_pic.$data["file_ext"]);
            $this->load->library("image_lib");
            $config = array("image_library"=>"gd2","source_image"=>"images/".$name_pic.$data["file_ext"], "create_thumb"=>false, "maintain_ratio"=>true, "width"=>350, "height"=>350 );
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $icon=$name_pic.$data["file_ext"];
        } else {
            echo $this->upload->display_errors('<p>', '</p>');
            $icon='add-img.png';
        } $data =  array('logopic'=>$icon); $this->In_outv2->update_data('setting_data', $data, '1'); break; case 'upreadonly': $dat = $this->input->post("dat"); $id  = $this->input->post("id"); $data =  array('data_readonly'=>$dat); $this->In_outv2->update_data('data_base_year', $data, $id); break; case 'upused': $data =  array('data_used'=>'0'); $this->In_outv2->update_datapp('data_base_year', $data); $dat = $this->input->post("dat"); $id  = $this->input->post("id"); $data =  array('data_used'=>$dat); $this->In_outv2->update_data('data_base_year', $data, $id); break; }
    }
    public function del()
    {
        $type =$this->input->post('type');
        switch ($type) {case 'del-grono': $id = $this->input->post('id'); $this->In_outv2->del_data('grono_doc', $id); break; case 'del-heard': $id = $this->input->post('id'); $this->In_outv2->del_data('heard_office', $id); break; case 'del-brunch': $id = $this->input->post('id'); $this->In_outv2->del_data('brunch_office', $id); break; case 'del-unit': $id = $this->input->post('id'); $this->In_outv2->del_data('unit_office', $id); break; case 'del-other': $id = $this->input->post('id'); $this->In_outv2->del_data('other_office', $id); break; case 'del-user': $id = $this->input->post('id'); $this->In_outv2->del_data('user', $id); break; case 'del-doc': $id = $this->input->post('id'); $this->In_outv2->del_data('document', $id); break; case 'del-document': $id = $this->input->post('doc_id'); $this->In_outv2->del_document('document', $id); break; }
    }
    public function getdoc_num_no()
    {
        $year = $this->input->post('year');
        $doc_type = $this->input->post('doc_type');
        $doc_type_id = $this->input->post('doc_type_id');
        $yearnew = $this->In_outv2->getdoc_num($doc_type, $year, $doc_type_id);
        echo $yearnew;
    }
    public function getdoc_num()
    {
        $year = $this->input->post('year');
        $doc_type = $this->input->post('doc_type');
        $doc_type_id = $this->input->post('doc_type_id');
        $newnum = $this->In_outv2->getdoc_num_m($doc_type, $year, $doc_type_id);
        if ($newnum=="") {
            echo "0";
        } else {
            echo $newnum->num_in;
        }
    }
    public function upload_file()
    {
        $config = array("upload_path"=>"file_upload/","allowed_types"=>"jpg|gif|png|jpeg|pdf",);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload("file_upload")) {
            $data = $this->upload->data();
            $name_pic=date("YmdHis");
            rename($data["full_path"], $data["file_path"].$name_pic.$data["file_ext"]);
            $this->load->library("image_lib");
            $config = array("image_library"=>"gd2","source_image"=>"file_upload/".$name_pic.$data["file_ext"], "maintain_ratio"=>true );
            $this->image_lib->initialize($config);
            $file_name=$name_pic.$data["file_ext"];
        } else {
            $file_name='no_upload';
        }
        echo $file_name;
    }
    public function del_file()
    {
        $file = $this->input->post('file');
        $delete = "file_upload/".$file;
        if (file_exists($delete)) {
            unlink($delete);
        }
    }
}
