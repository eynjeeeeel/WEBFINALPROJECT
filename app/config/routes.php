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

$router->get('sitevisit', 'UserController::sitevisit', 'GET|POST');
$router->get('home', 'UserController::home', 'GET|POST');
$router->get('about', 'UserController::about');
$router->get('studprof', 'UserController::studprof');
$router->get('admindb', 'UserController::admindb');
$router->get('classes', 'UserController::classes');
$router->get('facilities', 'UserController::facilities');

$router->get('childregister', 'UserController::regchild');
$router->get('StudentFormReg', 'UserController::StudentFormReg');
$router->match('regAuth', 'UserController::regAuth', 'GET|POST');
$router->get('studentprofile', 'UserController::getStudent');

$router->get('register', 'UserController::register');
$router->match('registerAuth', 'UserController::registerAuth', 'GET|POST');
$router->get('login', 'UserController::login');
$router->match('loginAuth', 'UserController::loginAuth', 'GET|POST');
$router->get('logout', 'UserController::logout');

$router->get('emergencycontact', 'UserController::emergencycontact');
$router->match('addemergency', 'UserController::addemergency', 'GET|POST');
$router->get('healthinfo', 'UserController::healthinfo');
$router->match('addhealthinfo', 'UserController::addhealthinfo', 'GET|POST');
$router->get('behavioralinfo', 'UserController::behavioralinfo');
$router->match('addbehavioralinfo', 'UserController::addbehavioralinfo', 'GET|POST');
$router->get('teachersinfo', 'UserController::teachersinfo');
$router->match('addteachersinfo', 'UserController::addteachersinfo', 'GET|POST');
$router->get('facilityinfo', 'UserController::facilityinfo');
$router->match('addfacilityinfo', 'UserController::addfacilityinfo', 'GET|POST');

$router->get('firstq', 'UserController::firstq');
$router->match('addfirstq', 'UserController::addfirstq', 'GET|POST');


$router->get('adminregister', 'UserController::adminreg');
$router->match('adminregAuth', 'UserController::adminregAuth', 'GET|POST');
$router->get('adminlogin', 'UserController::adminlogin');
$router->match('adminloginAuth', 'UserController::adminloginAuth', 'GET|POST');
$router->get('adminlogout', 'UserController::adminlogout');

$router->get('grades', 'UserController::grades');

$router->match('upload/do_upload', 'UploadController::do_upload', 'POST');