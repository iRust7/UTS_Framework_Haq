<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function calendar()
    {
        return view('admin.calendar');
    }

    public function login()
    {
        return view('admin.login', ['isAuthPage' => true]);
    }

    public function modals()
    {
        return view('admin.modals');
    }

    public function formElements()
    {
        return view('admin.form');
    }

    public function datatable()
    {
        return view('admin.datatable');
    }
}
