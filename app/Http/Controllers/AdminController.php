<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index() {

        return view('admin.index');
    }

    public function create() {

        return view('admin.index');
    }

    public function show() {

        return view('admin.index');
    }

    public function put() {

        return view('admin.index');
    }

    public function delete() {

        return view('admin.index');
    }

    public function tutory() {
        // Upload Student resources
        return view('admin.tutory');
    }

    public function upload() {
        // upload page
        return view('admin.upload');
    }

    public function registration() {
        // registration form
        return view('admin.registration');
    }

    public function finance() {
        // all students fincancial details
        return view('admin.students-finance');
    }

    public function student() {
        // particular student info
        return view('admin.student');
    }

    public function assignments() {
        return view('admin.assignments');
    }

    public function resources() {
        return view('admin.resources');
    }
}
