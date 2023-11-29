<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserController extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->call->model('User_model');
        $this->acmcl = lava_instance();
    }

    public function login()
    {
        $this->call->view('login');
    }
    public function loginAuth()
    {
        $firstname = $this->io->post('firstname');
        $lastname = $this->io->post('lastname');
        $email = $this->io->post('email');
        $password = $this->io->post('password');
    
        // Check if the key exists in the post data
        if (!isset($firstname)) {
            $this->session->set_flashdata('errors', ['Invalid input data']);
            redirect('login');
            return;
        }
    
        $user = $this->User_model->authenticateUser($firstname, $lastname, $email, $password);
    
        if ($user) {
            $this->acmcl->set_logged_in($user['id']);
            redirect('home');
        } else {
            $this->session->set_flashdata('errors', ['Invalid email or password']);
            redirect('login');
        }
    }
    
    public function register(){
        $this->call->view('register');
    }

    public function registerAuth()
    {


        $this->form_validation
            ->name('firstname')
                ->required()
            ->name('lastname')
                ->required()
            ->name('password')
                ->required()
                ->min_length(8)
                ->custom_pattern('^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$', 'Make sure password meets the requirements.')
            ->name('confirm-password')
                ->matches('password', "Password doesn't match")
                ->required()
                ->min_length(8)
            ->name('email')
                ->required()
                ->valid_email();


        if ($this->form_validation->run() == false) {
            $_SESSION['errors'] = $this->form_validation->get_errors();
            $this->session->mark_as_flash('errors');

            redirect('register');
        } else {

            $data = [
                'firstname' => $this->io->post('firstname'),
                'lastname' => $this->io->post('lastname'),
                'email' => $this->io->post('email'),
                'password' => password_hash($this->io->post('password'), PASSWORD_BCRYPT),
            ];
            $this->User_model->register($data);
            $this->session->set_flashdata('success');
            redirect('register');
        }
    }

    public function set_logged_in($id)
    {

        $user_data = $this->User_model->getUserDataById($id);


        if (!empty($user_data)) {

            $this->acmcl->session->set_userdata([
                'id' => $user_data['id'],
                'firstname' => $user_data['firstname'],
                'lastname' => $user_data['lastname'],
                'email' => $user_data['email'],
                'browser' => $_SERVER['HTTP_USER_AGENT'],
                'logged_in' => true
            ]);
        }
    }

    public function is_logged_in()
    {
        $isLogged = $this->acmcl->session->has_userdata('logged_in') && $this->acmcl->session->userdata('logged_in');
        return $isLogged;
    }

    public function index()
    {
        if (!$this->acmcl->is_logged_in()) {

            $this->session->set_flashdata('errors', ['Login First']);
            redirect('login');
            return;
        }

        $this->call->view('home');
    }

    public function logout()
    {
        $this->acmcl->session->sess_destroy();
        redirect('login');
    }

}
?>
