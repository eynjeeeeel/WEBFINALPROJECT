<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
class UserController extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->acmcl = lava_instance();
        $this->call->model('User_model');
        $this->call->model('Children_model');
    }
    public function sitevisit(){
        $this->call->view('sitevisit');
    }

  // UserController.php

public function studprof() {
    $parentId = $this->session->userdata('parent_id');

    // Load necessary models
    $this->call->model('Children_model');
    $this->call->model('Emergencycontacts_model');
    $this->call->model('Healthinformation_model');
    $this->call->model('Behavioralsocialdevelopment_model');
    $this->call->model('Grades_model');
    $this->call->model('Announcement_model');
    $this->call->model('Event_model');

    // Fetch grades for the child


    // Fetch children associated with the parent
    $data['children'] = $this->Children_model->getChildDetails($parentId);

    // Default to the first child if children exist
    if (!empty($data['children'])) {
        $selectedChildId = $data['children'][0]['ChildID'];
        $data['selectedChild'] = $this->Children_model->getChildById($selectedChildId);

        // Fetch emergency contact information for the selected child
        $data['emergencyContact'] = $this->Emergencycontacts_model->getEmergencyContactsByChildId($selectedChildId);

        // Fetch health information for the selected child
        $data['healthInfo'] = $this->Healthinformation_model->getHealthInfoByChildId($selectedChildId);

        // Fetch behavioral and social development information for the selected child
        $data['behavioralDevelopment'] = $this->Behavioralsocialdevelopment_model->getDevelopmentInfoByChildId($selectedChildId);

        $data['grades'] = $this->Grades_model->getGradesByChildId($selectedChildId);
        $data['announcements'] = $this->Announcement_model->getAnnouncements();
        $data['events'] = $this->Event_model->getEvents();
    }

    // Load the view with the data
    $this->call->view('studprof', $data);
}

    
    
    
 // UserController.php

// UserController.php

public function studprofone() {
    $parentId = $this->session->userdata('parent_id');

    // Initialize variables
    $data = [
        'children' => [],
        'selectedChild' => [],
        'emergencyContact' => [],
        'healthInfo' => [],
        'behavioralDevelopment' => [],
        'grades' => [],  // Initialize grades to an empty array
        'announcements' => [],
        'events' => []
    ];

    // Load necessary models
    $this->call->model('Children_model');
    $this->call->model('Emergencycontacts_model');
    $this->call->model('Healthinformation_model');
    $this->call->model('Behavioralsocialdevelopment_model');
    $this->call->model('Grades_model');
    $this->call->model('Announcement_model');
    $this->call->model('Event_model');

    $data['children'] = $this->Children_model->getChildDetails($parentId);

    $selectedChildId = $this->io->post('child_id') ?: ($data['children'][0]['ChildID'] ?? null);

    if ($selectedChildId) {
        $data['selectedChild'] = $this->Children_model->getChildById($selectedChildId);
        $data['emergencyContact'] = $this->Emergencycontacts_model->getEmergencyContactsByChildId($selectedChildId);
        $data['healthInfo'] = $this->Healthinformation_model->getHealthInfoByChildId($selectedChildId);
        $data['behavioralDevelopment'] = $this->Behavioralsocialdevelopment_model->getDevelopmentInfoByChildId($selectedChildId);
        $data['grades'] = $this->Grades_model->getGradesByChildId($selectedChildId);
    }

    $data['announcements'] = $this->Announcement_model->getAnnouncements();
    $data['events'] = $this->Event_model->getEvents();

    $this->call->view('studprof', $data);
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
    public function classes() {
        $this->call->model('Subjects_model');
        $this->call->model('Teachers_model');
    
        // Assuming you have a method to get all subjects with their respective teachers
        $data['classes'] = $this->Subjects_model->getClasses();

    
        $this->call->view('classes', $data);
    }
    

    public function StudentFormReg(){
        $this->call->view('StudentFormReg');
    }

    public function facilities(){
        $this->call->model('Schoolfacilities_model');

        // Fetch facility details
        $data['facilities'] = $this->Schoolfacilities_model->getAllFacilities();
    
        // Load the view with facility data
        $this->call->view('facilitiesPG', $data);
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




    public function emergencycontact(){
        $this->call->view('studprof');
    }
    public function addemergency()
    {
        {
            $user_data = [
                'emergency_name' => $this->io->post('emergency_name'),
                'emergency_contact' => $this->io->post('emergency_contact'),
            ];
            $this->User_model->addecon($user_data);
            $this->session->set_flashdata('success', 'Emergency contact add succesful. ');
            redirect('admindb');
        }
    }


    public function healthinfo(){
        $this->call->view('studprof');
    }
    public function addhealthinfo()
    {
        {
            $user_data = [
                'blood_type' => $this->io->post('blood_type'),
                'allergies' => $this->io->post('allergies'),
            ];
            $this->User_model->addhinfo($user_data);
            $this->session->set_flashdata('success', 'Emergency contact add succesful. ');
            redirect('admindb');
        }
    }

    public function behavioralinfo(){
        $this->call->view('studprof');
    }
    public function addbehavioralinfo()
    {
        {
            $user_data = [
                'behavior' => $this->io->post('behavior'),
                'social_skills' => $this->io->post('social_skills'),
            ];
            $this->User_model->addbsdev($user_data);
            $this->session->set_flashdata('success', 'Emergency contact add succesful. ');
            redirect('admindb');
        }
    }

    public function facilitiyinfo(){
        $this->call->view('studprof');
    }
    public function addfacilityinfo()
    {
        {
            $user_data = [
                'facility_name' => $this->io->post('facility_name'),
                'facility_description' => $this->io->post('facility_description'),
            ];
            $this->User_model->addsfacilities($user_data);
            $this->session->set_flashdata('success', 'Emergency contact add succesful. ');
            redirect('admindb');
        }
    }

    public function teachersinfo(){
        $this->call->view('studprof');
    }
    public function addteachersinfo()
    {
        {
            $user_data = [
                'teacher_name' => $this->io->post('teacher_name'),
                'teacher_subject' => $this->io->post('teacher_subject'),
            ];
            $this->User_model->addtinfo($user_data);
            $this->session->set_flashdata('success', 'Emergency contact add succesful. ');
            redirect('admindb');
        }
    }
    public function econ($id){
        $data['emen'] = $this->User_model->getemen($id);
        return $this->call->view('StudInfo', $data);
    }


    public function firstq(){
        $this->call->view('studprof');
    }
    public function addfirstq()
    {
        {
            $user_data = [
                'mathematics_grade' => $this->io->post('mathematics_grade'),
                'science_grade' => $this->io->post('science_grade'),
                'art_grade' => $this->io->post('art_grade'),
                'language_grade' => $this->io->post('language_grade'),
            ];
            $this->User_model->addfirstquarter($user_data);
            $this->session->set_flashdata('success', 'Emergency contact add succesful. ');
            redirect('admindb');
        }
    }

    public function secondq(){
        $this->call->view('studprof');
    }
    public function addsecondq()
    {
        {
            $user_data = [
                'mathematics_grade' => $this->io->post('mathematics_grade'),
                'science_grade' => $this->io->post('science_grade'),
                'art_grade' => $this->io->post('art_grade'),
                'language_grade' => $this->io->post('language_grade'),
            ];
            $this->User_model->addsecondquarter($user_data);
            $this->session->set_flashdata('success', 'Emergency contact add succesful. ');
            redirect('admindb');
        }
    }

    public function thirdq(){
        $this->call->view('studprof');
    }
    public function addthirdq()
    {
        {
            $user_data = [
                'mathematics_grade' => $this->io->post('mathematics_grade'),
                'science_grade' => $this->io->post('science_grade'),
                'art_grade' => $this->io->post('art_grade'),
                'language_grade' => $this->io->post('language_grade'),
            ];
            $this->User_model->addthirdquarter($user_data);
            $this->session->set_flashdata('success', 'Emergency contact add succesful. ');
            redirect('admindb');
        }
    }

    public function fourthq(){
        $this->call->view('studprof');
    }
    public function addfourthq()
    {
        {
            $user_data = [
                'mathematics_grade' => $this->io->post('mathematics_grade'),
                'science_grade' => $this->io->post('science_grade'),
                'art_grade' => $this->io->post('art_grade'),
                'language_grade' => $this->io->post('language_grade'),
            ];
            $this->User_model->addfourthquarter($user_data);
            $this->session->set_flashdata('success', 'Emergency contact add succesful. ');
            redirect('admindb');
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
    public function addmyChild() {
       (int) $childIdNumber = $this->io->post('idnumber');
        $childBirthday = $this->io->post('birthday');
        $loggedInParentId =  $this->session->userdata('parent_id');

        $this->call->model('Children_model');
        $childExists = $this->Children_model->checkChild($childIdNumber, $childBirthday);
       
        if ($childExists) {
            $updateStatus = $this->Children_model->updateParentId($childIdNumber, $loggedInParentId);
            var_dump(   $updateStatus  );
            if ($updateStatus === 1) {
                // Success message
                $this->session->set_flashdata('success', 'Child successfully linked to your account.');
            } else {
                // Error message
                $this->session->set_flashdata('error', 'Unable to update child information.');
            }
        } else {
            // Error message
            $this->session->set_flashdata('error', 'No matching child found.');
        }
    
        redirect('studprof'); // Redirect to the appropriate page
    }

}
?>