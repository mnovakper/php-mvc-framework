<?php

trait Controller
{
    // koristi se za ucitavanje view-a
    public function view($name, $data = [])
    {
        if (!empty($data))
            extract($data);
            
        $filename = "../app/views/".$name.".view.php";
        if(file_exists($filename)) {
            require $filename; // ucitava controller fajl
        } else {
            $filename = "../app/views/404.view.php";
            require $filename;
        }
    }
}