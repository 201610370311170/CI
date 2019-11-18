<?php

class Login
{


    public function masuk($username, $password, $page_berhasil, $page_gagal, $userdata)
    {
        $CI = &get_instance();
        $query = $CI->db->get_where('users', array('username' => $username, 'password' => md5($password)));


        //Jika username dan password benar
        if ($query->row_array()) {

            // berhasil login
            $CI->session->set_userdata($userdata, $query->row_array());
            redirect($page_berhasil);
        } else {

            // gagal login
            $CI->session->set_flashdata('danger', '<div class="alert alert-danger" role="alert">
            Username atau Password salah!
            </div>');
            redirect($page_gagal);
        }
    }

    public function keluar($page_gagal, $userdata)
    {
        $CI = &get_instance();
        $CI->load->library('session');
        $CI->session->unset_userdata($userdata);
        redirect($page_gagal);
    }
}
