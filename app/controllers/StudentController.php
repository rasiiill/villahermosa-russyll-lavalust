<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    private function getStudentData()
    {
        return [
            'student_id' => 'MCC2024-00260',
            'name'       => 'Russyll Villahermosa',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => '3-F6',
            'email'      => 'villahermosaruss@gmail.com'
        ];
    }

    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $denied = false;

        if (!empty($_SESSION['middleware_denied'])) {
            $denied = true;
            unset($_SESSION['middleware_denied']);
        }

        $_SESSION['student_access'] = true;

        $data = $this->getStudentData();
        $data['middleware_denied'] = $denied;

        $this->call->view('index', $data);
    }

    public function profile()
    {
        $data = $this->getStudentData();

        $this->call->view('profile', $data);
    }
}