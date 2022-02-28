<?php defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $ch = $this->input->post('login');
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        if ($ch == 'check') {
            $data =  array('user_name' => $user);
            $check_user = $this->In_outv2->check_login("user", $data);
            if ($check_user['user_name'] != null) {
                $data =  array('pass' => md5('inout' . $pass));
                $check_pass = $this->In_outv2->check_login("user", $data);
                if ($check_pass['pass'] != null) {
                    $id = $check_pass['id'];
                    $session_log = random(15);
                    $data =  array('session_log' => $session_log);
                    $this->In_outv2->session_login("user", $data, $id);
                    $user_data = array("user_id" => $check_pass["id"], "user_session" => $session_log, "user_name" => $check_pass["user_name"], "user_type" => $check_pass["user_type"]);
                    $this->session->set_userdata($user_data);
                    echo "<input type='hidden' class='login-go' value='login-yes'> ";
                } else {
                    echo '<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong> ບໍ່ສາມາດເຂົ້າລະບົບ!</strong> ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ! </div>';
                }
            } else {
                echo '<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong> ບໍ່ສາມາດເຂົ້າລະບົບ!</strong> ຊື້ຜູ້ໃຊ້ບໍ່ຖືກຕ້ອງ! </div>';
            }
        }
    }
    public function login()
    {
        $this->load->view('login');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url(), "refresh");
        exit();
    }
}
