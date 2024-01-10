<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Auth_controller extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->call->model('Parents_model');
        $this->call->model('Admins_model');
    }

    public function registerAuth()
    {
        $this->call->library('form_validation');

        // Set validation rules
        $this->form_validation
            ->name('firstname')->required()
            ->name('lastname')->required()
            ->name('email')->required()->valid_email()
            ->name('contact')->required()->min_length(10)
            ->name('password')->required()->min_length(8)->custom_pattern('^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$', 'Make sure password meets the requirements.')
            ->name('confirm-password')->required()->matches('password');

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->errors();
            $this->session->set_flashdata('errors', $errors);
            redirect('register');
        } else {
            // Prepare data for insertion
            $firstname = $this->io->post('firstname');
            $lastname = $this->io->post('lastname');
            $Password = $this->io->post('password');
            $data = [
                'Name' => $firstname . ' ' .  $lastname,
                'Email' => $this->io->post('email'),
                'ContactInformation' => $this->io->post('contact'),
                'Password' => password_hash($Password, PASSWORD_DEFAULT),

            ];

            if ($this->Parents_model->insertParent($data)) {

                $this->session->set_flashdata('success', 'Registration successful!');
                redirect('register');
            } else {
                $this->session->set_flashdata('success', 'Registration unsuccessful!');
                redirect('register');

                redirect('register');
            }
        }
    }
    public function register()
    {
        $this->call->view('register');
    }
    public function loginAuth()
    {
        $email = $this->io->post('email');
        $password = $this->io->post('password');


        $parent = $this->Parents_model->authenticate($email, $password);

        if ($parent) {
            // Set session data
            $this->session->set_userdata([
                'parent_id' => $parent['ParentID'],
                'email' => $parent['Email'],
                'logged_in' => true
            ]);

            redirect('home'); // Assuming 'dashboard' is the landing page after login
        } else {
            // Set error flash data and redirect to login
            $this->session->set_flashdata('errors', ['Invalid email or password']);
            redirect('login');
        }
    }
    public function login()
    {
        $this->call->view('login');
    }
    public function adminregAuth() {
        $this->call->library('form_validation');

        $this->form_validation
            ->name('username')->required()
            ->name('password')->required()->min_length(8)->custom_pattern('^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$', 'Make sure password meets the requirements.')
            ->name('confirmpassword')->required()->matches('password')
            ->name('email')->required()->valid_email();

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', $this->form_validation->errors());
            redirect('adminregister'); // Redirect to the admin registration form
        } else {
         
            $data = [
                'Username' => $this->io->post('username'),
                'Password' => $this->io->post('password'),
                'Email' => $this->io->post('email')
            ];

            if ($this->Admins_model->insertAdmin($data)) {
                $this->session->set_flashdata('success', 'Admin registration successful!');
                redirect('admin_login'); // Redirect to the admin dashboard
            } else {
                $this->session->set_flashdata('errors', ['Registration failed']);
                redirect('admin_login');
            }
        }
    }
    public function adminregister()
    {
        $this->call->view('adminregister');
    }

    public function adminlogin(){
        $this->call->view('adminlogin');
    }

    public function adminloginAuth() {
        $email = $this->io->post('email');
        $password = $this->io->post('password');


        $admin = $this->Admins_model->authenticate($email, $password);

        if ($admin) {
            // Set session data for the admin
            $this->session->set_userdata([
                'admin_id' => $admin['AdminID'],
                'email' => $admin['Email'],
                'is_admin_logged_in' => true
            ]);

            redirect('admin_db'); // Redirect to the admin dashboard
        } else {
            // Set error flash data and redirect back to login
            $this->session->set_flashdata('errors', ['Invalid email or password']);
            redirect('adminlogin');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
