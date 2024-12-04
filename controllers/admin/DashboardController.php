<?php

class DashboardController
{
    public function __construct()
    {
        if ( !isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin'){
            return header("location: " . ROOT_URL);
        }

    }
    public function index()
    {
        return view('admin.dashboard') ;
    }
}