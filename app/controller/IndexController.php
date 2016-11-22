<?php

class IndexController
{
    public function index()
    {
        // if admin is not logged in we let him know that he should log in first
        if(!Session::getInstance()->isLoggedIn()) {

            //show only public photos
            $view = new View();
            $view->render('index', [
                'isLoggedIn' => Session::getInstance()->isLoggedIn()
            ]);

        } else {
            // read and parse CSV to array
            $prijave = array_map('str_getcsv', file(BP . 'private/attendees.csv'));
            // remove first row if it is array of column names, not data itself
            // array_shift($prijave);

            // render admin index view with data from CSV and variable for checking if user is logged in
            $view = new View();
            $view->render('index', [
                'prijave' => $prijave,
                'isLoggedIn' => Session::getInstance()->isLoggedIn()
            ]);
        }
    }

    public function login()
    {
        // instantiate view model and set admin-layout.phtml as layout
        $view = new View();
        $view
            ->render('/login');
    }

    public function submit()
    {
        // take credentials
        $email = Request::post('email');
        $password = Request::post('password');

        // instantiate view model and set admin-layout.phtml as layout
        $view = new View();
        $view->layout('layout');

        // if credentials are correct we login admin and redirect him to /admin url which is handled by AdminController
        // index method
        if($email == App::config('admin_email') && $password == App::config('admin_password')) {
            //set to session that admin is logged in
            Session::getInstance()->login();

            // redirect to admin page
            header('Location: ' . App::config('url').'index');

        } else {
            // else we render login view again and let user know that credentials are wrong
            $view->render('login', [
                'message' => 'Neispravni podaci, pokušajte ponovno'
            ]);
        }
    }

    public function logout()
    {
        // logout user and redirect him to main page
        Session::getInstance()->logout();

        // redirect to homepage
        header('Location: ' . App::config('url'));
    }
}