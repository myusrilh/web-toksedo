<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class edit_profile extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        
    }
    public function edit($id)
    {
        $data['title']="Edit Profile";
        $data['user'] = $this->login_model->getUserByID($id);
        $data['level'] = ['customer','konsultan','admin'];
        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        if ($this->session->userdata('level')!="admin") {
            # code...
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        }
        $this->form_validation->set_rules('password', 'Username', 'required');
        if ($this->form_validation->run() == FALSE) {
            # code...
            if($this->session->userdata('level')!="admin"){
                $this->load->view('template/header',$data);
                $this->load->view('detail_user/index');
                $this->load->view('detail_user/edit_profile',$data);
                $this->load->view('template/footer',$data);
            }else{
                $this->load->view('admin/template/header_admin',$data);
                $this->load->view('admin/template/sidebar_admin');
                $this->load->view('detail_user/edit_profile',$data);
                $this->load->view('admin/template/footer_admin',$data);
            }
        } else {
            # code...
            $edited = $this->login_model->editProfile($this->session->userdata('level'));
            if ($edited) {
                # code...
                foreach ($edited as $edt);
                
                $sessdata= array(
                    'idUser'=>$edt->idUser,
                    'nama' => $edt->nama,
                    'alamat' => $edt->alamat,
                    'pekerjaan' => $edt->pekerjaan,
                    'username' => $edt->username,
                    'password' => $edt->password,
                    'level' => $edt->level
                );
                $this->session->set_userdata($sessdata);

                $this->session->set_flashdata('flash-data', 'diedit');
                if($this->session->userdata('level') != "admin"){
                    redirect('home','refresh');
                }else{
                    redirect('admin/index','refresh');
                }
            }
            
        }
    }
    public function update(){

    }

}

/* End of file edit_profile.php */

?>