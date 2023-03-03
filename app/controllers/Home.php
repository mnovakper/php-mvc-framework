<?php

class Home
{
    use Controller;

    public function index()
    {
        echo "Home page Controller";
        $this->view('home'); // ucitavanje view-a
    }
}

