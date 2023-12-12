<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
class UserController extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->call->model('User_model');
        $this->acmcl = lava_instance();
    }
    public function sitevisit(){
        $this->call->view('sitevisit');
    }

    public function studprof(){
        $this->call->view('studprof');
    }

    public function admindb(){
        $this->call->view('admindb');
    }

    public function adminlogout()
    {
        $this->call->view('home');
    }

    public function home(){
        $this->call->view('home');
    }
    public function about(){
        $this->call->view('about');
    }
    public function classes(){
        $this->call->view('classes');
    }

    public function StudentFormReg(){
        $this->call->view('StudentFormReg');
    }

    public function facilities(){
        $this->call->view('facilitiesPG');
    }

    public function login()
    {
        $this->call->view('login');
    }
    public function loginAuth()
    {
        $email = $this->io->post('email');
        $password = $this->io->post('password');
    
        $user = $this->User_model->authenticateUser($email, $password);
    
        if ($user) {
            $this->acmcl->set_logged_in($user['id']);
            redirect('home');
        } else {
            $this->session->set_flashdata('errors', 'Invalid email or password');
            redirect('login');
        }
    }
    public function adminlogin()
    {
        $this->call->view('adminlogin');
    }
    public function adminloginAuth()
    {
        $email = $this->io->post('email');
        $password = $this->io->post('password');
    
        $user = $this->User_model->authenticateUser($email, $password);
    
        if ($user) {
            $this->acmcl->set_log_in($user['id']);
            redirect('admindb');
        } else {
            $this->session->set_flashdata('errors', 'Invalid email or password');
            redirect('adminlogin');
        }
    }
    
    public function getStudent($id)
    {
            $data['students'] = $this->User_model->getStudent();
            return $this->call->view('StudInfo', $data);
    }

    

    public function grades(){
        // Assuming you have a function to get grades data from the model
        $gradesData = $this->User_model->getGradesData();
    
        // Load the view with the integrated data
        $data = [
            'gradesData' => $gradesData,
        ];
    
        $this->call->view('studprof', $data);
    }

    public function adminreg(){
        $this->call->view('adminregister');
    }
    public function adminregAuth()
    {
        $this->form_validation
            ->name('username')
                ->required()
            ->name('tech_id')
                ->required()
            ->name('password')
                ->required()
                ->min_length(8)
                ->custom_pattern('^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$', 'Make sure the password meets the requirements.')
            ->name('confirmpassword')
                ->matches('password', "Password don't match")
                ->required()
                ->min_length(8)    
            ->name('fname')
                ->required()
            ->name('mname')
                ->required()
            ->name('lname')
                ->required()
            ->name('gender')
                ->required()
            ->name('dob')
                ->required()
            ->name('cnum')
                ->required()
            ->name('email')
                ->required()
                ->valid_email()
            ->name('homeadd')
                ->required();
    
        if ($this->form_validation->run() == false) {
            $_SESSION['errors'] = $this->form_validation->get_errors();
            $this->session->mark_as_flash('errors', 'Registration Failed. Please try again!');
            redirect('adminregister');
        } else {
            $data = [
                'username' => $this->io->post('username'),
                'fname' => $this->io->post('fname'),
                'lname' => $this->io->post('lname'),
                'mname' => $this->io->post('mname'),
                'email' => $this->io->post('email'),
                'password' => password_hash($this->io->post('password'), PASSWORD_BCRYPT),
                'tech_id' => $this->io->post('tech_id'),
                'gender' => $this->io->post('gender'),
                'dob' => $this->io->post('dob'),
                'cnum' => $this->io->post('cnum'),
                'homeadd' => $this->io->post('homeadd'),
            ];
    
            $this->User_model->registerAdmin($data);
            $this->session->set_flashdata('success', 'Registration successful.');
            redirect('adminlogin');
        }
    }
    
    public function set_log_in($id)
    {
        $user_data = $this->User_model->getAdminDataById($id);
    
        if (!empty($user_data)) {
            $this->acmcl->session->set_userdata([
                'id' => $user_data['id'],
                'username' => $user_data['username'],
                'password' => $user_data['password'],
                'tech_id' => $user_data['tech_id'],
                'fname' => $user_data['fname'],
                'mname' => $user_data['mname'],
                'lname' => $user_data['lname'],
                'gender' => $user_data['gender'],
                'dob' => $user_data['dob'],
                'cnum' => $user_data['cnum'],
                'email' => $user_data['email'],
                'homeadd' => $user_data['homeadd'],
                'browser' => $_SERVER['HTTP_USER_AGENT'],
                'log_in' => true
            ]);
        }
    }
    
    public function is_log_in()
    {
        $isLog = $this->acmcl->session->has_userdata('log_in') && $this->acmcl->session->userdata('log_in');
        return $isLog;
    }
    
    public function adminindex()
    {
        if (!$this->acmcl->is_log_in()) {
            $this->session->set_flashdata('errors', 'Login First');
            redirect('adminlogin');
            return;
        }
    }
    

    public function regchild(){
        $this->call->view('StudentFormReg');
    }
    public function regAuth()
    {
        $this->form_validation
            ->name('idnumber')
                ->required()
            ->name('fullname')
                ->required()
            ->name('age')
                ->required()
            ->name('birthday')
                ->required()
            ->name('gender')
                ->required()
            ->name('address')
                ->required();
        if ($this->form_validation->run() == false) {
            $_SESSION['errors'] = $this->form_validation->get_errors();
            $this->session->mark_as_flash('errors', 'Registration Failed. Please try again!');
            redirect('StudentFormReg');
        } else {
            $user_data = [
                'idnumber' => $this->io->post('idnumber'),
                'fullname' => $this->io->post('fullname'),
                'age' => $this->io->post('age'),
                'birthday' => $this->io->post('birthday'),
                'gender' => $this->io->post('gender'),
                'address' => $this->io->post('address'),
            ];
            $this->User_model->registerstudent($user_data);
            $this->session->set_flashdata('success', 'Registration succesful. ');
            redirect('home');
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
            $this->session->mark_as_flash('errors', 'Registration Failed. Please try again!');
            redirect('register');
        } else {
            $data = [
                'firstname' => $this->io->post('firstname'),
                'lastname' => $this->io->post('lastname'),
                'email' => $this->io->post('email'),
                'password' => password_hash($this->io->post('password'), PASSWORD_BCRYPT),
            ];
            $this->User_model->register($data);
            $this->session->set_flashdata('success', 'Registration succesful. ');
            redirect('login');
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
            $this->session->set_flashdata('errors', 'Login First');
            redirect('login');
            return;
        }
        $this->call->view('home');
    }
    public function logout()
    {
        $this->acmcl->session->sess_destroy();
        redirect('sitevisit');
    }
}
?>