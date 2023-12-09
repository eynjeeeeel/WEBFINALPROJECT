<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UploadController extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->call->model('User_model');
        $this->acmcl = lava_instance();
    }

    public function do_upload() {
        // Initialize the upload library
        $this->call->library('upload', $_FILES["file"]);

        // Configure the upload parameters
        $this->upload
            ->max_size(5)
            ->min_size(1)
            ->set_dir('public/img')
            ->allowed_extensions(array('jpg', 'png', 'jpeg'))
            ->allowed_mimes(array('image/jpeg'))
            ->is_image()
            ->encrypt_name();

        // Perform the upload
        if ($this->upload->do_upload()) {
            // If upload is successful
            $data = array(
                'idnumber' => $this->input->post('idnumber'),
                'fullname' => $this->input->post('fullname'),
                'age'      => $this->input->post('age'),
                'birthday' => $this->input->post('birthday'),
                'gender'   => $this->input->post('gender'),
                'address'  => $this->input->post('address'),
                'section'  => $this->input->post('section'),
            );

            // Register user with image
            if ($this->User_model->registerWithImage($data)) {
                // Retrieve session data
                $user_data = $this->session->userdata('user_data');

                $this->call->view('SuccessPage', array('user_data' => $user_data));
            } else {
                // Handle registration failure
                $this->session->set_flashdata('errors', 'User registration failed.');
                redirect('StudentFormReg');
            }
        } else {
            // If upload fails
            $this->session->set_flashdata('errors', $this->upload->get_errors());
            redirect('StudentFormReg');
        }
    }
}
