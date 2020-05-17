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
                $config = [
                    'upload_path' => FCPATH . 'images/profile/',
                    'allowed_types' => 'jpg|png|jpeg',
                    'max_size' => '5120',
                    'max_width' => 11024,
                    'max_height' => 7168,
                    'overwrite' => TRUE
                ];
                if(is_file($config['upload_path']))
                {
                    chmod($config['upload_path'], 777); ## this should change the permissions
                }
                $this->load->library('upload',$config); //Load the upload CI library
                // $this->upload->initialize($config);
                
                $profil = $this->login_model->getGambarProfil($id);
            
                foreach ($profil as $p);
                if ($this->upload->do_upload('profil')){
                    
                        # code...
                    // menghapus file gambarProfil yang lama pada folder
                    if ($p['gambarProfil'] !=null || $p['gambarProfil'] !="") {
                        # code...
                        unlink(FCPATH . "images/profile/".$p['gambarProfil']);
                    }     
                    $file_info = $this->upload->data();
                    $namaFile = $file_info['file_name'];
                }else{
                    $namaFile = $p['gambarProfil'];
                }

                $edited = $this->login_model->editProfile($id,$this->session->userdata('level'),$namaFile);
                if ($edited) {
                    # code...
                    foreach ($edited as $edt);
                    
                    $sessdata= array(
                        'idUser'=>$edt->idUser,
                        'gambarProfil'=>$edt->gambarProfil,
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

}

/* End of file edit_profile.php */

?>