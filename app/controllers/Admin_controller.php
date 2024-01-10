<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin_controller extends Controller {
    public function admindb(){
        // Load necessary models
        $this->call->model('Subjects_model');
        $this->call->model('Teachers_model');
        $this->call->model('Children_model');
    
        // Fetch subjects and teachers
        $data['subjects'] = $this->Subjects_model->getSubjects();
        $data['teachers'] = $this->Teachers_model->getTeachers();
        $data['students'] = $this->Children_model->getStudent();

        // Load the view and pass the data
        $this->call->view('admindb', $data);
    }
    
    public function addFacility() {

            $facilityName = $this->io->post('facility_name');
            $facilityDescription = $this->io->post('facility_description');

            // Load the Facility model
            $this->call->model('Schoolfacilities_model');

            // Insert the facility into the database
            if ($this->Schoolfacilities_model->addFacility($facilityName, $facilityDescription)) {
                $this->session->set_flashdata('success', 'successful!');
                redirect('admin_db');
            } 
        }
        public function addSubject() {
            // Capture the form data
            $subjectName = $this->io->post('subject_name');
            $ageGroup = $this->io->post('age_group');
            $time = $this->io->post('time');
            $capacity = $this->io->post('capacity');
        
            // Handle file upload
            if (!empty($_FILES['image']['name'])) {
                $this->call->library('upload', $_FILES["image"]);
                $this->upload
                    ->max_size(5) // Maximum file size in MB
                    ->set_dir('public/uploads') // Directory to store files
                    ->allowed_extensions(array('jpg', 'png')) // Allowed extensions
                    ->encrypt_name(); // Encrypt file name for security
        
                if ($this->upload->do_upload()) {
                    $imagePath = $this->upload->get_filename(); // Get the uploaded file name
                } else {
                    $errors = $this->upload->get_errors();
                    // Handle errors
                    // Optionally set flash data and redirect
                    $this->session->set_flashdata('errors', $errors);
                    redirect('admin_db');
                }
            } else {
                $imagePath = ''; // Default image path if no file is uploaded
            }
        
            // Load the model and save the data
            $this->call->model('Subjects_model');
            if ($this->Subjects_model->addSubject($subjectName, $ageGroup, $time, $capacity, $imagePath)) {
                // Set success message and redirect
                $this->session->set_flashdata('success', 'Subject added successfully!');
                redirect('admin_db');
            } else {
                // Set error message and redirect
                $this->session->set_flashdata('error', 'Failed to add subject');
                redirect('admin_db');
            }
        }
        
        public function addTeacher() {
            // Capture the form data
            $teacherName = $this->io->post('teacher_name');
        
            // Handle file upload
            $this->call->library('upload', $_FILES["profile_pic"]);
            $this->upload
                ->max_size(5) // max 5MB
                ->set_dir('public/uploads') // specify your upload directory
                ->allowed_extensions(array('jpg', 'png', 'jpeg'))
                ->encrypt_name(); // encrypt file name for security
        
            if ($this->upload->do_upload()) {
                // File upload success
                $profilePicPath = $this->upload->get_filename();
        
                // Load the Teachers model
                $this->call->model('Teachers_model');
        
                // Insert the teacher into the database
                if ($this->Teachers_model->addTeacher($teacherName, $profilePicPath)) {
                    // Set success message and redirect
                    $this->session->set_flashdata('success', 'Teacher added successfully!');
                    redirect('admin_db'); // Replace with your redirect path
                } else {
                    // Set error message and redirect
                    $this->session->set_flashdata('error', 'Failed to add teacher');
                    redirect('admin_db'); // Replace with your redirect path
                }
            } else {
                // File upload failed
                $errors = $this->upload->get_errors();
                $this->session->set_flashdata('error', implode('<br>', $errors));
                redirect('admin_db'); // Replace with your redirect path
            }
        }
        
    
        public function addChild() {
            $childId1 = $this->io->post('child_id');
            // Basic child information
            $childName = $this->io->post('child_name');
            $childAge = $this->io->post('child_age');
            $childBirthday = $this->io->post('child_birthday');
            $childGender = $this->io->post('child_gender');
            $childAddress = $this->io->post('child_address');
        
            // Emergency Contact information
            $emergencyName = $this->io->post('emergency_name');
            $emergencyContact = $this->io->post('emergency_contact');
        
            // Health Information
            $bloodType = $this->io->post('blood_type');
            $allergies = $this->io->post('allergies');
        
            // Behavioral and Social Development Information
            $behavior = $this->io->post('behavior');
            $socialSkills = $this->io->post('social_skills');
                        // Load the necessary models
                        $this->call->model('Children_model');
                        $this->call->model('Emergencycontacts_model');
                        $this->call->model('Healthinformation_model');
                        $this->call->model('Behavioralsocialdevelopment_model');

            if ($childId1) {
                // Update the existing child's information
                $this->Children_model->updateChild($childId1, $childName, $childAge, $childBirthday, $childGender, $childAddress, );
                $this->Emergencycontacts_model->updateEmergencyContact($childId1, $emergencyName, $emergencyContact);
                $this->Healthinformation_model->updateHealthInfo($childId1, $bloodType, $allergies);
                $this->Behavioralsocialdevelopment_model->updateDevelopmentInfo($childId1, $behavior, $socialSkills);
        
                $this->session->set_flashdata('success', 'Child information updated successfully!');
                redirect('admin_db');
            } else {
            // Handle photo upload
            $this->call->library('upload', $_FILES["photo"]);
            $this->upload
                ->max_size(5)
                ->set_dir('public/uploads/children')
                ->encrypt_name();
        
            if ($this->upload->do_upload()) {
                $photoPath = $this->upload->get_filename();
        

        
                // Insert the child into the database
                $childId = $this->Children_model->addChild($childName, $childAge, $childBirthday, $childGender, $childAddress, $photoPath);
                if ($childId) {
                    // Insert emergency contact, health information, and behavioral development
                    $this->Emergencycontacts_model->addEmergencyContact($childId, $emergencyName, $emergencyContact);
                    $this->Healthinformation_model->addHealthInfo($childId, $bloodType, $allergies);
                    $this->Behavioralsocialdevelopment_model->addDevelopmentInfo($childId, $behavior, $socialSkills);
        
                    $this->session->set_flashdata('success', 'Child added successfully!');
                    redirect('admin_db'); // Adjust the redirect path as needed
                } else {
                    $this->session->set_flashdata('error', 'Failed to add child');
                    redirect('admin_db'); // Adjust the redirect path as needed
                }
            } else {
                $errors = $this->upload->get_errors();
                $this->session->set_flashdata('error', implode('<br>', $errors));
                redirect('admin_db'); // Adjust the redirect path as needed
            }
        }
        }
        public function addTeacherAssignment() {
            $this->call->model('Teachersubjects_model');

                $data = array(
                    'TeacherID' => $this->io->post('teacher_id'),
                    'SubjectID ' => $this->io->post('subject_id'),
                    'AdditionalDetails' => $this->io->post('additional_details')
                );
    
                $result = $this->Teachersubjects_model->addTeacherAssignment($data);
    
                if ($result) {
                    // Success
                    $this->session->set_flashdata('success', 'Teacher assignment added successfully.');
                } else {
                    // Failure
                    $this->session->set_flashdata('error', 'Failed to add teacher assignment.');
                }
    
                redirect('admin_db'); // Redirect to a specific page
            }
    
    
    
            public function getStudentData($studentId) {
                $this->call->model('Children_model'); // Load your model
                $studentData = $this->Children_model->getChildbyIDs($studentId); // Fetch student data from the model
            
                // Check if student data is found
                if ($studentData) {
                    echo json_encode($studentData); // Return data as JSON
                } else {
                    echo json_encode(['error' => 'Student not found']); // Handle error case
                }
            }
            
            public function addAnnouncement() {
                $title = $this->io->post('title');
                $description = $this->io->post('description');
        
                $this->call->model('Announcement_model');
        
                if ($this->Announcement_model->addAnnouncement($title, $description)) {
                    $this->session->set_flashdata('success', 'Announcement added successfully.');
                } else {
                    $this->session->set_flashdata('error', 'There was a problem adding the announcement.');
                }
        
                redirect('admin_db'); // Redirect to a specific page
            }
    
    
    
    }

?>
