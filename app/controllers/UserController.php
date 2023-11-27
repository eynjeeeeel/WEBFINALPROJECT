<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserController extends Controller {
	public function home(){
        $this->call->view('home');
    }
    public function about(){
        $this->call->view('about');
    }
    public function classes(){
        $this->call->view('classes');
    }
    public function facilities(){
        $this->call->view('../views/homepage/facilitiesHP.php');
    }
}
?>
