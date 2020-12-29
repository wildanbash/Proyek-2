<?php 

    function check_already_login(){
        $ci =&get_instance();
        $user_session = $ci->session->userdata('userid');
        if($user_session){
			echo "<script>
                alert('Anda Sudah Login');
                window.location='" . site_url('admin/dashboard') . "';
            </script>";
        }
    }

    function check_not_login(){
        $ci =&get_instance();
        $user_session = $ci->session->userdata('userid');
        if(!$user_session){
            echo "<script>
                alert('Silahkan Login Terlebih Dahulu');
                window.location='" . site_url('auth/login') . "';
            </script>";
        }
    }

    function check_staff($role, $data){
        $ci =& get_instance();
		$ci->load->library('fungsi');
		if (!in_array($role, $data)) {
			redirect('admin/No_access','refresh');
		}
    }

    function indo_currency($nominal){
        $result = "Rp " . number_format($nominal);
        return $result;
    }

    function indo_date($date){
        $d = substr($date, 8 , 2);
        $m = substr($date, 5, 2);
        $y = substr($date, 0, 4);
        return $d.'-'.$m.'-'.$y;
    }

