<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
|
*/

$router->get('', 'UserController::sitevisit', 'GET|POST');
$router->get('home', 'UserController::home', 'GET|POST');
$router->get('about', 'UserController::about');
$router->get('studprof', 'UserController::studprof',);
$router->match('studprofone', 'UserController::studprofone', 'GET|POST');
$router->get('classes', 'UserController::classes');
$router->get('facilities', 'UserController::facilities');
$router->match('addmyChild', 'UserController::addmyChild', 'GET|POST');

$router->get('register', 'Auth_controller::register');
$router->match('/registerAuth', 'Auth_controller::registerAuth', 'GET|POST');
$router->get('login', 'Auth_controller::login');
$router->match('loginAuth', 'Auth_controller::loginAuth', 'GET|POST');
$router->get('adminregister', 'Auth_controller::adminregister');
$router->match('adminregAuth', 'Auth_controller::adminregAuth', 'GET|POST');
$router->get('adminlogin', 'Auth_controller::adminlogin');
$router->match('adminloginAuth', 'Auth_controller::adminloginAuth', 'GET|POST');
$router->get('logout', 'Auth_controller::logout');


$router->get('admin_db', 'Admin_controller::admindb');
$router->match('addFacility', 'Admin_controller::addFacility', 'GET|POST');
$router->match('addSubject', 'Admin_controller::addSubject', 'GET|POST');
$router->match('addTeacher', 'Admin_controller::addTeacher', 'GET|POST');
$router->match('addChild', 'Admin_controller::addChild', 'GET|POST');
$router->match('addTeacherAssignment', 'Admin_controller::addTeacherAssignment', 'GET|POST');
$router->get('getStudentData/(:num)', 'Admin_controller::getStudentData');
$router->match('addAnnouncement', 'Admin_controller::addAnnouncement', 'GET|POST');


$router->get('childregister', 'UserController::regchild');
$router->get('StudentFormReg', 'UserController::StudentFormReg');
$router->match('regAuth', 'UserController::regAuth', 'GET|POST');
$router->get('studentprofile', 'UserController::getStudent');






// $router->get('emergencycontact', 'UserController::emergencycontact');
// $router->match('addemergency', 'UserController::addemergency', 'GET|POST');
// $router->get('healthinfo', 'UserController::healthinfo');
// $router->match('addhealthinfo', 'UserController::addhealthinfo', 'GET|POST');
// $router->get('behavioralinfo', 'UserController::behavioralinfo');
// $router->match('addbehavioralinfo', 'UserController::addbehavioralinfo', 'GET|POST');
// $router->get('teachersinfo', 'UserController::teachersinfo');
// $router->match('addteachersinfo', 'UserController::addteachersinfo', 'GET|POST');
// $router->get('facilityinfo', 'UserController::facilityinfo');


// $router->get('firstq', 'UserController::firstq');
// $router->match('addfirstq', 'UserController::addfirstq', 'GET|POST');



$router->get('adminlogout', 'UserController::adminlogout');

// $router->get('grades', 'UserController::grades');

// $router->match('upload/do_upload', 'UploadController::do_upload', 'POST');