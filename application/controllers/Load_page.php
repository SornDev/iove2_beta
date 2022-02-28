<?php defined('BASEPATH') or exit('No direct script access allowed');
class Load_page extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf_report');
    }
    public function index()
    {
        $page = $this->input->post('page');
        switch ($page) {
            case 'index':
                $year = $this->input->post('year');
                $this->used_year = $this->In_outv2->get_data_year("data_base_year");
                $this->show_in_out = $this->In_outv2->show_data_docall_m("document", $year, date('m'));
                $this->sh_hoffice = $this->In_outv2->show_data("heard_office");
                $this->sh_boffice = $this->In_outv2->show_data("brunch_office");
                $this->sh_uoffice = $this->In_outv2->show_data("unit_office");
                $this->sh_ooffice = $this->In_outv2->show_data("other_office");
                $this->load->view('day_page', $this);
                break;
            case 'search':
                $data = $this->input->post('data');
                $year = $this->input->post('year');
                $this->used_year = $this->In_outv2->get_data_year("data_base_year");
                $this->sh_gno_in = $this->In_outv2->show_grono("grono_doc", 'gin');
                $this->sh_gno_out = $this->In_outv2->show_grono("grono_doc", 'gout');
                $this->show_in_out = $this->In_outv2->search_doc("document", '', $year);
                $this->sh_hoffice = $this->In_outv2->show_data("heard_office");
                $this->sh_boffice = $this->In_outv2->show_data("brunch_office");
                $this->sh_uoffice = $this->In_outv2->show_data("unit_office");
                $this->sh_ooffice = $this->In_outv2->show_data("other_office");
                $this->load->view('search', $this);
                break;
            case 'search-data':
                $data = $this->input->post('data');
                $search_kine = $this->input->post('search_kine');
                $in = $this->input->post('gin');
                $out = $this->input->post('gtt');
                $year = $this->input->post('year');
                if ($search_kine == 'all') {
                    $this->show_in_out = $this->In_outv2->search_doc("document", $data, $year);
                } else {
                    $this->show_in_out = $this->In_outv2->search_doc_data_type("document", $data, $search_kine, $out, $year);
                }
                $this->sh_gno_in = $this->In_outv2->show_grono("grono_doc", 'gin');
                $this->sh_gno_out = $this->In_outv2->show_grono("grono_doc", 'gout');
                $this->sh_hoffice = $this->In_outv2->show_data("heard_office");
                $this->sh_boffice = $this->In_outv2->show_data("brunch_office");
                $this->sh_uoffice = $this->In_outv2->show_data("unit_office");
                $this->sh_ooffice = $this->In_outv2->show_data("other_office");
                $this->load->view('search-data', $this);
                break;
            case 'in-doc':
                $this->sh_gno_in = $this->In_outv2->show_grono("grono_doc", 'gin');
                $this->sh_hoffice = $this->In_outv2->show_data("heard_office");
                $this->sh_boffice = $this->In_outv2->show_data("brunch_office");
                $this->sh_uoffice = $this->In_outv2->show_data("unit_office");
                $this->sh_ooffice = $this->In_outv2->show_data("other_office");
                $this->sh_tb_num = $this->In_outv2->show_table_num("data_base_year");
                $this->used_year = $this->In_outv2->get_data_year("data_base_year");
                $this->sh_set = $this->In_outv2->show_data("setting_data");
                $this->setting = $this->In_outv2->get_setting("setting_data");
                $this->data_rd = $this->In_outv2->show_data("data_base_year");
                $this->load->view('in-doc_page', $this);
                break;
            case 'out-doc':
                $this->sh_gno_out = $this->In_outv2->show_grono("grono_doc", 'gout');
                $this->sh_hoffice = $this->In_outv2->show_data("heard_office");
                $this->sh_boffice = $this->In_outv2->show_data("brunch_office");
                $this->sh_uoffice = $this->In_outv2->show_data("unit_office");
                $this->sh_ooffice = $this->In_outv2->show_data("other_office");
                $this->sh_tb_num = $this->In_outv2->show_table_num("data_base_year");
                $this->used_year = $this->In_outv2->get_data_year("data_base_year");
                $this->sh_set = $this->In_outv2->show_data("setting_data");
                $this->setting = $this->In_outv2->get_setting("setting_data");
                $this->data_rd = $this->In_outv2->show_data("data_base_year");
                $this->load->view('out-doc_page', $this);
                break;
            case 'config-system':
                $this->sh_tb_num = $this->In_outv2->show_table_num("data_base_year");
                $this->sh_sys = $this->In_outv2->show_data("data_base_year");
                $this->sh_set = $this->In_outv2->show_data("setting_data");
                $this->load->view('config-system_page', $this);
                break;
            case 'config-user':
                $this->sh_user = $this->In_outv2->show_data("user");
                $this->load->view('config-user_page', $this);
                break;
            case 'config-gno-type':
                $this->sh_gno_in = $this->In_outv2->show_grono("grono_doc", 'gin');
                $this->sh_gno_out = $this->In_outv2->show_grono("grono_doc", 'gout');
                $this->sh_hoffice = $this->In_outv2->show_data("heard_office");
                $this->sh_boffice = $this->In_outv2->show_data("brunch_office");
                $this->sh_uoffice = $this->In_outv2->show_data("unit_office");
                $this->sh_ooffice = $this->In_outv2->show_data("other_office");
                $this->load->view('config-gno-type_page', $this);
                break;
            case 'about':
                $this->sh_gno_in = $this->In_outv2->show_grono("grono_doc", 'gin');
                $this->sh_gno_out = $this->In_outv2->show_grono("grono_doc", 'gout');
                $this->sh_hoffice = $this->In_outv2->show_data("heard_office");
                $this->sh_boffice = $this->In_outv2->show_data("brunch_office");
                $this->sh_uoffice = $this->In_outv2->show_data("unit_office");
                $this->sh_ooffice = $this->In_outv2->show_data("other_office");
                $this->load->view('about', $this);
                break;
            case 'report':
                $this->sh_gno_in = $this->In_outv2->show_grono("grono_doc", 'gin');
                $this->sh_gno_out = $this->In_outv2->show_grono("grono_doc", 'gout');
                $this->sh_hoffice = $this->In_outv2->show_data("heard_office");
                $this->sh_boffice = $this->In_outv2->show_data("brunch_office");
                $this->sh_uoffice = $this->In_outv2->show_data("unit_office");
                $this->sh_ooffice = $this->In_outv2->show_data("other_office");
                $this->load->view('report', $this);
                break;
            case 'edit_data':
                $year = $this->input->post('year');
                $this->data_rd = $this->In_outv2->show_data("data_base_year");
                $this->used_year = $this->In_outv2->get_data_year("data_base_year");
                $this->show_in_out = $this->In_outv2->show_data_docall("document", $year);
                $this->sh_hoffice = $this->In_outv2->show_data("heard_office");
                $this->sh_boffice = $this->In_outv2->show_data("brunch_office");
                $this->sh_uoffice = $this->In_outv2->show_data("unit_office");
                $this->sh_ooffice = $this->In_outv2->show_data("other_office");
                $this->load->view('edit_data/edit_data', $this);
                break;
            case 'trash':
                $year = $this->input->post('year');
                $this->data_rd = $this->In_outv2->show_data("data_base_year");
                $this->used_year = $this->In_outv2->get_data_year("data_base_year");
                $this->show_in_out = $this->In_outv2->show_data_trash("document", $year);
                $this->sh_hoffice = $this->In_outv2->show_data("heard_office");
                $this->sh_boffice = $this->In_outv2->show_data("brunch_office");
                $this->sh_uoffice = $this->In_outv2->show_data("unit_office");
                $this->sh_ooffice = $this->In_outv2->show_data("other_office");
                $this->load->view('trash/edit_trash', $this);
                break;
            case 'table_trash':
                $this->data_rd = $this->In_outv2->show_data("data_base_year");
                $year = $this->input->post('year');
                $type = $this->input->post('type');
                $data = $this->input->post('seach');
                $this->used_year = $this->In_outv2->get_data_year("data_base_year");
                $this->show_in_out = $this->In_outv2->search_doc_trash("document", $data, $year);
                $this->type = $type;
                $this->sh_hoffice = $this->In_outv2->show_data("heard_office");
                $this->sh_boffice = $this->In_outv2->show_data("brunch_office");
                $this->sh_uoffice = $this->In_outv2->show_data("unit_office");
                $this->sh_ooffice = $this->In_outv2->show_data("other_office");
                $this->load->view('trash/table_trash', $this);
                break;
            case 'page_trash':
                $year = $this->input->post('year');
                $id = $this->input->post('id');
                $this->data_rd = $this->In_outv2->show_data("data_base_year");
                $this->sh_gno_in = $this->In_outv2->show_grono("grono_doc", 'gin');
                $this->sh_gno_out = $this->In_outv2->show_grono("grono_doc", 'gout');
                $this->used_year = $this->In_outv2->get_data_year("data_base_year");
                $this->show_in_out = $this->In_outv2->show_trash_edit("document", $year, $id);
                $this->sh_hoffice = $this->In_outv2->show_data("heard_office");
                $this->sh_boffice = $this->In_outv2->show_data("brunch_office");
                $this->sh_uoffice = $this->In_outv2->show_data("unit_office");
                $this->sh_ooffice = $this->In_outv2->show_data("other_office");
                $this->setting = $this->In_outv2->get_setting("setting_data");
                $this->data_rd = $this->In_outv2->show_data("data_base_year");
                $this->load->view('trash/page_trash', $this);
                break;
            case 'page_edit':
                $year = $this->input->post('year');
                $id = $this->input->post('id');
                $this->data_rd = $this->In_outv2->show_data("data_base_year");
                $this->sh_gno_in = $this->In_outv2->show_grono("grono_doc", 'gin');
                $this->sh_gno_out = $this->In_outv2->show_grono("grono_doc", 'gout');
                $this->used_year = $this->In_outv2->get_data_year("data_base_year");
                $this->show_in_out = $this->In_outv2->show_data_edit("document", $year, $id);
                $this->sh_hoffice = $this->In_outv2->show_data("heard_office");
                $this->sh_boffice = $this->In_outv2->show_data("brunch_office");
                $this->sh_uoffice = $this->In_outv2->show_data("unit_office");
                $this->sh_ooffice = $this->In_outv2->show_data("other_office");
                $this->setting = $this->In_outv2->get_setting("setting_data");
                $this->data_rd = $this->In_outv2->show_data("data_base_year");
                $this->load->view('edit_data/page_edit', $this);
                break;
            case 'table_edit':
                $year = $this->input->post('year');
                $type = $this->input->post('type');
                $data = $this->input->post('seach');
                $this->used_year = $this->In_outv2->get_data_year("data_base_year");
                $this->show_in_out = $this->In_outv2->search_doc("document", $data, $year);
                $this->type = $type;
                $this->data_rd = $this->In_outv2->show_data("data_base_year");
                $this->sh_hoffice = $this->In_outv2->show_data("heard_office");
                $this->sh_boffice = $this->In_outv2->show_data("brunch_office");
                $this->sh_uoffice = $this->In_outv2->show_data("unit_office");
                $this->sh_ooffice = $this->In_outv2->show_data("other_office");
                $this->load->view('edit_data/table_edit', $this);
                break;
            case 'cr_report':
                $this->mtype = $this->input->post('mtype');
                $this->date_month = $this->input->post('date_month');
                $mtype = $this->mtype;
                $doc_cat = $this->input->post('doc_cat');
                $date = $this->input->post('date_month');
                $doc_in_out = $this->input->post('doc_in_out');
                $this->doc_in_out = $doc_in_out;
                $this->sh_gno_in = $this->In_outv2->show_grono("grono_doc", 'gin');
                $this->sh_gno_out = $this->In_outv2->show_grono("grono_doc", 'gout');
                $this->sh_hoffice = $this->In_outv2->show_data("heard_office");
                $this->sh_boffice = $this->In_outv2->show_data("brunch_office");
                $this->sh_uoffice = $this->In_outv2->show_data("unit_office");
                $this->sh_ooffice = $this->In_outv2->show_data("other_office");
                $this->sh_set = $this->In_outv2->show_data("setting_data");
                switch ($mtype) {
                    case 'td':
                        $this->show_re_day = $this->In_outv2->report_day("document", $date, $doc_in_out, $doc_cat);
                        break;
                    case 'tm':
                        $this->show_re_day = $this->In_outv2->report_month("document", $date, $doc_in_out, $doc_cat);
                        break;
                }
                $this->load->view('report/cr_pdf', $this);
                break;
            case 'last_post':
                $this->type = '';
                $year = $this->input->post('year');
                $doc = $this->input->post('doc');
                $this->doc = $doc;
                $this->used_year = $this->In_outv2->get_data_year("data_base_year");
                $this->show_in_out = $this->In_outv2->show_last_post("document", $year, date('d'), $doc);
                $this->sh_hoffice = $this->In_outv2->show_data("heard_office");
                $this->sh_boffice = $this->In_outv2->show_data("brunch_office");
                $this->sh_uoffice = $this->In_outv2->show_data("unit_office");
                $this->sh_ooffice = $this->In_outv2->show_data("other_office");
                $this->load->view('last_post', $this);
                break;
            case 'last_one':
                $this->id = $this->input->post('id');
                $this->type = $this->input->post('type');
                $year = $this->input->post('year');
                $doc = $this->input->post('doc');
                $this->doc = $doc;
                $this->used_year = $this->In_outv2->get_data_year("data_base_year");
                $this->show_in_out = $this->In_outv2->show_last_post("document", $year, date('d'), $doc);
                $this->sh_hoffice = $this->In_outv2->show_data("heard_office");
                $this->sh_boffice = $this->In_outv2->show_data("brunch_office");
                $this->sh_uoffice = $this->In_outv2->show_data("unit_office");
                $this->sh_ooffice = $this->In_outv2->show_data("other_office");
                $this->load->view('last_post', $this);
                break;
        }
    }
    public function preview($file = '')
    {
        $this->load->view('preview_file', $this);
    }
}
